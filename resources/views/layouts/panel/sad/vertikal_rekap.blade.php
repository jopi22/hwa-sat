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




                @if (Auth::user()->level == 1)
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
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kalender
                                        </span>
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
                        <a class="nav-link dropdown-indicator" href="#e-keu" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
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
                        <a class="nav-link dropdown-indicator" href="#e-0s0" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
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
                    {{-- <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#master" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-chess-queen"></span></span><span
                                    class="nav-link-text ps-1">Setting
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
                    </li> --}}

                    <li class="nav-item">
                        <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
                            <div class="col-auto navbar-vertical-label">Validasi</div>
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
                                        class="fas fa-clipboard-check"></span></span><span class="nav-link-text ps-1">
                                    Validasi </span></div>
                        </a>
                        <ul class="nav collapse" id="qq-learning">
                            <li class="nav-item"><a class="nav-link" href="{{ route('rek.g') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Validasi</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            {{-- <li class="nav-item"><a class="nav-link" href="{{ route('print.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Print
                                        Laporan</span></div>
                            </a><!-- more inner pages-->
                        </li> --}}
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
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Jabatan</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Bank</span>
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
                                class="nav-link-text ps-1">Aktivitas</span>
                        </div>
                    </a>
                    <ul class="nav collapse" id="e-m">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('sp.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Surat
                                        Peringatan</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('res.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Permohonan
                                        Resign</span></div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('mit.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mitra
                                        Perusahaan</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('eve.g') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event</span>
                                </div>
                            </a><!-- more inner pages-->
                        </li>
                    </ul>

                    <li class="nav-item">
                        <a class="nav-link dropdown-indicator" href="#sdads-ss" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-file-archive"></span></span><span class="nav-link-text ps-1">
                                    Arsip </span></div>
                        </a>
                        <ul class="nav collapse" id="sdads-ss">
                            <li class="nav-item"><a class="nav-link" href="{{ route('amast.g') }}">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1"> Master
                                            Data</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('dok.g') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Dokumen</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('gal.g') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Galeri</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('catat.g') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Catatan</span>
                                    </div>
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
                @else
                    @if (Auth::user()->level == 2)
                        <li class="nav-item">
                            <div class="row navbar-vertical-label-wrapper mb-2">
                                <div class="col-auto navbar-vertical-label"><span class="text-primary">Master
                                        Present</span></div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider text-primary" />
                                </div>
                            </div>
                        </li>

                        <!-- Rekapitulasi-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dash') }}">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-calendar-alt">
                                        </span>
                                    </span>
                                    <span class="nav-link-text ps-1">
                                        {{date('F Y')}}
                                    </span>
                                </div>
                            </a>
                        </li>


                        <li class="nav-item">
                            <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
                                <div class="col-auto navbar-vertical-label"><span class="text-primary">Rekapitulasi
                                        Data</span></div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider text-primary" />
                                </div>
                            </div>
                        </li>



                        <!--Absensi-->
                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#e-q" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-calendar-check"></span></span><span
                                        class="nav-link-text ps-1">Absensi</span></div>
                            </a>
                            <ul class="nav collapse" id="e-q">
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.abs.kel') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kelola
                                                Absensi</span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.abs.kal') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Kalender </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.peng.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Pengajuan
                                            </span></div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Hours Meter-->
                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#e-00" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-stopwatch"></span></span><span
                                        class="nav-link-text ps-1">Hours Meter</span></div>
                            </a>
                            <ul class="nav collapse" id="e-00">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Performance</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="course">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.hm.p') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">
                                                        Hours Meter</span></div>
                                            </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.hm.e') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Unit</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.hm.k') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">OD</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('hm.create') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Kelola HM</span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.hm.m') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                HM Manual</span></div>
                                    </a>
                                </li>
                                {{-- <li class="nav-item"><a class="nav-link" href="#">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Control OD</span></div>
                                    </a>
                                </li> --}}
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.ha.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Hauling</span></div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Mekanik-->
                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#e-ot" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-wrench"></span></span><span
                                        class="nav-link-text ps-1">Mechanic</span></div>
                            </a>
                            <ul class="nav collapse" id="e-ot">
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.ot.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Helper</span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.ot.k') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Overtime</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.bd.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Breakdown</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>

                        <!--Keuangan-->
                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#e-keu" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-coins"></span></span><span
                                        class="nav-link-text ps-1">Finance</span></div>
                            </a>
                            <ul class="nav collapse" id="e-keu">
                                <li class="nav-item"><a class="nav-link" href="{{ route('r.kas.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Kas Perusahaan</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Karyawan</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="course">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.g.l') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Penghasilan
                                                    </span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.adjust') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Adjustmen</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#ASU"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rekap
                                                Sewa</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="ASU">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.hm.sewa') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Hours Meter
                                                    </span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('r.unit.sewa') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Unit</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{ route('r.cat.l') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Catering</span></div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Setting Master-->
                        {{-- <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#master" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-chess-queen"></span></span><span
                                        class="nav-link-text ps-1">Setting
                                        Master</span></div>
                            </a>
                            <ul class="nav collapse" id="master">
                                <li class="nav-item"><a class="nav-link" href="{{ route('mas.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Generate
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
                        </li> --}}


                        <li class="nav-item">
                            <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
                                <div class="col-auto navbar-vertical-label"><span class="text-primary">Division
                                        Data</span></div>
                                <div class="col ps-0">
                                    <hr class="mb-0 navbar-vertical-divider text-primary" />
                                </div>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#e-learning" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">
                                        HRGA</span></div>
                            </a>
                            <ul class="nav collapse" id="e-learning">
                                <li class="nav-item"><a class="nav-link" href="{{ route('kar.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Karyawan</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('akun.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Kelola Akun</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('jab.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Jabatan</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('sp.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Surat
                                                Peringatan</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('res.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                                Resign</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('mut.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Mutasi</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('kim.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">KIMPER</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#sdads-sdf" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-truck-monster"></span></span><span
                                        class="nav-link-text ps-1">
                                        Rental </span>
                                </div>
                            </a>
                            <ul class="nav collapse" id="sdads-sdf">
                                <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Equipment</span></div>
                                    </a><!-- more inner pages-->
                                    <ul class="nav collapse" id="course">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('heavy.l') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Heavy</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.l') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Vehicle</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('support.l') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Support</span></div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('aktivitas.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jenis
                                                Aktivitas
                                            </span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('location.l') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Location
                                            </span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('category.l') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Category
                                            </span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('dedicated.l') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Dedicated
                                            </span></div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--Logistik-->
                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#e-0s0" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-gas-pump"></span></span><span
                                        class="nav-link-text ps-1">Logistik</span></div>
                            </a>
                            {{-- <ul class="nav collapse" id="e-0s0">
                                <li class="nav-item"><a class="nav-link" href="{{ route('log.e.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Barang
                                                Keluar</span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('log.m') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Barang
                                                Masuk</span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('ond.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stok
                                                Onderdil
                                            </span></div>
                                    </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('liq.l') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stok
                                                Liquid
                                            </span></div>
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                        <a class="nav-link dropdown-indicator" href="#e-m" role="button"
                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fab fa-pagelines"></span></span><span
                                    class="nav-link-text ps-1">Aktivitas</span>
                            </div>
                        </a>
                        <ul class="nav collapse" id="e-m">
                            <li class="nav-item"><a class="nav-link" href="#">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Bank</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('mit.g') }}">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mitra
                                            Perusahaan</span>
                                    </div>
                                </a><!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('eve.g') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Event</span></div>
                                </a><!-- more inner pages-->
                            </li>
                        </ul>

                        <li class="nav-item">
                            <a class="nav-link dropdown-indicator" href="#sdads-ss" role="button"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                            class="fas fa-file-archive"></span></span><span
                                        class="nav-link-text ps-1">
                                        Arsip </span></div>
                            </a>
                            <ul class="nav collapse" id="sdads-ss">
                                <li class="nav-item"><a class="nav-link" href="{{ route('amast.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                Master
                                                Data</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('dok.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Dokumen</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('gal.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Galeri</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('catat.g') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Catatan</span>
                                        </div>
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
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Struktur
                                                Organisai</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('hwa.p') }}">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Peraturan
                                                Perusahaan</span></div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                    @else
                        @if (Auth::user()->level == 3)
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
                                <a class="nav-link dropdown-indicator" href="#e-q" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-calendar-check"></span></span><span
                                            class="nav-link-text ps-1">Absensi</span></div>
                                </a>
                                <ul class="nav collapse" id="e-q">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('abs.kel') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Kelola
                                                    Absensi</span></div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('abs.kal') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Kalender </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('peng.abs.g') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Pengajuan
                                                </span></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Hours Meter-->
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#e-00" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-stopwatch"></span></span><span
                                            class="nav-link-text ps-1">Hours
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
                                <a class="nav-link dropdown-indicator" href="#e-ot" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-wrench"></span></span><span
                                            class="nav-link-text ps-1">Over
                                            Time</span></div>
                                </a>
                                <ul class="nav collapse" id="e-ot">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('ot.l') }}">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                    Over Time</span></div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('ot.k') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Performa
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
                                <a class="nav-link dropdown-indicator" href="#e-keu" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
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
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Income
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
                                <a class="nav-link dropdown-indicator" href="#e-0s0" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-gas-pump"></span></span><span
                                            class="nav-link-text ps-1">Logistik</span></div>
                                </a>
                                <ul class="nav collapse" id="e-0s0">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('log.e.l') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Barang
                                                    Keluar</span></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Setting Master-->
                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator" href="#master" role="button"
                                    data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                class="fas fa-chess-queen"></span></span><span
                                            class="nav-link-text ps-1">Setting
                                            Master</span></div>
                                </a>
                                <ul class="nav collapse" id="master">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('mas.g') }}">
                                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                                    Generate
                                                    & Setting</span></div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('mas.k') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Manual
                                                    Karyawan </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('mas.e') }}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Manual
                                                    Equiment
                                                </span></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @else
                            @if (Auth::user()->level == 4)
                                {{-- // --}}
                            @else
                            @endif
                        @endif
                    @endif
                @endif


            </ul>
        </div>
    </div>
</nav>
