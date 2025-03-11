<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Perfil
        </title>
        <!-- CSS files -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css?v=1.0.12" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
        <style>
            .btn{
                font-size: 16px;
            }
            .list-group-item:hover{
                background-color: #1c1c1c;
            }
            .lists:hover{
                background-color: #1c1c1c !important;
            }
            .btns-agregar:hover{
                 border: 1px solid #474747 !important;
            }
        </style>
    </head>
    <body style="padding: 15px;padding-left: 79px;">
        <script src="<?= Request::root();?>/local/resources/views/dist/js/demo-theme.min.js">
        </script>
        <?php # include 'includes/aside.php'; ?>
        <?php  include 'includes/aside-condensed.php'; ?>
        <div class="page">
            <div class="card">
                <div class="card-header" style="padding: 10px 20px;">
                    <div class="row" style="width: 100%">
                        <p class="mb-0" style="font-size: 20.5px;font-weight: 500">
                            Configuración de la cuenta
                        </p>
                    </div>
                </div>
                <div class="card-body py-0" id="contenedor-principal" style=" padding: 20px;padding-left: 260px;position: relative;height: 100%">
                    <?php  include 'includes/aside-profile.php'; ?>
                    <div style="padding: 20px;">
                        <h1 class="card-title mb-1" style="font-size: 18px">
                            Formas de pago
                        </h1>
                        <div bis_skin_checked="1" class="card p-5 mt-4 text-center">
                            <h1 class="card-title mb-1 text-center text-secondary" style="font-size: 18px">
                                No se han encontrado formas de pago
                            </h1>
                        </div>
                        <div class="row">
                            <div class="col-8">
                            </div>
                            <div class="col-4 mt-3" style="text-align: right;">
                                <button class="btn btn-primary">
                                    Añadir método de pago
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
        </script>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
        </script>
        <script>
            function ajustarAltura() {
            var alturaPantalla = $(window).height() - 82; // Obtiene la altura de la pantalla
            $("#contenedor-principal").css("height", alturaPantalla + "px"); // Ajusta la altura del div
            }

            $(document).ready(function() {
                ajustarAltura(); // Ajustar al cargar la página
                $(window).resize(ajustarAltura); // Ajustar cuando se redimensiona la ventana
            });
        </script>
    </body>
</html>