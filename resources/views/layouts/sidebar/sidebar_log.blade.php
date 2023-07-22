<!--MASTER DATA-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2">
        <div class="col-auto navbar-vertical-label"><span class="text-primary">
                Division Data</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-primary" />
        </div>
    </div>
</li>



<li class="nav-item">
    <a class="nav-link" href="{{ route('barang') }}" role="button" aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-boxes"></span></span>
            <span class="nav-link-text ps-1">Data Barang</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('pemakaian.barang') }}" role="button" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-box-open"></span></span>
            <span class="nav-link-text ps-1">Pemakaian</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('pemesanan.barang') }}" role="button" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-dolly-flatbed"></span></span>
            <span class="nav-link-text ps-1">Pemesanan</span>
        </div>
    </a>
    <a class="nav-link" href="{{ route('so.periode') }}" role="button" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-truck-loading"></span></span>
            <span class="nav-link-text ps-1">Stock Opname</span>
        </div>
    </a>
</li>
