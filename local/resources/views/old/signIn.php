<!DOCTYPE html>
<html class="group dark" data-sidebar-size="lg" data-theme-mode="dark" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <title>
            SignIn
        </title>
        <meta content="noindex, follow" name="robots"/>
        <meta content="web development agency" name="description"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Favicon -->
        <link href="<?= Request::root();?>/local/resources/views/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <!-- Style CSS -->
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
                            Sign In
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                            Welcome Back! Log in to your account
                        </p>
                        <form action="<?= Request::root();?>/user/signIn" method="POST" class="leading-none mt-8">
                            <div class="mb-2.5">
                                <label class="form-label" for="email">
                                    Email
                                </label>
                                <input class="form-input px-4 py-3.5 rounded-lg" id="email" name="email" placeholder="youremail@example.com" required="" type="email">
                                </input>
                            </div>
                            <div class="mt-5">
                                <label class="form-label" for="password">
                                    Password
                                </label>
                                <div class="relative">
                                    <input class="form-input px-4 py-3.5 rounded-lg" id="password" name="password" placeholder="Password" required="" type="password"/>
                                    <label class="size-8 rounded-md flex-center hover:bg-gray-200 dark:hover:bg-dark-icon foucs:bg-gray-200 dark:foucs:bg-dark-icon position-center !left-auto -right-2.5" for="toggleInputType">
                                        <input class="inputTypeToggle peer/it" hidden="" id="toggleInputType" type="checkbox"/>
                                        <i class="ri-eye-off-line text-gray-500 dark:text-dark-text peer-checked/it:before:content-['\ecb5']">
                                        </i>
                                    </label>
                                </div>
                            </div>
                            <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square mt-3" type="submit">
                                Sign In
                            </button>
                        </form>
                        <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">
                            OR
                        </div>
                        <div class="flex items-center flex-col xl:flex-row gap-4 2xl:gap-5">
                            <a class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square" href="#">
                                <img alt="icon" src="<?= Request::root();?>/local/resources/views/assets/images/icons/google.svg"/>
                                <span class="shrink-0">
                                    Sign in with Google
                                </span>
                            </a>
                            <a class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto dk-theme-card-square" href="#">
                                <img alt="icon" class="dark:brightness-[3]" src="<?= Request::root();?>/local/resources/views/assets/images/icons/discord.png" style="height: 24px"/>
                                <span class="shrink-0">
                                    Continue with Discord
                                </span>
                            </a>
                        </div>
                        <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                            Don’t have an account yet?
                            <a class="text-primary-500 font-semibold" href="<?= Request::root();?>/signUp">
                                Sign Up
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-span-full lg:col-span-6">
                    <div class="flex flex-col items-center justify-center gap-10 text-center">
                        <div class="hidden sm:block">
                        </div>
                        <div class="d-none">
                            <img src="https://img.freepik.com/free-vector/red-car-with-big-eyes-carton-character-isolated_1308-46902.jpg">
                            <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                                Welcome back!
                            </h3>
                            <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                                Whether you're launching a stunning online store  optimizing your our object-oriented
                            </p>
                        </div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js">
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