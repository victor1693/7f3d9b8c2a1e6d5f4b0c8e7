<!DOCTYPE html>
<html class="group" data-sidebar-size="lg" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <title>
            Home
        </title>
        <meta content="noindex, follow" name="robots"/>
        <meta content="web development agency" name="description"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Favicon -->
        <link href="<?= Request::root();?>/local/resources/views/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <!-- Style CSS -->
        <link href="<?= Request::root();?>/local/resources/views/assets/css/output.css" rel="stylesheet"/>
    </head>
    <body class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-3">
        <div class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]" id="loader">
            <img alt="loader" src="<?= Request::root();?>/local/resources/views/assets/pre-loader/bar-loader.gif">
            </img>
        </div>
        <!-- Start Header -->
        <header class="header px-4 sm:px-6 h-[calc(theme('spacing.header')_-_10px)] sm:h-header bg-white dark:bg-dark-card rounded-none xl:rounded-15 flex items-center mb-4 xl:m-4 group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_32px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_32px)] group-data-[sidebar-size=sm]:group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[theme-width=box]:xl:mr-0 dk-theme-card-square z-10 ac-transition">
            <h1 style="font-size: 26px;margin-top: -5px;">
                <strong>
                    <h1>
                        Home
                    </h1>
                </strong>
            </h1>
        </header>
        <div class="app-menu flex flex-col gap-y-2.5 bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max xl:translate-x-0 rounded-r-10 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:bottom-4 z-backdrop xl:group-data-[theme-width=box]:left-auto dk-theme-card-square ac-transition" id="app-menu-drawer" tabindex="-1">
            <div class="px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:px-2 group-data-[sidebar-size=sm]:justify-center">
                <a class="group-data-[sidebar-size=lg]:block hidden" href="index.html">
                    <img alt="logo" class="group-[.dark]:hidden" src="<?= Request::root();?>/local/resources/views/assets/images/logo/logo-text.svg">
                        <img alt="logo" class="group-[.light]:hidden" src="<?= Request::root();?>/local/resources/views/assets/images/logo/logo-text-dark.svg">
                        </img>
                    </img>
                </a>
                <a class="group-data-[sidebar-size=lg]:hidden block" href="index.html">
                    <img alt="logo" src="<?= Request::root();?>/local/resources/views/assets/images/logo/logo-icon.svg">
                    </img>
                </a>
            </div>
            <div class="pl-4 group-data-[sidebar-size=sm]:pl-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar" data-scrollbar="" id="app-menu-scrollbar">
                <div class="group-data-[sidebar-size=lg]:max-h-full">
                    <ul class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible" id="navbar-nav">
                        <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                            <a class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:" href="#">
                                <svg class="icon icon-tabler icons-tabler-outline icon-tabler-home" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-top: -3px;" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                    </path>
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0">
                                    </path>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7">
                                    </path>
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6">
                                    </path>
                                </svg>
                                <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                            <a class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:" href="#">
                                <svg class="icon icon-tabler icons-tabler-outline icon-tabler-message" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-top: -3px;" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                    </path>
                                    <path d="M8 9h8">
                                    </path>
                                    <path d="M8 13h6">
                                    </path>
                                    <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                    </path>
                                </svg>
                                <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                    Messages
                                </span>
                            </a>
                        </li>
                        <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                            <a class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:" href="#">
                                <svg class="icon icon-tabler icons-tabler-outline icon-tabler-bell" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-top: -3px;" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                    </path>
                                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                    </path>
                                    <path d="M9 17v1a3 3 0 0 0 6 0v-1">
                                    </path>
                                </svg>
                                <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                    Notification
                                </span>
                            </a>
                        </li>
                        <li class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
                            <a class="relative text-gray-500 dark:text-dark-text-two font-medium leading-none px-3.5 py-3 h-[42px] flex items-center group/menu-link ac-transition group-data-[sidebar-size=sm]:bg-gray-100 dark:group-data-[sidebar-size=sm]:bg-dark-icon group-data-[sidebar-size=sm]:hover:bg-primary-500/95 group-data-[sidebar-size=sm]:[&.active]:bg-primary-500/95 hover:text-white [&.active]:text-white hover:!bg-primary-500/95 [&.active]:bg-primary-500/95 group-data-[sidebar-size=sm]:rounded-lg group-data-[sidebar-size=sm]:group-hover/sm:!rounded-br-none group-data-[sidebar-size=lg]:rounded-l-full group-data-[sidebar-size=sm]:" href="#">
                                <svg class="icon icon-tabler icons-tabler-outline icon-tabler-user" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="margin-top: -3px;" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                    </path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0">
                                    </path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                    </path>
                                </svg>
                                <span class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                                    Profile
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Logout Link -->
            <div class="mt-auto px-7 py-6 group-data-[sidebar-size=sm]:px-2">
                <a class="flex-center-between text-gray-500 dark:text-dark-text font-semibold leading-none bg-gray-200 dark:bg-[#090927] dark:group-data-[sidebar-size=sm]:bg-dark-card-shade rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square" href="<?= Request::root();?>/signOut">
                    <span class="group-data-[sidebar-size=sm]:hidden block">
                        Logout
                    </span>
                    <svg class="icon icon-tabler icons-tabler-outline icon-tabler-logout" fill="none" height="20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                        </path>
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2">
                        </path>
                        <path d="M9 12h12l-3 -3">
                        </path>
                        <path d="M18 15l3 -3">
                        </path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] group-data-[theme-width=box]:xl:px-0 px-3 ">
            <div class="main-content" style="color: white">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 text-white">
                    <div class="bg-red-300 p-4">
                        <div class="col-span-full sm:col-span-6 p-[10px_16px] dk-border-one rounded-xl h-full dk-theme-card-square">
                            <div class="flex-center-between">
                                <div>
                                    <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                        Brez Scales Clip
                                    </h6>
                                </div>
                                <div class="">
                                    <span class="badge badge-success-light rounded-full">
                                        $0.5 / Bounty
                                    </span>
                                </div>
                            </div>
                            <div class="pt-3 bg-card-pattern dark:bg-card-pattern-dark bg-no-repeat bg-100% flex gap-4 mt-3">
                                <div class="pb-3">
                                    <h6 class="leading-none text-gray-500 dark:text-white font-semibold">
                                        Dean Graziosi Clipping - $4 per 1K Views
                                    </h6>
                                    <h6 class="leading-none dark:text-white" style="margin-top: 15px;line-height: 20px;color: rgba(255,255,255,0.5);">
                                        Repurpose or create Jacob Levinrad content and get paid based on the views you generate! Earn $1 per 1,000 views on your short form content with our Vier Rewards Payouts.
                                    </h6>
                                </div>
                            </div>
                            <div style="margin-bottom: 10px; height: 0.1px;background-color: rgb(33 33 70 / var(--tw-border-opacity));">
                            </div>
                            <div class="grid grid-cols-2">
                                <div>
                                    <a class="badge badge-info-light rounded-full" href="#">
                                        Make Money
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-blue-300 p-4">
                        Div 2
                    </div>
                    <div class="bg-green-300 p-4">
                        Div 3
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor/jquery.min.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor/apexcharts.min.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor/flowbite.min.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/pages/dashboard-lms.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/component/app-menu-bar.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/component/tab.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/switcher.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/layout.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/main.js">
        </script>
    </body>
</html>