@extends('layouts.layout')

@section('judul')
    Catatan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
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
<div class="card mb-3 bg-100 shadow-none border">
    <div class="row gx-0 flex-between-center">
        <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
            <div>
                <h6 class="text-primary fs--1 mb-0"><i class="fab fa-hornbill"></i> PT Harapan Wahyu Abadi Site Sandai
                </h6>
                <h4 class="text-primary fw-bold mb-0">Arsip Catatan</h4>
            </div>
        </div>
        <div class="col-sm-auto d-flex align-items-center">
            <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}"
                alt="" width="130" />
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
                        <a href="{{ route('catat.c') }}"> <button class="btn btn-sm btn-falcon-success mx-2"
                                type="button"><span data-fa-transform="shrink-3" class="fas fa-plus"></span>

                            </button></a>
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
                                <th style="min-width: 400px" class="sort  align-middle white-space-nowrap" data-sort="nama">
                                    Nama File
                                </th>
                                <th style="min-width: 300px" class="sort  align-middle white-space-nowrap" data-sort="kat">
                                    Kategori
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tanggal
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($cat as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a href="{{ route('catat.i', Crypt::encryptString($res->id)) }}" class="btn btn-primary" type="button" ><i class="fas fa-file-alt"></i></a>
                                            <a href="{{ route('catat.e', Crypt::encryptString($res->id)) }}" class="btn btn-warning" type="button" ><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                title="Hapus Surat"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap nama">
                                        @if ($res->judul)
                                            {{ $res->judul }}
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

    {{-- @include('comp.modal.dokumen.modal_dokumen_create') --}}
    {{-- @include('comp.modal.dokumen.modal_dokumen_info') --}}
    @include('comp.modal.catatan.modal_catatan_delete')

@endsection
