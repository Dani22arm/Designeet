<div class="l-form-crear">
    <div class="shape1"></div>
    <div class="shape2"></div>

    <div class="form">
        <img src="/img/icon/Authentication_Flatline.svg" alt="" class="form__img">

        <div class="form__content">

            <?php include_once __DIR__ .'/../templates/alertas.php'; ?>
            
            <form action="/crear" method="POST">
    
                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-user-circle'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="num_empleado" class="form__label">Num Empleado</label>
                        <input class="form__input"
                            type="text" 
                            id="num_empleado" 
                            placeholder=""
                            name="num_empleado" 
                            value="<?php echo $usuarioLogin->num_empleado; ?>"
                        >
                    </div>
                </div>

                <div class="form__div form__div-one">
                    <div class="form__icon">
                        <i class='bx bx-envelope'></i>
                    </div>

                    <div class="form__div-input">
                        <label for="usuario" class="form__label">Email</label>
                        <input 
                            type="email" 
                            id="usuario" 
                            name="usuario" 
                            value="<?php echo $usuarioLogin->usuario; ?>"
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

                <div class="form__div">
                    <div class="form__icon">
                        <i class='bx bx-lock' ></i>
                    </div>

                    <div class="form__div-input">
                        <label for="password2" class="form__label">Repetir Contraseña</label>
                        <input 
                            type="password" 
                            id="password2"
                            name="password2"
                            class="form__input" 
                        />
                    </div>
                </div>

                <input type="submit" class="form__button" value="Crear Cuenta">

            </form>
        </div>

       
    </div>

</div>

<!-- ===== MAIN JS ===== -->
<script src="/js/login.js"></script>