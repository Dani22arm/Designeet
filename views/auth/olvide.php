<div class="l-form">
    <div class="shape1"></div>
    <div class="shape2"></div>

    <div class="form">
        <img src="/img/icon/Authentication_Flatline.svg" alt="" class="form__img">

        <div class="form__content">
            
            <h1 class="form__title">Olvide Contraseña</h1>
            <?php include_once __DIR__ .'/../templates/alertas.php'; ?>

            <form action="/olvide" method="POST">
                

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-envelope'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="email" class="form__label">Ingresar Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            class="form__input"
                        />
                    </div>
                </div>

            
                <a href="/login" class="form__forgot">Iniciar Sección?</a>

                <input type="submit" class="form__button" value="Enviar Instruciones">

                

                <div class="form__social">
                    <span class="form__social-text">Redes Sociales </span>
                    <a href="https://wa.link/cfa93a" target= "_blank"  class="form__social-icon"><i class='bx bxl-whatsapp'></i></a>
                    <a href="https://www.facebook.com/WebsitesDesignet" target= "_blank" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.instagram.com/desingnet1" target= "_blank" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>

                </div>
            </form>
        </div>

        
    </div>

</div>

<!-- ===== MAIN JS ===== -->
<script src="/js/login.js"></script>