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
                            Cuentas conectadas
                        </h1>
                        <div class="card p-5 mt-4 text-center">
                            <h1 class="card-title mb-1 text-center text-secondary" style="font-size: 18px">
                                No hay cuentas conectadas
                            </h1>
                        </div>
                        <h1 class="card-title mt-4 mb-1 mb-3" style="font-size: 18px">
                            Agregar una nueva cuenta
                        </h1>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a class="list-group-item list-group-item-action btns-agregar" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #191919;border: 1px solid #323232;">
                                    <img src="https://whop.com/_next/image/?url=https%3A%2F%2Fassets.whop.com%2Fcore%2F2afe54ae8a904906b22dfce0%2F_next%2Fstatic%2Fmedia%2Ftiktok-logo.ad4c81d6.png&w=32&q=75" style="border-radius: 5px;"/>
                                    TikTok
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://whop.com/_next/image/?url=https%3A%2F%2Fassets.whop.com%2Fcore%2F2afe54ae8a904906b22dfce0%2F_next%2Fstatic%2Fmedia%2Fdiscord-logo.844a0266.png&w=32&q=75" style="border-radius: 5px;width: 32px;"/>
                                    Discord
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/solana-logo.253cb587.svg" style="border-radius: 5px;width: 32px;"/>
                                    Solana
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://whop.com/_next/image/?url=https%3A%2F%2Fassets.whop.com%2Fcore%2F2afe54ae8a904906b22dfce0%2F_next%2Fstatic%2Fmedia%2Ftelegram-logo.d26c98e6.png&w=32&q=75" style="border-radius: 5px;"/>
                                    Telegram
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://whop.com/_next/image/?url=https%3A%2F%2Fassets.whop.com%2Fcore%2F2afe54ae8a904906b22dfce0%2F_next%2Fstatic%2Fmedia%2Finstagram-logo.1c9d71ab.png&w=32&q=75" style="border-radius: 5px;"/>
                                    Instagram
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://whop.com/_next/image/?url=https%3A%2F%2Fassets.whop.com%2Fcore%2F2afe54ae8a904906b22dfce0%2F_next%2Fstatic%2Fmedia%2Fyoutube-logo.c3dc7114.png&w=32&q=75" style="border-radius: 5px;"/>
                                    Youtube
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/x-logo.334354ac.svg" style="border-radius: 5px;width: 32px;"/>
                                    X
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-md-3 mb-3">
                                <span class="list-group-item list-group-item-action" disabled="" href="#" style="border-radius: 15px;padding: 10px; font-size: 16px;font-weight: 600;background-color: #151515;border: 0">
                                    <img src="https://whop.com/_next/image/?url=https%3A%2F%2Fassets.whop.com%2Fcore%2F2afe54ae8a904906b22dfce0%2F_next%2Fstatic%2Fmedia%2Ftrading-view-logo.08966ff8.png&w=32&q=75" style="border-radius: 5px;"/>
                                    TrandingView
                                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-plus" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="float: right;height: 34px;width: 34px;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <path d="M12 5l0 14">
                                        </path>
                                        <path d="M5 12l14 0">
                                        </path>
                                    </svg>
                                </span>
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