@extends('layouts.layout')

@section('judul')
    {{ $kar->name }} | Performa | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('g.l') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <a href="{{ route('g.i', Crypt::encryptString($kar->id)) }}"><button
                        class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
                <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                    {{ date('F Y') }}</span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> Penghasilan:
                    <span class="fw-semi-bold text-info">{{ $kar->name }}</span></span>
            </div>
        </div>
        <div class="col-auto d-flex align-items-center">
            <div class="position-relative">&nbsp;
                <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-users"></i></button>
            </div>
            <div class="position-relative">&nbsp;
                <div class="dropdown font-sans-serif d-inline-block">
                    <button class="btn btn-sm btn-falcon-default dropdown-toggle" id="dropdownMenuButton" type="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i> Print
                            Excel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"><i class="fas fa-coins"></i> Penghasilan Karyawan</h5><button
                class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="tableExample4"
                data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                <div class="row justify-content-left  mt-3 mb-3 g-0">
                    <div class="col-auto col-sm-12">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Pencarian..." aria-label="search" />
                            </div>
                        </form>
                    </div>
                </div>
                @if ($cek_kar == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr>
                                    <th style="min-width: 50px"
                                        class="bg-secondary text-white align-middle white-space-nowrap">
                                        Aksi
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                        ID O/D
                                    </th>
                                    <th style="min-width: 350px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Nama
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="payment">
                                        Jabatan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($kar_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <a href="{{ route('g.i', Crypt::encryptString($res->kar_id)) }}"
                                                class="btn btn-info btn-sm"><span class="fas fa-info-circle"></span>
                                            </a>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap id">
                                            @if ($res->kar_id)
                                                K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap nama">
                                            @if ($res->kar_id)
                                                {{ $res->kar_->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            @if ($res->kar_id)
                                                {{ $res->kar_->jabatan }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="card mb-3 font-sans-serif">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <div class="card-body ">
            <div class="row">
                <div
                    class="col-6 d-flex gap-3 flex-column flex-sm-row align-items-center border-md-end border-bottom border-md-bottom-0 border-dashed">
                    <div class="avatar avatar-4xl">
                        <img class="rounded-soft"
                            src="@if ($kar->image) {{ asset($kar->image) }}
                        @else
                        {{ asset('assets/img/elearning/avatar/student.png') }} @endif"
                            alt="" />
                    </div>
                    <table>
                        <tr>
                            <th class="text-500 fw-normal fs--1" style="min-width: 180px">ID Karyawan</th>
                            <th class="text-500 fw-normal fs--1">:</th>
                            <th class="text-1000 fw-normal fs--1">&nbsp;
                                K{{ $kar->tgl_gabung->format('ym') }}{{ $kar->id }}</th>
                        </tr>
                        <tr>
                            <th class="text-500 fw-normal fs--1" style="min-width: 180px">Nama Karyawan</th>
                            <th class="text-500 fw-normal fs--1">:</th>
                            <th class="text-1000 fw-normal fs--1">&nbsp; {{ $kar->name }}</th>
                        </tr>
                        <tr>
                            <th class="text-500 fw-normal fs--1" style="min-width: 180px">Jabatan</th>
                            <th class="text-500 fw-normal fs--1">:</th>
                            <th class="text-1000 fw-normal fs--1">&nbsp; {{ $kar->jabatan }}</th>
                        </tr>
                        <tr>
                            <th class="text-500 fw-normal fs--1" style="min-width: 180px">Lokasi</th>
                            <th class="text-500 fw-normal fs--1">:</th>
                            <th class="text-1000 fw-normal fs--1">&nbsp; PT. CMI-Sandai</th>
                        </tr>
                    </table>
                </div>
                <div class="col-6">
                    @if ($kar_m->tipe_gaji == 'A')
                        <table>
                            <tr>
                                <th class="text-500 fw-normal fs--1" style="min-width: 180px">Tipe Income</th>
                                <th class="text-500 fw-normal fs--1">:</th>
                                <th class="text-1000 fw-normal fs--1">&nbsp;
                                    @if ($kar_m->tipe_gaji == 'A')
                                        Gaji Pokok
                                    @else
                                        @if ($kar_m->tipe_gaji == 'AI')
                                            Gaji Pokok + Insentif
                                        @else
                                            @if ($kar_m->tipe_gaji == 'AL')
                                                Gaji Pokok + Lemburan
                                            @else
                                                -
                                            @endif
                                        @endif
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th class="text-500 fw-normal fs--1" style="min-width: 180px">Gaji Pokok</th>
                                <th class="text-500 fw-normal fs--1">:</th>
                                <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $a }}</th>
                            </tr>
                        </table>
                    @else
                        @if ($kar_m->tipe_gaji == 'AI')
                            <table>
                                <tr>
                                    <th class="text-500 fw-normal fs--1" style="min-width: 180px">Tipe Income</th>
                                    <th class="text-500 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;
                                        @if ($kar_m->tipe_gaji == 'A')
                                            Gaji Pokok
                                        @else
                                            @if ($kar_m->tipe_gaji == 'AI')
                                                Gaji Pokok + Insentif
                                            @else
                                                @if ($kar_m->tipe_gaji == 'AL')
                                                    Gaji Pokok + Lemburan
                                                @else
                                                    -
                                                @endif
                                            @endif
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-500 fw-normal fs--1" style="min-width: 180px">Gaji Pokok</th>
                                    <th class="text-500 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $a }}</th>
                                </tr>
                                <tr>
                                    <th class="text-500 fw-normal fs--1" style="min-width: 180px">Insentif</th>
                                    <th class="text-500 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $insentif }}</th>
                                </tr>
                                <tr>
                                    <th class="text-500 fw-normal fs--1" style="min-width: 180px">Penghasilan Total</th>
                                    <th class="text-500 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $ai }}</th>
                                </tr>
                            </table>
                        @else
                            @if ($kar_m->tipe_gaji == 'AL')
                                <table>
                                    <tr>
                                        <th class="text-500 fw-normal fs--1" style="min-width: 180px">Tipe Income</th>
                                        <th class="text-500 fw-normal fs--1">:</th>
                                        <th class="text-1000 fw-normal fs--1">&nbsp;
                                            @if ($kar_m->tipe_gaji == 'A')
                                                Gaji Pokok
                                            @else
                                                @if ($kar_m->tipe_gaji == 'AI')
                                                    Gaji Pokok + Insentif
                                                @else
                                                    @if ($kar_m->tipe_gaji == 'AL')
                                                        Gaji Pokok + Lemburan
                                                    @else
                                                        -
                                                    @endif
                                                @endif
                                            @endif
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-500 fw-normal fs--1" style="min-width: 180px">Gaji Pokok</th>
                                        <th class="text-500 fw-normal fs--1">:</th>
                                        <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $a }}</th>
                                    </tr>
                                    <tr>
                                        <th class="text-500 fw-normal fs--1" style="min-width: 180px">Lemburan</th>
                                        <th class="text-500 fw-normal fs--1">:</th>
                                        <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $lemburan }}</th>
                                    </tr>
                                    <tr>
                                        <th class="text-500 fw-normal fs--1" style="min-width: 180px">Penghasilan Total
                                        </th>
                                        <th class="text-500 fw-normal fs--1">:</th>
                                        <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $al }}</th>
                                    </tr>
                                </table>
                            @else
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-light">
            <h5>Rincian Penghasilan</h5>
        </div>
        <div class="card-body">
            @if ($kar_m->tipe_gaji == 'A')
                <div class="card overflow-hidden mb-3 mt-3">
                    <div class="card-header bg-primary">
                        <h5 class="text-white">Gaji Pokok</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="row mx-0">
                            <div class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                                <h6 class="fs--1 mb-3 text-700">Rekap Data Absensi</h6>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit (TK)</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_stk }} Hari</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Cuti</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_c }} Hari</p>
                                    </div>
                                </div>
                                <div class="row mt-2 border-bottom border-dashed">
                                    <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Alpha</p>
                                    </div>
                                    <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_a }} Hari</p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                        <hr class="bg-success ps-8">
                                        <hr class="bg-success ps-5">
                                        <p class="mb-0 ps-3 fw-semi-bold text-success">+</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-3 fs--1 fw-semi-bold text-success text-nowrap">Total Hari Valid</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">:</p>
                                        <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">{{ $hari_valid }} Hari</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-x1">
                                <h6 class="fs--1 mb-3 text-700">Perhitungan Gaji Pokok</h6>
                                <div class="row mt-3">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji Bulanan</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_bulanan }}</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Master</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $master->total }} Hari</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                        <hr class=" bg-success ps-10">
                                        <hr class=" bg-success ps-10">
                                        <p class="mb-0 ps-3 fw-semi-bold text-success">/</p>
                                    </div>
                                </div>
                                <div class="row border-bottom border-dashed">
                                    <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-success text-nowrap">Standar Gaji Harian
                                        </p>
                                    </div>
                                    <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-8 fw-semi-bold text-success">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-success">Rp {{ $str_harian }}</p>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji Harian</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_harian }}</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Valid</p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $hari_valid }} Hari</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                        <hr class="bg-success ps-10">
                                        <hr class="bg-success ps-10">
                                        <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                        <p class="mb-0 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan Gaji Pokok
                                        </p>
                                    </div>
                                    <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                        <p class="mb-0 fs--1 ps-8 fw-semi-bold text-primary">:</p>
                                        <p class="mb-0 fs--1 ps-3 fw-semi-bold text-primary">Rp {{ $a }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light">
                        <!-- // -->
                    </div>
                </div>
            @else
                @if ($kar_m->tipe_gaji == 'AI')
                    <div class="card overflow-hidden mb-3 mt-3">
                        <div class="card-header bg-primary">
                            <h5 class="text-white">Gaji Pokok</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="row mx-0">
                                <div class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                                    <h6 class="fs--1 mb-3 text-700">Rekap Data Absensi</h6>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit (TK)</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_stk }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Cuti</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_c }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2 border-bottom border-dashed">
                                        <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Alpha</p>
                                        </div>
                                        <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_a }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                            <hr class="bg-success ps-8">
                                            <hr class="bg-success ps-5">
                                            <p class="mb-0 ps-3 fw-semi-bold text-success">+</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-3 fs--1 fw-semi-bold text-success text-nowrap">Total Hari Valid
                                            </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">:</p>
                                            <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">{{ $hari_valid }} Hari
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-x1">
                                    <h6 class="fs--1 mb-3 text-700">Perhitungan Gaji Pokok</h6>
                                    <div class="row mt-3">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji Bulanan
                                            </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_bulanan }}</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Master</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $master->total }} Hari
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                            <hr class=" bg-success ps-10">
                                            <hr class=" bg-success ps-10">
                                            <p class="mb-0 ps-3 fw-semi-bold text-success">/</p>
                                        </div>
                                    </div>
                                    <div class="row border-bottom border-dashed">
                                        <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-success text-nowrap">Standar Gaji Harian
                                            </p>
                                        </div>
                                        <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-success">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-success">Rp {{ $str_harian }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji Harian
                                            </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_harian }}</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Valid</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $hari_valid }} Hari</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                            <hr class="bg-success ps-10">
                                            <hr class="bg-success ps-10">
                                            <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan Gaji
                                                Pokok </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-primary">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-primary">Rp {{ $a }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <!-- // -->
                        </div>
                    </div>
                    <div class="card overflow-hidden mb-3 mt-3">
                        <div class="card-header bg-primary">
                            <h5 class="text-white">Insentif</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="row mx-0">
                                <div class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                                    <h6 class="fs--1 mb-3 text-700">Rekap Data Hours Meter</h6>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hours Meter Reguler
                                            </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_hm }} Jam</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hours Meter Manual</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_jam }} Jam</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                            <hr class=" bg-success ps-10">
                                            <hr class=" bg-success ps-10">
                                            <p class="mb-0 ps-3 fw-semi-bold text-success">+</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-success text-nowrap">Grand Hours Meter
                                            </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-success">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-success">{{ $grand_tot }} Jam
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-x1">
                                    <h6 class="fs--1 mb-3 text-700">Perhitungan Insentif</h6>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Grand Hours Meter</p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-6 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $grand_tot }} Jam</p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Insentif / Jam
                                            </p>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-0 fs--1 ps-6 fw-semi-bold text-700">:</p>
                                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_ins }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                            <hr class="bg-success ps-10">
                                            <hr class="bg-success ps-5">
                                            <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                                        </div>
                                    </div>
                                    <div class="row row mt-2 border-bottom border-dashed">
                                        <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                            <p class="mb-3 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan
                                                Insentif</p>
                                        </div>
                                        <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                            <p class="mb-3 fs--1 ps-6 fw-semi-bold text-primary">:</p>
                                            <p class="mb-3 fs--1 ps-3 fw-semi-bold text-primary">Rp {{ $insentif }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-light">
                            <!-- // -->
                        </div>
                    </div>
                @else
                    @if ($kar_m->tipe_gaji == 'AL')
                        <div class="card overflow-hidden mb-3 mt-3">
                            <div class="card-header bg-primary">
                                <h5 class="text-white">Gaji Pokok</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="row mx-0">
                                    <div
                                        class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                                        <h6 class="fs--1 mb-3 text-700">Rekap Data Absensi</h6>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit (TK)</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_stk }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Cuti</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_c }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2 border-bottom border-dashed">
                                            <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Alpha</p>
                                            </div>
                                            <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_a }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                                <hr class="bg-success ps-8">
                                                <hr class="bg-success ps-5">
                                                <p class="mb-0 ps-3 fw-semi-bold text-success">+</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-3 fs--1 fw-semi-bold text-success text-nowrap">Total Hari
                                                    Valid</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">:</p>
                                                <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">{{ $hari_valid }}
                                                    Hari</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-x1">
                                        <h6 class="fs--1 mb-3 text-700">Perhitungan Gaji Pokok</h6>
                                        <div class="row mt-3">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji
                                                    Bulanan</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_bulanan }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Master
                                                </p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $master->total }}
                                                    Hari</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                                <hr class=" bg-success ps-10">
                                                <hr class=" bg-success ps-10">
                                                <p class="mb-0 ps-3 fw-semi-bold text-success">/</p>
                                            </div>
                                        </div>
                                        <div class="row border-bottom border-dashed">
                                            <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-success text-nowrap">Standar Gaji
                                                    Harian </p>
                                            </div>
                                            <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-success">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-success">Rp
                                                    {{ $str_harian }}</p>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji
                                                    Harian</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_harian }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Valid
                                                </p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $hari_valid }} Hari
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                                <hr class="bg-success ps-10">
                                                <hr class="bg-success ps-10">
                                                <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan
                                                    Gaji Pokok </p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-primary">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-primary">Rp
                                                    {{ $a }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <!-- // -->
                            </div>
                        </div>
                        <div class="card overflow-hidden mb-3 mt-3">
                            <div class="card-header bg-primary">
                                <h5 class="text-white">Lemburan</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="row mx-0">
                                    <div
                                        class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                                        <h6 class="fs--1 mb-3 text-700">Rekap Data Over Time</h6>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Over Time Total
                                                </p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_jam_lemburan }}
                                                    Jam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-x1">
                                        <h6 class="fs--1 mb-3 text-700">Perhitungan Lemburan</h6>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Over Time Total
                                                </p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_jam_lemburan }}
                                                    Jam</p>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Lemburan /
                                                    Jam</p>
                                            </div>
                                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_lem }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                                <hr class="bg-success ps-10">
                                                <hr class="bg-success ps-10">
                                                <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                                            </div>
                                        </div>
                                        <div class="row row mt-2 border-bottom border-dashed">
                                            <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                                <p class="mb-3 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan
                                                    Lemburan</p>
                                            </div>
                                            <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                                <p class="mb-3 fs--1 ps-8 fw-semi-bold text-primary">:</p>
                                                <p class="mb-3 fs--1 ps-3 fw-semi-bold text-primary">Rp
                                                    {{ $lemburan }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <!-- // -->
                            </div>
                        </div>
                    @else
                    @endif
                @endif
            @endif
        </div>
        <div class="card-footer bg-light"></div>
    </div>


@endsection
