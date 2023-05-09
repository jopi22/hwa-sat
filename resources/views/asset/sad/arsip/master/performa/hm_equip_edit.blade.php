@extends('layouts.layout')

@section('judul')
    {{ $equip_m->equip_->no_unit }} | Validasi | Edit | HWA &bull; SAT
@endsection

@section('sad_menu')
@include('layouts.panel.sad.vertikal')
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
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
                <a href="{{ route('hm.e') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <a href="{{ route('hm.e.e', Crypt::encryptString($equip_m->equip_id)) }}"><button
                        class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
                <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                    {{ $master->created_at->format('F Y') }}</span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> {{ $equip_m->equip_->tipe }} <span
                        class="fw-semi-bold text-info">{{ $equip_m->equip_->no_unit }}</span></span>
            </div>
        </div>
        <div class="col-auto d-flex align-items-center">
            <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                <a href="{{ route('hm.e.i', Crypt::encryptString($equip_m->equip_id)) }}">
                    <button class="btn btn-sm  text-primary" data-bs-toggle="pill"
                        data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                        aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="false"
                        id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">List</button>
                </a>
                <a href="{{ route('hm.e.e', Crypt::encryptString($equip_m->equip_id)) }}">
                    <button class="btn btn-sm active  text-warning" data-bs-toggle="pill"
                        data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                        aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="true"
                        id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                </a>
                <a href="{{ route('hm.e.c', Crypt::encryptString($equip_m->equip_id)) }}">
                    <button class="btn btn-sm text-success" data-bs-toggle="pill"
                        data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" type="button" role="tab"
                        aria-controls="dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" aria-selected="false"
                        id="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc">Tambah</button>
                </a>
            </div>
            <div class="position-relative">&nbsp;
                <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                        class="fas fa-truck-monster"></i></button>
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
                                                <a href="{{ route('hm.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-info" type="button"><i
                                                        class="fas fa-info-circle"></i></a>
                                                <a href="{{ route('hm.e.e', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-warning" type="button"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="{{ route('hm.e.c', Crypt::encryptString($res->equip_id)) }}"
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

    <form action="{{ route('hm.e.u') }}" method="post">
        @csrf
        <div class="card mb-3">
            <div class="card-header bg-light">
                {{-- // --}}
            </div>
            <div id="tableExample4" data-list='{"valueNames":["ase"]}'>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm  table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"3000px","searching":false,"scrollCollapse":true,"scrollX":true}'>
                            <thead class="bg-200 text-800">
                                <tr class="text-center bg-secondary text-white">
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="ase">
                                        Id HM
                                    </th>
                                    <th style="min-width: 180px" class="sort align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 180px" class="sort align-middle white-space-nowrap"
                                        data-sort="shift">
                                        Shift
                                    </th>
                                    <th style="min-width: 400px; max-width: 400px;"
                                        class="sort align-middle white-space-nowrap" data-sort="name">Operator /
                                        Driver
                                    </th>
                                    <th style="min-width: 150px" class="sort bg-primary align-middle white-space-nowrap">
                                        HM Awal</th>
                                    <th style="min-width: 150px"
                                        class="sort bg-primary align-middle white-space-nowrap text-center">
                                        HM Akhir
                                    </th>
                                    <th style="min-width: 150px" class="sort bg-primary align-middle white-space-nowrap">
                                        HM
                                        Potongan
                                    </th>
                                    <th style="min-width: 150px" class="sort bg-primary align-middle white-space-nowrap">
                                        HM
                                        Total
                                    </th>
                                    <th style="min-width: 300px; max-width: 400px;"
                                        class="sort align-middle white-space-nowrap" data-sort="dedi">Dedicated
                                    </th>
                                    <th style="min-width: 300px; max-width: 400px;"
                                        class="sort align-middle white-space-nowrap" data-sort="lokasi">Lokasi
                                    </th>
                                    <th style="min-width: 400px; max-width: 400px;"
                                        class="sort align-middle white-space-nowrap" data-sort="rem">Remark
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($list as $res)
                                    <input type="hidden" name="delete_id[]" value="{{ $res->id }}">
                                    <input type="hidden" name="id[]" value="{{ $res->id }}">
                                    <input type="hidden" name="equip_id[]" value="{{ $res->equip_id }}">
                                    <input type="hidden" name="master_id[]" value="{{ $res->master_id }}">
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap ase">
                                            {{ $res->id }}
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                            <select required name="tgl[]" class="form-select form-select-sm">
                                                <option value="{{ $res->tgl }}">{{ $res->tgl }}</option>
                                                @if ($master->total == 28)
                                                    <option value="1-{{ $master->periode }}">
                                                        1-{{ $master->periode }}</option>
                                                    <option value="2-{{ $master->periode }}">
                                                        2-{{ $master->periode }}</option>
                                                    <option value="3-{{ $master->periode }}">
                                                        3-{{ $master->periode }}</option>
                                                    <option value="4-{{ $master->periode }}">
                                                        4-{{ $master->periode }}</option>
                                                    <option value="5-{{ $master->periode }}">
                                                        5-{{ $master->periode }}</option>
                                                    <option value="6-{{ $master->periode }}">
                                                        6-{{ $master->periode }}</option>
                                                    <option value="7-{{ $master->periode }}">
                                                        7-{{ $master->periode }}</option>
                                                    <option value="8-{{ $master->periode }}">
                                                        8-{{ $master->periode }}</option>
                                                    <option value="9-{{ $master->periode }}">
                                                        9-{{ $master->periode }}</option>
                                                    <option value="10-{{ $master->periode }}">
                                                        10-{{ $master->periode }}</option>
                                                    <option value="11-{{ $master->periode }}">
                                                        11-{{ $master->periode }}</option>
                                                    <option value="12-{{ $master->periode }}">
                                                        12-{{ $master->periode }}</option>
                                                    <option value="13-{{ $master->periode }}">
                                                        13-{{ $master->periode }}</option>
                                                    <option value="14-{{ $master->periode }}">
                                                        14-{{ $master->periode }}</option>
                                                    <option value="15-{{ $master->periode }}">
                                                        15-{{ $master->periode }}</option>
                                                    <option value="16-{{ $master->periode }}">
                                                        16-{{ $master->periode }}</option>
                                                    <option value="17-{{ $master->periode }}">
                                                        17-{{ $master->periode }}</option>
                                                    <option value="18-{{ $master->periode }}">
                                                        18-{{ $master->periode }}</option>
                                                    <option value="19-{{ $master->periode }}">
                                                        19-{{ $master->periode }}</option>
                                                    <option value="20-{{ $master->periode }}">
                                                        20-{{ $master->periode }}</option>
                                                    <option value="21-{{ $master->periode }}">
                                                        21-{{ $master->periode }}</option>
                                                    <option value="22-{{ $master->periode }}">
                                                        22-{{ $master->periode }}</option>
                                                    <option value="23-{{ $master->periode }}">
                                                        23-{{ $master->periode }}</option>
                                                    <option value="24-{{ $master->periode }}">
                                                        24-{{ $master->periode }}</option>
                                                    <option value="25-{{ $master->periode }}">
                                                        25-{{ $master->periode }}</option>
                                                    <option value="26-{{ $master->periode }}">
                                                        26-{{ $master->periode }}</option>
                                                    <option value="27-{{ $master->periode }}">
                                                        27-{{ $master->periode }}</option>
                                                    <option value="28-{{ $master->periode }}">
                                                        28-{{ $master->periode }}</option>
                                                @else
                                                    @if ($master->total == 29)
                                                        <option value="1-{{ $master->periode }}">
                                                            1-{{ $master->periode }}</option>
                                                        <option value="2-{{ $master->periode }}">
                                                            2-{{ $master->periode }}</option>
                                                        <option value="3-{{ $master->periode }}">
                                                            3-{{ $master->periode }}</option>
                                                        <option value="4-{{ $master->periode }}">
                                                            4-{{ $master->periode }}</option>
                                                        <option value="5-{{ $master->periode }}">
                                                            5-{{ $master->periode }}</option>
                                                        <option value="6-{{ $master->periode }}">
                                                            6-{{ $master->periode }}</option>
                                                        <option value="7-{{ $master->periode }}">
                                                            7-{{ $master->periode }}</option>
                                                        <option value="8-{{ $master->periode }}">
                                                            8-{{ $master->periode }}</option>
                                                        <option value="9-{{ $master->periode }}">
                                                            9-{{ $master->periode }}</option>
                                                        <option value="10-{{ $master->periode }}">
                                                            10-{{ $master->periode }}</option>
                                                        <option value="11-{{ $master->periode }}">
                                                            11-{{ $master->periode }}</option>
                                                        <option value="12-{{ $master->periode }}">
                                                            12-{{ $master->periode }}</option>
                                                        <option value="13-{{ $master->periode }}">
                                                            13-{{ $master->periode }}</option>
                                                        <option value="14-{{ $master->periode }}">
                                                            14-{{ $master->periode }}</option>
                                                        <option value="15-{{ $master->periode }}">
                                                            15-{{ $master->periode }}</option>
                                                        <option value="16-{{ $master->periode }}">
                                                            16-{{ $master->periode }}</option>
                                                        <option value="17-{{ $master->periode }}">
                                                            17-{{ $master->periode }}</option>
                                                        <option value="18-{{ $master->periode }}">
                                                            18-{{ $master->periode }}</option>
                                                        <option value="19-{{ $master->periode }}">
                                                            19-{{ $master->periode }}</option>
                                                        <option value="20-{{ $master->periode }}">
                                                            20-{{ $master->periode }}</option>
                                                        <option value="21-{{ $master->periode }}">
                                                            21-{{ $master->periode }}</option>
                                                        <option value="22-{{ $master->periode }}">
                                                            22-{{ $master->periode }}</option>
                                                        <option value="23-{{ $master->periode }}">
                                                            23-{{ $master->periode }}</option>
                                                        <option value="24-{{ $master->periode }}">
                                                            24-{{ $master->periode }}</option>
                                                        <option value="25-{{ $master->periode }}">
                                                            25-{{ $master->periode }}</option>
                                                        <option value="26-{{ $master->periode }}">
                                                            26-{{ $master->periode }}</option>
                                                        <option value="27-{{ $master->periode }}">
                                                            27-{{ $master->periode }}</option>
                                                        <option value="28-{{ $master->periode }}">
                                                            28-{{ $master->periode }}</option>
                                                        <option value="29-{{ $master->periode }}">
                                                            29-{{ $master->periode }}</option>
                                                    @else
                                                        @if ($master->total == 30)
                                                            <option value="1-{{ $master->periode }}">
                                                                1-{{ $master->periode }}</option>
                                                            <option value="2-{{ $master->periode }}">
                                                                2-{{ $master->periode }}</option>
                                                            <option value="3-{{ $master->periode }}">
                                                                3-{{ $master->periode }}</option>
                                                            <option value="4-{{ $master->periode }}">
                                                                4-{{ $master->periode }}</option>
                                                            <option value="5-{{ $master->periode }}">
                                                                5-{{ $master->periode }}</option>
                                                            <option value="6-{{ $master->periode }}">
                                                                6-{{ $master->periode }}</option>
                                                            <option value="7-{{ $master->periode }}">
                                                                7-{{ $master->periode }}</option>
                                                            <option value="8-{{ $master->periode }}">
                                                                8-{{ $master->periode }}</option>
                                                            <option value="9-{{ $master->periode }}">
                                                                9-{{ $master->periode }}</option>
                                                            <option value="10-{{ $master->periode }}">
                                                                10-{{ $master->periode }}</option>
                                                            <option value="11-{{ $master->periode }}">
                                                                11-{{ $master->periode }}</option>
                                                            <option value="12-{{ $master->periode }}">
                                                                12-{{ $master->periode }}</option>
                                                            <option value="13-{{ $master->periode }}">
                                                                13-{{ $master->periode }}</option>
                                                            <option value="14-{{ $master->periode }}">
                                                                14-{{ $master->periode }}</option>
                                                            <option value="15-{{ $master->periode }}">
                                                                15-{{ $master->periode }}</option>
                                                            <option value="16-{{ $master->periode }}">
                                                                16-{{ $master->periode }}</option>
                                                            <option value="17-{{ $master->periode }}">
                                                                17-{{ $master->periode }}</option>
                                                            <option value="18-{{ $master->periode }}">
                                                                18-{{ $master->periode }}</option>
                                                            <option value="19-{{ $master->periode }}">
                                                                19-{{ $master->periode }}</option>
                                                            <option value="20-{{ $master->periode }}">
                                                                20-{{ $master->periode }}</option>
                                                            <option value="21-{{ $master->periode }}">
                                                                21-{{ $master->periode }}</option>
                                                            <option value="22-{{ $master->periode }}">
                                                                22-{{ $master->periode }}</option>
                                                            <option value="23-{{ $master->periode }}">
                                                                23-{{ $master->periode }}</option>
                                                            <option value="24-{{ $master->periode }}">
                                                                24-{{ $master->periode }}</option>
                                                            <option value="25-{{ $master->periode }}">
                                                                25-{{ $master->periode }}</option>
                                                            <option value="26-{{ $master->periode }}">
                                                                26-{{ $master->periode }}</option>
                                                            <option value="27-{{ $master->periode }}">
                                                                27-{{ $master->periode }}</option>
                                                            <option value="28-{{ $master->periode }}">
                                                                28-{{ $master->periode }}</option>
                                                            <option value="29-{{ $master->periode }}">
                                                                29-{{ $master->periode }}</option>
                                                            <option value="30-{{ $master->periode }}">
                                                                30-{{ $master->periode }}</option>
                                                        @else
                                                            @if ($master->total == 31)
                                                                <option value="1-{{ $master->periode }}">
                                                                    1-{{ $master->periode }}</option>
                                                                <option value="2-{{ $master->periode }}">
                                                                    2-{{ $master->periode }}</option>
                                                                <option value="3-{{ $master->periode }}">
                                                                    3-{{ $master->periode }}</option>
                                                                <option value="4-{{ $master->periode }}">
                                                                    4-{{ $master->periode }}</option>
                                                                <option value="5-{{ $master->periode }}">
                                                                    5-{{ $master->periode }}</option>
                                                                <option value="6-{{ $master->periode }}">
                                                                    6-{{ $master->periode }}</option>
                                                                <option value="7-{{ $master->periode }}">
                                                                    7-{{ $master->periode }}</option>
                                                                <option value="8-{{ $master->periode }}">
                                                                    8-{{ $master->periode }}</option>
                                                                <option value="9-{{ $master->periode }}">
                                                                    9-{{ $master->periode }}</option>
                                                                <option value="10-{{ $master->periode }}">
                                                                    10-{{ $master->periode }}</option>
                                                                <option value="11-{{ $master->periode }}">
                                                                    11-{{ $master->periode }}</option>
                                                                <option value="12-{{ $master->periode }}">
                                                                    12-{{ $master->periode }}</option>
                                                                <option value="13-{{ $master->periode }}">
                                                                    13-{{ $master->periode }}</option>
                                                                <option value="14-{{ $master->periode }}">
                                                                    14-{{ $master->periode }}</option>
                                                                <option value="15-{{ $master->periode }}">
                                                                    15-{{ $master->periode }}</option>
                                                                <option value="16-{{ $master->periode }}">
                                                                    16-{{ $master->periode }}</option>
                                                                <option value="17-{{ $master->periode }}">
                                                                    17-{{ $master->periode }}</option>
                                                                <option value="18-{{ $master->periode }}">
                                                                    18-{{ $master->periode }}</option>
                                                                <option value="19-{{ $master->periode }}">
                                                                    19-{{ $master->periode }}</option>
                                                                <option value="20-{{ $master->periode }}">
                                                                    20-{{ $master->periode }}</option>
                                                                <option value="21-{{ $master->periode }}">
                                                                    21-{{ $master->periode }}</option>
                                                                <option value="22-{{ $master->periode }}">
                                                                    22-{{ $master->periode }}</option>
                                                                <option value="23-{{ $master->periode }}">
                                                                    23-{{ $master->periode }}</option>
                                                                <option value="24-{{ $master->periode }}">
                                                                    24-{{ $master->periode }}</option>
                                                                <option value="25-{{ $master->periode }}">
                                                                    25-{{ $master->periode }}</option>
                                                                <option value="26-{{ $master->periode }}">
                                                                    26-{{ $master->periode }}</option>
                                                                <option value="27-{{ $master->periode }}">
                                                                    27-{{ $master->periode }}</option>
                                                                <option value="28-{{ $master->periode }}">
                                                                    28-{{ $master->periode }}</option>
                                                                <option value="29-{{ $master->periode }}">
                                                                    29-{{ $master->periode }}</option>
                                                                <option value="30-{{ $master->periode }}">
                                                                    30-{{ $master->periode }}</option>
                                                                <option value="31-{{ $master->periode }}">
                                                                    31-{{ $master->periode }}</option>
                                                            @else
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            </select>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                            <select name="shift_id[]" class="form-select form-select-sm">
                                                <option value="{{ $res->shift_id }}">{{ $res->shift_->shift }}
                                                </option>
                                                @foreach ($shift as $item)
                                                    <option value="{{ $item->id }}">{{ $item->shift }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap name">
                                            <select name="kar_id[]" class="form-select form-select-sm">
                                                <option value="{{ $res->kar_id }}">{{ $res->kar_->name }} |
                                                    K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->id }}
                                                </option>
                                                @foreach ($kar as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }} |
                                                        K{{ $item->tgl_gabung->format('ym') }}{{ $item->id }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            <input type="number" class="form-control form-control-sm" name="hm_awal[]"
                                                value="{{ $res->hm_awal }}">
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            <input type="number" class="form-control form-control-sm" name="hm_akhir[]"
                                                value="{{ $res->hm_akhir }}">
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            <input type="number" class="form-control form-control-sm" name="hm_pot[]"
                                                value="{{ $res->hm_pot }}">
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            <input disabled type="number" class="form-control form-control-sm"
                                                value="{{ $res->hm_total }}">
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap dedi">
                                            <select name="dedicated_id[]" class="form-select form-select-sm">
                                                @if ($res->dedicated_id)
                                                    <option value="{{ $res->dedicated_id }}">
                                                        {{ $res->dedicated_->dedicated }}</option>
                                                @else
                                                    <option></option>
                                                @endif
                                                @foreach ($dedi as $item)
                                                    <option value="{{ $item->id }}">{{ $item->dedicated }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap lokasi">
                                            <select name="lokasi_id[]" class="form-select form-select-sm">
                                                @if ($res->lokasi_id)
                                                    <option value="{{ $res->lokasi_id }}">
                                                        {{ $res->lokasi_->lokasi }}
                                                    </option>
                                                @else
                                                    <option></option>
                                                @endif
                                                @foreach ($lok as $item)
                                                    <option value="{{ $item->id }}">{{ $item->lokasi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap rem">
                                            <input type="text" name="remark[]" class="form-control form-control-sm"
                                                value="{{ $res->remark }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <input type="hidden" name="equip_id_bro" value="{{ $equip_m->equip_id }}">

                    <input type="hidden" name="delete_id_m" value="{{ $equip_m->id }}">
                    <input type="hidden" name="id_m" value="{{ $equip_m->id }}">
                    <input type="hidden" name="master_id_m" value="{{ $equip_m->master_id }}">
                    <input type="hidden" name="equip_id_m" value="{{ $equip_m->equip_id }}">
                    <input type="hidden" name="kode_unik" value="{{ $equip_m->kode_unik }}">
                    <input type="hidden" name="hm_awal_m" value="{{ $hm_awal }}">
                    <input type="hidden" name="hm_akhir_m" value="{{ $hm_akhir }}">
                    <input type="hidden" name="total_pot_m" value="{{ $total_pot }}">
                    <input type="hidden" name="total_m" value="{{ $total }}">
                @endif
            </div>
            <div class="card-footer bg-200">
                <button class="btn btn-sm btn-warning" type="submit"><i class="fas fa-save"></i>
                    Update</button>
            </div>
        </div>
    </form>
@endsection
