<!DOCTYPE html>
<html class="group dark" data-sidebar-size="lg" data-theme-mode="dark" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <title>
            Campaign
        </title>
        <meta content="noindex, follow" name="robots"/>
        <meta content="web development agency" name="description"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <!-- Favicon -->
        <link href="<?= Request::root();?>/local/resources/views/assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <!-- Style CSS -->
        <link href="<?= Request::root();?>/local/resources/views/assets/css/output.css" rel="stylesheet"/>
    </head>
    <body class="bg-body-light dark:bg-dark-body">
        <div class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]" id="loader">
            <img alt="loader" src="<?= Request::root();?>/local/resources/views/assets/pre-loader/bar-loader.gif">
            </img>
        </div>
        <!-- Start Main Content -->
        <div class="main-content m-4">
            <div class="col-span-12 bg-blue-500 text-white p-4 pt-0">
                <h1 class="mb-0" style="font-size: 32px">
                    Campaign: <?= $campaign[0]['campaign']?>
                </h1>
            </div>
            
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-full 2xl:col-span-8 bg-blue-500 text-white p-4 pb-0 pt-0">
                    <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                        <div class="px-6 pr-5 py-7 dk-border-one rounded-15 sm:rounded-25 items-center shrink-0 xl:min-w-[370px] dk-theme-card-square">
                            <div class="shrink-0">
                                <h6 class="card-title">
                                    Campaign Guidelines
                                </h6>
                                <ul class="list-inside list-disc leading-[1.3] *:marker:text-primary-500 text-xs text-gray-500 dark:text-dark-text mt-4" style="font-size: 15px;line-height: 25px">
                                    <li>
                                        <strong>
                                            IMPORTANT UPDATE:
                                        </strong>
                                        All videos uploaded after Feb 19 need to be submitted in the "Content Rewards" tab within 30 minutes of the clip being posted to claim a payout. All videos posted before Feb 19th submit here for a payout.
                                    </li>
                                    <li>
                                        <strong>
                                            Feb 20th
                                        </strong>
                                        is the last day to claim a payout through bounties.
                                    </li>
                                    <li>
                                        Any clip submitted after Feb 20th won't be eligible for a payout.
                                    </li>
                                    <li>
                                        Upload a video featuring any song from
                                        <strong>
                                            $$$4U
                                        </strong>
                                        and earn
                                        <strong>
                                            $0.10 per 1K views
                                        </strong>
                                    </li>
                                    <li>
                                        Videos must be minimum 10 seconds long.
                                    </li>
                                    <li>
                                        Videos must feature a song from the album.
                                    </li>
                                    <li>
                                        Video's audience location must be (US, UK, CA, AUS, NZ).
                                    </li>
                                    <li>
                                        Connect your social account in Whop to verify account ownership:
                                        <a href="https://whop.com/@me/settings/connected-accounts/" target="_blank">
                                            Verify Account
                                        </a>
                                    </li>
                                    <li>
                                        <strong>
                                            Examples of content you can post:
                                        </strong>
                                    </li>
                                    <li>
                                        Dancing
                                    </li>
                                    <li>
                                        Memes
                                    </li>
                                    <li>
                                        Reactions
                                    </li>
                                    <li>
                                        <strong>
                                            $0.10 per 1K views
                                        </strong>
                                    </li>
                                    <li>
                                        <strong>
                                            Minimum views per video requirement:
                                        </strong>
                                        2K views
                                    </li>
                                    <li>
                                        <strong>
                                            View cap:
                                        </strong>
                                        4M (max $400 payout per vid)
                                    </li>
                                    <li>
                                        We retain the right to deny any clips we deem as unfit.
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-auto hidden sm:block">
                            </div>
                        </div>
                    </div>

                   

                        <div class="col-span-12 bg-blue-500 text-white p-4 pb-0">
                            <h1 class="mb-0" style="font-size: 32px">
                                Submit Video
                            </h1>
                            <div class="flex items-center gap-2 mb-5">
                                <input checked="" class="check check-primary-solid rounded-full" id="check-rs-1" name="type" type="radio"/>
                                <label class="leading-none font-medium text-gray-500 dark:text-dark-text" for="check-rs-1">
                                    @account
                                </label>
                                <input class="check check-primary-solid rounded-full" id="check-rs-2" name="type" type="radio"/>
                                <label class="leading-none font-medium text-gray-500 dark:text-dark-text" for="check-rs-2">
                                    @account
                                </label>
                            </div>
                            <div class="mb-2.5">
                                <label class="form-label" for="email" style="font-weight: 600;">
                                    Link
                                </label>
                                <input class="form-input px-4 py-3.5 rounded-lg" id="video" placeholder="https://www.tiktok.com/@pamelagamez._/video/7223131768646388997" required="" type="email">
                                </input>
                            </div>
                            <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square mt-3" type="submit">
                                Track Video to Earn
                            </button>
                        </div>

                  
                    <div class="mt-5 bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                        <div class="px-6 pr-5 py-7 dk-border-one rounded-15 sm:rounded-25 items-center shrink-0 xl:min-w-[370px] dk-theme-card-square">
                            <div class="shrink-0">
                                <h6 class="card-title">
                                    User performance in the campaign
                                </h6>
                            </div>
                            <div class="ml-auto hidden sm:block">
                                <ul class="list-inside list-disc leading-[1.3] *:marker:text-primary-500 text-xs text-gray-500 dark:text-dark-text mt-4" style="font-size: 15px;line-height: 25px">
                                    <li>
                                        <strong>
                                            Money Gained:
                                        </strong>
                                        $841,00
                                    </li>
                                    <li>
                                        <strong>
                                            Views generates:
                                        </strong>
                                        107.489
                                    </li>
                                </ul>
                            </div>
                            <div class="shrink-0 mt-5">
                                <h6 class="card-title">
                                    Performancce Of User Posted Videos
                                </h6>
                            </div>
                            <ul class="list-inside list-disc leading-[1.3] *:marker:text-primary-500 text-xs text-gray-500 dark:text-dark-text mt-4" style="font-size: 15px;line-height: 25px">
                                <li>
                                    <strong>
                                        Video 1:
                                    </strong>
                                    <ul style="padding-left: 22px;">
                                        <li>
                                            100.000 Views
                                        </li>
                                        <li>
                                            1.000 Earned
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <strong>
                                        Video 2:
                                    </strong>
                                    <ul style="padding-left: 22px;">
                                        <li>
                                            100.000 Views
                                        </li>
                                        <li>
                                            1.000 Earned
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-5 bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                        <div class="px-6 pr-5 py-7 dk-border-one rounded-15 sm:rounded-25 items-center shrink-0 xl:min-w-[370px] dk-theme-card-square">
                            <div class="shrink-0">
                                <h6 class="card-title">
                                    Examples videos
                                </h6>
                            </div>
                            <div class="grid grid-cols-12 gap-4 pt-5">
                                <div class="col-span-full 2xl:col-span-3 bg-blue-500 text-white pt-0" style="position: relative;">
                                    <img src="https://p16-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/61ea430998c14660b636916a7fffe8dd_1681766425?lk3s=81f88b70&x-expires=1741323600&x-signature=ULG7%2B0y7omotFIXCQznqdg94H7M%3D&shp=81f88b70&shcp=-" style="width: 100%;border-radius: 15px;">
                                    </img>
                                    <div style=" background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));position: absolute;bottom: 0px;width: 100%;height: 180px;border-radius: 10px;padding: 20px;">
                                        <p style="margin-bottom: 15px;">
                                            <strong>
                                                @alexvlogs
                                            </strong>
                                        </p>
                                        <div style="font-weight: 300 !important;">
                                            <p>
                                                <strong>
                                                    ▶️ 1,254,478 Views
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    ❤️ 25,478 Likes
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    💬 4,789 Coments
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    📊 7.48% Eng. Rate
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-full 2xl:col-span-3 bg-blue-500 text-white pt-0" style="position: relative;">
                                    <img src="https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/okIIokzAErZQZlhoBgECStiFIcCABofwilCsKH~tplv-photomode-zoomcover:480:480.avif?lk3s=81f88b70&x-expires=1741323600&x-signature=YBJ7vBTbvkWSkG%2Fhbp81930%2Fae0%3D&shp=81f88b70&shcp=-" style="width: 100%;border-radius: 15px;">
                                    </img>
                                    <div style=" background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));position: absolute;bottom: 0px;width: 100%;height: 180px;border-radius: 10px;padding: 20px;">
                                        <p style="margin-bottom: 15px;">
                                            <strong>
                                                @alexvlogs
                                            </strong>
                                        </p>
                                        <div style="font-weight: 300 !important;">
                                            <p>
                                                <strong>
                                                    ▶️ 1,254,478 Views
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    ❤️ 25,478 Likes
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    💬 4,789 Coments
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    📊 7.48% Eng. Rate
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-full 2xl:col-span-3 bg-blue-500 text-white pt-0" style="position: relative;">
                                    <img src="https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/oIQjg0AeiYtrnfMgCg8wXwASNwhbSbftC0jPmI~tplv-photomode-zoomcover:480:480.avif?lk3s=81f88b70&x-expires=1741323600&x-signature=%2B2fy9j%2F57c6%2FaPwLSJS1kyk8YFs%3D&shp=81f88b70&shcp=-" style="width: 100%;border-radius: 15px;">
                                    </img>
                                    <div style=" background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));position: absolute;bottom: 0px;width: 100%;height: 180px;border-radius: 10px;padding: 20px;">
                                        <p style="margin-bottom: 15px;">
                                            <strong>
                                                @alexvlogs
                                            </strong>
                                        </p>
                                        <div style="font-weight: 300 !important;">
                                            <p>
                                                <strong>
                                                    ▶️ 1,254,478 Views
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    ❤️ 25,478 Likes
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    💬 4,789 Coments
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    📊 7.48% Eng. Rate
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-full 2xl:col-span-3 bg-blue-500 text-white pt-0" style="position: relative;">
                                    <img src="https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/oIUCKrGfLNkDIMjxMjW0ACIIKV2IQSDegPzeqI~tplv-photomode-zoomcover:480:480.avif?lk3s=81f88b70&x-expires=1741323600&x-signature=GJAMXqmA4DgADvEuIwQyknTAaLU%3D&shp=81f88b70&shcp=-" style="width: 100%;border-radius: 15px;">
                                    </img>
                                    <div style=" background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));position: absolute;bottom: 0px;width: 100%;height: 180px;border-radius: 10px;padding: 20px;">
                                        <p style="margin-bottom: 15px;">
                                            <strong>
                                                @alexvlogs
                                            </strong>
                                        </p>
                                        <div style="font-weight: 300 !important;">
                                            <p>
                                                <strong>
                                                    ▶️ 1,254,478 Views
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    ❤️ 25,478 Likes
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    💬 4,789 Coments
                                                </strong>
                                            </p>
                                            <p>
                                                <strong>
                                                    📊 7.48% Eng. Rate
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn b-solid btn-primary-solid w-full dk-theme-card-square mt-3" type="submit">
                                View More
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-span-full 2xl:col-span-4 bg-blue-500 text-white p-4 pt-0">
                    <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                        <div class="px-6 pr-5 py-7 dk-border-one rounded-15 sm:rounded-25 items-center gap-2 shrink-0 xl:min-w-[370px] dk-theme-card-square">
                            <div class="shrink-0">
                                <h6 class="card-title">
                                    Leaderboard
                                </h6>
                                <ul class="list-inside list-disc leading-[1.3] *:marker:text-primary-500 text-xs text-gray-500 dark:text-dark-text mt-4" style="font-size: 15px;line-height: 25px">
                                    <li>
                                        <strong>
                                            @alexvlogs
                                        </strong>
                                        :
                                        <strong>
                                            $685
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @morganvlogs
                                        </strong>
                                        :
                                        <strong>
                                            $691
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @taylor_pro
                                        </strong>
                                        :
                                        <strong>
                                            $323
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @sam_xo
                                        </strong>
                                        :
                                        <strong>
                                            $638
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @jordanvlogs
                                        </strong>
                                        :
                                        <strong>
                                            $764
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @logan_pro
                                        </strong>
                                        :
                                        <strong>
                                            $910
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @jamie_media
                                        </strong>
                                        :
                                        <strong>
                                            $236
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @sam_official
                                        </strong>
                                        :
                                        <strong>
                                            $842
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @morgandaily
                                        </strong>
                                        :
                                        <strong>
                                            $912
                                        </strong>
                                        Earned
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-auto hidden sm:block">
                            </div>
                        </div>
                    </div>
                    <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square mt-5">
                        <div class="px-6 pr-5 py-7 dk-border-one rounded-15 sm:rounded-25 flex items-center gap-2 shrink-0 xl:min-w-[370px] dk-theme-card-square">
                            <div class="shrink-0">
                                <h6 class="card-title">
                                    Top Videos
                                </h6>
                                <ul class="list-inside list-disc leading-[1.3] *:marker:text-primary-500 text-xs text-gray-500 dark:text-dark-text mt-4" style="font-size: 15px;line-height: 25px">
                                    <li>
                                        <strong>
                                            @alexvlogs
                                        </strong>
                                        :
                                        <strong>
                                            $685
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @morganvlogs
                                        </strong>
                                        :
                                        <strong>
                                            $691
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @taylor_pro
                                        </strong>
                                        :
                                        <strong>
                                            $323
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @sam_xo
                                        </strong>
                                        :
                                        <strong>
                                            $638
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @jordanvlogs
                                        </strong>
                                        :
                                        <strong>
                                            $764
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @logan_pro
                                        </strong>
                                        :
                                        <strong>
                                            $910
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @jamie_media
                                        </strong>
                                        :
                                        <strong>
                                            $236
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @sam_official
                                        </strong>
                                        :
                                        <strong>
                                            $842
                                        </strong>
                                        Earned
                                    </li>
                                    <li>
                                        <strong>
                                            @morgandaily
                                        </strong>
                                        :
                                        <strong>
                                            $912
                                        </strong>
                                        Earned
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-auto hidden sm:block">
                            </div>
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
    </body>
</html>