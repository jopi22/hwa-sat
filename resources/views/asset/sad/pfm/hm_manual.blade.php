@extends('layouts.layout')

@section('judul')
    HM Manual | HWA &bull; SAT
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
            <div class="card mb-3 bg-light shadow-none">
                <div class="bg-holder bg-card d-none d-sm-block"
                    style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-header d-flex align-items-center z-index-1 p-0">
                    <img src="{{ asset('assets/img/illustrations/reports-bg.png') }}" alt="" width="96" />
                    <div class="ms-n3">
                        <h6 class="mb-1 text-primary"><i class="fas fa-stopwatch"></i> Hours Meter <span
                                class="mb-1 text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                        <h4 class="mb-0 text-primary fw-bold">Hours Meter Manual </h4>
                    </div>
                </div>
            </div>

            @include('comp.alert')

            <div class="card overflow-hidden mb-3">
                <div class="card-header bg-light">
                    <div class="row flex-between-left">
                        <div class="col-auto ms-2">
                            <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                                <a href="{{ route('hm.e') }}"><button class="btn btn-sm text-primary" type="button"><i
                                            class="fas fa-stopwatch"></i> Reguler</button></a>
                                <a href="{{ route('hm.m') }}"><button class="btn active btn-sm text-warning" type="button"><i
                                            class="fas fa-clock"></i> Manual</button></a>
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
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>&nbsp;
                        <div class="col-auto col-sm-3">
                            <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                data-list-filter="data-list-filter">
                                <option selected="" value="">Filter No Unit</option>
                                @foreach ($equip as $item)
                                    <option value="{{ $item->equip_->no_unit }}">{{ $item->equip_->no_unit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto col-sm-3">
                            <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop"><span class="fas fa-plus text-success"
                                    data-fa-transform="shrink-3"></span><span
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
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                            Tanggal
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap" data-sort="shift">
                                            Shift
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap"
                                            data-sort="payment">No Unit
                                        </th>
                                        <th style="min-width: 250px; max-width: 400px;" class="sort align-middle white-space-nowrap"
                                            data-sort="name">Operator /
                                            Driver
                                        </th>
                                        <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                            Jam Awal</th>
                                        <th style="min-width: 80px"
                                            class="sort bg-primary align-middle white-space-nowrap text-center">
                                            Jam Akhir
                                        </th>
                                        <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                            Jam Total
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap">
                                            Rest Time
                                        </th>
                                        <th style="min-width: 80px" class="sort bg-danger align-middle white-space-nowrap">
                                            HM
                                            Potongan
                                        </th>
                                        <th style="min-width: 200px; max-width: 400px;" class="sort align-middle white-space-nowrap"
                                            data-sort="remark">Remark
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($all as $res)
                                        <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-center text-1000 white-space-nowrap ">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap">
                                                <div class="btn-group  btn-group-sm" role="group">
                                                    <a href="javascript:void(0)" data-bs-target="#edit-{{ $res->id }}"
                                                        data-bs-toggle="modal" class="btn btn-warning" type="button"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#hapus-{{ $res->id }}" data-id="{{ $res->id }}"
                                                        class="btn btn-danger" type="button"><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
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
                                            <td class="align-middle text-1000 white-space-nowrap name">
                                                @if ($res->kar_id)
                                                    {{ $res->kar_->name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-100 text-1000 text-center white-space-nowrap">
                                                @if ($res->jam_awal)
                                                    {{ $res->jam_awal->format('H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-100 text-1000 text-center white-space-nowrap">
                                                @if ($res->jam_akhir)
                                                    {{ $res->jam_akhir->format('H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-200 text-1000 text-center white-space-nowrap">
                                                @if ($res->jam_total)
                                                    {{ $res->jam_total }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->rest_time)
                                                    {{ $res->rest_time }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-100 text-1000 text-center white-space-nowrap">
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


            @include('comp.modal.hm.modal_hm_manual_create')
            @include('comp.modal.hm.modal_hm_manual_edit')
            @include('comp.modal.hm.modal_hm_manual_delete')
        @else
            @include('comp.card.card404_equipment')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
