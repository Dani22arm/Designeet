<div class="l-form">
    <div class="shape1"></div>
    <div class="shape2"></div>

    <div class="form">
        <img src="/img/icon/authentication.svg" alt="" class="form__img">

        <div class="form__content">

            <h1 class="form__title">Bienvenido</h1>
            <?php include_once __DIR__ .'/../templates/alertas.php'; ?>


            <form action="/login" method="POST" >
                
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="usuario" class="form__label">Usuario</label>
                        <input 
                            type="email" 
                            id="usuario" 
                            name="usuario" 
                            class="form__input"
                        />
                    </div>
                </div>

                <div class="form__div">
                    <div class="form__icon">
                        <i class='bx bx-lock' ></i>
                    </div>

                    <div class="form__div-input">
                        <label for="password" class="form__label">Contraseña</label>
                        <input 
                            type="password" 
                            id="password"
                            name="password"
                            class="form__input" 
                        />
                    </div>
                </div>
                <a href="/olvide" class="form__forgot">Olvido Password?</a>

                <input type="submit" class="form__button" value="Login">
            
            </form> 

            <div class="form__social">
                <span class="form__social-text">Redes Sociales </span>
                <a href="https://wa.link/cfa93a" target= "_blank"  class="form__social-icon"><i class='bx bxl-whatsapp'></i></a>
                <a href="https://www.facebook.com/WebsitesDesignet" target= "_blank" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/desingnet1" target= "_blank" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>

            </div>

        </div>

    </div>

</div>

<!-- ===== MAIN JS ===== -->
<script src="/js/login.js"></script>