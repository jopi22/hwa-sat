@extends('layouts.layout')

@section('judul')
    Dokumen | HWA &bull; SAT
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
    <link rel="stylesheet" href="{{ asset('vendors/choices/choices.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-file-archive"></i> Arsip <span
                        class="mb-1 text-info">Sekunder</span>
                </h6>
                <h4 class="mb-0 text-primary fw-bold">Dokumen</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["nama","tgl","kat"],"page":10,"pagination":true,"filter":{"key":"kat"}}'>
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
                        <option selected="" value="">Filter: Kategori</option>
                        @foreach ($kat as $item)
                            <option value="{{ $item->kategori }}">{{ $item->kategori }}</option>
                        @endforeach
                    </select>
                </div>&nbsp;
                <div class="col-sm-auto">
                    <div class="btn-group  btn-group-sm mx-2" role="group">
                        <button class="btn btn-sm btn-falcon-success mx-2" type="button" data-bs-toggle="modal"
                            data-bs-target="#error-modal"><span data-fa-transform="shrink-3" class="fas fa-plus"></span>
                            File
                        </button>
                    </div>
                </div>
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap" data-sort="nama">
                                    Nama File
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap" data-sort="kat">
                                    Kategori
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tanggal
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($dok as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                data-bs-target="#info-{{ $res->id }}" data-bs-placement="top"
                                                title="Info Surat"><i class="fas fa-file-alt"></i></a>
                                            <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                title="Hapus Surat"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap nama">
                                        @if ($res->nama)
                                            {{ $res->nama }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap kat">
                                        @if ($res->kategori)
                                            {{ $res->kategori }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        {{ $res->created_at->format('d-m-Y') }}
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

    {{-- @include('comp.modal.dokumen.modal_dokumen_create')
    @include('comp.modal.dokumen.modal_dokumen_info')
    @include('comp.modal.dokumen.modal_dokumen_delete') --}}

@endsection
