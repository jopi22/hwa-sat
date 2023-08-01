@extends('layouts.layout')

@section('judul')
    Dashboard | HWA-SAT
@endsection

@section('sad_menu')
    @if ($cek == null)
        @include('layouts.panel.sad.vertikal_off')
    @else
        @if ($master->periode == $periode)
            @include('layouts.panel.sad.vertikal')
        @else
            @include('layouts.panel.sad.vertikal_off')
        @endif
    @endif
@endsection

@section('konten')
    <div class="row mb-3">
        <div class="col">
            <div class="card bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                    <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2"
                            src="../assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                        <div>
                            <h6 class="text-primary fs--1 mb-0">Welcome to HWA-SAT </h6>
                            <h4 class="text-primary fw-bold mb-0">{{ Auth::user()->name }} </h4>
                        </div><img class="ms-n4 d-md-none d-lg-block"
                            src="{{ asset('assets/img/illustrations/crm-line-chart.png') }}" width="150" />
                    </div>
                    @if ($cek_master == 1)
                        <div class="col-md-auto p-3">
                            <form class="row align-items-center g-3">
                                <div class="col-auto">
                                    <h6 class="text-700 mb-0">Showing Data For: </h6>
                                </div>
                                <div class="col-md-auto position-relative">
                                    <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                                </div>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @if ($master == null)
        <div class="card h-100">
            <div class="bg-holder bg-card"
                style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-3.png') }});"></div>
            <!--/.bg-holder-->
            <div class="card-header z-index-1">
                <h5 class="text-primary">Silahkan Membuat Master Data Baru Anda.</h5>
                <h6 class="text-600">Pilih Salah Satu Dibawah ini, Jumlah Hari Harus Sesuai Dengan Kalender Anda.</h6>
            </div>
            <div class="card-body z-index-1">
                <div class="row g-2 h-100 align-items-end">
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="far fa-calendar-alt text-primary"></span></div>
                            <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                    data-bs-target="#create28">
                                    <h6 class="mb-0">28 Hari</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Februari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="far fa-calendar-alt  text-warning"></span></div>
                            <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                    data-bs-target="#create29">
                                    <h6 class="mb-0">29 Hari</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Februari</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="far fa-calendar-alt  text-success"></span></div>
                            <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                    data-bs-target="#create30">
                                    <h6 class="mb-0">30 Hari</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">April, Juni, September, November</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                        <div class="d-flex position-relative">
                            <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                    class="far fa-calendar-alt  text-info"></span></div>
                            <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                    data-bs-target="#create31">
                                    <h6 class="mb-0">31 Hari</h6>
                                </a>
                                <p class="mb-0 fs--2 text-500">Januari, Maret, Mei, Juli, Agustus, Oktober, Desember</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal Create 28 --}}
        <div class="modal fade" id="create28" tabindex="-1" aria-labelledby="tooltippopoversLabel" aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">
                        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                        </div>
                        <div class="p-4 pb-0">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('mas.s.n') }}" method="POST">
                                        @csrf
                                        {{-- // Master Baru // --}}
                                        <input type="hidden" name="total_new" value="28">
                                        <input type="hidden" name="periode_new" value="{{ $periode }}">
                                        <input type="hidden" name="status_new" value="Present">
                                        <input type="hidden" name="ket_new" value="0">
                                        <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                        <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                        <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                        <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                OKE OCE</button>
                                            Untuk Proses Update.</p>
                                        <h5>Perhatian!</h5>
                                        <ul>
                                            <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Create 29 --}}
        <div class="modal fade" id="create29" tabindex="-1" aria-labelledby="tooltippopoversLabel"
            aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">
                        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                        </div>
                        <div class="p-4 pb-0">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('mas.s.n') }}" method="POST">
                                        @csrf
                                        {{-- // Master Baru // --}}
                                        <input type="hidden" name="total_new" value="29">
                                        <input type="hidden" name="periode_new" value="{{ $periode }}">
                                        <input type="hidden" name="status_new" value="Present">
                                        <input type="hidden" name="ket_new" value="0">
                                        <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                        <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                        <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                        <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                OKE OCE</button>
                                            Untuk Proses Update.</p>
                                        <h5>Perhatian!</h5>
                                        <ul>
                                            <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Create 30 --}}
        <div class="modal fade" id="create30" tabindex="-1" aria-labelledby="tooltippopoversLabel"
            aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">
                        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                        </div>
                        <div class="p-4 pb-0">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('mas.s.n') }}" method="POST">
                                        @csrf
                                        {{-- // Master Baru // --}}
                                        <input type="hidden" name="total_new" value="30">
                                        <input type="hidden" name="periode_new" value="{{ $periode }}">
                                        <input type="hidden" name="status_new" value="Present">
                                        <input type="hidden" name="ket_new" value="0">
                                        <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                        <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                        <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                        <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                OKE OCE</button>
                                            Untuk Proses Update.</p>
                                        <h5>Perhatian!</h5>
                                        <ul>
                                            <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Modal Create 31 --}}
        <div class="modal fade" id="create31" tabindex="-1" aria-labelledby="tooltippopoversLabel"
            aria-hidden="true">
            <div class="modal-dialog mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">
                        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                        </div>
                        <div class="p-4 pb-0">
                            <div class="row">
                                <div class="col">
                                    <form action="{{ route('mas.s.n') }}" method="POST">
                                        @csrf
                                        {{-- // Master Baru // --}}
                                        <input type="hidden" name="total_new" value="31">
                                        <input type="hidden" name="periode_new" value="{{ $periode }}">
                                        <input type="hidden" name="status_new" value="Present">
                                        <input type="hidden" name="ket_new" value="0">
                                        <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                        <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                        <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                        <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                OKE OCE</button>
                                            Untuk Proses Update.</p>
                                        <h5>Perhatian!</h5>
                                        <ul>
                                            <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        @if ($cek->periode == $periode)
        @else
            <div class="card h-100">
                <div class="bg-holder bg-card"
                    style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-3.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-header z-index-1">
                    <h5 class="text-primary">Silahkan Membuat Master Data Baru Anda.</h5>
                    <h6 class="text-600">Pilih Salah Satu Dibawah ini, Jumlah Hari Harus Sesuai Dengan Kalender Anda.</h6>
                </div>
                <div class="card-body z-index-1">
                    <div class="row g-2 h-100 align-items-end">
                        <div class="col-sm-6 col-md-5">
                            <div class="d-flex position-relative">
                                <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                        class="far fa-calendar-alt text-primary"></span></div>
                                <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                        data-bs-target="#create28">
                                        <h6 class="mb-0">28 Hari</h6>
                                    </a>
                                    <p class="mb-0 fs--2 text-500">Februari</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="d-flex position-relative">
                                <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                        class="far fa-calendar-alt  text-warning"></span></div>
                                <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                        data-bs-target="#create29">
                                        <h6 class="mb-0">29 Hari</h6>
                                    </a>
                                    <p class="mb-0 fs--2 text-500">Februari</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="d-flex position-relative">
                                <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                        class="far fa-calendar-alt  text-success"></span></div>
                                <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                        data-bs-target="#create30">
                                        <h6 class="mb-0">30 Hari</h6>
                                    </a>
                                    <p class="mb-0 fs--2 text-500">April, Juni, September, November</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5">
                            <div class="d-flex position-relative">
                                <div class="icon-item icon-item-sm border rounded-3 shadow-none me-2"><span
                                        class="far fa-calendar-alt  text-info"></span></div>
                                <div class="flex-1"><a class="stretched-link text-800" data-bs-toggle="modal"
                                        data-bs-target="#create31">
                                        <h6 class="mb-0">31 Hari</h6>
                                    </a>
                                    <p class="mb-0 fs--2 text-500">Januari, Maret, Mei, Juli, Agustus, Oktober, Desember
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Create 28 --}}
            <div class="modal fade" id="create28" tabindex="-1" aria-labelledby="tooltippopoversLabel"
                aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body p-0">
                            <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                            </div>
                            <div class="p-4 pb-0">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('mas.s') }}" method="POST">
                                            @csrf
                                            {{-- // Master Lama // --}}
                                            <input type="hidden" name="id_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="delete_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="total_old" value="{{ $cek->total }}">
                                            <input type="hidden" name="periode_old" value="{{ $cek->periode }}">
                                            <input type="hidden" name="pokok_old" value="{{ $cek->pokok }}">
                                            <input type="hidden" name="lemburan_old" value="{{ $cek->lemburan }}">
                                            <input type="hidden" name="insentif_old" value="{{ $cek->insentif }}">
                                            <input type="hidden" name="status_old" value="Validasi">
                                            <input type="hidden" name="ket_old" value="1">
                                            <input type="hidden" name="created_at_old" value="{{ $cek->created_at }}">
                                            <input type="hidden" name="updated_at_old" value="{{ date('Y-m-d') }}">

                                            {{-- // Master Baru // --}}
                                            <input type="hidden" name="total_new" value="28">
                                            <input type="hidden" name="periode_new" value="{{ $periode }}">
                                            <input type="hidden" name="status_new" value="Present">
                                            <input type="hidden" name="ket_new" value="0">
                                            <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                            <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                            <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                            <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                    OKE OCE</button>
                                                Untuk Proses Update.</p>
                                            <h5>Perhatian!</h5>
                                            <ul>
                                                <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Create 29 --}}
            <div class="modal fade" id="create29" tabindex="-1" aria-labelledby="tooltippopoversLabel"
                aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body p-0">
                            <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                            </div>
                            <div class="p-4 pb-0">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('mas.s') }}" method="POST">
                                            @csrf
                                            {{-- // Master Lama // --}}
                                            <input type="hidden" name="id_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="delete_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="total_old" value="{{ $cek->total }}">
                                            <input type="hidden" name="periode_old" value="{{ $cek->periode }}">
                                            <input type="hidden" name="status_old" value="Validasi">
                                            <input type="hidden" name="ket_old" value="1">
                                            <input type="hidden" name="created_at_old" value="{{ $cek->created_at }}">
                                            <input type="hidden" name="updated_at_old" value="{{ date('Y-m-d') }}">

                                            {{-- // Master Baru // --}}
                                            <input type="hidden" name="total_new" value="29">
                                            <input type="hidden" name="periode_new" value="{{ $periode }}">
                                            <input type="hidden" name="status_new" value="Present">
                                            <input type="hidden" name="ket_new" value="0">
                                            <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                            <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                            <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                            <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                    OKE OCE</button>
                                                Untuk Proses Update.</p>
                                            <h5>Perhatian!</h5>
                                            <ul>
                                                <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Create 30 --}}
            <div class="modal fade" id="create30" tabindex="-1" aria-labelledby="tooltippopoversLabel"
                aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body p-0">
                            <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                            </div>
                            <div class="p-4 pb-0">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('mas.s') }}" method="POST">
                                            @csrf
                                            {{-- // Master Lama // --}}
                                            <input type="hidden" name="id_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="delete_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="total_old" value="{{ $cek->total }}">
                                            <input type="hidden" name="periode_old" value="{{ $cek->periode }}">
                                            <input type="hidden" name="status_old" value="Validasi">
                                            <input type="hidden" name="ket_old" value="1">
                                            <input type="hidden" name="created_at_old" value="{{ $cek->created_at }}">
                                            <input type="hidden" name="updated_at_old" value="{{ date('Y-m-d') }}">

                                            {{-- // Master Baru // --}}
                                            <input type="hidden" name="total_new" value="30">
                                            <input type="hidden" name="periode_new" value="{{ $periode }}">
                                            <input type="hidden" name="status_new" value="Present">
                                            <input type="hidden" name="ket_new" value="0">
                                            <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                            <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                            <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                            <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                    OKE OCE</button>
                                                Untuk Proses Update.</p>
                                            <h5>Perhatian!</h5>
                                            <ul>
                                                <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Modal Create 31 --}}
            <div class="modal fade" id="create31" tabindex="-1" aria-labelledby="tooltippopoversLabel"
                aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1"><button
                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body p-0">
                            <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                <h4 class="mb-1" id="tooltippopoversLabel">UPDATE MASTER</h4>
                            </div>
                            <div class="p-4 pb-0">
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('mas.s') }}" method="POST">
                                            @csrf
                                            {{-- // Master Lama // --}}
                                            <input type="hidden" name="id_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="delete_old" value="{{ $cek->id }}">
                                            <input type="hidden" name="total_old" value="{{ $cek->total }}">
                                            <input type="hidden" name="periode_old" value="{{ $cek->periode }}">
                                            <input type="hidden" name="status_old" value="Validasi">
                                            <input type="hidden" name="ket_old" value="1">
                                            <input type="hidden" name="created_at_old" value="{{ $cek->created_at }}">
                                            <input type="hidden" name="updated_at_old" value="{{ date('Y-m-d') }}">

                                            {{-- // Master Baru // --}}
                                            <input type="hidden" name="total_new" value="31">
                                            <input type="hidden" name="periode_new" value="{{ $periode }}">
                                            <input type="hidden" name="status_new" value="Present">
                                            <input type="hidden" name="ket_new" value="0">
                                            <input type="hidden" name="created_at_new" value="{{ date('Y-m-d') }}">
                                            <input type="hidden" name="updated_at_new" value="{{ date('Y-m-d') }}">
                                            <h5>Mengupdate Master Data Periode {{ date('F Y') }}?</h5>
                                            <p>Klik <button class="btn btn-success btn-sm" type="submit">
                                                    OKE OCE</button>
                                                Untuk Proses Update.</p>
                                            <h5>Perhatian!</h5>
                                            <ul>
                                                <li>Master Data Periode Sebelumnya akan dipindahkan ke Rekapitulasi</li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif

    {{-- @include('home.konten_dashboard') --}}

    <div class="card">
    </form>
    <div class="card-body overflow-hidden p-lg-6">
        <div class="row align-items-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/icons/spot-illustrations/21.png"
                    alt="" /></div>
            <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                <h3 class="text-primary">{{Auth::user()->name}}</h3>
                <p class="lead">Superadmin</p><a class="btn btn-falcon-primary"
                    href="#">Getting started</a>
            </div>
        </div>
    </div>
</div>

@endsection
