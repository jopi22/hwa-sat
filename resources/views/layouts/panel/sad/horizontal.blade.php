<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false"
        aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="{{ route('dash') }}">
        <div class="d-flex align-items-center">
            <img class="me-2" src="{{ asset('assets/img/logos/hubstaff.png') }}" alt="" width="40" /><span
                class="font-sans-serif">HWA SAT</span>
        </div>
    </a>

    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">Master Data</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Absensi</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('abs.kel') }}">Kelola
                                            Absensi</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('abs.kal') }}">Kalender</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('peng.abs.g') }}">Pengajuan
                                            Absensi</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Performance</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.p') }}">Hours
                                            Meter</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.p.u') }}"> Unit
                                        </a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('hm.p.od') }}">Operator & Driver</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.m') }}">Kelola HM
                                            Manual</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('ha.l') }}">Hauling</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Mechanic</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('ot.l') }}">
                                            Helper</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('ot.k') }}">
                                            Overtime</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('bd.l') }}">
                                            Breakdown</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Finance</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('kas.l') }}">
                                            Kas Perusahaan</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.p.u') }}">
                                            Penghasilan Karyawan
                                        </a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('hm.p.od') }}">Catering</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Rekap Sewa Unit</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.sewa') }}">Hours
                                            Meter</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('unit.sewa') }}">Unit</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Setting Master</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.g') }}">
                                            Generate & Setting</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.k') }}">
                                            Manual Karyawan</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.e') }}">
                                            Manual Equipment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">Rekapitulasi</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                        <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                                src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                                alt="" />
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Absensi</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.abs.kel') }}">Kelola
                                            Absensi</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('r.abs.kal') }}">Kalender</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('r.peng.g') }}">Pengajuan
                                            Absensi</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Performance</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.hm.p') }}">Hours
                                            Meter</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.hm.p') }}"> Unit
                                        </a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('hm.p.od') }}">Operator & Driver</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.hm.m') }}">Kelola HM
                                            Manual</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('r.ha.l') }}">Hauling</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Mechanic</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.ot.l') }}">
                                            Helper</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.ot.k') }}">
                                            Overtime</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.bd.l') }}">
                                            Breakdown</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Finance</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.kas.l') }}">
                                            Kas Perusahaan</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.g.l') }}">
                                            Penghasilan Karyawan
                                        </a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.adjust') }}">
                                            Adjustmen
                                        </a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('hm.p.od') }}">Catering</a>
                                        <p class="nav-link text-700 mb-0 fw-bold">Rekap Sewa Unit</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.hm.sewa') }}">Hours
                                            Meter</a>
                                        <a class="nav-link py-1 link-600 fw-medium"
                                            href="{{ route('r.unit.sewa') }}">Unit</a>
                                    </div>
                                </div>
                                {{-- <div class="col-6 col-md-4">
                                    <div class="nav flex-column">
                                        <p class="nav-link text-700 mb-0 fw-bold">Setting Master</p>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.g') }}">
                                            Generate & Setting</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.k') }}">
                                            Manual Karyawan</a>
                                        <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.e') }}">
                                            Manual Equipment</a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">HRGA</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <p class="dropdown-item  text-800 mb-0 fw-bold">Karyawan</p>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('kar.g') }}">Karyawan</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('akun.g') }}">Pengguna</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('jab.g') }}">Jabatan</a>
                        <p class="dropdown-item  text-800 mb-0 fw-bold">Pelayanan</p>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('sp.g') }}">Surat Peringatan</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('mut.g') }}">Mutasi & PHK</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('kim.g') }}">KIMPER</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('res.g') }}">Resign Data</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Rental</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <p class="dropdown-item  text-800 mb-0 fw-bold">Equipment</p>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('heavy.l') }}">Heavy</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('vehicle.l') }}">Vehicle</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('support.l') }}">Support</a>
                        <p class="dropdown-item  text-800 mb-0 fw-bold">Support Data</p>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('aktivitas.l') }}">Jenis
                            Aktivitas</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('location.l') }}">Location</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('category.l') }}">Category</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('dedicated.l') }}">Dedicated</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    id="dashboards">Logistik</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('barang') }}">Data Barang</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('pemakaian.barang') }}">Pemesanan
                            Barang</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('pemesanan.barang') }}">Pemakaian
                            Barang</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('so.periode') }}">Stock Opname</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Arsip</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('amast.g') }}">Master Data</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('dok.g') }}">Dokumen</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('catat.g') }}">Catatan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">PT. HWA</a>
                <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                    aria-labelledby="dashboards">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2">
                        <p class="dropdown-item  text-800 mb-0 fw-bold">Tentang</p>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('hwa.g') }}">Profil PT. HWA</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('hwa.s') }}">Struktur
                            Organisasi</a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('hwa.p') }}">Divisi</a>
                        <p class="dropdown-item  text-800 mb-0 fw-bold">Data Lain</p>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('gal.g') }}">Galeri </a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('mit.g') }}">Mitra </a>
                        <a class="dropdown-item link-600 fw-medium" href="{{ route('eve.g') }}">Event</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item">
            <div class="theme-control-toggle fa-icon-wait px-2"><input
                    class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox"
                    data-theme-control="theme" value="dark" /><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                        class="fas fa-sun fs-0"></span></label><label
                    class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                    data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                        class="fas fa-moon fs-0"></span></label>
            </div>
        </li>

        <li class="nav-item">
            <a href="#settings-offcanvas" data-bs-toggle="offcanvas">
                <div class="theme-control-toggle fa-icon-wait px-2">
                    <div class="settings-popover"><span class="ripple"><span
                                class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                    class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20"
                                        height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                            fill="#2A7BE4"></path>
                                    </svg></span></span></span></div>
                </div>
            </a>
        </li>

        {{-- <li class="nav-item d-none d-sm-block">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                    data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                    class="notification-indicator-number">1</span></a>
        </li> --}}

        {{-- <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                    data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all
                                    as read</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs--1">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/1-thumb.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your
                                            comment : "Hello world 😍"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">💬</span>Just
                                            now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <div class="avatar-name rounded-circle"><span>AB</span>
                                            </div>
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
                                            <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1">The forecast today shows a low of 20&#8451;
                                            in California. See today's weather.</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🌤️</span>1d</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                    href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/logos/oxford.png"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong>
                                            created an event : "Causal Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">✌️</span>1w</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="assets/img/team/10.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to
                                            join the group: United Nations International Children's Fund
                                        </p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                aria-label="Emoji">🙋‍</span>2d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                            href="app/social/notifications.html">View all</a></div>
                </div>
            </div>
        </li> --}}

        <li class="nav-item dropdown px-1">
            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="43"
                    viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71">
                    </circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71">
                    </circle>
                </svg></a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                            <div class="row text-center gx-0 gy-0">

                                {{-- // Nav // --}}
                                @foreach ($nav as $item)
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="{{ asset($item->link) }}" target="_blank">
                                            <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                    src="{{ asset($item->logo) }}" alt="" />
                                            </div>
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2">{{ $item->name }}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach

                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                        href="{{ route('nav.g') }}"><i class="fas fa-cog"></i> Setting</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="dropdown-item"
                        href="{{ route('kar.i', Crypt::encryptString(Auth::user()->id)) }}">Profile</a>
                    {{-- <a class="dropdown-item" href="{{route('akun.i', Crypt::encryptString(Auth::user()->id))}}">Account</a> --}}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>

</nav>
