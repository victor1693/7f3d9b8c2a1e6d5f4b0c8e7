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
            .list-group-item{
                padding: 10px;
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
                        <div class="alert alert-primary mb-0" role="alert" style="padding: 22px 16px;">
                            <div class="row">
                                <div class="col-10 mb-0" style="padding-top: 8px;">
                                    Configure sus cuentas de pago para cobrar rápidamente.
                                </div>
                                <div class="col-2 mb-0">
                                    <a class="btn btn-primary mb-0" href="#" style="font-size: 14px;">
                                        Establecer pagos por Clipper
                                    </a>
                                </div>
                            </div>
                        </div>
                        <h1 class="card-title mb-1 mt-3" style="font-size: 18px">
                            Balance general
                        </h1>
                        <h1 class="card-title mb-1 mt-3" style="font-size: 18px">
                            Resumen del balance
                        </h1>
                        <div class="col-12 mb-3 mt-3">
                            <div class="card" style="font-size: 16px;">
                                <div class="list-group list-group-flush">
                                    <a class="list-group-item list-group-item-action" href="#" style="position: relative;">
                                        Disponible para pagar a su banco
                                        <span style="position: absolute;right: 50px;top: 11px;">
                                            0,00 US$
                                        </span>
                                    </a>
                                    <a class="list-group-item list-group-item-action" href="#" style="position: relative;">
                                        Disponible para pagar en breve
                                        <span style="position: absolute;right: 50px;top: 11px;">
                                            0,00 US$
                                        </span>
                                    </a>
                                </div>
                                <div class="card-header" style="border-bottom:0px;position: relative;padding: 10px;">
                                    <h3 class="card-title" style="padding: 0px;">
                                        Total
                                        <span style="position: absolute;right: 50px;top: 11px;">
                                            0,00 US$
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border: 0px;">
                            <ul class="nav nav-tabs" data-bs-toggle="tabs" role="tablist" style="border-bottom: 1px solid #1c1c1c">
                                <li class="nav-item" role="presentation">
                                    <a aria-selected="true" class="nav-link text-white active" data-bs-toggle="tab" href="#retiradas" role="tab" style="background-color: transparent;border: 0px;">
                                        <strong>
                                            Retiradas
                                        </strong>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a aria-selected="false" class="nav-link text-white" data-bs-toggle="tab" href="#deposito" role="tab" style="background-color: transparent;border: 0px;" tabindex="-1">
                                        <strong>
                                            Depósito
                                        </strong>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a aria-selected="false" class="nav-link text-white" data-bs-toggle="tab" href="#deduciones" role="tab" style="background-color: transparent;border: 0px;" tabindex="-1">
                                        <strong>
                                            Deducciones
                                        </strong>
                                    </a>
                                </li>
                            </ul>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="retiradas" role="tabpanel">
                                        <div>
                                            <div class="card">
                                                <table class="table table-vcenter card-table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Importe
                                                            </th>
                                                            <th>
                                                                Estado
                                                            </th>
                                                            <th>
                                                                Iniciado
                                                            </th>
                                                            <th>
                                                                Fecha prevista
                                                            </th>
                                                            <th>
                                                                Enviado a:
                                                            </th>
                                                            <th class="w-1">
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                $150.00
                                                            </td>
                                                            <td>
                                                                Pendiente
                                                            </td>
                                                            <td>
                                                                2024-03-01
                                                            </td>
                                                            <td>
                                                                2024-03-05
                                                            </td>
                                                            <td>
                                                                Juan Pérez
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $320.50
                                                            </td>
                                                            <td>
                                                                Completado
                                                            </td>
                                                            <td>
                                                                2024-02-20
                                                            </td>
                                                            <td>
                                                                2024-02-25
                                                            </td>
                                                            <td>
                                                                María Gómez
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $75.25
                                                            </td>
                                                            <td>
                                                                En proceso
                                                            </td>
                                                            <td>
                                                                2024-03-02
                                                            </td>
                                                            <td>
                                                                2024-03-07
                                                            </td>
                                                            <td>
                                                                Carlos Rodríguez
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $210.80
                                                            </td>
                                                            <td>
                                                                Cancelado
                                                            </td>
                                                            <td>
                                                                2024-02-28
                                                            </td>
                                                            <td>
                                                                2024-03-03
                                                            </td>
                                                            <td>
                                                                Ana López
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $99.99
                                                            </td>
                                                            <td>
                                                                Pendiente
                                                            </td>
                                                            <td>
                                                                2024-03-03
                                                            </td>
                                                            <td>
                                                                2024-03-08
                                                            </td>
                                                            <td>
                                                                Ricardo Díaz
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="deposito" role="tabpanel">
                                        <div>
                                            <div class="card">
                                                <table class="table table-vcenter card-table">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                Importe
                                                            </th>
                                                            <th>
                                                                Tasa
                                                            </th>
                                                            <th>
                                                                Importe Neto
                                                            </th>
                                                            <th>
                                                                Estado
                                                            </th>
                                                            <th>
                                                                Tipo de credito
                                                            </th>
                                                            <th>
                                                                Fecha de publicación
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                $500.00
                                                            </td>
                                                            <td>
                                                                5%
                                                            </td>
                                                            <td>
                                                                $475.00
                                                            </td>
                                                            <td>
                                                                Pendiente
                                                            </td>
                                                            <td>
                                                                Personal
                                                            </td>
                                                            <td>
                                                                2024-03-01
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $1,200.00
                                                            </td>
                                                            <td>
                                                                3%
                                                            </td>
                                                            <td>
                                                                $1,164.00
                                                            </td>
                                                            <td>
                                                                Aprobado
                                                            </td>
                                                            <td>
                                                                Hipotecario
                                                            </td>
                                                            <td>
                                                                2024-02-25
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $750.50
                                                            </td>
                                                            <td>
                                                                4.5%
                                                            </td>
                                                            <td>
                                                                $717.72
                                                            </td>
                                                            <td>
                                                                Rechazado
                                                            </td>
                                                            <td>
                                                                Automotriz
                                                            </td>
                                                            <td>
                                                                2024-02-28
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $300.00
                                                            </td>
                                                            <td>
                                                                2%
                                                            </td>
                                                            <td>
                                                                $294.00
                                                            </td>
                                                            <td>
                                                                En proceso
                                                            </td>
                                                            <td>
                                                                Estudiantil
                                                            </td>
                                                            <td>
                                                                2024-03-02
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                $950.75
                                                            </td>
                                                            <td>
                                                                3.5%
                                                            </td>
                                                            <td>
                                                                $917.10
                                                            </td>
                                                            <td>
                                                                Completado
                                                            </td>
                                                            <td>
                                                                Empresarial
                                                            </td>
                                                            <td>
                                                                2024-02-20
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="deduciones" role="tabpanel">
                                        <div>
                                            Deducciones
                                        </div>
                                    </div>
                                </div>
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