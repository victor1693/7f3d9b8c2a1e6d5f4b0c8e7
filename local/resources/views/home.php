<!DOCTYPE doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, viewport-fit=cover" name="viewport"/>
        <meta content="ie=edge" http-equiv="X-UA-Compatible"/>
        <title>
            Inicio
        </title>
        <!-- CSS files -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css?v=1.0.12" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
        <style>
            .btn{
                font-size: 16px;
            }

            .price {
                background: linear-gradient(to bottom, #1754D8, #578CFF);
                color: white;
                font-weight: bold;
                border-bottom: 1.2px solid #1854d8;    
                border-top: 1.2px solid #366feb;
                border-left: 1.2px solid #2862e2;
                border-right: 1.2px solid #2862e2;
                box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
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
                        <div class="col-8">
                            <a class="btn btn-dark" href="#">
                                Explore
                            </a>
                            <a class="btn btn-dark" href="#" style="margin-left: 10px;">
                                Leaderboards
                            </a>
                            <a class="btn btn-dark" href="#" style="margin-left: 10px;">
                                For you
                            </a>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-2">
                                <input class="form-control" placeholder="Buscador" type="text"/>
                                <button class="btn" type="button">
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body" style=" padding: 20px;">
                    <h1 style="font-size: 28px;font-weight: 700">
                        💵 Recompensas por contenido
                    </h1>
                    <p class="m-0" style="font-size: 15px;">
                        Get paid for creating content!
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="btn-group mb-3 mt-3" role="group">
                                <button class="btn btn-dark btn-pill" type="button">
                                    Todo
                                </button>
                                <button class="btn btn-dark" type="button">
                                    Clipping
                                </button>
                                <button class="btn btn-dark btn-pill" type="button">
                                    UGC
                                </button>
                            </div>
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <div class="btn-group mb-3 mt-3" role="group">
                                <button class="btn btn-dark btn-pill" type="button">
                                    Most paid out
                                </button>
                                <button class="btn btn-dark" type="button">
                                    Highest
                                </button>
                                <button class="btn btn-dark btn-pill" type="button">
                                    Newest
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <p class="m-0" style="font-size: 15px;text-align: right;">
                                147 Resultados
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/EhTD3HTOhvFW-9uGE5QhWuqVLyunKFvKdz-Tdt2cvnM/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI1LTAxLTExL3VzZXJfNjgzOTk4OV83YThkMTQ5NS01YzIxLTRhMzYtYmIxMC1mMzNlODIxNmZiMmEucG5n)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Whop UGC Creators
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        <a class="text-white" href="<?= Request::root();?>/campaign" style="cursor: pointer">
                                            Whop UGC (Faceless)
                                        </a>
                                    </p>
                                    <div class="row">
                                        <div class="col-11">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                1955,81 US$ de 6000 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-1">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                38%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="38% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="38" class="progress-bar bg-orange" role="progressbar" style="width: 38%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                UGC
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    4.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/RZ8NrlZkDsIVv9iVU4zlsxxKti8Jbe4uEgVmwWbDSTs/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI1LTAxLTE2L3VzZXJfNjgzOTk4OV8xM2NhN2Q2Yy0yZjVjLTQyNWEtYWY4NC0xMzY0NGRjZjU1MGQuanBlZw)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div style="width: 110px;">
                                            </div>
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Graziosi Clips
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        Dean Graziosi Clipping - $4 per 1K Views
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                6600 US$ de 6069,25 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                33%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="33% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" class="progress-bar bg-orange" role="progressbar" style="width: 33%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                UGC
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    1.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/BC5w06UzE8WxaoXV8YO8ha55b0ha9vfgFZ8CuB3m_AA/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI1LTAzLTAxL3VzZXJfNjgzOTk4OV9hNjJhZDNmNS1hMGI5LTQyZTMtYmIwNy05YWI0YzNlMWQ5MzYuanBlZw)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Lil Shxwn "Leave" Clipping
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        "Leave" Feat. Yungeen Ace
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                999,72 US$ de 1000 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                99%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="99% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="99" class="progress-bar bg-orange" role="progressbar" style="width: 99%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                Recorte
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    3.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/_bbKBTiOD9z-wYV9n_wNRPWhu1r4sbmad35haYuzXEc/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI1LTAxLTI4L3VzZXJfNzM2MDk5Nl83N2IxOTRiNC0wZjdkLTQ3ZjAtOTFmZi01MTAyNGUxZTkzNGYucG5n)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Jacob Levinrad Clips
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        Jacob Levinrad Clips ($1 per 1k views)
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                841,63 US$ de 7000 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                12%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="12% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="12" class="progress-bar bg-orange" role="progressbar" style="width: 12%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                Recorte
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    5.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/2W74PpMmKbLVVK2y94JP_k_X6ofAypkP-uzdqd7uAxs/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI0LTEwLTE2L3VzZXJfMzc4NzE0Nl9lNTQ3NDg0Ny0wNGI0LTQ0ZjYtOWRjNi0xNmE5MTUzN2RiNmUuanBlZw)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Whop University
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        Whop YouTube Video
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                672,88 US$ de 25.000 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                3%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="3% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="3" class="progress-bar bg-orange" role="progressbar" style="width: 3%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                UGC
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    2.20 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/kG597jx40jwdJaNX70kg4N0_2oG6cDSXrea-mYhmzy4/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI1LTAyLTI2L3VzZXJfNjMwOTk4NV8wYjAwMTMzNS02MjYyLTRhZTQtOGYzOC0wMzgxNWUyY2VmNjIucG5n)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Sean Perry Clips
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        Sean Perry
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                445,39 US$ de 2500 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                18%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="18% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="18" class="progress-bar bg-orange" role="progressbar" style="width: 18%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                Sin rostro
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    50.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/1mBXbNthOdI2DiLNZy6QbYpf4WdIpsjyzapcj-qxXRw/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI0LTEyLTMxL3VzZXJfMTU4NzMwOF84NDU3MmY1NC0yMDMwLTQ1ZGItYTI1NS1kYTcyZTU1ZWJkNGYucG5n)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Rios to Riches
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        Clip Rios & Earn $1 Per 1K Views
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                393,39 US$ de 1000 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                39%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="38% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="38" class="progress-bar bg-orange" role="progressbar" style="width: 38%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                UGC
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm bg-indigo" style="font-size: 13px;font-weight: 700">
                                                    78.00 US$ / 1 mil
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/_57AbOadxM5bdZJReazIUNHlzzntrlwsdgAdFs-x0Ms/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI0LTEyLTMwL3VzZXJfNjgxMDYxOF81NDY5OTAzNS03ZTQyLTQzNWUtOWJhZC00ZTBhODIwMjdkZTIud2VicA)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                AI Academy Clips
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        AI Academy Clipping
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                280,71 US$ de 2180 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                9%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="9% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="9" class="progress-bar bg-orange" role="progressbar" style="width: 9%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                Sin rostro
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    11.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <div class="card">
                                <div class="card-body" style="padding: 15px;">
                                    <div class="row " style="margin: 0px;">
                                        <div class="col-auto m-0 p-0">
                                            <span class="avatar" style="background-image: url(https://img-v2-prod.whop.com/LrJO0R8Ly5XoweQyp-sgHA7-85jzusXYEw8lbV0TEKs/rs:fill:80:80/el:1/dpr:2/aHR0cHM6Ly9hc3NldHMud2hvcC5jb20vdXBsb2Fkcy8yMDI1LTAxLTE0L3VzZXJfNjgzOTk4OV9iNzAxYjY2Ny01Mzk5LTQxY2ItYjg3My0wZTU4YTg0NGNmNTYucG5n)">
                                            </span>
                                        </div>
                                        <div class="col">
                                            <p class="card-title mb-0" style="padding-top: 7px;">
                                                Saamir Clips
                                            </p>
                                        </div>
                                    </div>
                                    <p class="card-title mt-2 mb-2">
                                        Saamir Clips Payout
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;">
                                                745,96 US$ de 4250 US$ pagado
                                            </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="card-title mb-1" style="font-size: 14px;text-align: right;">
                                                18%
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 m-0">
                                            <div class="progress mb-2 bg-dark" style="border: 1px solid #2a2a2a;height: 12px;">
                                                <div aria-label="18% Complete" aria-valuemax="100" aria-valuemin="0" aria-valuenow="18" class="progress-bar bg-orange" role="progressbar" style="width: 18%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Tipo
                                            </p>
                                            <p class="card-title text-white m-0" style="font-size: 14px;">
                                                UGC
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                Plataformas
                                            </p>
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="https://assets.whop.com/core/2afe54ae8a904906b22dfce0/_next/static/media/tiktok-logo.b77808fb.svg"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div style="width: 110px;">
                                                <p class="card-title text-secondary m-0" style="font-size: 13px;font-weight: 700">
                                                    $ / Vistas
                                                </p>
                                                <p class="card-title text-white m-0 badge badge-sm price" style="font-size: 12px;font-weight: 600; padding: 0 !important">
                                                    7.00 US$ /
                                                    <span style="opacity: 0.6">
                                                        1 mil
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-5" style="width: 250px;margin: 0 auto;">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a aria-disabled="true" class="page-link" href="#" tabindex="-1">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                    <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <polyline points="15 6 9 12 15 18">
                                        </polyline>
                                    </svg>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    1
                                </a>
                            </li>
                            <li class="page-item ">
                                <a class="page-link" href="#">
                                    2
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    3
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    4
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    5
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                    <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                        </path>
                                        <polyline points="9 6 15 12 9 18">
                                        </polyline>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
        </script>
        <script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
        </script>
    </body>
</html>