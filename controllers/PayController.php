<?php 

namespace Controllers;

use MVC\Router;

class PayController {

    public static  function openpay( Router $router) {

        $router->render('/pagos/OpenPay',[
            'titulo' => 'CheckOut'
        ]);
    }
}