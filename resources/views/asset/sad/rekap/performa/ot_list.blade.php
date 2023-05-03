@extends('layouts.layout')

@section('judul')
    Performa OT | Validasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
@endsection

@section('link')
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
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
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-1.png') }});"></div>
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/illustrations/bg-wave.png') }}" alt="" width="56" />
            <div class="ms-n0">
                <h6 class="mb-1 text-primary"><i class="fas fa-wrench"></i> Over Time <span class="text-danger">Validasi </span> <span
                        class="mb-1 text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                <h4 class="mb-0 text-primary fw-bold">Performa Over Time </h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample4" data-list='{"valueNames":["id","no","tgl","nama","rem"],"filter":{"key":"nama"}}'>
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
                        <option selected="" value="">Filter: Helper</option>
                        @foreach ($kar_filter as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>&nbsp;
                <div class="col-sm-3">
                    <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop"><span class="fas fa-plus text-success"
                            data-fa-transform="shrink-3"></span> Tambah<span
                            class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                    </button>
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
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 120px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    ID OT
                                </th>
                                <th style="min-width: 120px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="tgl">
                                    Tanggal
                                </th>
                                <th style="min-width: 120PX"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                    ID Helper
                                </th>
                                <th style="min-width: 350px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="nama">
                                    Nama
                                </th>
                                <th style="min-width: 120px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    Jam Mulai
                                </th>
                                <th style="min-width: 120px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    Jam Selesai
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    Jam Potongan
                                </th>
                                <th style="min-width: 120px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    Jam Total
                                </th>
                                <th style="min-width: 300px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="rem">
                                    Remark
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($perform as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a href="javascript:void(0)" data-bs-target="#edit-{{ $res->id }}"
                                                data-id="{{ $res->id }}" data-bs-toggle="modal"
                                                class="btn btn-warning" type="button"><i class="fas fa-edit"></i></a>
                                            <a href="javascript:void(0)" data-bs-target="#hapus-{{ $res->id }}"
                                                data-id="{{ $res->id }}" data-bs-toggle="modal" class="btn btn-danger"
                                                type="button"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        {{ $res->id }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        @if ($res->tgl)
                                            {{ $res->tgl }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap id">
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
                                    <td class="align-middle text-1000 text-center white-space-nowrap">
                                        @if ($res->jam_mulai)
                                            {{ $res->jam_mulai->format('H:i A') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap">
                                        @if ($res->jam_selesai)
                                            {{ $res->jam_selesai->format('H:i A') }}
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
                                    <td class="align-middle text-1000 white-space-nowrap rem">
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
        <div class="card-footer bg-light d-flex flex-between-center py-2">
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                    id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved">
                    <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i> Print
                        Excel</a>
                </div>
            </div>
        </div>
    </div>
    @include('comp.modal.hm.modal_ot_create')
    @include('comp.modal.hm.modal_ot_edit')
    @include('comp.modal.hm.modal_ot_hapus')
@endsection
