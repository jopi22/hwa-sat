<div class="collapse navbar-collapse scrollbar" id="navbarStandard">
    <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">Master Data</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                            src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                            alt="" />
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="nav flex-column">
                                    <p class="nav-link text-700 mb-0 fw-bold">Absensi</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('abs.kel') }}">Kelola
                                        Absensi</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('abs.kal') }}">Kalender</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('peng.abs.g') }}">Pengajuan
                                        Absensi</a>
                                    <p class="nav-link text-700 mb-0 fw-bold">Performance</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.p') }}">Hours
                                        Meter</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.p.u') }}"> Unit
                                    </a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('hm.p.od') }}">Operator & Driver</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.m') }}">Kelola HM
                                        Manual</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('ha.l') }}">Hauling</a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="nav flex-column">
                                    <p class="nav-link text-700 mb-0 fw-bold">Mechanic</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('ot.l') }}">
                                        Helper</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('ot.k') }}">
                                        Overtime</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('bd.l') }}">
                                        Breakdown</a>
                                    <p class="nav-link text-700 mb-0 fw-bold">Finance</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('kas.l') }}">
                                        Kas Perusahaan</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.p.u') }}">
                                        Penghasilan Karyawan
                                    </a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('hm.p.od') }}">Catering</a>
                                    <p class="nav-link text-700 mb-0 fw-bold">Rekap Sewa Unit</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('hm.sewa') }}">Hours
                                        Meter</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('unit.sewa') }}">Unit</a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="nav flex-column">
                                    <p class="nav-link text-700 mb-0 fw-bold">Setting Master</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.g') }}">
                                        Generate & Setting</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.k') }}">
                                        Manual Karyawan</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.e') }}">
                                        Manual Equipment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="apps">Rekapitulasi</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0" aria-labelledby="apps">
                <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown"
                            src="assets/img/icons/spot-illustrations/authentication-corner.png" width="130"
                            alt="" />
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <div class="nav flex-column">
                                    <p class="nav-link text-700 mb-0 fw-bold">Absensi</p>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.abs.kel') }}">Kelola
                                        Absensi</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.abs.kal') }}">Kalender</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.peng.g') }}">Pengajuan
                                        Absensi</a>
                                    <p class="nav-link text-700 mb-0 fw-bold">Performance</p>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.hm.p') }}">Hours
                                        Meter</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.hm.p') }}">
                                        Unit
                                    </a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('hm.p.od') }}">Operator & Driver</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.hm.m') }}">Kelola HM
                                        Manual</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.ha.l') }}">Hauling</a>
                                </div>
                            </div>
                            <div class="col-6 col-md-4">
                                <div class="nav flex-column">
                                    <p class="nav-link text-700 mb-0 fw-bold">Mechanic</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.ot.l') }}">
                                        Helper</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.ot.k') }}">
                                        Overtime</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.bd.l') }}">
                                        Breakdown</a>
                                    <p class="nav-link text-700 mb-0 fw-bold">Finance</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.kas.l') }}">
                                        Kas Perusahaan</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.g.l') }}">
                                        Penghasilan Karyawan
                                    </a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('r.adjust') }}">
                                        Adjustmen
                                    </a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('hm.p.od') }}">Catering</a>
                                    <p class="nav-link text-700 mb-0 fw-bold">Rekap Sewa Unit</p>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.hm.sewa') }}">Hours
                                        Meter</a>
                                    <a class="nav-link py-1 link-600 fw-medium"
                                        href="{{ route('r.unit.sewa') }}">Unit</a>
                                </div>
                            </div>
                            {{-- <div class="col-6 col-md-4">
                                <div class="nav flex-column">
                                    <p class="nav-link text-700 mb-0 fw-bold">Setting Master</p>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.g') }}">
                                        Generate & Setting</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.k') }}">
                                        Manual Karyawan</a>
                                    <a class="nav-link py-1 link-600 fw-medium" href="{{ route('mas.e') }}">
                                        Manual Equipment</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">HRGA</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <p class="dropdown-item  text-800 mb-0 fw-bold">Karyawan</p>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('kar.g') }}">Karyawan</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('akun.g') }}">Pengguna</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('jab.g') }}">Jabatan</a>
                    <p class="dropdown-item  text-800 mb-0 fw-bold">Pelayanan</p>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('sp.g') }}">Surat Peringatan</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('mut.g') }}">Mutasi & PHK</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('kim.g') }}">KIMPER</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('res.g') }}">Resign Data</a>
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
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                id="dashboards">Logistik</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('barang') }}">Data Barang</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('pemakaian.barang') }}">Pemesanan
                        Barang</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('pemesanan.barang') }}">Pemakaian
                        Barang</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('so.periode') }}">Stock Opname</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">Arsip</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('amast.g') }}">Master Data</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('dok.g') }}">Dokumen</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('catat.g') }}">Catatan</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboards">PT. HWA</a>
            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                aria-labelledby="dashboards">
                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                    <p class="dropdown-item  text-800 mb-0 fw-bold">Tentang</p>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('hwa.g') }}">Profil PT. HWA</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('hwa.s') }}">Struktur
                        Organisasi</a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('hwa.p') }}">Divisi</a>
                    <p class="dropdown-item  text-800 mb-0 fw-bold">Data Lain</p>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('gal.g') }}">Galeri </a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('mit.g') }}">Mitra </a>
                    <a class="dropdown-item link-600 fw-medium" href="{{ route('eve.g') }}">Event</a>
                </div>
            </div>
        </li>
    </ul>
</div>
