<div class="collapse navbar-collapse scrollbar" id="navbarStandard">
    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Master Data</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('abs.kal') }}">Kalender Absen</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('abs.kel') }}">Kelola Absensi</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('peng.abs.g') }}">Pengajuan
                        Absensi</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Karyawan</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('kar.g') }}">Karyawan</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('akun.g') }}">Pengguna</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('jab.g') }}">Jabatan</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Pelayanan</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('sp.g') }}">Surat Peringatan</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('mut.g') }}">Mutasi & PHK</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('kim.g') }}">KIMPER</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('res.g') }}">Resign Data</a>
                </div>
            </div>
        </li>
    </ul>
</div>
