<?php

namespace Model;

class UsuarioAuth extends ActiveRecord {
    protected static $tabla = 'UsuarioAuth';
    protected static $columnasDB = ['id', 'num_empleado', 'usuario', 'password', 'token', 'confirmado', 'admin'];

    public $id;
    public $num_empleado;
    public $usuario;
    public $password;
    public $token;
    public $confirmado;
    public $admin;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->num_empleado = $args['num_empleado'] ?? '';
        $this->usuario = $args['usuario'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password2 = $args['password2'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->admin = $args['admin'] ?? '0';
    }
    
    // Validar el Login de Usuarios
    public function validarLogin() {
        if(!$this->usuario) {
            self::$alertas['error'][] = 'El Usuario o Email del Usuario es Obligatorio';
        }
        if(!filter_var($this->usuario, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Usuario o Email no válido';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        return self::$alertas;

    }

    // Validación para cuentas nuevas
    public function validarNuevaCuenta() {
        if(!$this->num_empleado) {
            self::$alertas['error'][] = 'El Numero de Empleado es Obligatorio';
        }
        if(!$this->usuario) {
            self::$alertas['error'][] = 'El Usuario o Email  es Obligatorio';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        if(strlen($this->password) < 8) {
            self::$alertas['error'][] = 'El password debe contener al menos 8 caracteres';
        }
        if($this->password !== $this->password2) {
            self::$alertas['error'][] = 'El password no coincide con el anterior';
        }
        return self::$alertas;
    }

    // Valida un email
    public function validarEmail() {
        if(!$this->usuario) {
            self::$alertas['error'][] = 'Usuario o Email Obligatorio';
        }
        if(!filter_var($this->usuario, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Usuario o Email  no válido';
        }
        return self::$alertas;
    }
    
    // Valida el Password 
    public function validarPassword() {
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        if(strlen($this->password) < 6) {
            self::$alertas['error'][] = 'El password debe contener al menos 8 caracteres';
        }
        return self::$alertas;
    }
    
    public function validar_perfil() {
        if(!$this->num_empleado) {
            self::$alertas['error'][] = 'El Numero de empleado es Obligatorio';
        }
        if(!$this->usuario) {
            self::$alertas['error'][] = 'El Usuario o Email  es Obligatorio';
        }
        return self::$alertas;
    }
    
    public function nuevo_password() : array {
        if(!$this->password_actual) {
            self::$alertas['error'][] = 'El Password Actual no puede ir vacio';
        }
        if(!$this->password_nuevo) {
            self::$alertas['error'][] = 'El Password Nuevo no puede ir vacio';
        }
        if(strlen($this->password_nuevo) < 6) {
            self::$alertas['error'][] = 'El Password debe contener al menos 8 caracteres';
        }
         return self::$alertas;
    }
    
    // Comprobar el password
    public function comprobar_password() : bool {
        return password_verify($this->password_actual, $this->password );
    }

    // Hashea el password
    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    // Generar un Token
    public function crearToken() : void {
        $this->token = uniqid();
    }
}