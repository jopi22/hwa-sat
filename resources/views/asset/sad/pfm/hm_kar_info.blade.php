@extends('layouts.layout')

@section('judul')
    {{ $kar->id }} | Performa O/D | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}">
    </script>
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
        <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
            <div class="col d-flex align-items-center">
                <div>
                    <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                class="fas fa-home text-primary"></i></button></a>
                    <a href="{{ route('hm.k') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                class="fas fa-list text-primary"></i></button></a>
                    <a href="{{ route('hm.k.i', Crypt::encryptString($kar->id)) }}"><button
                            class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
                    <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                        {{ date('F Y') }}</span>
                </div>
                <div class="ms-1">&nbsp;
                    <span class=" fw-semi-bold text-primary"> Performa O/D :
                        <span class="fw-semi-bold text-info">{{ $kar->kar_->name }}</span></span>
                </div>
            </div>
            <div class="col-auto d-flex align-items-center">
                <form action="{{ route('hm.k.r') }}" method="post">
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
                <h5 id="offcanvasRightLabel"><i class="fas fa-stopwatch"></i> Performa O/D</h5><button class="btn-close text-reset" type="button"
                    data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                                                <a href="{{ route('hm.k.i', Crypt::encryptString($res->id)) }}"
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
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-700">Total HM</h6>
                                <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $total_hm }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-700">Total HM Manual</h6>
                                <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $total_jam }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-primary">Grand Total HM</h6>
                                <h3 class="fw-normal text-primary" data-countup='{"endValue":{{ $grand_total }}}'>0
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div>
                            <div class="text-center">
                                <h6 class="text-primary">Total Insentif</h6>
                                <h3 class="fw-normal text-primary"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $insentif }}}'>0
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-light">
                {{-- // --}}
            </div>
            <div id="tableExample4"
                data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                <div class="row mt-2 ms-3 mb-2 g-0 flex-between-end">
                    <div class="col-4">
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
                                <tr class="text-center">
                                    <th style="min-width: 50px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Nama
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        HM Awal
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        HM Akhir
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        HM Potongan
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        HM Total
                                    </th>
                                    <th style="min-width: 350px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="ins">
                                        Remark
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap">
                                        Jam Awal
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap">
                                        Jam Akhir
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap">
                                        Jam Potongan
                                    </th>
                                    <th style="min-width: 120px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap">
                                        Jam Total
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
                                            @if ($res->hm_awal)
                                                {{ $res->hm_awal }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_akhir)
                                                {{ $res->hm_akhir }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_pot)
                                                {{ $res->hm_pot }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_total)
                                                {{ $res->hm_total }}
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
                                            @if ($res->jam_awal)
                                                {{ $res->jam_awal->format('H:i') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_akhir)
                                                {{ $res->jam_akhir->format('H:i') }}
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
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_total)
                                                {{ $res->jam_total }}
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
            <div class="card-footer bg-light">
                {{-- // --}}
            </div>
        </div>
    @else
        Harap Melakukan Update Master Data
    @endif
@endsection
