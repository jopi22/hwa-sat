<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>

    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('dash') }}">
            <div class="d-flex align-middle py-3">
                <img class="me-2" src="{{ asset('assets/img/logos/hubstaff.png') }}" alt="" width="35"
                    height="35" />
                <span class="font-sans-serif">HWA SAP</span>
            </div>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">



                <li class="nav-item mt-2">
                    <div class="col-auto navbar-vertical-label">Rekapitulasi</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                    <a class="nav-link dropdown-indicator" href="#qq-learning" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-building"></span></span><span class="nav-link-text ps-1">
                                Rekapitulasi </span></div>
                    </a>
                    <ul class="nav collapse" id="qq-learning">

                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validasi</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buat Laporan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item mt-2">
                    <div class="col-auto navbar-vertical-label">Data Perusahaan</div>
                    <div class="col ps-0">
                        <hr class="mb-0 navbar-vertical-divider" />
                    </div>

                <li class="nav-item">

                    <a class="nav-link dropdown-indicator" href="#e-learning" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">
                                Karyawan</span></div>
                    </a>
                    <ul class="nav collapse" id="e-learning">

                        <li class="nav-item"><a class="nav-link" href="{{ route('kar.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                        Karyawan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('akun.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Akun
                                        Karyawan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('jab.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jabatan</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('bank.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bank</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>
                <a class="nav-link dropdown-indicator" href="#e-m" role="button" data-bs-toggle="collapse"
                    aria-expanded="false" aria-controls="e-learning">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fab fa-pagelines"></span></span><span
                            class="nav-link-text ps-1">Aktivitas</span></div>
                </a>
                <ul class="nav collapse" id="e-m">
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/student-overview.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Surat
                                    Peringatan</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Permohonan
                                    Resign</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mutasi</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dokumen</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Galeri</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Catatan</span>
                            </div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kunjungan
                                    Tamu</span></div>
                        </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="app/e-learning/trainer-profile.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kunjungan
                                    Keluar</span></div>
                        </a><!-- more inner pages-->
                    </li>
                </ul>
                </li>

                <li class="nav-item">

                    <a class="nav-link dropdown-indicator" href="#sdads-ss" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-building"></span></span><span class="nav-link-text ps-1">
                                Arsip </span></div>
                    </a>
                    <ul class="nav collapse" id="sdads-ss">

                        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil
                                        Perusahaan</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Struktur
                                        Organisai</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Peraturan
                                        Perusahaan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item">

                    <a class="nav-link dropdown-indicator" href="#sdads-sdf" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-building"></span></span><span class="nav-link-text ps-1">
                                Equipment </span></div>
                    </a>
                    <ul class="nav collapse" id="sdads-sdf">

                        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Eksavator</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vibro</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dump Truck</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item">

                    <a class="nav-link dropdown-indicator" href="#sdads-learning" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-building"></span></span><span class="nav-link-text ps-1">
                                Perusahaan </span></div>
                    </a>
                    <ul class="nav collapse" id="sdads-learning">

                        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profil
                                        Perusahaan</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.s') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Struktur
                                        Organisai</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.p') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Peraturan
                                        Perusahaan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
