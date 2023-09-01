@extends('layouts.layout')

@section('judul')
    {{ $kar->name }} | Info | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <style>
        * {
            box-sizing: border-box;
        }

        ul {
            list-style-type: none;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .month {
            padding: 70px 25px;
            width: 100%;
            background: #1abc9c;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size: 12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: #1abc9c;
            color: white !important
        }

        /* Add media queries for smaller screens */
        @media screen and (max-width:720px) {

            .weekdays li,
            .days li {
                width: 13.1%;
            }
        }

        @media screen and (max-width: 420px) {

            .weekdays li,
            .days li {
                width: 12.5%;
            }

            .days li .active {
                padding: 2px;
            }
        }

        @media screen and (max-width: 290px) {

            .weekdays li,
            .days li {
                width: 12.2%;
            }
        }
    </style>
@endsection

@section('konten')
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('kar.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <a href="{{ route('kar.i', Crypt::encryptString($kar->id)) }}"><button
                        class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
                <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="fas fa-key"></i>
                    Primer</span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> Karyawan /
                    <span class="fw-semi-bold text-info">{{ $kar->name }}</span></span>
            </div>
        </div>
        <div class="col-auto d-flex align-items-center">
            <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                <a href="{{ route('kar.i', Crypt::encryptString($kar->id)) }}">
                    <button class="btn btn-sm active text-primary" data-bs-toggle="pill"
                        data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                        aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="true"
                        id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">Info</button>
                </a>
                <a href="{{ route('kar.e', Crypt::encryptString($kar->id)) }}">
                    <button class="btn btn-sm  text-warning" data-bs-toggle="pill"
                        data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                        aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="false"
                        id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                </a>
            </div>
            <div class="position-relative">&nbsp;
                <button class="btn btn-falcon-default text-info btn-sm mx-1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-users"></i></button>
            </div>
            <div class="position-relative">&nbsp;
                <button class="btn btn-sm btn-falcon-info mx-1 dropdown-toggle" id="dropdownMenuButton" type="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="fas fa-print"></i></button>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i>
                        Print Excel
                    </a>
                    <a class="dropdown-item text-warning" href="#!"><i class="fas fa-file-pdf"></i>
                        Print PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"><i class="fas fa-users"></i> Karyawan</h5><button class="btn-close text-reset"
                type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="min-width: 50px" class="align-middle white-space-nowrap">
                                        Aksi
                                    </th>
                                    <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                        data-sort="id">
                                        ID O/D
                                    </th>
                                    <th style="min-width: 350px" class="sort align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Nama
                                    </th>
                                    <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                        data-sort="payment">
                                        Jabatan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($kar_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <a href="{{ route('kar.i', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-info btn-sm"><span class="fas fa-info-circle"></span>
                                            </a>
                                            <a href="{{ route('kar.e', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-warning btn-sm"><span class="fas fa-edit"></span>
                                            </a>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap id">
                                            @if ($res->tgl_gabung)
                                                K{{ $res->tgl_gabung->format('ym') }}{{ $res->id }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap nama">
                                            @if ($res->name)
                                                {{ $res->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            @if ($res->jabatan)
                                                {{ $res->jabatan }}
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

    <div class="row g-3">
        <div class="col-lg-4 col-xl-3">
            <div class="sticky-sidebar top-navbar-height">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-6 col-lg-12 text-center">
                                <img class="img-fluid rounded-3"
                                    src="@if ($kar->image) {{ asset($kar->image) }}
                                @else
                                {{ asset('assets/img/team/avatar.png') }} @endif" />
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="row row-cols-1 g-0">
                                    <div class="col text-center">
                                        <h5>{{ $kar->name }}</h5>
                                        <h5 class="mb-1 text-800 fs-0">{{ $kar->jabatan }}</h5>
                                        <p class="mb-0 fs--1">
                                            @if ($hwa->inisial)
                                                {{ $hwa->inisial }}
                                            @else
                                                -
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="card mb-3">
                <div class="card-header bg-primary py-2">
                    <h5 class="mb-0 text-white text-center"><i class="fas fa-user"></i> Detail Identitas</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div
                            class="col-6 d-flex gap-3 flex-column flex-sm-row align-items-center border-md-end border-bottom border-md-bottom-0 border-dashed">
                            <table>
                                <tr>
                                    <th class="text-500 fw-normal fs--1">DATA KARYAWAN</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">ID Karyawan</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">
                                        &nbsp;K{{ $kar->tgl_gabung->format('ym') }}{{ $kar->id }}
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Nama Karyawan</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;{{ $kar->name }}</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Jabatan</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;{{ $kar->jabatan }}</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Perusahaan</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;{{ $hwa->inisial }}</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Status Karyawan</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;{{ $kar->status }}</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Tgl Gabung</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;{{ $kar->tgl_gabung->format('d F Y') }}
                                    </th>
                                </tr>
                                @if ($kar->status != 'Aktif')
                                    <tr>
                                        <th class="text-700 fw-normal fs-0" style="min-width: 150px">Tgl Resign/Mutasi
                                        </th>
                                        <th class="text-700 fw-normal fs-0">:</th>
                                        <th class="text-1000 fw-normal fs-0">&nbsp;{{ $kar->tgl_resign->format('d F Y') }}
                                        </th>
                                    </tr>
                                @endif
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Tipe Income</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->tipe_gaji == 'A')Gaji Pokok
                                        @else
                                            @if ($kar->tipe_gaji == 'AI')
                                                Gaji Pokok + Insentif
                                            @else
                                                @if ($kar->tipe_gaji == 'AL')
                                                    Gaji Pokok + Lemburan
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="col-6">
                            <table>
                                <tr>
                                    <th class="text-500 fw-normal fs--1">DATA PENDUKUNG</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Nama Bank</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->bank)
                                            {{ $kar->bank }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No Rekening</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_rek)
                                            {{ $kar->no_rek }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No KTP</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_ktp)
                                            {{ $kar->no_ktp }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No BPJS</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_bpjs)
                                            {{ $kar->no_bpjs }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No SIM A</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_sim_a)
                                            {{ $kar->no_sim_a }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No SIM B1</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_sim_b1)
                                            {{ $kar->no_sim_b1 }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No SIM B2</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_sim_b2)
                                            {{ $kar->no_sim_b2 }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div
                            class="col-6 d-flex gap-3 flex-column flex-sm-row align-items-center border-md-end border-bottom border-md-bottom-0 border-dashed">
                            <table>
                                <tr>
                                    <th class="text-500 fw-normal fs--1">DATA PRIBADI</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Jenis Kelamin</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->jenis_kelamin)
                                            {{ $kar->jenis_kelamin }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Asal</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->asal)
                                            {{ $kar->asal }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Tgl Lahir</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->tgl_lahir)
                                            {{ $kar->tgl_lahir->format('d F Y') }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Usia</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->tgl_lahir)
                                            {{ $kar->tgl_lahir->diff()->y }} Tahun
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Email</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->email)
                                            {{ $kar->email }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">No Handphone</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->no_hp)
                                            {{ $kar->no_hp }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs-0" style="min-width: 150px">Domsili</th>
                                    <th class="text-700 fw-normal fs-0">:</th>
                                    <th class="text-1000 fw-normal fs-0">&nbsp;@if ($kar->alamat)
                                            {{ $kar->alamat }}
                                        @else
                                            -
                                        @endif
                                    </th>
                                </tr>
                            </table>
                        </div>
                        <div class="col-6">
                            <table>
                                <tr>
                                    <th class="text-500 fw-normal fs--1">KARTU SIM & SERTIFIKAT PROFESI</th>
                                </tr>
                            </table>
                            @if ($kar->file_sim_a)
                                <a href="{{ asset($kar->file_sim_a) }}" target="_blank" rel="noopener noreferrer"><img
                                        src="{{ asset($kar->file_sim_a) }}" width="100px" class="rounded-3 mt-2"
                                        height="80px"></a>
                            @else
                                <img src="{{ asset('assets/img/icons/chip.png') }}" width="100px"
                                    class="rounded-3 mt-2" height="80px">
                            @endif

                            @if ($kar->file_sim_b1)
                                <a href="{{ asset($kar->file_sim_b1) }}" target="_blank" rel="noopener noreferrer"><img
                                        src="{{ asset($kar->file_sim_b1) }}" width="100px" class="rounded-3 mt-2"
                                        height="80px"></a>
                            @else
                                <img src="{{ asset('assets/img/icons/chip.png') }}" width="100px"
                                    class="rounded-3 ms-3 mt-2" height="80px">
                            @endif

                            @if ($kar->file_sim_b2)
                                <a href="{{ asset($kar->file_sim_b2) }}" target="_blank" rel="noopener noreferrer"><img
                                        src="{{ asset($kar->file_sim_b2) }}" width="100px" class="rounded-3 mt-2"
                                        height="80px"></a>
                            @else
                                <img src="{{ asset('assets/img/icons/chip.png') }}" width="100px"
                                    class="rounded-3 ms-3 mt-2" height="80px">
                            @endif

                            <table>
                                <tr>
                                    <th class="text-1000 fw-normal fs--1" style="min-width: 130px;">Kartu SIM A</th>
                                    <th class="text-1000 fw-normal fs--1" style="min-width: 120px;">Kartu SIM B1</th>
                                    <th class="text-1000 fw-normal fs--1" style="min-width: 130px;">Kartu SIM B2</th>
                                </tr>
                            </table>

                            @if ($kar->file_sertifikat)
                                <a href="{{ asset($kar->file_sertifikat) }}" target="_blank"
                                    rel="noopener noreferrer"><img src="{{ asset($kar->file_sertifikat) }}"
                                        width="100px" class="rounded-3 mt-2" height="80px"></a>
                            @else
                                <img src="{{ asset('assets/img/icons/chip.png') }}" width="100px"
                                    class="rounded-3 mt-2" height="80px">
                            @endif

                            <table>
                                <tr>
                                    <th class="text-1000 fw-normal fs--1" style="min-width: 130px;">Sertifikat Profesi
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-primary py-2">
                    <h5 class="text-white text-center"><i class="fas fa-history"></i> History</h5>
                </div>
                <div class="card-body">
                    <div id="tableExample3" data-list='{"valueNames":["name","email","age"],"page":10,"pagination":true}'>
                        <form class="mt-2 mb-2 ms-3">
                            <div class="input-group"><input
                                    class="form-control form-control-sm shadow-none search" type="search"
                                    placeholder="Cari..." aria-label="search" />
                                <div class="input-group-text bg-transparent"><span
                                        class="fa fa-search fs--1 text-600"></span></div>
                            </div>
                        </form>
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1">
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th style="width: 50px" class="sort" data-sort="name">#</th>
                                        <th style="width: 500px" class="sort" data-sort="email">Aktivitas</th>
                                        <th style="width: 200px" class="sort text-center" data-sort="age">Kapan?</th>
                                        <th style="width: 100px" class="sort text-center" data-sort="method">Method</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($h_user as $asu)
                                        <tr>
                                            <td class="text-black align-middle fw-semi-bold name">🥬</td>
                                            <td class="text-black align-middle fw-semi-bold email">
                                                {{ $asu->history_->subject }}{{ $asu->name }}
                                            </td>
                                            <td class="text-black align-middle text-center fw-semi-bold age">
                                                {{ $asu->history_->method }}
                                            </td>
                                            <td class="text-black align-middle text-center fw-semi-bold method">
                                                {{ $asu->history_->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1"
                                type="button" title="Previous" data-list-pagination="prev"><span
                                    class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                                type="button" title="Next" data-list-pagination="next"><span
                                    class="fas fa-chevron-right"> </span></button>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2 bg-light">
                    {{-- // --}}
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-primary py-2">
                    <h5 class="mb-0 text-white text-center"><i class="fas fa-history"></i> History</h5>
                </div>
                <div class="card-body">
                    <div id="tableExample4"
                        data-list='{"valueNames":["name","tanggal","payment"],"filter":{"key":"tanggal"}}'>
                        <div class="row justify-content-left g-0">
                            <div class="col-auto col-sm-5 mb-3">
                                <form>
                                    <div class="input-group"><input
                                            class="form-control form-control-sm shadow-none search" type="search"
                                            placeholder="Cari..." aria-label="search" />
                                        <div class="input-group-text bg-transparent"><span
                                                class="fa fa-search fs--1 text-600"></span></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-auto mt-2 px-3">
                                <h6 class="text-900">Sorting :</h6>
                            </div>
                            <div class="col-auto px-3">
                                <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Pilih Disini</span></option>
                                    {{-- @foreach ($jab as $res2) --}}
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    {{-- @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden"
                                data-options='{"paging":false,"scrollY":"400px","searching":false,"scrollCollapse":true,"scrollX":true}'>
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th style="width: 80px" class="sort " data-sort="id">ID</th>
                                        <th style="width: 100px" class="sort" data-sort="tanggal">
                                            Tanggal</th>
                                        <th style="width: 100px" class="sort text-center" data-sort="payment">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-purchase-body">
                                    @foreach ($kar->absensi_ as $abs)
                                        <tr class="btn-reveal-trigger">
                                            <td class="text-black  fw-semi-bold align-middle white-space-nowrap id">
                                                {{ $abs->id }}</td>
                                            <td class="text-black fw-semi-bold align-middle white-space-nowrap tanggal">
                                                {{ $abs->tgl }}</td>
                                            <td
                                                class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                                                {{ $abs->status_absensi_->status }}
                                            </td>

                                            {{-- <td class="align-middle text-center white-space-nowrap payment">
                                            @if ($res->status == 'Aktif')
                                                <span class="badge rounded-pill bg-info">Aktif</span>
                                            @else
                                                @if ($res->status == 'Resign')
                                                    <span class="badge rounded-pill bg-danger">Resign</span>
                                                @else
                                                    @if ($res->status == 'Mutasi')
                                                        <span class="badge rounded-pill bg-warning">Mutasi</span>
                                                    @else
                                                        <span class="id fs--1 text-400">Kosong</span>
                                                    @endif
                                                @endif
                                            @endif
                                        </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer py-2 bg-light">
                    {{-- // --}}
                </div>
            </div>

            <div class="col-auto">
                <h1>CSS Calendar</h1>

                <div class="month">
                    <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>
                            August<br>
                            <span style="font-size:18px">2021</span>
                        </li>
                    </ul>
                </div>

                <ul class="weekdays">
                    <li>Mo</li>
                    <li>Tu</li>
                    <li>We</li>
                    <li>Th</li>
                    <li>Fr</li>
                    <li>Sa</li>
                    <li>Su</li>
                </ul>

                <ul class="days">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li><span class="active">10</span></li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li>15</li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                </ul>
            </div>

            <div class="col-auto">
                <div class="card h-lg-100 overflow-hidden">
                    <div class="card-header bg-light">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="mb-0">Running Projects</h6>
                            </div>
                            <div class="col-auto text-center pe-x1"><select class="form-select form-select-sm">
                                    <option>Working Time</option>
                                    <option>Estimated Time</option>
                                    <option>Billable Time</option>
                                </select></div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                            <div class="col ps-x1 py-1 position-static">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-3">
                                        <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span
                                                class="fs-0 text-primary">🥬</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                                href="#!">Falcon</a><span
                                                class="badge rounded-pill ms-2 bg-200 text-primary">38%</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col py-1">
                                <div class="row flex-end-center g-0">
                                    <div class="col-auto pe-2">
                                        <div class="fs--1 fw-semi-bold">12:50:00</div>
                                    </div>
                                    <div class="col-5 pe-x1 ps-2">
                                        <div class="progress bg-200 me-2" style="height: 5px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 38%"
                                                aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                            <div class="col ps-x1 py-1 position-static">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-3">
                                        <div class="avatar-name rounded-circle bg-soft-success text-dark"><span
                                                class="fs-0 text-success">R</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                                href="#!">Reign</a><span
                                                class="badge rounded-pill ms-2 bg-200 text-primary">79%</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col py-1">
                                <div class="row flex-end-center g-0">
                                    <div class="col-auto pe-2">
                                        <div class="fs--1 fw-semi-bold">25:20:00</div>
                                    </div>
                                    <div class="col-5 pe-x1 ps-2">
                                        <div class="progress bg-200 me-2" style="height: 5px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 79%"
                                                aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                            <div class="col ps-x1 py-1 position-static">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-3">
                                        <div class="avatar-name rounded-circle bg-soft-info text-dark"><span
                                                class="fs-0 text-info">B</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                                href="#!">Boots4</a><span
                                                class="badge rounded-pill ms-2 bg-200 text-primary">90%</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col py-1">
                                <div class="row flex-end-center g-0">
                                    <div class="col-auto pe-2">
                                        <div class="fs--1 fw-semi-bold">58:20:00</div>
                                    </div>
                                    <div class="col-5 pe-x1 ps-2">
                                        <div class="progress bg-200 me-2" style="height: 5px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 90%"
                                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                            <div class="col ps-x1 py-1 position-static">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-3">
                                        <div class="avatar-name rounded-circle bg-soft-warning text-dark"><span
                                                class="fs-0 text-warning">R</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                                href="#!">Raven</a><span
                                                class="badge rounded-pill ms-2 bg-200 text-primary">40%</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col py-1">
                                <div class="row flex-end-center g-0">
                                    <div class="col-auto pe-2">
                                        <div class="fs--1 fw-semi-bold">21:20:00</div>
                                    </div>
                                    <div class="col-5 pe-x1 ps-2">
                                        <div class="progress bg-200 me-2" style="height: 5px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 align-items-center py-2 position-relative">
                            <div class="col ps-x1 py-1 position-static">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl me-3">
                                        <div class="avatar-name rounded-circle bg-soft-danger text-dark"><span
                                                class="fs-0 text-danger">S</span></div>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link"
                                                href="#!">Slick</a><span
                                                class="badge rounded-pill ms-2 bg-200 text-primary">70%</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col py-1">
                                <div class="row flex-end-center g-0">
                                    <div class="col-auto pe-2">
                                        <div class="fs--1 fw-semi-bold">31:20:00</div>
                                    </div>
                                    <div class="col-5 pe-x1 ps-2">
                                        <div class="progress bg-200 me-2" style="height: 5px;">
                                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 70%"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2"
                            href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
