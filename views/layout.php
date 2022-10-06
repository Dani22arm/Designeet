<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Desingnet | <?php echo $titulo ?? ''; ?> </title>
        
        <link rel="shortcut icon" href="../img/logo_small.webp">

       
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/5b534e603e.js" crossorigin="anonymous"></script>
       
        <link rel="stylesheet" href="css/styles.css">

    </head>
    <body>
 
        <a href="" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon'></i>
        </a>
        <?php if ($titulo === 'Iniciar Sesión') { ?>
            <header class="login-header" id="login-header">
                <li><i class='bx bx-moon change-theme-login' id="theme-button"></i></li>
            </header>

        <?php } else { ?>
            
            <header class="l-header <?php if ($titulo === 'Contacto' || $titulo === 'Termino de Servicios')  echo 'scroll-header' ;?>"  id='header'>
                <nav class="nav bd-container">
                    <a href="/" class="nav__logo">
                        <img src="../img/logo_small.webp" class="img-logo" alt="Logo Designet">
                    </a>

                    <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                            <li class="nav__item"><a href="/" class="nav__link <?php echo ($titulo === 'Inicio') ? 'active-link' : ''; ?> ">Inicio</a></li>
                            <li class="nav__item"><a href="/nosotros" class="nav__link <?php echo ($titulo === 'Nosotros') ? 'active-link' : ''; ?> ">Nosotros</a></li>
                            <li class="nav__item"><a href="/servicios" class="nav__link <?php echo ($titulo === 'Servicios') ? 'active-link' : ''; ?> ">Servicios</a></li>
                            <li class="nav__item"><a href="/contacto" class="nav__link <?php echo ($titulo === 'Contacto') ? 'active-link' : ''; ?>">Contacto</a></li>
                            <!-- <li class="nav__item"><a href="/login" target= "_blank" class="nav__link " ><i class='bx bx-user-circle'></i></a></li> -->
                        
                            <li><i class='bx bx-moon change-theme' id="theme-button"></i></li>
                        </ul>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-menu'></i>
                    </div>
                </nav>
            </header>

        <?php } ?>
  
    <?php echo $contenido; ?>
    
    <?php if ($titulo != 'Iniciar Sesión') { ?>
        <footer class="footer section bd-container">
            <div class="footer__container bd-grid">
                <div class="footer__content">
                        <a href="/" class="footer__logo">Desingnet</a>
                        <span class="footer__description">Somos una agencia dedicada al diseño de paginas web y tienda en linea. </span>
                        <div>
                            <a href="https://www.facebook.com/WebsitesDesignet" target= "_blank" class="footer__social"><i class='bx bxl-facebook'></i></a>
                            <a href="https://www.instagram.com/desingnet1" target= "_blank" class="footer__social"><i class='bx bxl-instagram'></i></a>
                            <a href="https://wa.link/cfa93a" target= "_blank" class="footer__social"><i class='bx bxl-whatsapp'></i></a>
                        </div>
                </div>

                <div class="footer__content">
                        <h3 class="footer__title">Servicios</h3>
                        <ul>
                            <li><a href="/paginas-web" class="footer__link <?php echo ($titulo === 'Paginas Web') ? 'active-link' : ''; ?> ">Paginas web</a></li>
                            <li><a href="/tienda-linea" class="footer__link <?php echo ($titulo === 'Tienda en Linea') ? 'active-link' : ''; ?> ">Tienda en linea</a></li>
                            <li><a href="/catalogo-productos" class="footer__link <?php echo ($titulo === 'Catalogo de Productos') ? 'active-link' : ''; ?> ">Catalogo de productos </a></li>
                        </ul>
                </div>

                <div class="footer__content">
                        <h3 class="footer__title">Informacion </h3>
                        <ul>
                            <li><a href="/faqs" class="footer__link <?php echo ($titulo === 'Preguntas Frecuentes') ? 'active-link' : ''; ?> ">FAQ'S</a></li>
                            <li><a href="/met-pago" class="footer__link <?php echo ($titulo === 'Metodos de Pago') ? 'active-link' : ''; ?> ">Metodos de pago</a></li>
                            <li><a href="/aviso-privacidad" class="footer__link <?php echo ($titulo === 'Aviso de Privacidad') ? 'active-link' : ''; ?> ">Aviso de privacidad</a></li> 
                            <!--  <li><a href="/termino-servicios" class="footer__link <?php echo ($titulo === 'Termino de Servicios') ? 'active-link' : ''; ?> ">Terminos de servicios</a></li> -->
                        </ul>
                </div>

            </div>

            <p class="footer__copy">&#169; 2022 Desingnet. Todos los derechos reservados </p>
        </footer>
    
    <?php } ?>

    <script src="https://unpkg.com/scrollreveal"></script>


    <script src="js/main.js"></script>

</body>
</html>

