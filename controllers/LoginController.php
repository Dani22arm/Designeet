<?php

namespace Controllers;

use Classes\Email;
use Model\UsuarioAuth;
use MVC\Router;
use Model\UsuarioLogin;

class LoginController {

    public static function login(Router $router){

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuario = new UsuarioAuth($_POST);
            $alertas = $usuario->validarLogin();

            if(empty($alertas)) {

                $usuario = UsuarioAuth::where('usuario', $usuario->usuario);

                if(!$usuario || !$usuario->confirmado ) {

                    UsuarioAuth::setAlerta('error', 'El Usuario No Existe o no esta confirmado');

                } else {

                    if( password_verify($_POST['password'], $usuario->password) ) {
                        
                        session_start();    
                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->num_empleado;
                        $_SESSION['email'] = $usuario->usuario;
                        $_SESSION['login'] = true;

                        // Redireccionar
                        if($usuario->admin === "1") {
                            $_SESSION['admin'] = $usuario->admin ?? null;
                            header('Location: /admin');
                        } else {
                            header('Location: /dashboard'); 
                        }

                    } else {
                        UsuarioAuth::setAlerta('error', 'Password Incorrecto');
                    }
                }
            }
        }

        $alertas = UsuarioAuth::getAlertas();

        $router->render('auth/login', [
            'titulo' => 'Iniciar Sesión',
            'alertas' => $alertas
        ]);
    }

    public static function crear(Router $router) {
        $alertas = [] ;

        $usuarioAuth = new UsuarioAuth();

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuarioAuth->sincronizar($_POST);
            
            $alertas = $usuarioAuth->validarNuevaCuenta();

            if(empty($alertas)) {
                $existeUsuario = UsuarioAuth::where('usuario', $usuarioAuth->usuario);

                if($existeUsuario) {
                    UsuarioAuth::setAlerta('error', 'El Usuario ya esta registrado');
                    $alertas = UsuarioAuth::getAlertas();
                }else {
                
                    $usuarioAuth->hashPassword();

                    unset($usuarioAuth->password2);

                    $usuarioAuth->crearToken();

                    $resultado =  $usuarioAuth->guardar();

                    
                    $email = new Email($usuarioAuth->usuario, $usuarioAuth->num_empleado, $usuarioAuth->token);
                    $email->enviarConfirmacion();

                    if($resultado) {
                        header('Location: /mensaje');
                    }
                }

            }
        }

        $router->render('auth/crear', [
            'titulo' => 'Crear Cuenta',
            'usuarioLogin' => $usuarioAuth,
            'alertas' => $alertas
        ]);
        
    }

    public static function olvide(Router $router) {

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuarioAuth = new UsuarioAuth($_POST);
            $alertas = $usuarioAuth->validarEmail();

            if(empty($alertas)) {

                $usuarioAuth = UsuarioAuth::where('usuario', $usuarioAuth->usuario);

                if($usuarioAuth && $usuarioAuth->confirmado === '1'){
                    
                    $usuarioAuth->crearToken();

                    unset($usuarioAuth->password2);


                    $usuarioAuth->guardar();


                    $email = new Email($usuarioAuth->usuario, $usuarioAuth->num_empleado, $usuarioAuth->token);
                    $email->enviarInstrucciones();

                    UsuarioAuth::setAlerta('exito', 'Las instrucciones se han enviado a tu email correctamente');

                }else {
                    UsuarioAuth::setAlerta('error', 'El usuario no existe o no ha sido confirmado');
                }
            }
        }

        $alertas = UsuarioAuth::getAlertas();

        $router->render('auth/olvide', [
            'titulo' => 'Olvide Contraseña',
            'alertas' => $alertas
        ]);
    }

    public static function reestablecer(Router $router) {

        $alertas = [];
        $error = true;

        $token = s($_GET['token']);
        if(!$token) header('Location: /');

        $usuarioAuth = UsuarioAuth::where('token', $token);

        if(empty($usuarioAuth)) {
            UsuarioAuth::setAlerta('error', 'Token No Válido');
            $error = false;
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $usuarioAuth->sincronizar($_POST);

            $alertas = $usuarioAuth->validarPassword();

            if(empty($alertas)) {

                $usuarioAuth->hashPassword();
                unset($usuarioAuth->password2);

                $usuarioAuth->token = '';

                $resultado = $usuarioAuth->guardar();

                if($resultado) {
                    header('Location: /mensaje2');
                }
                
            }

        }

        $alertas = UsuarioAuth::getAlertas();
        
        $router->render('auth/reestablecer', [
            'titulo' => 'Reestablecer Contraseña',
            'alertas' => $alertas,
            'error' => $error
        ]);
    }

    public static function mensaje(Router $router) {

        $router->render('auth/mensaje', [
            'titulo' => 'Cuenta Creada Exictoxamente'
        ]);
    }

    public static function mensaje2(Router $router) {

        $router->render('auth/mensaje2', [
            'titulo' => 'Confirmacion'
        ]);
    }

    public static function confirmar(Router $router) {
        
        $token = s($_GET['token']);

        if(!$token) header('Location: /');

        $usuarioAuth = UsuarioAuth::where('token', $token);

        if(empty($usuarioAuth)) {
            // Mostrar mensaje de error
            UsuarioAuth::setAlerta('error', 'Token No Válido');
        } else {
            // Modificar a usuario confirmado
            $usuarioAuth->confirmado = "1";
            $usuarioAuth->token = '';
            $usuarioAuth->guardar();
            UsuarioAuth::setAlerta('exito', 'Haz verificado tu cuenta exitosamente');
        }
       
        // Obtener alertas
        $alertas = UsuarioAuth::getAlertas();

        // Renderizar la vista
        $router->render('auth/confirmado', [
            'titulo' => 'Confirmar Cuenta',
            'alertas' => $alertas
        ]);
    }

}