<!DOCTYPE html>
<html class="group dark" data-sidebar-size="lg" data-theme-mode="dark" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="ie=edge" http-equiv="x-ua-compatible"/>
        <title>
            Campaigns
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
            <div class="col-span-12 bg-blue-500 text-white p-4">
                <h1 class="mb-0" style="font-size: 32px">
                    Campaigns
                </h1>
            </div>
            <div class="grid grid-cols-12 gap-4">
                <?php foreach ($campaigns as $key): ?>
                <div class="col-span-3 bg-blue-500 text-white p-4">
                    <div class="bg-white dark:bg-dark-card rounded-15 overflow-hidden dk-theme-card-square">
                        <div class="mt-7 px-6 text-center">
                            <div class="py-0">
                                <div>
                                    <img src="<?= Request::root();?>/local/storage/app/public/campaigns_imgs/<?= $key['img'];?>" style="width: 100px;height: 100px;border-radius: 50%;margin: 0 auto;border: 4px solid rgba(255,255,255,0.1);margin-bottom: 15px;"/>
                                </div>
                                <div class="flex-center">
                                    <h4 class="text-[22px] leading-none text-heading font-semibold relative">
                                       <?= $key['campaign'];?>
                                    </h4>
                                </div>
                                <p class="font-spline_sans leading-[1.62] text-heading dark:text-dark-text " style="font-size: 14px;margin-top: 5px;">
                                    <?= $key['description'];?>
                                </p>
                            </div>
                            <div class="py-5 border-t border-gray-200 dark:border-dark-border text-left mt-5">
                                <div class="flex-center-between">
                                    <h6 class="text-gray-500 dark:text-dark-text leading-none font-semibold">
                                        Guidelines
                                    </h6>
                                </div>
                                <ul class="flex flex-col gap-y-3 *:flex *:items-center *:gap-x-2.5 *:leading-none *:text-gray-500 dark:*:text-dark-text *:font-medium mt-4" style="font-size: 15px;">
                                    <li>
                                        💰
                                        <a class="hover:text-heading dark:hover:text-dark-text-two" href="javascript:void(0)">
                                            <strong> 
                                                Pay Per Post:
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="padding-left: 27px;margin-top: -7px;">
                                        <a class="hover:text-heading dark:hover:text-dark-text-two" href="javascript:void(0)"> 
                                            <?= $key['pay_per_post'];?>
                                            
                                        </a>
                                    </li>
                                    <li>
                                        👀
                                        <a class="hover:text-heading dark:hover:text-dark-text-two" href="javascript:void(0)">
                                            <strong>
                                                View cap:
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="padding-left: 27px;margin-top: -7px;">
                                        <a class="hover:text-heading dark:hover:text-dark-text-two" href="javascript:void(0)">
                                           <?= $key['view_cap'];?>
                                        </a>
                                    </li>
                                    <li>
                                        💲
                                        <a class="hover:text-heading dark:hover:text-dark-text-two" href="javascript:void(0)">
                                            <strong>
                                                Our rate is:
                                            </strong>
                                        </a>
                                    </li>
                                    <li style="padding-left: 27px;margin-top: -7px;">
                                        <a class="hover:text-heading dark:hover:text-dark-text-two" href="javascript:void(0)">
                                            <?= $key['our_rate'];?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn b-solid btn-primary-solid dk-theme-card-square mb-5" href="<?= Request::root();?>/campaign/<?= $key['id'];?>" style="width: 100%">
                                Join Campaign
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>  
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