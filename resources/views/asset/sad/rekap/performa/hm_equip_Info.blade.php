@extends('layouts.layout')

@section('judul')
    {{ $equip_m->equip_->no_unit }} | Rekapitulasi | Performa | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
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

@section('konten')
<div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
    <div class="col d-flex align-items-center">
        <div class="ms-1">&nbsp;
            <span class=" fw-semi-bold text-primary"> Performance /
                <span class="fw-semi-bold text-info">{{ $equip_m->equip_->no_unit }}</span></span>
        </div>
    </div>
    <div class="col-auto d-flex align-items-center">
        <span class="badge bg-soft-danger text-danger bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
            {{ $master->created_at->format('F Y') }}</span>
    </div>
</div>

    @include('comp.alert')

    <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"><i class="fas fa-truck-monster"></i> Performa Equiment</h5><button
                class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="tableExample4"
                data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
                <div class="col-sm-auto mb-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr class="text-center">
                                    <th style="min-width: 150px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="tgl">
                                        No Unit
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap"
                                        data-sort="payment">
                                        Type
                                    </th>
                                    <th style="min-width: 50px"
                                        class="bg-primary text-white align-middle white-space-nowrap">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($equip_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <div class="btn-group  btn-group-sm" role="group">
                                                <a href="{{ route('r.hm.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-info" type="button"><i
                                                        class="fas fa-info-circle"></i></a>
                                                <a href="{{ route('r.hm.e.e', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-warning" type="button"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('r.hm.e.c', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-success" type="button"><i
                                                        class="fas fa-plus-square"></i></a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                            {{ $res->equip_->no_unit }}</td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            {{ $res->equip_->tipe }}
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

    <div class="card mb-3">
        <div class="card-body py-5 py-sm-3">
            <div class="row g-5 g-sm-0">
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Total Data HM</h6>
                            <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $cek_hm }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Total Data Manual</h6>
                            <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $cek_manual }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Total All Data</h6>
                            <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $cek }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Total HM</h6>
                            <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $equip_m->total_hm }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Total HM Manual</h6>
                            <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $equip_m->total_jam }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div>
                        <div class="text-center">
                            <h6 class="text-primary">Grand Total HM</h6>
                            <h3 class="fw-normal text-primary" data-countup='{"endValue":{{ $equip_m->grand_total }}}'>0
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-2 h-100">
        <div class="card-body">
            <div class="row g-0">
                <div class="col-md-12 border-200 border-md-200 border-bottom  pb-x1 pe-md-x1">
                    <div class="row g-0">
                        <div class="col-2"><img class="mt-1"
                                src="{{ asset('assets/img/tickets/reports/7.png') }}" alt=""
                                width="39" />
                            <h2 class="mt-2 mb-1 text-700 fw-normal">{{ $rata2 }}<span
                                    class="fas fa-caret-up ms-2 me-1 fs--1 text-primary"></span></h2>
                            <h6 class="mb-0">Rata2 HM/Hari</h6>
                        </div>
                        <div class="col-9 d-flex align-items-center px-0">
                            <div class="h-50 w-100"
                                data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["#"
                            @foreach ($list as $item)
                            ,"{{ $item->tgl }}" @endforeach
                        ]},"series":[{"type":"line","data":[0
                            @foreach ($list as $item)
                            ,{{ $item->hm_total }} @endforeach
                            ],"color":"#2c7be5","smooth":true,"lineStyle":{"width":2},"areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(44, 123, 229, .25)"},{"offset":1,"color":"rgba(44, 123, 229, 0)"}]}}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"0px"}}'
                                data-echart-responsive="true"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <a class="btn btn-falcon-default btn-sm" href="{{ route('r.hm.e') }}" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Back to Main Table">
                            <span class="fas fa-arrow-left"></span>
                        </a>
                    </div>

                    <div class="col-auto pe-0">
                        <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                            <a href="{{ route('r.hm.e.i', Crypt::encryptString($equip_m->equip_id)) }}">
                                <button class="btn btn-sm active text-primary" data-bs-toggle="pill"
                                    data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                                    aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="true"
                                    id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">List</button>
                            </a>
                            <a href="{{ route('r.hm.e.e', Crypt::encryptString($equip_m->equip_id)) }}">
                                <button class="btn btn-sm  text-warning" data-bs-toggle="pill"
                                    data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                                    aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="false"
                                    id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                            </a>
                            <a href="{{ route('r.hm.e.c', Crypt::encryptString($equip_m->equip_id)) }}">
                                <button class="btn btn-sm text-success" data-bs-toggle="pill"
                                    data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" type="button" role="tab"
                                    aria-controls="dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" aria-selected="false"
                                    id="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc">Tambah</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <form action="{{ route('hm.e.r') }}" method="post">
                        @csrf
                        <input type="hidden" name="equip_id_bro" value="{{ $equip_m->equip_id }}">
                        <input type="hidden" name="delete_id_m" value="{{ $equip_m->id }}">
                        <input type="hidden" name="id_m" value="{{ $equip_m->id }}">
                        <input type="hidden" name="master_id_m" value="{{ $equip_m->master_id }}">
                        <input type="hidden" name="equip_id_m" value="{{ $equip_m->equip_id }}">
                        <input type="hidden" name="kode_unik" value="{{ $equip_m->kode_unik }}">
                        <button class="btn btn-falcon-primary btn-sm" type="submit"><i class="fab fa-slack"></i>
                            Sinkronisasi</button>
                    </form>
                    <div class="bg-300 mx-3 d-none d-lg-block" style="width:1px; height:29px"></div>
                    <div class="d-flex align-items-center" id="table-ticket-replace-element">
                        <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                class="fas fa-truck-monster"></i></button>
                        <a target="_blank"
                            href="{{ route('hm.e.p.excel', Crypt::EncryptString($equip_m->equip_id)) }}"><button
                                class="btn btn-sm btn-falcon-success ms-2" type="button"><i
                                    class="fas fa-file-excel"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="tableExample4"
            data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
            <div class="row justify-content-left ms-3 mt-3 g-0">
                <div class="col-auto col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian" aria-label="search" />
                        </div>
                    </form>
                </div>&nbsp;
                <div class="col-auto col-sm-3">
                    <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                        data-list-filter="data-list-filter">
                        <option selected="" value="">Filter: Operator / Driver</option>
                        @foreach ($kar_filter as $item)
                            <option value="{{ $item->kar_->name }}">{{ $item->kar_->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center text-white bg-secondary">
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    Id HM
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="tgl">
                                    Tanggal
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="shift">
                                    Shift
                                </th>
                                <th style="min-width: 120px" class="sort align-middle white-space-nowrap" data-sort="id">
                                    Id O/D
                                </th>
                                <th style="min-width: 350px; max-width: 400px;"
                                    class="sort align-middle white-space-nowrap" data-sort="payment">Operator /
                                    Driver
                                </th>
                                <th style="min-width: 100px" class="sort bg-primary align-middle white-space-nowrap">
                                    HM Awal</th>
                                <th style="min-width: 100px"
                                    class="sort bg-primary align-middle white-space-nowrap text-center">
                                    HM Akhir
                                </th>
                                <th style="min-width: 100px" class="sort bg-primary align-middle white-space-nowrap">
                                    HM
                                    Potongan
                                </th>
                                <th style="min-width: 100px" class="sort bg-primary align-middle white-space-nowrap">
                                    HM
                                    Total
                                </th>
                                <th style="min-width: 200px; max-width: 400px;"
                                    class="sort align-middle white-space-nowrap" data-sort="dedi">Dedicated
                                </th>
                                <th style="min-width: 200px; max-width: 400px;"
                                    class="sort align-middle white-space-nowrap" data-sort="lokasi">Lokasi
                                </th>
                                <th style="min-width: 200px; max-width: 400px;"
                                    class="sort align-middle white-space-nowrap" data-sort="rem">Remark
                                </th>
                                <th style="min-width: 100px"
                                    class="bg-secondary text-white align-middle white-space-nowrap">
                                    Jam Awal</th>
                                <th style="min-width: 100px"
                                    class="bg-secondary text-white align-middle white-space-nowrap text-center">
                                    Jam Akhir
                                </th>
                                <th style="min-width: 100px"
                                    class="bg-secondary text-white align-middle white-space-nowrap">Jam
                                    Potongan
                                </th>
                                <th style="min-width: 100px"
                                    class="bg-secondary text-white align-middle white-space-nowrap">Jam Total
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($list as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $res->id }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        {{ $res->tgl }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                        {{ $res->shift_->shift }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        @if ($res->kar_id)
                                            K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap payment">
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
                                    <td class="align-middle text-1000 white-space-nowrap dedi">
                                        @if ($res->dedicated_id)
                                            {{ $res->dedicated_->dedicated }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap lokasi">
                                        @if ($res->lokasi_id)
                                            {{ $res->lokasi_->lokasi }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap rem">
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
@endsection
