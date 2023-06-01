@extends('layouts.layout')

@section('judul')
    Jabatan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>

    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> SDM <span class="badge bg-soft-secondary text-secondary bg-sm rounded-pill"><i class="fas fa-check"></i>
                </span>
                </h6>
                <h4 class="mb-0 text-primary fw-bold">Jabatan</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","name","username","status","level"],"page":10,"pagination":true}'>
            <div class="row ms-3 mt-2 mb-2 g-0 flex-between-left">
                <div class="col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>
                <div class="col-sm-auto">
                    <button data-bs-toggle="modal" data-bs-target="#modal-create" class="btn btn-sm btn-falcon-success mx-2" type="button"><span data-fa-transform="shrink-3"
                            class="fas fa-plus"></span> </button>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped table-bordered fs--1 mb-0 overflow-hidden">
                    <thead class="bg-secondary text-white text-center">
                        <tr>
                            <th style="min-width: 100px" class="sort" data-sort="aksi">Aksi</th>
                            <th style="min-width: 50px" class="sort" data-sort="#">#</th>
                            <th style="min-width: 900px" class="sort" data-sort="jab">
                                Jabatan
                            </th>
                        </tr>
                    </thead>
                    <tbody id="table-posts" class="list">
                        @foreach ($jab as $res)
                            <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                    <div class="btn-group  btn-group-sm" role="group">
                                        <a href="javascript:void(0)" id="btn-edit-post"
                                            data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                            class="btn btn-warning" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit Jabatan"><span
                                                class="fas fa-edit"></span></a>
                                        <a href="javascript:void(0)" id="btn-delete-post"
                                            data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                            class="btn btn-danger" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Hapus Jabatan"><span
                                                class="fas fa-times-circle"></span></a>
                                    </div>
                                </td>
                                <td class="text-black text-center fw-semi-bold">{{ $loop->iteration }}</td>
                                <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                                    {{ $res->jabatan }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-3">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                </button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                    data-list-pagination="next"><span class="fas fa-chevron-right"> </span>
                </button>
            </div>
        </div>
        <div class="card-footer py-2 bg-light">
            {{-- // --}}
        </div>
    </div>

    @include('comp.modal.jab.modal_jab_create')
    @include('comp.modal.jab.modal_jab_edit')
    @include('comp.modal.jab.modal_jab_delete')
@endsection
