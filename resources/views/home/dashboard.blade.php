@extends('layouts.layout')

@section('judul')
    Dashboard | HWA-SAT
@endsection

@section('sad_menu')
    @if ($cek_null == null)
        @include('layouts.panel.sad.vertikal_off')
    @else
        @if ($cek->periode == $periode)
            @include('layouts.panel.sad.vertikal')
        @else
            @include('layouts.panel.sad.vertikal_off')
        @endif
    @endif
@endsection

@section('superadmin')
    @if ($cek_null == null)
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
        <div class="modal fade" id="create29" tabindex="-1" aria-labelledby="tooltippopoversLabel" aria-hidden="true">
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

    <div class="card mt-3">


        <div class="card-body overflow-hidden p-lg-6">
            <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="../assets/img/icons/spot-illustrations/21.png"
                        alt="" /></div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                    <h3 class="text-primary">{{Auth::user()->name}}</h3>
                    <p class="lead">Superadmin</p><a class="btn btn-falcon-primary"
                        href="../documentation/getting-started.html">Getting started</a>
                </div>

                <li class="nav-item">
                    <a href="#settings-offcanvas" data-bs-toggle="offcanvas">
                        <div class="theme-control-toggle fa-icon-wait px-2">
                            <div class="settings-popover"><span class="ripple"><span
                                        class="fa-spin position-absolute all-0 d-flex flex-center"><span
                                            class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20"
                                                height="20" viewBox="0 0 20 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z"
                                                    fill="#2A7BE4"></path>
                                            </svg></span></span></span></div>
                        </div>
                    </a>
                </li>
            </div>
        </div>
    </div>
@endsection

@section('admin')
    <div class="card mt-3">

        <div class="card-body overflow-hidden p-lg-6">
            <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="../assets/img/icons/spot-illustrations/21.png"
                        alt="" /></div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                    <h3 class="text-primary">{{Auth::user()->name}}</h3>
                    <p class="lead">Admin</p><a class="btn btn-falcon-primary"
                        href="../documentation/getting-started.html">Getting started</a>
                </div>
            </div>
        </div>
    </div>
@endsection
