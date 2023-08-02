@extends('layouts.layout')

@section('judul')
    {{ $kar->id }} | Performance | HWA &bull; SAT
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
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    @if ($master->periode == $periode)
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <div>
                <span class="badge bg-soft-info text-info bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                    {{ date('F Y') }}</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <a class="btn btn-falcon-default btn-sm" href="{{ route('ot.k') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Back to Main Table">
                    <span class="fas fa-list"></span>
                </a>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-primary"> Performance :
                    <span class="fw-semi-bold text-info">{{ $kar->kar_->name }}</span></span>
            </div>
            <div class="col-auto d-flex align-items-center">
                <form action="{{ route('ot.k.r') }}" method="post">
                    @csrf
                    <input type="hidden" name="bro_id" value="{{ $kar->id }}">
                    <button class="btn btn-falcon-default text-primary btn-sm" type="submit"><i class="fab fa-slack"></i>
                        Sinkron</button>
                </form>
                <div class="position-relative">&nbsp;
                    <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fas fa-users"></i></button>
                </div>
                <div class="position-relative">&nbsp;
                    <a href="{{ route('ot.k.i.excel', Crypt::EncryptString($kar->id)) }}" target="_blank"
                        rel="noopener noreferrer">
                        <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

        @include('comp.alert')

        <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel"><i class="fas fa-wrench"></i> Performa Helper</h5><button
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
                    @if ($cek_perform == 0)
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
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="id">
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
                                        <tr id="index_{{ $res->id }}"
                                            class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                <a href="{{ route('ot.k.i', Crypt::encryptString($res->id)) }}"
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

        <div class="card mb-2 font-sans-serif">
            <div class="bg-holder bg-card d-none d-sm-block"
                style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
            <div class="card-body d-flex gap-3 flex-column flex-sm-row align-items-center">
                <div class="avatar avatar-4xl">
                    <img class="rounded-soft"
                        src="@if ($kar->kar_->image) {{ asset($kar->kar_->image) }}
                @else
                {{ asset('assets/img/team/avatar.png') }} @endif"
                        alt="" />
                </div>
                <table>
                    <tr>
                        <th class="text-700 fw-normal fs--1" style="min-width: 180px">ID Operator/Driver</th>
                        <th class="text-700 fw-normal fs--1">:</th>
                        <th class="text-1000 fw-normal fs--1">&nbsp; @if ($kar->kar_id)
                                K{{ $kar->kar_->tgl_gabung->format('ym') }}{{ $kar->kar_->id }}
                            @else
                                -
                            @endif
                        </th>
                    </tr>
                    <tr>
                        <th class="text-700 fw-normal fs--1" style="min-width: 180px">Nama Operator/Driver</th>
                        <th class="text-700 fw-normal fs--1">:</th>
                        <th class="text-1000 fw-normal fs--1">&nbsp; @if ($kar->kar_id)
                                {{ $kar->kar_->name }}
                            @else
                                -
                            @endif
                        </th>
                    </tr>
                    <tr>
                        <th class="text-700 fw-normal fs--1" style="min-width: 180px">Jabatan</th>
                        <th class="text-700 fw-normal fs--1">:</th>
                        <th class="text-1000 fw-normal fs--1">&nbsp; @if ($kar->kar_id)
                                {{ $kar->kar_->jabatan }}
                            @else
                                -
                            @endif
                        </th>
                    </tr>
                    <tr>
                        <th class="text-700 fw-normal fs--1" style="min-width: 180px">Lokasi</th>
                        <th class="text-700 fw-normal fs--1">:</th>
                        <th class="text-1000 fw-normal fs--1">&nbsp; PT. CMI-Sandai</th>
                    </tr>
                </table>
            </div>
        </div>

        <div class="card mb-2">
            <div class="card-body py-5 py-sm-3">
                <div class="row g-5 g-sm-0">
                    <div class="col-sm-4">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-700">Standar Lemburan/Jam</h6>
                                <h3 class="fw-normal text-700"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $master->lemburan }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-700">Total Jam</h6>
                                <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $total_jam }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <div class="text-center">
                                <h6 class="text-primary">Total Lemburan</h6>
                                <h3 class="fw-normal text-primary"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $lemburan }}}'>0
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-light d-flex flex-between-end py-2">
                {{-- // --}}
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div id="tableExample4"
                    data-list='{"valueNames":["nama","rem", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                    <div class="row mt-2 ms-3 mb-2 g-0 flex-between-end">
                        <div class="col-4">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr class="text-center">
                                    <th style="min-width: 50px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 200px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Helper / Mekanik
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        Jam Awal
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        Jam Akhir
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        Jumlah Jam
                                    </th>
                                    <th style="min-width: 200px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="rem">
                                        Remark
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort bg-danger text-white align-middle white-space-nowrap">
                                        Jam Potongan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($data as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
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
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_mulai)
                                                {{ $res->jam_mulai->format('H:i A, d/m/y') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_selesai)
                                                {{ $res->jam_selesai->format('H:i A, d/m/y') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_total)
                                                {{ $res->jam_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000  white-space-nowrap">
                                            @if ($res->remark)
                                                {{ $res->remark }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_pot)
                                                {{ $res->jam_pot }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            @endif
            <div class="card-footer bg-light d-flex flex-between-end py-2">
                {{-- // --}}
            </div>
        </div>
    @else
        Harap Melakukan Update Master Data
    @endif
@endsection
