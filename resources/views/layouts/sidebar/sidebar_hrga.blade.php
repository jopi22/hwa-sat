<!--MASTER DATA-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2">
        <div class="col-auto navbar-vertical-label"><span class="text-primary">Master
                Present</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-primary" />
        </div>
    </div>
</li>

<!--Absensi-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('abs.kal') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-calendar-alt"></span></span>
            <span class="nav-link-text ps-1">Kalender Absen</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('abs.kel') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-calendar-check"></span></span>
            <span class="nav-link-text ps-1">Kelola Absensi</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('peng.abs.g') }}" role="button" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-calendar-times"></span></span>
            <span class="nav-link-text ps-1">Pengajuan Absensi</span>
        </div>
    </a>
</li>

<!--DIVISION DATA-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
        <div class="col-auto navbar-vertical-label"><span class="text-success">Karyawan Data</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-success" />
        </div>
    </div>
</li>

<!--HRGA-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('kar.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-users"></span></span>
            <span class="nav-link-text ps-1">Karyawan</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('akun.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-cog"></span></span>
            <span class="nav-link-text ps-1">Pengguna</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('jab.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-sitemap"></span></span>
            <span class="nav-link-text ps-1">Jabatan</span>
        </div>
    </a>
</li>

    <ul class="nav collapse" id="e-learning">

        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#asubabi222" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pelayanan</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="asubabi222">
                <li class="nav-item"><a class="nav-link" href="{{ route('res.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                Resign</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kim.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">KIMPER</span></div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sp.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Surat
                        Peringatan</span></div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('mut.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mutasi
                        & PHK</span></div>
            </a><!-- more inner pages-->
        </li>
    </ul>

