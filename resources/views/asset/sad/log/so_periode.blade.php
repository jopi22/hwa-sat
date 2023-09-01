@extends('layouts.layout')

@section('judul')
    Stock Opname | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
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
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                <div>
                    <h6 class="mb-1 text-primary"><i class="fas fa-warehouse"></i> Logistic Division</h6>
                    <h4 class="mb-0 text-primary fw-bold"> Stock Opname</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-key"></i>
                            Division Data</span>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}"
                    alt="" width="130" />
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light py-2">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","tgl","unit","kode","tgl","hmkm","barang","ket"],"page":10,"pagination":true,"filter":{"key":"unit"}}'>
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
                        <a data-bs-toggle="modal" data-bs-target="#tambah"><button
                                class="btn btn-sm btn-falcon-success mx-2" type="button"><span data-fa-transform="shrink-3"
                                    class="fas fa-plus"></span>
                            </button></a>
                    </div>
                </div>
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
                                    Aksi/Status
                                </th>
                                <th style="min-width: 300px" class="sort align-middle white-space-nowrap" data-sort="kode">
                                    Tanggal
                                </th>
                                <th style="min-width: 300px" class="sort align-middle white-space-nowrap" data-sort="kode">
                                    Status
                                </th>
                                <th style="min-width: 300px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Selisih Total
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($so as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            @if ($res->status == null)
                                                <a href="{{ route('so.cp', Crypt::Encryptstring($res->id)) }}"
                                                    class="btn btn-secondary" data-bs-toggle="tooltip"><span
                                                        class="fas fa-list-alt"></span> Cetak Pertama</a>
                                            @else
                                                @if ($res->status == 'Cetak Pertama')
                                                    <a href="{{ route('so.ck', Crypt::Encryptstring($res->id)) }}"
                                                        class="btn btn-secondary" data-bs-toggle="tooltip"><span
                                                            class="fas fa-list-alt"></span> Cetak Kedua</a>
                                                    <a data-bs-toggle="modal" data-bs-target="#delete-{{ $res->id }}"
                                                        class="btn btn-danger"><span class="fas fa-trash-alt"></span></a>
                                                @else
                                                    @if ($res->status == 'Cetak Kedua')
                                                        <a href="{{ route('so.adjust', Crypt::Encryptstring($res->id)) }}"
                                                            class="btn btn-secondary" data-bs-toggle="tooltip"><span
                                                                class="fas fa-list-alt"></span> Adjust</a>
                                                    @else
                                                    <a href="{{ route('so.adjust', Crypt::Encryptstring($res->id)) }}"
                                                        class="btn btn-secondary" data-bs-toggle="tooltip"><span
                                                            class="fas fa-list-alt"></span> Lihat</a>
                                                    @endif
                                                @endif
                                            @endif


                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        @if ($res->tgl)
                                            {{ $res->tgl->format('d-m-Y') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        @if ($res->status)
                                            {{ $res->status }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        @if ($res->hasil)
                                            {{ $res->hasil }}
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

    @include('comp.modal.stok.modal_so_periode')
@endsection
