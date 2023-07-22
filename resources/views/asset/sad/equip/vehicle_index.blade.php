@extends('layouts.layout')

@section('judul')
    Vehicle | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

@section('konten')
<div class="card mb-2 bg-light shadow-none">
    <div class="bg-holder bg-card d-none d-sm-block"
        style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
    <!--/.bg-holder-->
    <div class="card-header d-flex align-items-center z-index-1 p-0"><img
            src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
        <div class="ms-n3">
            <h6 class="mb-1 text-primary"><i class="fas fa-truck-monster"></i> Rental Performance</h6>
            <h4 class="mb-0 text-primary fw-bold">Vehicle
                <span class="text-info fw-medium"></span>
            </h4>
        </div>
    </div>
</div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                            <a href="{{ route('heavy.l') }}"><button class="btn btn-sm  text-primary"
                                    type="button"><i class="fas fa-snowplow"></i> Heavy</button></a>
                            <a href="{{ route('vehicle.l') }}"><button class="btn active btn-sm text-warning"
                                    type="button"><i class="fas fa-truck-monster"></i>
                                    Vehicle</button></a>
                            <a href="{{ route('support.l') }}"><button class="btn btn-sm text-primary"
                                    type="button"><i class="fas fa-toolbox"></i> Support</button></a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <div class="col-auto pe-0">
                        <div class="btn-group  btn-group-sm mx-2" role="group">
                            <a href="{{ route('vehicle.c') }}"><button class="btn btn-sm btn-falcon-success mx-2"
                                    type="button"><span data-fa-transform="shrink-3" class="fas fa-plus"></span>
                                </button></a>
                            <div class="dropdown font-sans-serif d-inline-block">
                                <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-print"></i></button>
                                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                    <a target="_blank" class="dropdown-item text-success"
                                        href="{{ route('vehicle.p.excel', Auth::user()->id) }}"><i class="fas fa-file-excel"></i>
                                        Print Excel
                                    </a>
                                    <a target="_blank" class="dropdown-item text-warning"
                                        href="{{ route('vehicle.p.pdf', Auth::user()->id) }}"><i class="fas fa-file-pdf"></i>
                                        Print PDF
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","no","unit","kode","tipe","jenis","status","brand"],"page":10,"pagination":true,"filter":{"key":"tipe"}}'>
            <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
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
                </div>&nbsp;
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-bordered mb-0 fs--1 overflow-hidden">
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 150px" class="sort align-middle white-space-nowrap" data-sort="unit">
                                    No Unit
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="kode">
                                    Kode Unit
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                    data-sort="model">
                                    Model
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="tipe">
                                    Tipe
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="jenis">
                                    No Rangka
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="brand">
                                    Brand
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="status">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($vehicle as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            @if ($res->status == 'Aktif')
                                                <form action="{{ route('equip.sakelar', $res->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="status" value="Tidak Aktif">
                                                    <input type="hidden" name="off" value="1">
                                                    <input type="hidden" name="end_op" value="{{ date('d-m-y') }}">
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                            class="fas fa-power-off"></i></button>
                                                </form>
                                            @else
                                                <form action="{{ route('equip.sakelar', $res->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="status" value="Aktif">
                                                    <input type="hidden" name="on" value="1">
                                                    <input type="hidden" name="end_op" value="-">
                                                    <button type="submit" class="btn btn-sm btn-info"><i
                                                            class="fas fa-power-off"></i></button>
                                                </form>
                                            @endif
                                            {{-- <a href="#" class="btn btn-info" type="button"
                                                data-bs-toggle="modal" data-bs-target="#detail-{{ $res->id }}"
                                                title="Detail"><i class="fas fa-info-circle"></i></a> --}}
                                            <a data-bs-toggle="modal" data-bs-target="#edit-{{ $res->id }}"
                                                class="btn btn-warning" data-bs-toggle="tooltip"><span
                                                    class="fas fa-edit"></span></a>
                                            <a data-bs-toggle="modal" data-bs-target="#hapus-{{ $res->id }}"
                                                class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap unit">
                                        @if ($res->no_unit)
                                            {{ $res->no_unit }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap kode">
                                        @if ($res->kode_unit)
                                            {{ $res->kode_unit }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap model">
                                        @if ($res->model)
                                            {{ $res->model }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap tipe">
                                        @if ($res->tipe)
                                            {{ $res->tipe }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap jenis">
                                        @if ($res->no_rangka)
                                            {{ $res->no_rangka }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap brand">
                                        @if ($res->brand)
                                            {{ $res->brand }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap status">
                                        @if ($res->status == 'Aktif')
                                            <span class="badge rounded-pill bg-info">Aktif</span>
                                        @else
                                            @if ($res->status == 'Tidak Aktif')
                                                <span class="badge rounded-pill bg-danger">Tidak Aktif</span>
                                            @else
                                                <span class="id fs--1 text-400"><i>Kosong</i></span>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-3"><button class="btn btn-sm btn-falcon-default me-1"
                        type="button" title="Previous" data-list-pagination="prev"><span
                            class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                        title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                </div>
            @endif
        </div>
        <div class="card-footer py-2 bg-light">
            {{-- // --}}
        </div>
    </div>

    @include('comp.modal.equip.modal_heavy_edit')
    @include('comp.modal.equip.modal_equip_delete')
@endsection
