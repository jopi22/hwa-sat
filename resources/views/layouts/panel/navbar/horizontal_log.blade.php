<div class="collapse navbar-collapse scrollbar" id="navbarStandard">
    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">

        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Logistik</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('barang') }}">Data Barang</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('pemakaian.barang') }}">Pemakaian</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('pemesanan.barang') }}">Pemesanan</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('so.periode') }}">Stock Opname</a>
                </div>
            </div>
        </li>
    </ul>
</div>
