@extends('layouts.layout')

@section('judul')
    HM Equipment | HWA-HRIS
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
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
                <span class=" fw-semi-bold text-danger"> Hour Meter Equipment</span>
            </div>
        </div>
        @include('comp.button.kar_btn')
    </div>

    @include('comp.alert')

    <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5><button class="btn-close text-reset" type="button"
                data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            {{-- // --}}
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <h5 class="mb-0" data-anchor="data-anchor"><i class="fas fa-snowplow"></i>&nbsp; Kelola Data HM
                        Equipment</h5>
                </div>
                <div class="col-auto ms-auto">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <button class="btn btn-sm active text-primary" data-bs-toggle="pill"
                            data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                            aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="true"
                            id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">List</button>
                        <button class="btn btn-sm text-warning" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                        <button class="btn btn-sm text-success" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc">Tambah</button>
                    </div>
                </div>
                <div class="col-auto ms-0">
                    <button class="btn btn-primary btn-sm mb-1" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Right Offcanvas</button>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="tab-content">

                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77"
                    id="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">
                    <div id="tableExample4"
                        data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"page":10,"pagination":true,"filter":{"key":"payment"}}'>
                        <div class="row justify-content-left ms-0 g-0">
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
                        @if ($cek == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="table-responsive scrollbar">
                                <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                                    data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center">
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="no">
                                                Id HM
                                            </th>
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="tgl">
                                                Tanggal
                                            </th>
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="shift">
                                                Shift
                                            </th>
                                            <th style="min-width: 120px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="id">
                                                Id O/D
                                            </th>
                                            <th style="min-width: 350px; max-width: 400px;"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="name">Operator /
                                                Driver
                                            </th>
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap">
                                                HM Awal</th>
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap text-center">
                                                HM Akhir
                                            </th>
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap">
                                                HM
                                                Potongan
                                            </th>
                                            <th style="min-width: 100px"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap">
                                                HM
                                                Total
                                            </th>
                                            <th style="min-width: 200px; max-width: 400px;"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="dedi">Dedicated
                                            </th>
                                            <th style="min-width: 200px; max-width: 400px;"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="lokasi">Lokasi
                                            </th>
                                            <th style="min-width: 200px; max-width: 400px;"
                                                class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                data-sort="rem">Remark
                                            </th>
                                            <th style="min-width: 100px"
                                                class="bg-light text-black align-middle white-space-nowrap">
                                                Jam Awal</th>
                                            <th style="min-width: 100px"
                                                class="bg-light text-black align-middle white-space-nowrap text-center">
                                                Jam Akhir
                                            </th>
                                            <th style="min-width: 100px"
                                                class="bg-light text-black align-middle white-space-nowrap">Jam
                                                Potongan
                                            </th>
                                            <th style="min-width: 100px"
                                                class="bg-light text-black align-middle white-space-nowrap">Jam
                                                Total
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list">
                                        @foreach ($all as $res)
                                            <tr id="index_{{ $res->id }}"
                                                class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                    {{ $res->id }}</td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                    {{ $res->tgl }}</td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                                    {{ $res->shift_->shift }}
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                    K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap name">
                                                    {{ $res->kar_->name }}
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
                                                    {{ $res->dedicated_->dedicated }}
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap lokasi">
                                                    {{ $res->lokasi_->lokasi }}
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap rem">
                                                    {{ $res->remark }}
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

                <div class="tab-pane code-tab-pane" role="tabpanel"
                    aria-labelledby="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc"
                    id="dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc">
                    asdasd
                </div>

                <div class="tab-pane code-tab-pane" role="tabpanel" aria-labelledby="tab-dom-91d68b2e-028d-47b6-9a26-2"
                    id="dom-91d68b2e-028d-47b6-9a26-2">
                    asu
                </div>

            </div>
        </div>
    </div>
@endsection
