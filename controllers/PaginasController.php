<?php

namespace Controllers;

use Model\Contacto;
use MVC\Router;

class PaginasController {

    public static function index(Router $router) {
        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    }

    public static function servicios(Router $router) {
        $router->render('paginas/servicios', [
            'titulo' => 'Servicios'
        ]);
    }

    public static function nosotros(Router $router) {
        $router->render('paginas/nosotros', [
            'titulo' => 'Nosotros'
        ]);
    }

    public static function contacto(Router $router) {
        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $contacto = new Contacto($_POST);
            $alertas = $contacto->validarContacto();

            //debuguear($alertas);

            if(empty($alertas)) { 
                
            }

        }

        $router->render('paginas/contacto', [
            'titulo' => 'Contacto'
        ]);
    }

    public static function paginasweb(Router $router) {
        $router->render('paginas/paginasweb', [
            'titulo' => 'Paginas Web'
        ]);
    }

    public static function tiendalinea(Router $router) {
        $router->render('paginas/tiendalinea', [
            'titulo' => 'Tienda en Linea'
        ]);
    }

    public static function catalogoprod(Router $router) {
        $router->render('paginas/catalogoprod', [
            'titulo' => 'Catalogo de Productos'
        ]);
    }

    public static function faqs(Router $router) {
        $router->render('paginas/faqs', [
            'titulo' => 'Preguntas Frecuentes'
        ]);
    }

    public static function metpago(Router $router) {
        $router->render('paginas/metpago', [
            'titulo' => 'Metodos de Pago'
        ]);
    }

    public static function avisoPrivacidad(Router $router) {
        $router->render('paginas/aviso-privacidad', [
            'titulo' => 'Aviso de Privacidad'
        ]);
    }

    public static function termservicios(Router $router) {
        $router->render('paginas/termservicios', [
            'titulo' => 'Termino de Servicios'
        ]);
    }

  public static function logo(Router $router) {

        $router->render('logo', [
            'titulo' => 'Logo'
        ]);
  }

}