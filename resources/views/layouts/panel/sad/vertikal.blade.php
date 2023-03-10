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
                <span class="font-sans-serif">HWA SAT</span>
            </div>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">

                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mb-2">
                        <div class="col-auto navbar-vertical-label">Master Present</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                </li>


                <!--Absensi-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#e-q" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-calendar-check"></span></span><span
                                class="nav-link-text ps-1">Absensi</span></div>
                    </a>
                    <ul class="nav collapse" id="e-q">
                        <li class="nav-item"><a class="nav-link" href="{{ route('abs.kel') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kelola
                                        Absensi</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('abs.kal') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kalender </span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('peng.abs.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pengajuan
                                    </span></div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Hours Meter-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#e-00" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-stopwatch"></span></span><span class="nav-link-text ps-1">Hours
                                Meter</span></div>
                    </a>
                    <ul class="nav collapse" id="e-00">
                        <li class="nav-item"><a class="nav-link" href="{{ route('hm.p') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Hours Meter</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('hm.e') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Performa Equip</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('hm.m') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        HM Manual</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('hm.k') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Performa O/D</span></div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--Over Time-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#e-ot" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Over
                                Time</span></div>
                    </a>
                    <ul class="nav collapse" id="e-ot">
                        <li class="nav-item"><a class="nav-link" href="{{ route('ot.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Over Time</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('ot.k') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Performa
                                        Helper</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('bd.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Breakdown</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <!--Keuangan-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#e-keu" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-coins"></span></span><span
                                class="nav-link-text ps-1">Keuangan</span></div>
                    </a>
                    <ul class="nav collapse" id="e-keu">
                        <li class="nav-item"><a class="nav-link" href="{{ route('kas.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Kas Perusahaan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('g.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Income
                                        Karyawan
                                    </span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('cat.l') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Catering</span></div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!--Logistik-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#e-0s0" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-gas-pump"></span></span><span
                                class="nav-link-text ps-1">Logistik</span></div>
                    </a>
                    <ul class="nav collapse" id="e-0s0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('log.e.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Barang
                                        Keluar</span></div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Setting Master-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#master" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chess-queen"></span></span><span class="nav-link-text ps-1">Setting
                                Master</span></div>
                    </a>
                    <ul class="nav collapse" id="master">
                        <li class="nav-item"><a class="nav-link" href="{{ route('mas.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1"> Generate
                                        & Setting</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('mas.k') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manual
                                        Karyawan </span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('mas.e') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Manual
                                        Equiment
                                    </span></div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
                        <div class="col-auto navbar-vertical-label">Rekapitulasi</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                </li>

                <!-- Rekapitulasi-->
                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#qq-learning" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-building"></span></span><span class="nav-link-text ps-1">
                                Rekapitulasi </span></div>
                    </a>
                    <ul class="nav collapse" id="qq-learning">
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Validasi</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Buat
                                        Laporan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
                        <div class="col-auto navbar-vertical-label">Perusahaan Data</div>
                        <div class="col ps-0">
                            <hr class="mb-0 navbar-vertical-divider" />
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#e-learning" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">
                                SDM</span></div>
                    </a>
                    <ul class="nav collapse" id="e-learning">
                        <li class="nav-item"><a class="nav-link" href="{{ route('kar.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Karyawan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('akun.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                        Account</span></div>
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

                <li class="nav-item">
                    <a class="nav-link dropdown-indicator" href="#sdads-sdf" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-truck-monster"></span></span><span class="nav-link-text ps-1">
                                Equipment </span></div>
                    </a>
                    <ul class="nav collapse" id="sdads-sdf">
                        <li class="nav-item"><a class="nav-link" href="{{ route('heavy.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heavy
                                        Equipment</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.l') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Vehicle</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('support.l') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support
                                        Equipment</span></div>
                            </a>
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

                <li class="nav-item">

                    <a class="nav-link dropdown-indicator" href="#sdads-ss" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="e-learning">
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

            </ul>
        </div>
    </div>
</nav>
