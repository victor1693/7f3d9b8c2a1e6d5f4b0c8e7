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
        </style>
    </head>
    <body class="theme-dark" style="padding: 15px;padding-left: 79px;">
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
                        <form>
                            <div class="mb-3">
                                <label class="form-label">
                                    Nombre
                                </label>
                                <input class="form-control py-2" name="example-text-input" placeholder="Nombre" style="font-size: 15px;" type="text">
                                </input>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Bio
                                </label>
                                <textarea class="form-control py-2" placeholder="Sin biografia" style="font-size: 15px;height: 80px;">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Nombre de usuario
                                </label>
                                <input class="form-control py-2" name="example-text-input" placeholder="Nombre de usuario" style="font-size: 15px;" type="text">
                                </input>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Correo electrónico
                                </label>
                                <input class="form-control py-2" name="example-text-input" placeholder="Correo" readonly="" style="font-size: 15px;width: 50%;" type="text">
                                </input>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Número de teléfono
                                </label>
                                <input class="form-control py-2" name="example-text-input" placeholder="Número de teléfono" readonly="" style="font-size: 15px;width: 300px;" type="text">
                                </input>
                            </div>
                            <h1 class="card-title mt-4 mb-1" style="font-size: 18px">
                                ¿Qué puede ver la gente en tu perfil?
                            </h1>
                            <p class="text-secondary" style="font-weight: 500">
                                Todo lo que ocultes aquí no será visible para los demás y tampoco lo verás en sus perfiles.
                            </p>
                            <div class="row mb-2">
                                <div class="col-11">
                                    <h1 class="card-title mb-1" style="font-size: 16px">
                                        Se unió a clipper
                                    </h1>
                                </div>
                                <div class="col-1" style="text-align: right;">
                                    <label class="form-check form-switch" style="cursor: pointer;float: right;">
                                        <input checked="" class="form-check-input" type="checkbox"/>
                                    </label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-11">
                                    <h1 class="card-title mb-1" style="font-size: 16px">
                                        Clipper en propiedad
                                    </h1>
                                </div>
                                <div class="col-1" style="text-align: right;">
                                    <label class="form-check form-switch" style="cursor: pointer;float: right;">
                                        <input checked="" class="form-check-input" type="checkbox"/>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-11">
                                    <h1 class="card-title mb-1" style="font-size: 16px">
                                        Localización aproximada
                                    </h1>
                                </div>
                                <div class="col-1" style="text-align: right;">
                                    <label class="form-check form-switch" style="cursor: pointer;float: right;">
                                        <input checked="" class="form-check-input" type="checkbox"/>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div style="border-top: 1px solid #1c1c1c;padding: 20px;">
                        <button class="btn btn-primary" style="width: 100%;margin-top: 27px;">
                            Guardar
                        </button>
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