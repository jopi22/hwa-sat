<!--Karyawan-->
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
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span>
            <span class="nav-link-text ps-1">Karyawan</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('akun.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-cog"></span></span>
            <span class="nav-link-text ps-1">Pengguna</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('jab.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-sitemap"></span></span>
            <span class="nav-link-text ps-1">Jabatan</span>
        </div>
    </a>
</li>

<!--Pelayanan-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
        <div class="col-auto navbar-vertical-label"><span class="text-success">Pelayanan</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-success" />
        </div>
    </div>
</li>

<!--HRGA-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('sp.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-envelope-open-text"></span></span>
            <span class="nav-link-text ps-1">Surat Peringatan</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('mut.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-people-arrows"></span></span>
            <span class="nav-link-text ps-1">Mutasi & PHK</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('kim.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-award"></span></span>
            <span class="nav-link-text ps-1">KIMPER</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('res.g') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-sign-out-alt"></span></span>
            <span class="nav-link-text ps-1">Resign Data</span>
        </div>
    </a>
</li>
