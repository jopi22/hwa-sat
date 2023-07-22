@extends('layouts.layout')

@section('judul')
    Data Barang | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
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
            <h6 class="mb-1 text-primary"><i class="fas fa-archive"></i> Logistic Division</h6>
            <h4 class="mb-0 text-primary fw-bold">Data Barang
                <span class="text-info fw-medium"></span>
            </h4>
        </div>
    </div>
</div>
    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light py-2">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        {{-- // --}}
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <div class="col-auto pe-0">
                        <div class="btn-group  btn-group-sm mx-2" role="group">
                            <a data-bs-toggle="modal" data-bs-target="#tambah"><button
                                    class="btn btn-sm btn-falcon-success mx-2" type="button"><span data-fa-transform="shrink-3"
                                        class="fas fa-plus"></span>
                                </button></a>
                            <div class="dropdown font-sans-serif d-inline-block">
                                <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fas fa-print"></i></button>
                                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                    <a target="_blank" class="dropdown-item text-success"
                                        href="{{ route('barang.excel', Crypt::EncryptString(Auth::user()->id)) }}"><i class="fas fa-file-excel"></i>
                                        Print Excel
                                    </a>
                                    {{-- <a target="_blank" class="dropdown-item text-warning"
                                        href="{{ route('barang.pdf', Auth::user()->id) }}"><i class="fas fa-file-pdf"></i>
                                        Print PDF
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","no","unit","kode","barang","jenis","status","kat"],"page":10,"pagination":true,"filter":{"key":"kat"}}'>
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
                        <option value="Spare Part">Spare Part</option>
                        <option value="Bahan Bakar">Bahan Bakar</option>
                        <option value="Oli">Oli</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>&nbsp;
            </div>
            @if ($cek == 0)
                <div class="row align-items-center">
                    <div class="col-lg-12 ps-lg-4 my-5 text-center text-lg-start">
                        <h5 class="text-secondary text-center">-- Data Kosong --</h5>
                    </div>
                </div>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-bordered mb-0 fs--1 overflow-hidden">
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                    data-sort="barang">
                                    Nama Barang
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="kode">
                                    Kode Barang
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap" data-sort="kat">
                                    Kategori
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="tipe">
                                    Jumlah
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="jenis">
                                    Satuan
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($bar as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a data-bs-toggle="modal" data-bs-target="#edit-{{ $res->id }}"
                                                class="btn btn-warning" data-bs-toggle="tooltip"><span
                                                    class="fas fa-edit"></span></a>
                                            <a data-bs-toggle="modal" data-bs-target="#delete-{{ $res->id }}"
                                                class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap barang">
                                        @if ($res->barang)
                                            {{ $res->barang }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap kode">
                                        @if ($res->kode)
                                            {{ $res->kode }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap kat">
                                        @if ($res->kategori)
                                            {{ $res->kategori }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap">
                                        @if ($res->jumlah)
                                            {{ $res->jumlah }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap sat">
                                        @if ($res->satuan)
                                            {{ $res->satuan }}
                                        @else
                                            -
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

    @include('comp.modal.stok.modal_barang')
@endsection
