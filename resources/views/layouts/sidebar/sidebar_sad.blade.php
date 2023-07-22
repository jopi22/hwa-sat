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
    <a class="nav-link dropdown-indicator" href="#e-q" role="button" data-bs-toggle="collapse" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-calendar-check"></span></span><span class="nav-link-text ps-1">Absensi</span></div>
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
    <a class="nav-link dropdown-indicator" href="#e-00" role="button" data-bs-toggle="collapse" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fab fa-algolia"></span></span><span class="nav-link-text ps-1">Hours
                Meter</span></div>
    </a>
    <ul class="nav collapse" id="e-00">
        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Performance</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="course">
                <li class="nav-item"><a class="nav-link" href="{{ route('hm.p') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                Hours Meter</span></div>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('hm.p.u') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Unit</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('hm.p.od') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">OD</span></div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('hm.e') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Kelola HM</span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('hm.m') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        HM Manual</span></div>
            </a>
        </li>
        {{-- <li class="nav-item"><a class="nav-link" href="#">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Control OD</span></div>
            </a>
        </li> --}}
        <li class="nav-item"><a class="nav-link" href="{{ route('ha.l') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Hauling</span></div>
            </a>
        </li>
    </ul>
</li>

<!--Mekanik-->
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#e-ot" role="button" data-bs-toggle="collapse" aria-expanded="false"
        aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-tools"></span></span><span class="nav-link-text ps-1">Mechanic</span></div>
    </a>
    <ul class="nav collapse" id="e-ot">
        <li class="nav-item"><a class="nav-link" href="{{ route('ot.l') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Helper</span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('ot.k') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overtime</span>
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
                    class="fas fa-coins"></span></span><span class="nav-link-text ps-1">Finance</span></div>
    </a>
    <ul class="nav collapse" id="e-keu">
        <li class="nav-item"><a class="nav-link" href="{{ route('kas.l') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Kas Perusahaan</span></div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Karyawan</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="course">
                <li class="nav-item"><a class="nav-link" href="{{ route('g.l') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Penghasilan
                            </span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('adjust') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Adjustmen</span></div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#ASU" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rekap
                        Sewa</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="ASU">
                <li class="nav-item"><a class="nav-link" href="{{ route('hm.sewa') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hours Meter
                            </span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('unit.sewa') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Unit</span></div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{ route('cat.l') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Catering</span></div>
            </a>
        </li>
    </ul>
</li>

<!-- Setting Master-->
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#master" role="button" data-bs-toggle="collapse"
        aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-cogs"></span></span><span class="nav-link-text ps-1">Setting
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
</li>

<!--REKAPITULASI DATA-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
        <div class="col-auto navbar-vertical-label"><span class="text-primary">Rekapitulasi
                Data</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-primary" />
        </div>
    </div>
</li>

<!-- Rekapitulasi-->
<li class="nav-item">
    <a class="nav-link" href="{{ route('rek.g') }}">
        <div class="d-flex align-items-center">
            <span class="nav-link-icon">
                <span class="fas fa-clipboard-check">
                </span>
            </span>
            <span class="nav-link-text ps-1">
                Rekapitulasi
            </span>
        </div>
    </a>
</li>

<!--DIVISION DATA-->
<li class="nav-item">
    <div class="row navbar-vertical-label-wrapper mb-2 mt-3">
        <div class="col-auto navbar-vertical-label"><span class="text-primary">Division
                Data</span></div>
        <div class="col ps-0">
            <hr class="mb-0 navbar-vertical-divider text-primary" />
        </div>
    </div>
</li>

<!--HRGA-->
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#e-learning" role="button" data-bs-toggle="collapse"
        aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-user-circle"></span></span><span class="nav-link-text ps-1">
                HRGA</span></div>
    </a>
    <ul class="nav collapse" id="e-learning">
        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#asubabi" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Karyawan</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="asubabi">
                <li class="nav-item"><a class="nav-link" href="{{ route('kar.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                Kelola Data</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('akun.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                                Kelola Akun</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('jab.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jabatan</span>
                        </div>
                    </a><!-- more inner pages-->
                </li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#asubabi222" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pelayanan</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="asubabi222">
                <li class="nav-item"><a class="nav-link" href="{{ route('skk.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data SKK
                            </span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kim.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">KIMPER</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('res.g') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                Resign</span></div>
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
</li>

{{-- Rental --}}
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#sdads-sdf" role="button" data-bs-toggle="collapse"
        aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-truck-monster"></span></span><span class="nav-link-text ps-1">
                Rental </span>
        </div>
    </a>
    <ul class="nav collapse" id="sdads-sdf">
        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#course" data-bs-toggle="collapse"
                aria-expanded="false" aria-controls="e-learning">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Equipment</span></div>
            </a><!-- more inner pages-->
            <ul class="nav collapse" id="course">
                <li class="nav-item"><a class="nav-link" href="{{ route('heavy.l') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Heavy</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('vehicle.l') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vehicle</span></div>
                    </a><!-- more inner pages-->
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('support.l') }}">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Support</span></div>
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
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Location
                    </span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('category.l') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Category
                    </span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('dedicated.l') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dedicated
                    </span></div>
            </a>
        </li>
    </ul>
</li>

<!--Logistik-->
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#e-0s0" role="button" data-bs-toggle="collapse"
        aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-archive"></span></span><span class="nav-link-text ps-1">Logistik</span></div>
    </a>
    <ul class="nav collapse" id="e-0s0">
        <li class="nav-item"><a class="nav-link" href="{{ route('barang') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                        Barang
                    </span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pemakaian.barang') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pemakaian</span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pemesanan.barang') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pemesanan</span></div>
            </a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('so.periode') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stock
                        Opname</span></div>
            </a>
        </li>
    </ul>
</li>

<!--Perusahaan-->
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#sdads-learning" role="button" data-bs-toggle="collapse"
        aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fab fa-hornbill"></span></span><span class="nav-link-text ps-1">
                PT. HWA </span></div>
    </a>
    <ul class="nav collapse" id="sdads-learning">

        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">
                        Profil PT. HWA</span>
                </div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.s') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Struktur
                        Organisasi</span></div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('hwa.p') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Divisi
                    </span></div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('gal.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Galeri</span>
                </div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('mit.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Mitra
                    </span>
                </div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('eve.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event</span></div>
            </a><!-- more inner pages-->
        </li>
    </ul>
</li>

{{-- Arsip --}}
<li class="nav-item">
    <a class="nav-link dropdown-indicator" href="#sdads-ss" role="button" data-bs-toggle="collapse"
        aria-expanded="false" aria-controls="e-learning">
        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                    class="fas fa-file-archive"></span></span><span class="nav-link-text ps-1">
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
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dokumen</span>
                </div>
            </a><!-- more inner pages-->
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ route('catat.g') }}">
                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Catatan</span>
                </div>
            </a><!-- more inner pages-->
        </li>
    </ul>
</li>
