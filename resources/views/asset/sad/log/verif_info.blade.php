@extends('layouts.layout')

@section('judul')
    Verifikasi Stok Barang | HWA &bull; SAT
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

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/illustrations/reports-bg.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-gas-pump"></i> Logistik <span
                        class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="fas fa-key"></i>
                    </span></h6>
                <h4 class="mb-0 text-primary fw-bold">Verifikasi {{ $barang->barang }} </h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <form action="{{ route('verif.u') }}" method="post">
        @csrf
        @foreach ($log as $item)
            <input type="hidden" name="delete_log[]" value="{{ $item->id }}">
            <input type="hidden" name="id[]" value="{{ $item->id }}">
            <input type="hidden" name="master_id[]" value="{{ $item->master_id }}">
            <input type="hidden" name="equip_id[]" value="{{ $item->equip_id }}">
            <input type="hidden" name="barang_id[]" value="{{ $item->barang_id }}">
            <input type="hidden" name="jumlah[]" value="{{ $item->jumlah }}">
            <input type="hidden" name="hmkm[]" value="{{ $item->hmkm }}">
            <input type="hidden" name="tgl[]" value="{{ $item->tgl }}">
            <input type="hidden" name="ket[]" value="{{ $item->ket }}">
            <input type="hidden" name="log_tipe[]" value="{{ $item->log_tipe }}">
            <input type="hidden" name="status[]" value="Sudah">
        @endforeach
        <input type="hidden" name="delete_stok" value="{{ $barang->id }}">
        <input type="hidden" name="id_stok" value="{{ $barang->id }}">
        <input type="hidden" name="barang" value="{{ $barang->barang }}">
        <input type="hidden" name="jenis" value="{{ $barang->jenis }}">
        <input type="hidden" name="brand" value="{{ $barang->brand }}">
        <input type="hidden" name="jum_tot" value="{{ $jum_tot }}">
        <input type="hidden" name="satuan" value="{{ $barang->satuan }}">
        <input type="hidden" name="tipe_alat" value="{{ $barang->tipe_alat }}">
        <button type="submit">update</button>
    </form>

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["no","unit","jenis","payment","brand"],"page":10,"pagination":true,"filter":{"key":"payment"}}'>
            <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                <div class="col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>&nbsp;
                <div class="col-sm-auto">
                    <div class="btn-group  btn-group-sm mx-2" role="group">
                        <a href="#"><button data-bs-toggle="modal" data-bs-target="#modal-create"
                                class="btn btn-sm btn-falcon-success mx-2" type="button"><span data-fa-transform="shrink-3"
                                    class="fas fa-plus"></span> </button></a>
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-print"></i></button>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i>
                                    Print Excel
                                </a>
                                <a class="dropdown-item text-warning" href="#!"><i class="fas fa-file-pdf"></i>
                                    Print PDF
                                </a>
                            </div>
                        </div>
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
                                <th style="min-width: 50px"
                                    class="bg-secondary text-white align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 50px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="payment">
                                    Nama Barang
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="jenis">
                                    Tanggal
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="jumlah">
                                    Jumlah
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="jumlah">
                                    Satuan
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="jumlah">
                                    Tipe
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($log as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a data-bs-toggle="modal" data-bs-target="#edit-{{ $res->id }}"
                                                class="btn btn-warning" type="button"><i class="fas fa-edit"></i></a>
                                            <a data-bs-toggle="modal" data-bs-target="#delete-{{ $res->id }}"
                                                class="btn btn-danger" type="button"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $loop->iteration }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                        @if ($res->barang_id)
                                            {{ $res->stok_->barang }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap jenis">
                                        @if ($res->tgl)
                                            {{ $res->tgl }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap brand">
                                        @if ($res->jumlah)
                                            {{ $res->jumlah }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap brand">
                                        @if ($res->barang_id)
                                            {{ $res->stok_->satuan }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap brand">
                                        @if ($res->log_tipe)
                                            {{ $res->log_tipe }}
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


    {{-- @include('comp.modal.stok.modal_liq_create')
    @include('comp.modal.stok.modal_liq_edit')
    @include('comp.modal.stok.modal_liq_delete') --}}
@endsection
