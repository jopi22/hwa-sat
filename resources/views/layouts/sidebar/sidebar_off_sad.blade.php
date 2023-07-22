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
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#asubabi"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Karyawan</span>
                                </div>
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
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text ps-1">Jabatan</span>
                                        </div>
                                    </a><!-- more inner pages-->
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link dropdown-indicator" href="#asubabi222"
                                data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pelayanan</span>
                                </div>
                            </a><!-- more inner pages-->
                            <ul class="nav collapse" id="asubabi222">
                                <li class="nav-item"><a class="nav-link" href="{{ route('res.g') }}">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                                Resign</span></div>
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
                                    class="fas fa-archive"></span></span><span
                                class="nav-link-text ps-1">Logistik</span></div>
                    </a>
                    <ul class="nav collapse" id="e-0s0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('barang') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Data
                                        Barang
                                    </span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pemakaian.barang') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Pemakaian</span></div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pemesanan.barang') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Pemesanan</span></div>
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
                    <a class="nav-link dropdown-indicator" href="#sdads-learning" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-learning">
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
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event</span>
                                </div>
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
