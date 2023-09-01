@extends('layouts.layout')

@section('judul')
    {{ $equip_m->equip_->no_unit }} | Rekap Biaya Sewa | HWA &bull; SAT
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

@section('konten')
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <div>
                <span class="badge bg-soft-info text-info bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                    {{ date('F Y') }}</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <a class="btn btn-falcon-default btn-sm" href="{{ route('unit.sewa') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Back to Main Table">
                    <span class="fas fa-list"></span>
                </a>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-primary"> Rekap Biaya Sewa / {{ $equip_m->equip_->tipe }} / <span
                        class="fw-semi-bold text-info">{{ $equip_m->equip_->no_unit }}</span></span>
            </div>
            <div class="col-auto d-flex align-items-center">
                <div class="position-relative">&nbsp;
                    <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fas fa-truck-monster"></i></button>
                </div>
                <div class="position-relative">&nbsp;
                    <div class="dropdown font-sans-serif d-inline-block">
                        <a target="_blank"
                            href="{{ route('hm.e.p.excel', Crypt::EncryptString($equip_m->equip_id)) }}"><button
                                class="btn btn-sm btn-falcon-success" type="button"><i
                                    class="fas fa-file-excel"></i></button></a>
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
                                                <a href="{{ route('unit.sewa.i', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-info" type="button"><i
                                                        class="fas fa-info-circle"></i></a>
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
                <div class="col-sm-1">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-danger fw-normal">Potongan HM</h6>
                            <h6 class=" text-danger" data-countup='{"endValue":{{ $hm_pot }}}'>0
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700 fw-normal">Total HM</h6>
                            <h6 class=" text-700" data-countup='{"endValue":{{ $hm_total }}}'>0</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="fw-normal text-700">Total HM Manual</h6>
                            <h6 class=" text-700" data-countup='{"endValue":{{ $hm_jam }}}'>0</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="fw-normal text-primary">Grand Total HM</h6>
                            <h6 class=" text-primary" data-countup='{"endValue":{{ $hm_grand }}}'>0
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="fw-normal text-success">Standar Biaya Sewa per HM</h6>
                            <h6 class="text-success" data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $str_sewa }}}'>
                                0
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div>
                        <div class="text-center">
                            <h6 class="fw-normal text-primary">Total Biaya Sewa</h6>
                            <h6 class="text-primary" data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $tot_sewa }}}'>
                                0
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header bg-light d-flex flex-between-center py-1">
            {{-- // --}}
        </div>
        <div id="tableExample4"
            data-list='{"valueNames":["id","no","tgl","nik","payment","dedi","lokasi","shift","remark"],"filter":{"key":"payment"}}'>
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
                                    #
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
                                    NIK
                                </th>
                                <th style="min-width: 250px" class="sort align-middle white-space-nowrap"
                                    data-sort="payment">Operator /
                                    Driver
                                </th>
                                <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                    HM Awal</th>
                                <th style="min-width: 80px"
                                    class="sort bg-primary align-middle white-space-nowrap text-center">
                                    HM Akhir
                                </th>
                                <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                    HM
                                    Total
                                </th>
                                <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                    HM
                                    Potongan
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                    data-sort="remark">Remark
                                </th>
                                <th style="min-width: 80px"
                                    class="bg-secondary text-white align-middle white-space-nowrap">
                                    Jam Awal</th>
                                <th style="min-width: 80px"
                                    class="bg-secondary text-white align-middle white-space-nowrap text-center">
                                    Jam Akhir
                                </th>
                                <th style="min-width: 80px"
                                    class="bg-secondary text-white align-middle white-space-nowrap">Jam Total
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($list as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $loop->iteration }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        {{ $res->tgl }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                        {{ $res->shift_->shift }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap nik">
                                        @if ($res->kar_id)
                                            {{ $res->kar_->username }}
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
                                        @if ($res->hm_total)
                                            {{ $res->hm_total }}
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
                                    <td class="align-middle text-1000 white-space-nowrap remark">
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
