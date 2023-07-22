<!DOCTYPE html>
<html lang="en-US" dir="ltr">


<!-- Mirrored from prium.github.io/falcon/v3.14.0/demo/navbar-top.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 02:08:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>@yield('judul')</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/logos/hubstaff.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/logos/hubstaff.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/logos/hubstaff.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logos/hubstaff.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    @yield('link')
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>

            <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg">
                <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                            class="toggle-line"></span></span></button>
                <a class="navbar-brand me-1 me-sm-3" data-bs-toggle="collapse" data-bs-target="#navbarStandard"
                    aria-controls="navbarStandard">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="{{ asset('assets/img/logos/hubstaff.png') }}" alt="" width="40" /><span
                            class="font-sans-serif">HWA SAT</span></div>
                </a>
                <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
                    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{ route('dash') }}">Dashboard
                            </a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Performa</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                                    <a class="dropdown-item link-600 fw-medium" href="{{ url('404') }}">Jadwal
                                    </a>
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('absensi.kar') }}">Absensi
                                    </a>
                                    @if (Auth::user()->tipe_gaji == 'AI')
                                        <a class="dropdown-item link-600 fw-medium" href="{{ url('404') }}">Kontrol
                                            Kerja
                                        </a>
                                        <a class="dropdown-item link-600 fw-medium" href="{{ route('hm.kar') }}">
                                            Hours Meter
                                        </a>
                                    @else
                                        @if (Auth::user()->tipe_gaji == 'AI')
                                            <a class="dropdown-item link-600 fw-medium"
                                                href="{{ route('dash') }}">Performa
                                                OverTime
                                            </a>
                                            <a class="dropdown-item link-600 fw-medium"
                                                href="{{ route('dash') }}">Performa
                                                Hours Meter
                                            </a>
                                        @else
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Keuangan</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('rekap.penghasilan.kar') }}">Rekap
                                        Penghasilan
                                    </a>
                                    <a class="dropdown-item link-600 fw-medium" href="{{ route('gaji.pokok') }}">Gaji
                                        Pokok
                                    </a>
                                    @if (Auth::user()->tipe_gaji == 'AI')
                                        <a class="dropdown-item link-600 fw-medium"
                                            href="{{ route('insentif') }}">Insentif
                                        </a>
                                    @else
                                        @if (Auth::user()->tipe_gaji == 'AI')
                                            <a class="dropdown-item link-600 fw-medium"
                                                href="{{ route('insentif') }}">Lemburan
                                            </a>
                                        @else
                                        @endif
                                    @endif
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('adjust_kar') }}">Adjustment
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="documentations">Pelayanan</a>
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                aria-labelledby="documentations">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('peng.absensi') }}">Pengajuan
                                        Absensi
                                    </a>
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('dash') }}">Sertifikasi Kompetensi
                                    </a>
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('peng.skk') }}">Pengajuan
                                        SKK
                                    </a>
                                    <a class="dropdown-item link-600 fw-medium"
                                        href="{{ route('peng.resign') }}">Permohonan
                                        Resign
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                    <li class="nav-item">
                        <div class="theme-control-toggle fa-icon-wait px-2"><input
                                class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                type="checkbox" data-theme-control="theme" value="dark" /><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label><label
                                class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label></div>
                    </li>
                    {{-- <li class="nav-item d-none d-sm-block">
                        <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                            href="../app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                                data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                                class="notification-indicator-number">1</span></a>
                    </li> --}}
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                            id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                            aria-labelledby="navbarDropdownNotification">
                            <div class="card card-notification shadow-none">
                                <div class="card-header">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="col-auto">
                                            <h6 class="card-header-title mb-0">Notifications</h6>
                                        </div>
                                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal"
                                                href="#">Mark all as read</a></div>
                                    </div>
                                </div>
                                <div class="scrollbar-overlay" style="max-height:19rem">
                                    <div class="list-group list-group-flush fw-normal fs--1">
                                        <div class="list-group-title border-bottom">NEW</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="../assets/img/team/1-thumb.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                                        comment : "Hello world 😍"</p>
                                                    <span class="notification-time"><span class="me-2"
                                                            role="img" aria-label="Emoji">💬</span>Just now</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush notification-unread"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <div class="avatar-name rounded-circle"><span>AB</span></div>
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>Albert Brooks</strong> reacted to
                                                        <strong>Mia Khalifa's</strong> status
                                                    </p>
                                                    <span class="notification-time"><span
                                                            class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-title border-bottom">EARLIER</div>
                                        <div class="list-group-item">
                                            <a class="notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-2xl me-3">
                                                        <img class="rounded-circle"
                                                            src="../assets/img/icons/weather-sm.jpg" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                        California. See today's weather.</p>
                                                    <span class="notification-time"><span class="me-2"
                                                            role="img" aria-label="Emoji">🌤️</span>1d</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification-unread  notification notification-flush"
                                                href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle"
                                                            src="../assets/img/logos/oxford.png" alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>University of Oxford</strong> created an
                                                        event : "Causal Inference Hilary 2019"</p>
                                                    <span class="notification-time"><span class="me-2"
                                                            role="img" aria-label="Emoji">✌️</span>1w</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="list-group-item">
                                            <a class="border-bottom-0 notification notification-flush" href="#!">
                                                <div class="notification-avatar">
                                                    <div class="avatar avatar-xl me-3">
                                                        <img class="rounded-circle" src="../assets/img/team/10.jpg"
                                                            alt="" />
                                                    </div>
                                                </div>
                                                <div class="notification-body">
                                                    <p class="mb-1"><strong>James Cameron</strong> invited to join
                                                        the group: United Nations International Children's Fund</p>
                                                    <span class="notification-time"><span class="me-2"
                                                            role="img" aria-label="Emoji">🙋‍</span>2d</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center border-top"><a class="card-link d-block"
                                        href="../app/social/notifications.html">View all</a></div>
                            </div>
                        </div>
                    </li> --}}
                    {{-- <li class="nav-item dropdown px-1">
                        <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                            data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="43" viewBox="0 0 16 16" fill="none">
                                <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                                <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                                <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                            </svg></a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                            aria-labelledby="navbarDropdownMenu">
                            <div class="card shadow-none">
                                <div class="scrollbar-overlay nine-dots-dropdown">
                                    <div class="card-body px-3">
                                        <div class="row text-center gx-0 gy-0">
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="../pages/user/profile.html" target="_blank">
                                                    <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                            src="../assets/img/team/3.jpg" alt="" /></div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="https://themewagon.com/" target="_blank"><img
                                                        class="rounded" src="../assets/img/nav-icons/themewagon.png"
                                                        alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Themewagon</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="https://mailbluster.com/" target="_blank"><img
                                                        class="rounded" src="../assets/img/nav-icons/mailbluster.png"
                                                        alt="" width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Mailbluster</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/google.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/spotify.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/steam.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/github-light.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/discord.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/xbox.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/trello.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/hp.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                                                </a></div>
                                            <div class="col-12">
                                                <hr class="my-3 mx-n3 bg-200" />
                                            </div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/linkedin.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Linkedin</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/twitter.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/facebook.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Facebook</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/instagram.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Instagram</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/pinterest.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Pinterest</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/slack.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack
                                                    </p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="#!" target="_blank"><img class="rounded"
                                                        src="../assets/img/nav-icons/deviantart.png" alt=""
                                                        width="40" height="40" />
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">
                                                        Deviantart</p>
                                                </a></div>
                                            <div class="col-4"><a
                                                    class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                                    href="../app/events/event-detail.html" target="_blank">
                                                    <div class="avatar avatar-2xl">
                                                        <div
                                                            class="avatar-name rounded-circle bg-soft-primary text-primary">
                                                            <span class="fs-2">E</span>
                                                        </div>
                                                    </div>
                                                    <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                                                </a></div>
                                            <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                                    href="#!">Show more</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                            role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="{{ asset(Auth::user()->image) }}" alt="" />
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                            aria-labelledby="navbarDropdownUser">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                        class="fas fa-crown me-1"></span><span>{{ Auth::user()->name }}</span></a>
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="{{route('akun.i', Crypt::encryptString(Auth::user()->id))}}">Account</a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>



            <div class="content">

                @yield('konten')


                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">Copyright © 2023 All Right Reserved<span
                                    class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> Designed &
                                Developed By : Ponsianus Jopi
                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.0.0</p>
                        </div>
                    </div>
                </footer>
            </div>

        </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="offcanvas offcanvas-end settings-panel border-0" id="settings-offcanvas" tabindex="-1"
        aria-labelledby="settings-offcanvas">
        <div class="offcanvas-header settings-panel-header bg-shape">
            <div class="z-index-1 py-1 light">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="text-white mb-0 me-2"><span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
                    <button class="btn btn-primary btn-sm rounded-pill mt-0 mb-0" data-theme-control="reset"
                        style="font-size:12px"> <span class="fas fa-redo-alt me-1"
                            data-fa-transform="shrink-3"></span>Reset</button>
                </div>
                <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
            </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body scrollbar-overlay px-x1 h-100" id="themeController">
            <h5 class="fs-0">Color Scheme</h5>
            <p class="fs--1">Choose the perfect color mode for your app.</p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color"
                            type="radio" value="light" data-theme-control="theme" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span
                                class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../assets/img/generic/falcon-mode-default.jpg" alt="" /></span><span
                                class="label-text">Light</span></label></div>
                    <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color"
                            type="radio" value="dark" data-theme-control="theme" /><label
                            class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span
                                class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0"
                                    src="../assets/img/generic/falcon-mode-dark.jpg" alt="" /></span><span
                                class="label-text"> Dark</span></label></div>
                </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2"
                        src="../assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">RTL Mode</h5>
                        <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1"
                            href="../documentation/customization/configuration.html">RTL Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl"
                        type="checkbox" data-theme-control="isRTL" /></div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/arrows-h.svg"
                        width="20" alt="" />
                    <div class="flex-1">
                        <h5 class="fs-0">Fluid Layout</h5>
                        <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1"
                            href="../documentation/customization/configuration.html">Fluid Documentation</a>
                    </div>
                </div>
                <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid"
                        type="checkbox" data-theme-control="isFluid" /></div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="../assets/img/icons/paragraph.svg"
                    width="20" alt="" />
                <div class="flex-1">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position</h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <p class="text-warning fs--1">You cann't update navigation position in an example page</p>
                </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="../modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See
                    Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
                <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio"
                            name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/default.png"
                                alt="" /><span class="label-text"> Transparent</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio"
                            name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/inverted.png"
                                alt="" /><span class="label-text"> Inverted</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio"
                            name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/card.png"
                                alt="" /><span class="label-text"> Card</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio"
                            name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label
                            class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img
                                class="img-fluid img-prototype" src="../assets/img/generic/vibrant.png"
                                alt="" /><span class="label-text"> Vibrant</span></label></div>
                </div>
            </div>
            <div class="text-center mt-5"><img class="mb-4" src="../assets/img/icons/spot-illustrations/47.png"
                    alt="" width="120" />
                <h5>Like What You See?</h5>
                <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a
                    class="mb-3 btn btn-primary"
                    href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/"
                    target="_blank">Purchase</a>
            </div>
        </div>
    </div><a class="card setting-toggle" href="#settings-offcanvas" data-bs-toggle="offcanvas">
        <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
            <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
                <div class="settings-popover"><span class="ripple"><span
                            class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20"
                                    height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                        fill="#2A7BE4"></path>
                                </svg></span></span></span></div>
            </div><small
                class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
        </div>
    </a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendors/draggable/draggable.bundle.legacy.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('polyfill.io/v3/polyfill.min58be.js?features=window.scroll') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    @yield('script')
</body>


<!-- Mirrored from prium.github.io/falcon/v3.14.0/demo/navbar-top.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Dec 2022 02:08:09 GMT -->

</html>
