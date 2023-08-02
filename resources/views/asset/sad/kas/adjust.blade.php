@extends('layouts.layout')

@section('judul')
    Adjustment | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    @if ($master->periode == $periode)
        @if ($master->ket2 == 1)
        <div class="card mb-3 bg-100 shadow-none border">
            <div class="row gx-0 flex-between-center">
                <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                        src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                        width="90" />
                    <div>
                        <h6 class="text-primary fs--1 mb-0"><i class="fas fa-coins"></i> Finance Division
                        </h6>
                        <h4 class="text-primary fw-bold mb-0">Adjustment</h4>
                    </div>
                </div>
                <div class="col-sm-auto d-flex align-items-center">
                    <form class="row align-items-center g-3">
                        <div class="col-auto">
                            <h6 class="text-info mb-0">Master Present :</h6>
                        </div>
                        <div class="col-md-auto">
                            <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                        </div>
                    </form>
                    <img class="ms-2 d-md-none d-lg-block"
                        src="{{ asset('assets/img/illustrations/ticket-bg.png') }}" alt=""
                        width="150" />
                </div>
            </div>
        </div>

            @include('comp.alert')

            <div class="card overflow-hidden mb-3">
                <div class="card-header bg-light py-2">
                    {{-- <div class="row flex-between-left">
                        <div class="col-auto ms-2">
                            <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                                <a href="{{ route('hm.e') }}"><button class="btn btn-sm text-primary" type="button"><i
                                            class="far fa-plus-square"></i> Tunjangan</button></a>
                                <a href="{{ route('adjust') }}"><button class="btn active btn-sm text-warning"
                                        type="button"><i class="far fa-minus-square"></i> Adjustmen</button></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div id="tableExample4"
                    data-list='{"valueNames":["id","ket","tgl","kar","kat","nom","lokasi","shift","rem"],"filter":{"key":"kat"}}'>
                    <div class="row justify-content-left ms-3 mt-3 g-0">
                        <div class="col-auto col-sm-3">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>&nbsp;
                        <div class="col-auto col-sm-3">
                            <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                data-list-filter="data-list-filter">
                                <option selected="" value="">Filter : Kategori</option>
                                <option value="Tunjangan">Tunjangan</option>
                                <option value="Pinjaman">Pinjaman</option>
                            </select>
                        </div>
                        <div class="col-auto col-sm-3">
                            <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span
                                    class="fas fa-plus text-success" data-fa-transform="shrink-3"></span><span
                                    class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                            </button>
                        </div>
                    </div>
                    @if ($cek == 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-bordered mb-0 fs--1"
                                data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                <thead class="bg-secondary text-white">
                                    <tr class="text-center">
                                        <th style="min-width: 20px" class="align-middle white-space-nowrap">
                                            #
                                        </th>
                                        <th style="min-width: 50px" class="align-middle white-space-nowrap">
                                            Aksi
                                        </th>
                                        <th style="min-width: 180px" class="sort align-middle white-space-nowrap"
                                            data-sort="ket">
                                            Keterangan
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap"
                                            data-sort="tgl">
                                            Tanggal
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap"
                                            data-sort="kar">
                                            Karyawan
                                        </th>
                                        <th style="min-width: 250px; max-width: 400px;"
                                            class="sort align-middle white-space-nowrap" data-sort="kat">Kategori
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-primary align-middle white-space-nowrap">
                                            Nominal (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($adjust as $res)
                                        <tr id="index_{{ $res->id }}"
                                            class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-center text-1000 white-space-nowrap ">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap">
                                                <div class="btn-group  btn-group-sm" role="group">
                                                    <a href="javascript:void(0)" data-bs-target="#edit-{{ $res->id }}"
                                                        data-bs-toggle="modal" class="btn btn-warning" type="button"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#hapus-{{ $res->id }}"
                                                        data-id="{{ $res->id }}" class="btn btn-danger"
                                                        type="button"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap ket">
                                                @if ($res->ket)
                                                    {{ $res->ket }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                @if ($res->tgl)
                                                    {{ $res->tgl }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap kar">
                                                @if ($res->kar_id)
                                                    {{ $res->kar_->name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap kat">
                                                @if ($res->kategori)
                                                    @if ($res->kategori == 'Tunjangan')
                                                        <span class="text-success">{{ $res->kategori }}</span>
                                                    @else
                                                        <span class="text-danger">{{ $res->kategori }}</span>
                                                    @endif
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-end text-1000 white-space-nowrap nom">
                                                @if ($res->nominal)
                                                    <h6 data-countup='{"duration":0,"endValue":{{ $res->nominal }}}'>0
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
                <div class="card-footer bg-light">
                    {{-- // --}}
                </div>
            </div>


            @include('comp.modal.kas.modal_adjust_create')
            @include('comp.modal.kas.modal_adjust_edit')
            @include('comp.modal.kas.modal_adjust_delete')
        @else
            @include('comp.card.card404_equipment')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
