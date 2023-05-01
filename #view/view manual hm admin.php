@extends('layouts.layout')

@section('judul')
    Kelola Hour Meter | HWA-HRIS
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    {{-- // Header // --}}
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-arrow-left text-primary"></i></button></a>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('hm.p') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-spinner text-primary"></i></button></a>
                <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                    {{ date('F Y') }}</span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-danger"> Kelola Hour Meter</span>
            </div>
        </div>
        @include('comp.button.kar_btn')
    </div>

    @include('comp.alert')

    <div class="card overflow-hidden mb-3">
        <div class="card-header p-0">
            <div class="row">
                <div class="col-auto">
                    <ul class="nav nav-tabs border-0 top-courses-tab flex-nowrap" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 " href="{{ route('hm.p') }}">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center">
                                        <span class="mt-auto far fas fa-clipboard-list fs-2"></span>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap">Performa </h6>
                                        <h6 class="mb-0 lh-1">Semua Data</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false"
                                href="{{ route('hm.e') }}">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center">
                                        <span class="mt-auto fas fas fa-snowplow fs-2"></span>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap">Performa </h6>
                                        <h6 class="mb-0 lh-1">Equipment</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false"
                                href="{{ route('hm.k') }}">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center"><span
                                            class="mt-auto fas fa-users fs-2"></span></div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap">Performa </h6>
                                        <h6 class="mb-0 lh-1">Operator & Driver</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 active "
                                href="{{ route('hm.m') }}">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center"><span
                                            class="mt-auto fas fa-edit fs-2"></span></div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap">Performa </h6>
                                        <h6 class="mb-0 lh-1">Manual</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-0">

            <div id="tableExample4"
                data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"page":10,"pagination":true,"filter":{"key":"payment"}}'>
                <div class="row justify-content-center mt-2 g-0">
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
                            <option selected="" value="">Filter No Unit</option>
                            @foreach ($equip as $item)
                                <option value="{{ $item->no_unit }}">{{ $item->no_unit }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered fs--1 mb-0 overflow-hidden">
                        <thead class="bg-200 text-900">
                            <tr class="text-center">
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    Id HM
                                </th>
                                <th style="min-width: 130px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tanggal
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="shift">
                                    Shift
                                </th>
                                <th style="min-width: 130px" class="sort align-middle white-space-nowrap"
                                    data-sort="payment">No
                                    Unit
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="id">
                                    Id O/D
                                </th>
                                <th style="min-width: 300px" class="sort align-middle white-space-nowrap"
                                    data-sort="name">
                                    Operator / Driver
                                </th>
                                <th style="min-width: 100px" class="align-middle white-space-nowrap">
                                    Jam Awal</th>
                                <th style="min-width: 100px" class="align-middle white-space-nowrap text-center">
                                    Jam Akhir
                                </th>
                                <th style="min-width: 100px" class="align-middle white-space-nowrap">Jam Potongan
                                </th>
                                <th style="min-width: 100px" class="align-middle white-space-nowrap">Jam Total
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                    data-sort="dedi">
                                    Dedicated
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                    data-sort="lokasi">
                                    Lokasi
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                    data-sort="rem">
                                    Remark
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            <form action="" method="post">
                                <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-black text-center white-space-nowrap no">
                                        <button class="btn btn-block btn-sm btn-success"><i
                                                class="fas fa-save"></i></button>
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap tgl">
                                        <input disabled type="text" class="form-control form-control-sm"
                                            name="name" value="{{ date('d-m-Y') }}">
                                        <input type="hidden" name="tgl" value="{{ date('d-m-Y') }}">
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap shift">
                                        <select class="form-control form-control-sm" name="shift_id">
                                            <option></option>
                                            <option value="1">Shift 1</option>
                                            <option value="2">Shift 2</option>
                                        </select>
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap payment">
                                        <select class="form-control form-control-sm" name="equip_id">
                                            <option></option>
                                            @foreach ($equip as $e)
                                                <option value="{{ $e->id }}">{{ $e->no_unit }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap id">
                                        <input disabled type="text" class="form-control form-control-sm text-center"
                                            value="-">
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap name">
                                        <select class="form-control form-control-sm" name="kar_id">
                                            <option></option>
                                            @foreach ($kar as $k)
                                                <option value="{{ $k->id }}">{{ $k->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        <input type="number" class="form-control form-control-sm" name="jam_awal">
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        <input type="number" class="form-control form-control-sm" name="jam_akhir">
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        <input type="number" class="form-control form-control-sm" name="jam_pot">
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        <input type="number" class="form-control form-control-sm" name="jam_total">
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap dedi">
                                        <select class="form-control form-control-sm" name="dedicated_id">
                                            <option></option>
                                            @foreach ($dedi as $d)
                                                <option value="{{ $d->id }}">{{ $d->dedicated }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap lokasi">
                                        <select class="form-control form-control-sm" name="lokasi_id">
                                            <option></option>
                                            @foreach ($lok as $l)
                                                <option value="{{ $l->id }}">{{ $l->lokasi }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap rem">
                                        <input type="text" maxlength="50" class="form-control form-control-sm"
                                            name="remark">
                                    </td>
                                </tr>
                            </form>
                            @foreach ($all as $res)
                                <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-black text-center white-space-nowrap no">
                                        {{ $res->id }}</td>
                                    <td class="align-middle text-black text-center white-space-nowrap tgl">
                                        {{ $res->tgl }}</td>
                                    <td class="align-middle text-black white-space-nowrap shift">
                                        {{ $res->shift_->shift }}
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap payment">
                                        {{ $res->equip_->no_unit }}
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap id">
                                        K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap name">
                                        {{ $res->kar_->name }}
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        {{ $res->jam_awal }}
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        {{ $res->jam_akhir }}
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        {{ $res->jam_pot }}
                                    </td>
                                    <td class="align-middle text-black text-center white-space-nowrap">
                                        {{ $res->jam_total }}
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap dedi">
                                        {{ $res->dedicated_->dedicated }}
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap lokasi">
                                        {{ $res->lokasi_->lokasi }}
                                    </td>
                                    <td class="align-middle text-black white-space-nowrap rem">
                                        {{ $res->remark }}
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
            </div>
        </div>
        <div class="card-footer bg-light py-3">
        </div>
    </div>
@endsection
