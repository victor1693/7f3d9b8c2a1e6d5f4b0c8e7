<!DOCTYPE html>
<html class="group dark" data-sidebar-size="lg" data-theme-mode="dark" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <title>
            Verify Account
        </title>
        <meta content="noindex, follow" name="robots"/>
        <meta content="web development agency" name="description"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Favicon -->
        <link href="<?= Request::root();?>/local/resources/views/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <!-- Style CSS -->
        <link href="<?= Request::root();?>/local/resources/views/assets/css/output.css" rel="stylesheet"/>
         <link  href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" referrerpolicy="no-referrer" rel="stylesheet"/>
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
                            Verify your TikTok account
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                            Add the following code to your
                            <strong>
                                TikTok
                            </strong>
                            biography:
                            <strong>
                                5418.
                            </strong>
                        </p>
                        <p class="font-medium text-gray-500 dark:text-dark-text">
                            Now, press Verify Account.
                        </p>
                        <form method="POST" action="<?= Request::root();?>/account/store" class="leading-none mt-8">
                            <div class="mb-2.5">
                                <label class="form-label" for="email">
                                    TikTok Account
                                </label>
                                <input class="form-input px-4 py-3.5 rounded-lg" id="user" name="uniqueId" placeholder="@username" type="text">
                                </input>
                            </div>
                            <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square mt-3" type="submit">
                                Verify Account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
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
                    let user = $("#user").val().trim();  
                
                    // Función para mostrar notificaciones con Notify.js
                    function showNotification(message, element) {
                        $.notify(message, {
                            position: "bottom center",
                            className: "error"
                        });
                        element.focus();
                    }

                    // Validaciones
                    if (user === "") {
                        showNotification("Add your TikTok user account.", $("#user"));
                        return false;
                    }

                    if (!user.startsWith("@")) {
                        showNotification("Your TikTok user must start with '@'.", $("#user"));
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
                <?php foreach ($errors->all() as $error): ?> 
                    <script>
                        $.notify('<?= $error; ?>', {
                            position: "bottom center",
                            className: "error"
                        });
                    </script>
                <?php endforeach; ?>
            <?php endif; ?>
    </body>
</html>