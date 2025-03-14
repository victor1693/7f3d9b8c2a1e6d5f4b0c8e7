<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <title>
            Token
        </title>
        <!-- Bootstrap CSS -->
        <link href="<?= Request::root();?>/local/resources/views/dist/css/tabler.min.css?v=1.0.12" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/dist/css/demo.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>
    </head>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
         .logo {
                text-align: center;
                margin-bottom: 20px;
            }
            .logo img {
                max-width: 100px; /* Ajusta el tamaño del logo según sea necesario */
            }
        .verification-container {
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .verification-container h2 {
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .verification-container p {
            margin-bottom: 1.5rem;
            color: #6c757d;
        }
        .form-control {
            margin-bottom: 1rem;
            text-align: center;
            font-size: 1.2rem;
            padding: 0.5rem;
        }
        .btn-back {
            background-color: transparent;
            border: none;
            color: #007bff;
            cursor: pointer;
            margin-top: 1rem;
        }
        .btn-back:hover {
            text-decoration: underline;
        }
        .no-code {
            margin-top: 1rem;
            cursor: pointer;
        }
        .no-code:hover {
            text-decoration: underline;
        }
        .code-input {
            display: flex;
            justify-content: center; /* Centra los inputs horizontalmente */
            margin-bottom: 1.5rem;
        }
        .code-input input {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 1.5rem;
            border: 2px solid #ccc;
            border-radius: 8px;
            margin: 0 5px; /* Espacio entre los inputs */
        }
        .code-input input:focus {
            border-color: #191919;
            outline: none;
        }
    </style>
</html>
<body class="theme-dark">
    <div class="card verification-container">
        <div class="logo mt-4">
            <img alt="" src="https://whop.com/oauth/_next/image/?url=%2Foauth%2Fwhop-logo-square.png&w=48&q=75">
            </img>
        </div>
        <h2>
            Bienvenido de nuevo!
        </h2>
        <p>
            Ingrese el código que recibió en su correo electrónico
            <br>
                <strong class="text-white" style="margin-bottom: 3px;">
                    mac******emes@gmail.com
                </strong>
            </br>
        </p>
        <div class="code-input">
            <input class="form-control" maxlength="1" oninput="moveToNext(this, 1)" type="text">
                <input class="form-control" maxlength="1" oninput="moveToNext(this, 2)" type="text">
                    <input class="form-control" maxlength="1" oninput="moveToNext(this, 3)" type="text">
                        <input class="form-control" maxlength="1" oninput="moveToNext(this, 4)" type="text">
                            <input class="form-control" maxlength="1" oninput="moveToNext(this, 5)" type="text">
                                <input class="form-control" maxlength="1" oninput="moveToNext(this, 6)" type="text">
                                </input>
                            </input>
                        </input>
                    </input>
                </input>
            </input>
        </div>
        <button class="btn-back text-white">
            <span class="fa fa-arrow-left">
            </span>
            Back
        </button>
        <div class="no-code">
            <a class="text-white" href="">
                No recibí un código
            </a>
        </div>
    </div>
    <script>
        function moveToNext(input, nextIndex) {
            if (input.value.length === 1) {
                const nextInput = input.parentElement.querySelector(`input:nth-child(${nextIndex + 1})`);
                if (nextInput) {
                    nextInput.focus();
                }
            }
        }
    </script>
</body>
<!-- Bootstrap JS and dependencies -->
<script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/tabler.min.js">
</script>
<script defer="" src="<?= Request::root();?>/local/resources/views/dist/js/demo.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js">
</script>