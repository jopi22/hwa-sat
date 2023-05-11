@extends('layouts.layout')

@section('judul')
    Pengajuan Absensi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master2 == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
@endsection

@section('superadmin')
    @if ($master->periode == $periode)
        @if ($cek->ket == 1)
            <div class="card mb-3 bg-light shadow-none">
                <div class="bg-holder bg-card d-none d-sm-block"
                    style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-header d-flex align-items-center z-index-1 p-0">
                    <img src="{{ asset('assets/img/illustrations/reports-bg.png') }}" alt="" width="96" />
                    <div class="ms-n3">
                        <h6 class="mb-1 text-primary"><i class="fas fa-calendar-check"></i> Absensi <span
                                class="mb-1 text-info">{{ $cek->created_at->format('F Y') }}</span></h6>
                        <h4 class="mb-0 text-primary fw-bold">Pengajuan Absensi </h4>
                    </div>
                </div>
            </div>

            @include('comp.alert')

            {{-- // Konten // --}}
            <div class="card overflow-hidden mb-3">
                <div class="card-header bg-light p-0">
                    <div class="row">
                        <div class="col-auto">
                            <ul class="nav nav-tabs border-0 top-courses-tab flex-nowrap" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 active" role="tab"
                                        id="popularPaid-tab" data-bs-toggle="tab" href="#popularPaid"
                                        aria-controls="popularPaid" aria-selected="false">
                                        <div class="d-flex gap-1 py-1 pe-3">
                                            <div class="d-flex flex-column flex-between-center">
                                                <span class="mt-auto far fas fa-clipboard-list fs-2"></span>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                                <h6 class="mb-0 lh-1">All Data ({{ $all_c}})</h6>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false" role="tab"
                                        id="popularFree-tab" data-bs-toggle="tab" href="#popularFree"
                                        aria-controls="popularFree" aria-selected="true">
                                        <div class="d-flex gap-1 py-1 pe-3">
                                            <div class="d-flex flex-column flex-between-center"><span
                                                    class="mt-auto fas fa-envelope fs-2"></span></div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                                <h6 class="mb-0 lh-1">Belum Direspon ({{ $nores_c}})</h6>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false" role="tab"
                                        id="topPaid-tab" data-bs-toggle="tab" href="#topPaid" aria-controls="topPaid"
                                        aria-selected="false">
                                        <div class="d-flex gap-1 py-1 pe-3">
                                            <div class="d-flex flex-column flex-between-center">
                                                <span class="mt-auto fas fa-clipboard-check fs-2"></span>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                                <h6 class="mb-0 lh-1">Diterima ({{ $ter_c}})</h6>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false" role="tab"
                                        id="topFree-tab" data-bs-toggle="tab" href="#topFree" aria-controls="topFree"
                                        aria-selected="false">
                                        <div class="d-flex gap-1 py-1 pe-3">
                                            <div class="d-flex flex-column flex-between-center"><span
                                                    class="mt-auto fas fa-times-circle fs-2"></span></div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                                <h6 class="mb-0 lh-1">Ditolak ({{ $tol_c}})</h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto mt-4">
                            <div class="col-auto">
                                <a href="{{ route('peng.abs.cm') }}">
                                    <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button"><span
                                            class="fas fa-plus text-success" data-fa-transform="shrink-3"></span> Tambah<span
                                            class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                                    </button>
                                </a>
                                <a href="{{ route('peng.abs.c') }}">
                                    <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button"><span
                                            class="fas fa-user-plus text-success" data-fa-transform="shrink-3"></span> Saya<span
                                            class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="tab-content">

                        <div class="tab-pane active" id="popularPaid" role="tabpanel" aria-labelledby="popularPaid-tab">
                            <div id="tableExample4"
                                data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                                <div class="row justify-content-center mt-2 g-0">
                                    <div class="col-auto col-sm-3">
                                        <form>
                                            <div class="input-group"><input
                                                    class="form-control form-control-sm shadow-none search" type="search"
                                                    placeholder="Pencarian..." aria-label="search" />
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                    <div class="col-auto col-sm-3">
                                        <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                            data-list-filter="data-list-filter">
                                            <option selected="" value="">Filter Perihal</option>
                                            <option value="Kondisi Kesehatan">Kondisi Kesehatan</option>
                                            <option value="Pengajuan Izin">Pengajuan Izin</option>
                                            <option value="Pengajuan Cuti">Pengajuan Cuti</option>
                                        </select>
                                    </div>
                                </div>
                                @if ($cek_all == 0)
                                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                                @else
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-bordered table-sm fs--1 mb-0">
                                            <thead class="bg-200 text-900">
                                                <tr class="text-center">
                                                    <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idp">ID Pengajuan
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idk">ID Karyawan
                                                    </th>
                                                    <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                        data-sort="name">Karyawan
                                                    </th>
                                                    <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                        data-sort="payment">
                                                        Perihal</th>
                                                    <th style="width: 100px"
                                                        class="sort align-middle white-space-nowrap text-center">
                                                        Aksi / Status
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="tgl">Dibuat
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                @foreach ($all as $res)
                                                    <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idp">
                                                            {{ $res->id }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idk">
                                                            K{{ $res->kar_peng_->tgl_gabung->format('ym') }}{{ $res->kar_peng_->id }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap name">
                                                            {{ $res->kar_peng_->name }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap payment">
                                                            @if ($res->status == 3)
                                                                Kondisi Kesehatan
                                                            @else
                                                                @if ($res->status == 5)
                                                                    Pengajuan Izin
                                                                @else
                                                                    @if ($res->status == 6)
                                                                        Pengajuan Cuti
                                                                    @else
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap">
                                                            @if ($res->respon_status == 0)
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-warning btn-sm"><i
                                                                        class="fas fa-magic"></i>
                                                                    Respon</a>
                                                            @else
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-info btn-sm"><i class="fas fa-eye"></i>
                                                                    Lihat</a>
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap tgl">
                                                            {{ $res->created_at->format('d/m/Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane" id="popularFree" role="tabpanel" aria-labelledby="popularFree-tab">
                            <div id="tableExample4"
                                data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                                <div class="row justify-content-center mt-2 g-0">
                                    <div class="col-auto col-sm-3">
                                        <form>
                                            <div class="input-group"><input
                                                    class="form-control form-control-sm shadow-none search" type="search"
                                                    placeholder="Pencarian..." aria-label="search" />
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                    <div class="col-auto col-sm-3">
                                        <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                            data-list-filter="data-list-filter">
                                            <option selected="" value="">Filter Perihal</option>
                                            <option value="Kondisi Kesehatan">Kondisi Kesehatan</option>
                                            <option value="Pengajuan Izin">Pengajuan Izin</option>
                                            <option value="Pengajuan Cuti">Pengajuan Cuti</option>
                                        </select>
                                    </div>
                                </div>
                                @if ($cek_nores == 0)
                                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                                @else
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-bordered table-sm fs--1 mb-0">
                                            <thead class="bg-200 text-900">
                                                <tr class="text-center">
                                                    <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idp">ID Pengajuan
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idk">ID Karyawan
                                                    </th>
                                                    <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                        data-sort="name">Karyawan
                                                    </th>
                                                    <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                        data-sort="payment">
                                                        Perihal</th>
                                                    <th style="width: 100px"
                                                        class="sort align-middle white-space-nowrap text-center">
                                                        Aksi / Status
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="tgl">Dibuat
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                @foreach ($nores as $res)
                                                    <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idp">
                                                            {{ $res->id }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idk">
                                                            K{{ $res->kar_peng_->tgl_gabung->format('ym') }}{{ $res->kar_peng_->id }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap name">
                                                            {{ $res->kar_peng_->name }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap payment">
                                                            @if ($res->status == 3)
                                                                Kondisi Kesehatan
                                                            @else
                                                                @if ($res->status == 5)
                                                                    Pengajuan Izin
                                                                @else
                                                                    @if ($res->status == 6)
                                                                        Pengajuan Cuti
                                                                    @else
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap">
                                                            @if ($res->respon_status == 0)
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-warning btn-sm"><i
                                                                        class="fas fa-magic"></i>
                                                                    Respon</a>
                                                            @else
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-info btn-sm"><i class="fas fa-eye"></i>
                                                                    Lihat</a>
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap tgl">
                                                            {{ $res->created_at->format('d/m/Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane" id="topPaid" role="tabpanel" aria-labelledby="topPaid-tab">
                            <div id="tableExample4"
                                data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                                <div class="row justify-content-center mt-2 g-0">
                                    <div class="col-auto col-sm-3">
                                        <form>
                                            <div class="input-group"><input
                                                    class="form-control form-control-sm shadow-none search" type="search"
                                                    placeholder="Pencarian..." aria-label="search" />
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                    <div class="col-auto col-sm-3">
                                        <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                            data-list-filter="data-list-filter">
                                            <option selected="" value="">Filter Perihal</option>
                                            <option value="Kondisi Kesehatan">Kondisi Kesehatan</option>
                                            <option value="Pengajuan Izin">Pengajuan Izin</option>
                                            <option value="Pengajuan Cuti">Pengajuan Cuti</option>
                                        </select>
                                    </div>
                                </div>
                                @if ($cek_ter == 0)
                                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                                @else
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-bordered table-sm fs--1 mb-0">
                                            <thead class="bg-200 text-900">
                                                <tr class="text-center">
                                                    <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idp">ID Pengajuan
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idk">ID Karyawan
                                                    </th>
                                                    <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                        data-sort="name">Karyawan
                                                    </th>
                                                    <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                        data-sort="payment">
                                                        Perihal</th>
                                                    <th style="width: 100px"
                                                        class="sort align-middle white-space-nowrap text-center">
                                                        Aksi / Status
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="tgl">Dibuat
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                @foreach ($ter as $res)
                                                    <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idp">
                                                            {{ $res->id }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idk">
                                                            K{{ $res->kar_peng_->tgl_gabung->format('ym') }}{{ $res->kar_peng_->id }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap name">
                                                            {{ $res->kar_peng_->name }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap payment">
                                                            @if ($res->status == 3)
                                                                Kondisi Kesehatan
                                                            @else
                                                                @if ($res->status == 5)
                                                                    Pengajuan Izin
                                                                @else
                                                                    @if ($res->status == 6)
                                                                        Pengajuan Cuti
                                                                    @else
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap">
                                                            @if ($res->respon_status == 0)
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-warning btn-sm"><i
                                                                        class="fas fa-magic"></i>
                                                                    Respon</a>
                                                            @else
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-info btn-sm"><i class="fas fa-eye"></i>
                                                                    Lihat</a>
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap tgl">
                                                            {{ $res->created_at->format('d/m/Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="tab-pane" id="topFree" role="tabpanel" aria-labelledby="topFree-tab">
                            <div id="tableExample4"
                                data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                                <div class="row justify-content-center mt-2 g-0">
                                    <div class="col-auto col-sm-3">
                                        <form>
                                            <div class="input-group"><input
                                                    class="form-control form-control-sm shadow-none search" type="search"
                                                    placeholder="Pencarian..." aria-label="search" />
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                    <div class="col-auto col-sm-3">
                                        <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                            data-list-filter="data-list-filter">
                                            <option selected="" value="">Filter Perihal</option>
                                            <option value="Kondisi Kesehatan">Kondisi Kesehatan</option>
                                            <option value="Pengajuan Izin">Pengajuan Izin</option>
                                            <option value="Pengajuan Cuti">Pengajuan Cuti</option>
                                        </select>
                                    </div>
                                </div>
                                @if ($cek_tol == 0)
                                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                                @else
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-bordered table-sm fs--1 mb-0">
                                            <thead class="bg-200 text-900">
                                                <tr class="text-center">
                                                    <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idp">ID Pengajuan
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="idk">ID Karyawan
                                                    </th>
                                                    <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                        data-sort="name">Karyawan
                                                    </th>
                                                    <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                        data-sort="payment">
                                                        Perihal</th>
                                                    <th style="width: 100px"
                                                        class="sort align-middle white-space-nowrap text-center">
                                                        Aksi / Status
                                                    </th>
                                                    <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                        data-sort="tgl">Dibuat
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="list">
                                                @foreach ($tol as $res)
                                                    <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                        <td class="text-center">{{ $loop->iteration }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idp">
                                                            {{ $res->id }}</td>
                                                        <td class="align-middle text-center white-space-nowrap idk">
                                                            K{{ $res->kar_peng_->tgl_gabung->format('ym') }}{{ $res->kar_peng_->id }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap name">
                                                            {{ $res->kar_peng_->name }}
                                                        </td>
                                                        <td class="align-middle white-space-nowrap payment">
                                                            @if ($res->status == 3)
                                                                Kondisi Kesehatan
                                                            @else
                                                                @if ($res->status == 5)
                                                                    Pengajuan Izin
                                                                @else
                                                                    @if ($res->status == 6)
                                                                        Pengajuan Cuti
                                                                    @else
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap">
                                                            @if ($res->respon_status == 0)
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-warning btn-sm"><i
                                                                        class="fas fa-magic"></i>
                                                                    Respon</a>
                                                            @else
                                                                <a href="{{ route('peng.abs.i', Crypt::encryptString($res->id)) }}"
                                                                    class="btn btn-info btn-sm"><i class="fas fa-eye"></i>
                                                                    Lihat</a>
                                                            @endif
                                                        </td>
                                                        <td class="align-middle text-center white-space-nowrap tgl">
                                                            {{ $res->created_at->format('d/m/Y') }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer bg-light py-3">
                    {{-- // --}}
                </div>
            </div>
        @else
            @include('comp.card.card404_kalender')
        @endif
    @else
        Harap Melakukan Update Master Data
    @endif
@endsection
