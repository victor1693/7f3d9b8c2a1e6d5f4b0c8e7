<style>
    .nav-item svg{

    }
    .nav-item{
        border-radius: 25px; 
        padding: 5px 0px;
    }
    .nav-item:hover{
        background-color: rgb(121 93 237); 
    }
    .nav-link-icon{
        color: white !important;
    }
</style>
<aside class="navbar navbar-vertical navbar-expand-lg navbar-dark" style="margin: 15px;border-radius: 25px;padding: 20px;font-size: 14px;">
    <div class="container-fluid">
        <button class="navbar-toggler" data-bs-target="#navbar-menu" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img alt="Tabler" class="navbar-brand-image" height="32" src="<?= Request::root();?>/local/resources/views/static/logo-white.svg" width="110">
                </img>
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">
            <div class="nav-item d-none d-lg-flex me-3">
                <div class="btn-list">
                    <a class="btn" href="https://github.com/tabler/tabler" rel="noreferrer" target="_blank">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                        <svg class="icon testover" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" style="color: white;" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" stroke="none">
                            </path>
                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5">
                            </path>
                        </svg>
                        Source code
                    </a>
                    <a class="btn" href="https://github.com/sponsors/codecalm" rel="noreferrer" target="_blank">
                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                        <svg class="icon text-pink" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" stroke="none">
                            </path>
                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">
                            </path>
                        </svg>
                        Sponsor
                    </a>
                </div>
            </div>
            <div class="d-none d-lg-flex">
                <a aria-label="Enable dark mode" class="nav-link px-0 hide-theme-dark" data-bs-placement="bottom" data-bs-toggle="tooltip" href="?theme=dark">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                        </path>
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z">
                        </path>
                    </svg>
                </a>
                <a aria-label="Enable light mode" class="nav-link px-0 hide-theme-light" data-bs-placement="bottom" data-bs-toggle="tooltip" href="?theme=light">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0h24v24H0z" fill="none" stroke="none">
                        </path>
                        <circle cx="12" cy="12" r="4">
                        </circle>
                        <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7">
                        </path>
                    </svg>
                </a>
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a aria-label="Show notifications" class="nav-link px-0" data-bs-toggle="dropdown" href="#" tabindex="-1">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg class="icon" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none" stroke="none">
                            </path>
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                            </path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1">
                            </path>
                        </svg>
                        <span class="badge bg-red">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Last updates
                                </h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="status-dot status-dot-animated bg-red d-block">
                                            </span>
                                        </div>
                                        <div class="col text-truncate">
                                            <a class="text-body d-block" href="#">
                                                Example 1
                                            </a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Change deprecated html tags to text decoration classes (#29604)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a class="list-group-item-actions" href="#">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg class="icon text-muted" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                                    </path>
                                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="status-dot d-block">
                                            </span>
                                        </div>
                                        <div class="col text-truncate">
                                            <a class="text-body d-block" href="#">
                                                Example 2
                                            </a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                justify-content:between ⇒ justify-content:space-between (#29734)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a class="list-group-item-actions show" href="#">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg class="icon text-yellow" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                                    </path>
                                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="status-dot d-block">
                                            </span>
                                        </div>
                                        <div class="col text-truncate">
                                            <a class="text-body d-block" href="#">
                                                Example 3
                                            </a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Update change-version.js (#29736)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a class="list-group-item-actions" href="#">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg class="icon text-muted" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                                    </path>
                                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="status-dot status-dot-animated bg-green d-block">
                                            </span>
                                        </div>
                                        <div class="col text-truncate">
                                            <a class="text-body d-block" href="#">
                                                Example 4
                                            </a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Regenerate package-lock.json (#29730)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a class="list-group-item-actions" href="#">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg class="icon text-muted" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                                    </path>
                                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a aria-label="Open user menu" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" href="#">
                    <span class="avatar avatar-sm" style="background-image: url(<?= Request::root();?>/local/resources/views/static/avatars/000m.jpg)">
                    </span>
                    <div class="d-none d-xl-block ps-2">
                        <div>
                            Paweł Kuna
                        </div>
                        <div class="mt-1 small text-muted">
                            UI Designer
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                        Status
                    </a>
                    <a class="dropdown-item" href="#">
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        Feedback
                    </a>
                    <div class="dropdown-divider">
                    </div>
                    <a class="dropdown-item" href="./settings.html">
                        Settings
                    </a>
                    <a class="dropdown-item" href="./sign-in.html">
                        Logout
                    </a>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-home" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                </path>
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0">
                                </path>
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7">
                                </path>
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6">
                                </path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Inicio
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-message" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                </path>
                                <path d="M8 9h8">
                                </path>
                                <path d="M8 13h6">
                                </path>
                                <path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z">
                                </path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Mensajes
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-bell" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                </path>
                                <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6">
                                </path>
                                <path d="M9 17v1a3 3 0 0 0 6 0v-1">
                                </path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Notificacions
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg class="icon icon-tabler icons-tabler-outline icon-tabler-user" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none" stroke="none">
                                </path>
                                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0">
                                </path>
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                </path>
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Perfil
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>