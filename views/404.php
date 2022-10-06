<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Desingnet | 404 </title>
        <!--========== BOX ICONS ==========-->
        <link rel="shortcut icon" href="../img/logo_small.webp">

        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/5b534e603e.js" crossorigin="anonymous"></script>
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="css/styles.css">

       
    </head>
    <body>
        <header class="l-header scroll-header " id="header">
            <nav class="nav bd-container">
                 <a href="/" class="nav__logo">
                        <img src="../img/logo_small.webp" class="img-logo" alt="Logo Designet">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/" class="nav__link <?php echo ($titulo === 'Inicio') ? 'active-link' : ''; ?> ">Inicio</a></li>
                        <li class="nav__item"><a href="/servicios" class="nav__link <?php echo ($titulo === 'Servicios') ? 'active-link' : ''; ?> ">Servicios</a></li>
                        <li class="nav__item"><a href="/precios" class="nav__link <?php echo ($titulo === 'Precios') ? 'active-link' : ''; ?> ">Precios</a></li>
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

       
    <!--========== MAIN CONTENT ==========-->
    
    <div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>

        <div class="form">
            <img src="/img/icon/404 Page Not Found _Monochromatic.svg" alt="" class="form__img">

            <h1 class="form__title"> Pagina No Encontrada </h1>
        </div>

    </div>

    <!--========== FOOTER ==========-->
    <footer class="footer page-404 ">
        <p class="footer__copy">&#169; 2020 Designet. Todos los derechos reservados </p>
    </footer>
    
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="js/main.js"></script>

</body>
</html>

