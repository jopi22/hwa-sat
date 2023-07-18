<div class="collapse navbar-collapse scrollbar" id="navbarStandard">
    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Master Data</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <p class="dropdown-item  text-800 mb-0 fw-bold">Equipment</p>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('hm.p') }}">Hours Meter</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('hm.p.od') }}">Operator & Driver</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('hm.m') }}">Kelola HM
                        Manual</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('ha.l') }}">Hauling</a>
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
    </ul>
</div>
