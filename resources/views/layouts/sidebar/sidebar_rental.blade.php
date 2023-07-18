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

<!--HM-->
<a class="nav-link dropdown-indicator" href="#e-00" role="button" data-bs-toggle="collapse" aria-expanded="false"
    aria-controls="e-learning">
    <div class="d-flex align-items-center">
        <span class="nav-link-icon"><span class="fas fa-chart-line"></span></span>
        <span class="nav-link-text ps-1">Performance</span>
    </div>
</a>
<ul class="nav collapse" id="e-00">
    <li class="nav-item"><a class="nav-link" href="{{ route('hm.p') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Hours Meter</span></div>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('hm.p.u') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Unit</span></div>
        </a>
    </li>
    {{-- <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Control OD</span></div>
            </a>
        </li> --}}
    <li class="nav-item"><a class="nav-link" href="{{ route('hm.p.od') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    OD</span></div>
        </a>
    </li>
</ul>

<li class="nav-item">
    <a class="nav-link" href="{{ route('hm.e') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-stopwatch"></span></span>
            <span class="nav-link-text ps-1">Kelola HM</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('hm.m') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-clock"></span></span>
            <span class="nav-link-text ps-1">HM Manual</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('ha.l') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-truck-loading"></span></span>
            <span class="nav-link-text ps-1">Hauling</span>
        </div>
    </a>
</li>

<!--Mekanik-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('ot.l') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tools"></span></span>
            <span class="nav-link-text ps-1">Helper</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('ot.k') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-cog"></span></span>
            <span class="nav-link-text ps-1">Overtime</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('bd.l') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span>
            <span class="nav-link-text ps-1">Breakdown</span>
        </div>
    </a>
</li>

<!--DIVISION DATA-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
        <div class="col-auto navbar-vertical-label"><span class="text-success">Division
                Data</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-success" />
        </div>
    </div>
</li>

<!--Divisi-->
<a class="nav-link dropdown-indicator" href="#ee-00" role="button" data-bs-toggle="collapse" aria-expanded="false"
    aria-controls="e-learning">
    <div class="d-flex align-items-center">
        <span class="nav-link-icon"><span class="fas fa-truck-monster"></span></span>
        <span class="nav-link-text ps-1">Equipment</span>
    </div>
</a>
<ul class="nav collapse" id="ee-00">
    <li class="nav-item"><a class="nav-link" href="{{ route('heavy.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Heavy</span></div>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Vehicle</span></div>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('support.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Support</span></div>
        </a>
    </li>
</ul>

<a class="nav-link dropdown-indicator" href="#eee-00" role="button" data-bs-toggle="collapse"
    aria-expanded="false" aria-controls="e-learning">
    <div class="d-flex align-items-center">
        <span class="nav-link-icon"><span class="fas fa-cogs"></span></span>
        <span class="nav-link-text ps-1">Relasi Data</span>
    </div>
</a>
<ul class="nav collapse" id="eee-00">
    <li class="nav-item"><a class="nav-link" href="{{ route('aktivitas.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Jenis Aktivitas</span></div>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('category.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Category</span></div>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('location.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Location</span></div>
        </a>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('dedicated.l') }}">
            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                    Dedicated</span></div>
        </a>
    </li>
</ul>
