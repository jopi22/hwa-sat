@extends('layouts.layout')

@section('judul')
    Performa HM | Validasi | Validasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
@endsection


@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-1.png') }});"></div>
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/illustrations/bg-wave.png') }}" alt="" width="56" />
            <div class="ms-n0">
                <h6 class="mb-1 text-primary"><i class="fas fa-stopwatch"></i> Hours Meter <span class="
                    text-danger">Validasi </span><span
                        class="mb-1 text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                <h4 class="mb-0 text-primary fw-bold">Performa Hours Meter </h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card overflow-hidden mb-3">
        <div class="card-header bg-light">
            <div class="row flex-between-left">
                <div class="col-auto ms-2">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <button class="btn btn-sm active text-primary" data-bs-toggle="pill"
                            data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                            aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="true"
                            id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77"><i class="fas fa-list"></i></button>
                        <button class="btn btn-sm text-primary" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2"><i class="fas fa-truck-monster"></i></button>
                        <button class="btn btn-sm text-primary" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-22" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-22" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-22"><i class="fas fa-users"></i></button>
                        <button class="btn btn-sm text-primary" data-bs-toggle="pill" data-bs-target="#asdasda"
                            type="button" role="tab" aria-controls="asdasda" aria-selected="false" id="tab-asdasda"><i
                                class="fas fa-chart-bar"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="tab-content">

                {{-- // List // --}}
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77"
                    id="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">
                    <div id="tableExample4"
                        data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"page":15,"pagination":true,"filter":{"key":"payment"}}'>
                        <div class="row mt-2 mb-2 ms-3 g-0">
                            <div class="col-sm-3">
                                <form>
                                    <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                            type="search" placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>&nbsp;
                            <div class="col-sm-3 ">
                                <select class="form-select form-select-sm" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Filter: No Unit</option>
                                    @foreach ($equipment as $item)
                                        <option value="{{ $item->no_unit }}">{{ $item->no_unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @if ($cek_perform == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="table-responsive scrollbar">
                                <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                                    data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true}'>
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center bg-secondary text-white">
                                            <th style="min-width: 50px" class="align-middle white-space-nowrap"
                                                data-sort="no">
                                                Aksi
                                            </th>
                                            <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                                data-sort="no">
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
                                            <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                                data-sort="payment">No
                                                Unit
                                            </th>
                                            <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                                data-sort="id">
                                                Id O/D
                                            </th>
                                            <th style="min-width: 350px; max-width: 400px;"
                                                class="sort align-middle white-space-nowrap" data-sort="name">
                                                Operator
                                                / Driver
                                            </th>
                                            <th style="min-width: 120px"
                                                class="sort bg-primary align-middle white-space-nowrap">
                                                HM Awal</th>
                                            <th style="min-width: 120px"
                                                class="sort bg-primary align-middle white-space-nowrap text-center">
                                                HM Akhir
                                            </th>
                                            <th style="min-width: 120px"
                                                class="sort bg-primary align-middle white-space-nowrap">
                                                HM
                                                Potongan
                                            </th>
                                            <th style="min-width: 120px"
                                                class="sort bg-primary bg-primary align-middle white-space-nowrap">
                                                HM Total
                                            </th>
                                            <th style="min-width: 300px; max-width: 400px;"
                                                class="sort align-middle white-space-nowrap" data-sort="dedi">
                                                Dedicated
                                            </th>
                                            <th style="min-width: 300px; max-width: 400px;"
                                                class="sort align-middle white-space-nowrap" data-sort="lokasi">
                                                Lokasi
                                            </th>
                                            <th style="min-width: 300px; max-width: 400px;"
                                                class="sort align-middle white-space-nowrap" data-sort="rem">
                                                Remark
                                            </th>
                                            <th style="min-width: 120px" class="align-middle white-space-nowrap">
                                                Jam Awal</th>
                                            <th style="min-width: 120px"
                                                class="align-middle white-space-nowrap text-center">
                                                Jam Akhir
                                            </th>
                                            <th style="min-width: 120px" class="align-middle white-space-nowrap">
                                                Jam
                                                Potongan
                                            </th>
                                            <th style="min-width: 120px" class="align-middle white-space-nowrap">
                                                Jam
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list">
                                        @foreach ($perform_list as $res)
                                            <tr id="index_{{ $res->id }}"
                                                class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="align-middle text-center text-1000 white-space-nowrap">
                                                    <button data-bs-toggle="modal"
                                                        data-bs-target="#info-pfm-{{ $res->id }}"
                                                        class="btn btn-info btn-sm"><span
                                                            class="fas fa-info-circle"></span>
                                                    </button>
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                    {{ $res->id }}</td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                    @if ($res->tgl)
                                                        {{ $res->tgl }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                                    @if ($res->shift_id)
                                                        {{ $res->shift_->shift }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                                    @if ($res->equip_id)
                                                        {{ $res->equip_->no_unit }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                    @if ($res->kar_id)
                                                        K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap name">
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
                            <div class="mb-3 mt-3 d-flex justify-content-center">
                                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                    data-list-pagination="prev">
                                    <span class="fas fa-chevron-left"></span>
                                </button>
                                <ul class="pagination mb-0"></ul>
                                <ul class="pagination mb-0"></ul>
                                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                    data-list-pagination="next">
                                    <span class="fas fa-chevron-right"> </span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- // Unit // --}}
                <div class="tab-pane code-tab-pane" role="tabpanel"
                    aria-labelledby="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" id="dom-91d68b2e-028d-47b6-9a26-2">
                    <div id="tableExample4"
                        data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
                        <div class="row mt-2 mb-2 ms-3 g-0">
                            <div class="col-sm-3">
                                <form>
                                    <div class="input-group"><input
                                            class="form-control form-control-sm shadow-none search" type="search"
                                            placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>&nbsp;
                            <div class="col-sm-3 ">
                                <select class="form-select form-select-sm" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Filter: Tipe</option>
                                    @foreach ($equipment as $item)
                                        <option value="{{ $item->tipe }}">{{ $item->tipe }}</option>
                                    @endforeach
                                </select>
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
                                                class="bg-secondary text-white align-middle white-space-nowrap">
                                                Aksi
                                            </th>
                                            <th style="min-width: 50px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="no">
                                                #
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="tgl">
                                                No Unit
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="payment">
                                                Tipe
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="id">
                                                Brand
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-primary text-white align-middle white-space-nowrap">
                                                HM Awal</th>
                                            <th style="min-width: 150px"
                                                class="sort bg-primary text-white align-middle white-space-nowrap">
                                                HM Akhir
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-primary text-white align-middle white-space-nowrap">
                                                HM
                                                Potongan
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-primary text-white align-middle white-space-nowrap">
                                                HM
                                                Total
                                            </th>
                                            <th style="min-width: 150px; max-width: 400px;"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="name">Alokasi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list">
                                        @foreach ($equip as $res)
                                            <tr id="index_{{ $res->id }}"
                                                class="btn-reveal-trigger text-1000 fw-semi-bold">
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
                                                <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                    {{ $loop->iteration }}</td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                    @if ($res->equip_->no_unit)
                                                        {{ $res->equip_->no_unit }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                                    @if ($res->equip_->tipe)
                                                        {{ $res->equip_->tipe }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                    @if ($res->equip_->brand_id)
                                                        {{ $res->equip_->brand_id }}
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
                                                    @if ($res->total_pot)
                                                        {{ $res->total_pot }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                                    @if ($res->grand_total)
                                                        {{ $res->grand_total }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap name">
                                                    PT. CMI
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- // O/D // --}}
                <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-91d68b2e-028d-47b6-9a26-22"
                    id="dom-91d68b2e-028d-47b6-9a26-22">
                    <div id="tableExample4"
                        data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                        <div class="row mt-2 mb-2 ms-3 g-0">
                            <div class="col-sm-3">
                                <form>
                                    <div class="input-group"><input
                                            class="form-control form-control-sm shadow-none search" type="search"
                                            placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>&nbsp;
                            <div class="col-sm-3 ">
                                <select class="form-select form-select-sm" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Filter: Jabatan</option>
                                    <option value="Operator Exca">Operator Excavator</option>
                                    <option value="Operator Vibro">Operator Vibro</option>
                                    <option value="Driver Dump Truck">Driver Dump Truck</option>
                                </select>
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
                                                class="bg-secondary text-white align-middle white-space-nowrap">
                                                Aksi
                                            </th>
                                            <th style="min-width: 50px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="no">
                                                #
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
                                            <th style="min-width: 100px"
                                                class="sort bg-primary text-white align-middle white-space-nowrap"
                                                data-sort="hm">
                                                Grand Total HM
                                            </th>
                                            <th style="min-width: 150px"
                                                class="sort bg-primary text-white align-middle white-space-nowrap"
                                                data-sort="ins">
                                                Total Insentif (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list">
                                        @foreach ($kar_list as $res)
                                            <tr id="index_{{ $res->id }}"
                                                class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                    <a href="{{ route('r.hm.k.i', Crypt::encryptString($res->id)) }}"
                                                        class="btn btn-info btn-sm"><span
                                                            class="fas fa-info-circle"></span>
                                                    </a>
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                    {{ $loop->iteration }}</td>
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
                                                <td class="align-middle text-1000 text-center white-space-nowrap hm">
                                                    @if ($res->hm_total)
                                                        {{ $res->hm_total }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap ins">
                                                    @if ($res->insentif)
                                                        <h6 data-countup='{"duration":0,"endValue":{{ $res->insentif }}}'>
                                                            0
                                                        </h6>
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

                {{-- // Grafik // --}}
                <div class="tab-pane code-tab-pane " role="tabpanel" aria-labelledby="tab-asdasda" id="asdasda">
                    <div class="card">
                        <div class="card-header d-flex flex-between-center bg-light py-2">
                            <h6 class="mb-0">Traffic source</h6>
                            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                                    type="button" id="dropdown-traffic-channel" data-bs-toggle="dropdown"
                                    data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                        class="fas fa-ellipsis-h fs--2"></span></button>
                                <div class="dropdown-menu dropdown-menu-end border py-2"
                                    aria-labelledby="dropdown-traffic-channel"><a class="dropdown-item"
                                        href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                        href="#!">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/traffic-channels.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/theme.js-->
                            <div class="echart-traffic-channels h-100" data-echart-responsive="true"></div>
                        </div>
                        <div class="card-footer bg-light py-2">
                            <div class="row flex-between-center g-0">
                                <div class="col-auto"><select class="form-select form-select-sm audience-select-menu">
                                        <option value="week" selected="selected">Last 7 days</option>
                                        <option value="month">Last month</option>
                                        <option value="year">Last Year</option>
                                    </select></div>
                                <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium"
                                        href="#!">Acquisition overview<span
                                            class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer bg-light py-3">
        </div>
    </div>
    @include('comp.modal.hm.modal_hm_info')
@endsection
