<?php 

require_once __DIR__ . '/includes/app.php';

use Controllers\PaginasController;
use Controllers\LoginController;
use Controllers\PayController;
use MVC\Router;

$router = new Router();

/* --- Vistas ---*/

$router->get('/', [PaginasController::class, 'index']);
$router->get('/servicios', [PaginasController::class, 'servicios']);
$router->get('/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/tienda', [PaginasController::class, 'tienda']);
$router->get('/contacto', [PaginasController::class, 'contacto']);
$router->post('/contacto', [PaginasController::class, 'contacto']);

$router->get('/paginas-web', [PaginasController::class, 'paginasweb']);
$router->get('/tienda-linea', [PaginasController::class, 'tiendalinea']);
$router->get('/catalogo-linea', [PaginasController::class, 'catalogoprod']);

$router->get('/faqs', [PaginasController::class, 'faqs']);
$router->get('/met-pago', [PaginasController::class, 'metpago']);
$router->get('/aviso-privacidad', [PaginasController::class, 'avisoPrivacidad']);
$router->get('/termino-servicios', [PaginasController::class, 'termservicios']);

// Checkout 
$router->get('/checkout', [PayController::class, 'openpay']);
$router->post('/checkout', [PayController::class, 'openpay']);

$router->get('/logo', [PaginasController::class, 'logo']);

// Login
//$router->get('/login', [LoginController::class, 'login']);
//$router->post('/login', [LoginController::class, 'login']);
//$router->get('/logout', [LoginController::class, 'logout']);

// Crear Cuenta
//$router->get('/crear', [LoginController::class, 'crear']);
//$router->post('/crear', [LoginController::class, 'crear']);

// Formulario de olvide mi password
//$router->get('/olvide', [LoginController::class, 'olvide']);
//$router->post('/olvide', [LoginController::class, 'olvide']);

// Colocar el nuevo password
//$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
//$router->post('/reestablecer', [LoginController::class, 'reestablecer']);

// Confirmación de Cuenta
//$router->get('/mensaje', [LoginController::class, 'mensaje']);
//$router->get('/mensaje2', [LoginController::class, 'mensaje2']);
//$router->get('/confirmar', [LoginController::class, 'confirmar']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();