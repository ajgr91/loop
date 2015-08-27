
<?php include_once('include/header.php'); ?>
<div class="content">
    <section class="primary-blocks lfloat"></section>
    <section class="primary-blocks rfloat">
        <div class="titles">
            <h2>ANOTA TODOS TUS</h2>
            <h1>ENTRENAMIENTOS</h1>
            <h3>Conoce todas tus estadísticas y mejores resultados</h3>
        </div>
        <div class="register-login-wrapper">
            <button class="register btn-white">REGISTRARSE</button>
            <span>¿Ya tienes cuenta? <a class="login a-white" href="#">Inicia sesión</a></span>
        </div>
    </section>
    <section class="login-wrapper">
        <a class="close-icon">
            <span class="line"></span>
            <span class="line"></span>
        </a>
        <form id="loginForm" action="" method="post">
            <div class="title-form">
                <h1>INICIAR SESIÓN</h1>
            </div>
            <div>
                <input placeholder="Usuario" name="loginForm[Usuario]" id="loginFormUsuario" type="text">
            </div>   
            <div>
                <input placeholder="Contraseña" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
            </div>
            <div>
                <input type="submit" name="yt1" value="ENTRAR" class="btn-black">
            </div>
            <span>¿Has olvidado tu contraseña? Haz click <a class="recordar a-black" href="#">aquí</a></span>   
        </form>
    </section>
    <section class="register-wrapper">
        <a class="close-icon">
                <span class="line"></span>
                <span class="line"></span>
        </a>
        <form id="registerFormStep1" action="" method="post" class="active">
            <div class="title-form">
                <h1>REGISTRO</h1>
            </div>
            <div class="subtitle-form">
                <h2>CUENTA DE USUARIO</h2>
            </div>
            <div class="cfloat">
                <input class="lfloat" placeholder="Correo electrónico" name="loginForm[Usuario]" id="loginFormUsuario" type="text">
                <input class="rfloat" placeholder="Usuario" name="loginForm[Usuario]" id="loginFormUsuario" type="text">
            </div>   
            <div class="cfloat">
                <input class="lfloat" placeholder="Contraseña" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                <input class="rfloat" placeholder="Repetir contraseña" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
            </div>
            <div class="cfloat">
                <button type="button" class="btn-black">CONTINUAR</button>
            </div>
            <span><a class="condiciones a-black" href="#">Condiciones legales</a></span>   
        </form>
        <form id="registerFormStep2" action="" method="post" class="">
           <div class="title-form">
                <h1>REGISTRO</h1>
            </div>
            <div class="subtitle-form">
                <h2>CUENTA DE USUARIO</h2>
            </div>
            <div class="user-image lfloat">
                <a class="subir-imagen"></a>
                <img src="img/perfil.png" alt="Imagen perfil">
            </div>
            <div class="user-data lfloat">
                <div class="cfloat">
                    <input class="lfloat" placeholder="Peso" name="loginForm[Usuario]" id="loginFormUsuario" type="text">
                    <input class="rfloat" placeholder="Altura" name="loginForm[Usuario]" id="loginFormUsuario" type="text">
                </div>   
                <div class="cfloat">
                    <input class="lfloat" placeholder="Pecho" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                    <input class="rfloat" placeholder="Cuello" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                </div>
                <div class="cfloat">
                    <input class="lfloat" placeholder="Cintura" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                    <input class="rfloat" placeholder="Cuadriceps" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                </div>
                <div class="cfloat">
                    <input class="lfloat" placeholder="Bíceps" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                    <input class="rfloat" placeholder="Gemelo" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                </div>
                <div class="cfloat">
                    <input class="lfloat" placeholder="Sexo" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                    <input class="rfloat" placeholder="Objetivo actual" name="loginForm[Contrasena]" id="loginFormContrasena" type="text">
                </div>
            </div> 
            <div class="cfloat">
                <button type="button" class="btn-black">FINALIZAR</button>
            </div> 

        </form>
        <ul class="register-pagination">
            <li class="register-page active"></li>
            <li class="register-page"></li>
        </ul>
    </section>
</div>
<?php include_once('include/footer.php'); ?>