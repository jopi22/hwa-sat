@extends('layouts.layout')

@section('judul')
    Kelola Hours Meter | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
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

@section('konten')
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                <div>
                    <h6 class="text-primary fs--1 mb-0"><i class="fas fa-truck-monster"></i> Rental Performance
                    </h6>
                    <h4 class="text-primary fw-bold mb-0">Kelola Hours Meter</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <h6 class="text-danger mb-0">Rekapitulasi Master :</h6>
                    </div>
                    <div class="col-md-auto">
                        <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/illustrations/ticket-bg.png') }}"
                    alt="" width="150" />
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card overflow-hidden mb-3">
        <div class="card-header bg-light">
            <div class="row flex-between-left">
                <div class="col-auto ms-2">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('hm.create') }}"><button class="btn active btn-sm text-warning" type="button"><i
                                    class="fas fa-stopwatch"></i> Reguler</button></a>
                        <a href="{{ route('r.hm.m') }}"><button class="btn btn-sm text-primary" type="button"><i
                                    class="fas fa-clock"></i> Manual</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="tableExample4"
            data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
            <div class="row mt-2 mb-2 ms-3 g-0 flex-between-end">
                <div class="col-6">
                    <div class="row g-1">
                        <div class="col-sm-6">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 ">
                            <select class="form-select form-select-sm" aria-label="Bulk actions"
                                data-list-filter="data-list-filter">
                                <option selected="" value="">Filter: Tipe</option>
                                <option value="Excavator">Excavator</option>
                                <option value="Vibro">Vibro</option>
                                <option value="Bulldozer">Bulldozer</option>
                                <option value="Dump Truck">Dump Truck</option>
                                <option value="Pick Up">Pick Up</option>
                                <option value="Truck Loader">Truck Loader</option>
                                <option value="Truck Tangki">Truck Tangki</option>
                                <option value="Peralatan Las">Peralatan Las</option>
                                <option value="Kompresor">Kompresor</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            @if ($cek_perform < 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="bg-secondary text-white align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="unit">
                                    No Unit
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="kode">
                                    Kode Unit
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="model">
                                    Model
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="jenis">
                                    Jenis
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="payment">
                                    Tipe
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="brand">
                                    Brand
                                </th>
                                <th style="min-width: 80px; max-width: 400px;"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="lok">
                                    Alokasi
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($equip as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $loop->iteration }}</td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a href="{{ route('r.hm.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                class="btn btn-info" type="button"><i
                                                    class="fas fa-info-circle"></i></a>
                                            <a href="{{ route('r.hm.e.e', Crypt::encryptString($res->equip_id)) }}"
                                                class="btn btn-warning" type="button"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('r.hm.e.c', Crypt::encryptString($res->equip_id)) }}"
                                                class="btn btn-success" type="button"><i
                                                    class="fas fa-plus-square"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap unit">
                                        @if ($res->equip_id)
                                            {{ $res->equip_->no_unit }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap kode">
                                        @if ($res->equip_id)
                                            {{ $res->equip_->kode_unit }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap model">
                                        @if ($res->equip_id)
                                            {{ $res->equip_->model }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap jenis">
                                        @if ($res->equip_id)
                                            {{ $res->equip_->jenis }}
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
                                    <td class="align-middle text-1000 text-center white-space-nowrap brand">
                                        @if ($res->equip_id)
                                            {{ $res->equip_->brand }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap name">
                                        @if ($res->alokasi)
                                            {{ $res->alokasi }}
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
        <div class="card-footer bg-light d-flex flex-between-end py-2">
            {{-- // --}}
        </div>
    </div>

@endsection
