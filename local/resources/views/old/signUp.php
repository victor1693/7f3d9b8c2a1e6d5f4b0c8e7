<!DOCTYPE html>
<html class="group dark" data-sidebar-size="lg" data-theme-mode="dark" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <title>
            SignUp
        </title>
        <meta content="noindex, follow" name="robots"/>
        <meta content="web development agency" name="description"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/output.css" rel="stylesheet"/>
        <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" rel="stylesheet"/>
    </head>
    <body class="bg-body-light dark:bg-dark-body">
        <div class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]" id="loader">
            <img alt="loader" src="<?= Request::root();?>/local/resources/views/assets/pre-loader/bar-loader.gif">
            </img>
        </div>
        <!-- Start Main Content -->
        <div class="main-content m-4">
            <div class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)]">
                <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                    <div class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Sign Up
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                            Welcome! create on your account
                        </p>
                        <form method="POST" action="<?= Request::root();?>/user/store" class="leading-none mt-8">
                            <div class="mb-2.5">
                                <label class="form-label" for="email">
                                    Email
                                </label>
                                <input class="form-input px-4 py-3.5 rounded-lg" id="email" name="email" placeholder="email@example.com" required="" type="text">
                                </input>
                            </div>
                            <div class="mt-5">
                                <label class="form-label" for="password">
                                    Password
                                </label>
                                <div class="relative">
                                    <input class="form-input px-4 py-3.5 rounded-lg" id="password" name="password" placeholder="Password" required="" type="password">
                                    </input>
                                    <label class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center !left-auto -right-2.5" for="toggleInputType">
                                        <input class="inputTypeToggle peer/it" hidden="" type="checkbox"/>
                                        <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']">
                                        </i>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label class="form-label" for="birthday">
                                    Birthday
                                </label>
                                <div class="relative">
                                    <input class="form-input px-4 py-3.5 rounded-lg" id="birthday" name="birthday" placeholder="" required="" type="date">
                                    </input>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label class="form-label" for="name">
                                    Country
                                </label>
                                <div class="flex flex-col">
                                    <select class="form-input form-select w-full h-11" id="country" name="country" style="font-weight: 500;font-size: 14px">
                                        <option data-display="Selected Option" value="">
                                            Select
                                        </option>
                                        <option value="ar">
                                            Argentina
                                        </option>
                                        <option value="bo">
                                            Bolivia
                                        </option>
                                        <option value="br">
                                            Brasil
                                        </option>
                                        <option value="cl">
                                            Chile
                                        </option>
                                        <option value="co">
                                            Colombia
                                        </option>
                                        <option value="cr">
                                            Costa Rica
                                        </option>
                                        <option value="cu">
                                            Cuba
                                        </option>
                                        <option value="do">
                                            República Dominicana
                                        </option>
                                        <option value="ec">
                                            Ecuador
                                        </option>
                                        <option value="sv">
                                            El Salvador
                                        </option>
                                        <option value="gt">
                                            Guatemala
                                        </option>
                                        <option value="hn">
                                            Honduras
                                        </option>
                                        <option value="mx">
                                            México
                                        </option>
                                        <option value="ni">
                                            Nicaragua
                                        </option>
                                        <option value="pa">
                                            Panamá
                                        </option>
                                        <option value="py">
                                            Paraguay
                                        </option>
                                        <option value="pe">
                                            Perú
                                        </option>
                                        <option value="pr">
                                            Puerto Rico
                                        </option>
                                        <option value="uy">
                                            Uruguay
                                        </option>
                                        <option value="ve">
                                            Venezuela
                                        </option>
                                        <option value="us">
                                            Estados Unidos
                                        </option>
                                        <option value="ca">
                                            Canadá
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-5">
                                <label class="form-label" for="iam">
                                    I am:
                                </label>
                            </div>
                            <div class="flex items-center gap-2 mb-5">
                                <input class="check check-primary-solid rounded-full" id="check-rs-1" name="iam" value="creator" type="radio"/>
                                <label class="leading-none font-medium text-gray-500 dark:text-dark-text" for="check-rs-1">
                                    Creator
                                </label>
                                <input class="check check-primary-solid rounded-full" id="check-rs-2" name="iam"  value="editor" type="radio"/>
                                <label class="leading-none font-medium text-gray-500 dark:text-dark-text" for="check-rs-2">
                                    Editor
                                </label>
                            </div>
                            <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square" type="submit">
                                Sign Up
                            </button>
                        </form>
                        <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">
                            OR
                        </div>
                        <div class="flex items-center flex-col xl:flex-row gap-4 2xl:gap-5">
                            <a class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square" href="#">
                                <img alt="icon" src="<?= Request::root();?>/local/resources/views/assets/images/icons/google.svg">
                                    <span class="shrink-0">
                                        Sign in with Google
                                    </span>
                                </img>
                            </a>
                            <a class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square" href="#">
                                <img alt="icon" class="dark:brightness-[3]" src="<?= Request::root();?>/local/resources/views/assets/images/icons/discord.png" style="height: 24px"/>
                                <span class="shrink-0">
                                    Continue with Discord
                                </span>
                            </a>
                        </div>
                        <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                            Have an account?
                            <a class="text-primary-500 font-semibold" href="<?= Request::root();?>">
                                Sign In
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor/jquery.min.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/switcher.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/layout.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/main.js">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js">
        </script>
        <script>
            $(document).ready(function () {
                $("form").submit(function (e) {
                    e.preventDefault(); // Evita el envío automático
                    
                    // Obtener valores de los campos
                    let email = $("#email").val().trim();
                    let password = $("#password").val().trim();
                    let birthday = $("#birthday").val().trim();
                    let country = $("#country").val();
                    let iamChecked = $("input[name='iam']:checked").length > 0;

                    // Expresión regular para validar Email
                    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    // Función para mostrar notificaciones con Notify.js
                    function showNotification(message, element) {
                        $.notify(message, {
                            position: "bottom center",
                            className: "error"
                        });
                        element.focus();
                    }

                    // Validaciones
                    if (email === "") {
                        showNotification("Email is required", $("#email"));
                        return false;
                    }
                    if (!emailPattern.test(email)) {
                        showNotification("Enter a valid email address", $("#email"));
                        return false;
                    }
                    if (password === "") {
                        showNotification("Password is required", $("#password"));
                        return false;
                    }
                    if (birthday === "") {
                        showNotification("Birthday is required", $("#birthday"));
                        return false;
                    }
                    if (country === "") {
                        showNotification("Please select a country", $("#country"));
                        return false;
                    }
                    if (!iamChecked) {
                        showNotification("Please select 'I am' option", $("input[name='iam']").first());
                        return false;
                    }

                    // Si todo está validado, enviamos el formulario
                    $.notify("Form submitted successfully!", {
                        position: "bottom center",
                        className: "success"
                    });

                    this.submit();
                });
            });
        </script>

            <?php if (session()->has('errors')): ?>
                <?php 
                    $errors = session('errors'); 
                    $errors = is_array($errors) ? $errors : [$errors]; // Asegurar que sea un array
                ?>
                <?php foreach ($errors as $error): ?>
                    <?php $errorText = is_string($error) ? addslashes($error) : json_encode($error); ?> <!-- Asegurar que sea string -->
                    <script>
                        $.notify('<?= $errorText; ?>', {
                            position: "bottom center",
                            className: "error"
                        });
                    </script>
                <?php endforeach; ?>
            <?php endif; ?>

    </body>
</html>