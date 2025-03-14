<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>
            Login
        </title>
        <!-- Bootstrap CSS -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css?v=1.0.12" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
        <style>
            .login-container {
                max-width: 400px;
                margin: 100px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .login-container h2 {
                text-align: center;
                margin-bottom: 20px;
            }
            .form-control {
                margin-bottom: 15px;
            }
            .btn-primary {
                width: 100%;
            }
            .social-login {
                margin-top: 20px;
                text-align: center;
            }
            .social-login .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 5px 10px;
                font-size: 14px;
                background-color: transparent; /* Fondo transparente */
                border: 1px solid #191919; /* Borde gris */
            }
            .social-login .btn i {
                font-size: 16px;
            }
            .social-login .btn:hover {
                background-color: #191919; /* Fondo gris claro al pasar el mouse */
            }
            /* Colores personalizados para cada ícono */
            .social-login .btn-google i {
                color: #db4437; /* Rojo de Google */
                width: 30px;
                height: 30px;
            }
            .social-login .btn-discord i {
                color: #5865f2; /* Azul de Discord */
                width: 30px;
                height: 30px;
            }
            .create-account {
                text-align: center;
                margin-top: 15px;
            }
            .logo {
                text-align: center;
                margin-bottom: 20px;
            }
            .logo img {
                max-width: 100px; /* Ajusta el tamaño del logo según sea necesario */
            }
            .hr-with-text {
                display: flex;
                align-items: center;
                text-align: center;
                margin: 8px 0;
            }
            .hr-with-text::before,
            .hr-with-text::after {
                content: '';
                flex: 1;
                border: 1px solid #191919; /* Línea horizontal */
            }
            .hr-with-text span {
                padding: 0 10px; /* Espacio alrededor del texto */
            }
            .form-control::placeholder {
                color: white;
                opacity: 0.7;
            }
        </style>
    </head>
</html>
<body class="theme-dark">
    <div class="login-container card" style="align-content: end 7px;">
        <!-- Logo -->
        <div class="logo mt-4">
            <img alt="" src="https://whop.com/oauth/_next/image/?url=%2Foauth%2Fwhop-logo-square.png&w=48&q=75">
            </img>
        </div>
        <h2 class="text-white w-100 mt-1" style="font-weight: 700px; font-size: 32px;">
            Iniciar sesión Clipper
        </h2>
        <form>
            <div class="mb-3">
                <input class="form-control" id="email" placeholder="Tu correo" type="email">
                </input>
            </div>
            <button class="btn btn-primary w-100 mt-1" type="submit">
                Continuar
            </button>
        </form>
        <div class="social-login">
            <div class="container text-center">
                <div class="hr-with-text">
                    <span>
                        O inicia sesión con
                    </span>
                </div>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <!-- Contenedor flexible para centrar los botones -->
                <button class="btn btn-discord d-flex align-items-center justify-content-center" style="border-radius: 0;" type="button">
                    <i class="fab fa-discord" style="align-content: center;">
                    </i>
                </button>
                <button class="btn btn-google d-flex align-items-center justify-content-center" style="border-radius: 0;" type="button">
                    <i class="fab fa-google" style="align-content: center;">
                    </i>
                </button>
            </div>
            <p class="mt-3" style="font-size: 12px; opacity: 0.7; color: rgba(255, 255, 255, 0.7);">
                Al registrarte, aceptas nuestros
                <a class="font-medium underline text-decoration-underline w-100" href="" style="font-size: 12px; opacity: 0.7; color: rgba(255, 255, 255, 0.7);">
                    Terminos
                </a>
                &
                <a class="font-medium underline text-decoration-underline w-100" href="" style="font-size: 12px; opacity: 0.7; color: rgba(255, 255, 255, 0.7);">
                    Privacidad
                </a>
            </p>
        </div>
        <div class="create-account">
            <hr class="" style="margin: 0px auto;">
            </hr>
            <div class="mt-3" style="align-items: flex-end; display: flex; justify-content: center; ">
                <p class="text-white text-center" style="margin: 0;">
                    ¿Nuevo en Clipper?
                    <a class="text-primary" href="<?= Request::root();?>/register">
                        Crear una cuenta
                    </a>
                </p>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
    </script>
    <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
</body>
