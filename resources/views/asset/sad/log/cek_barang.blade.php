@extends('layouts.layout')

@section('judul')
    {{ $pemesanan->kode }} | Cek Barang Pesanan | HWA &bull; SAT
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <div>
                <span class="badge bg-soft-info text-info bg-sm rounded-pill"><i class="fas fa-code"></i>
                    {{ $pemesanan->kode }}</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <a class="btn btn-falcon-default btn-sm" href="{{ route('pemesanan.barang') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Back to Main Table">
                    <span class="fas fa-list"></span>
                </a>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-primary"> Tambah Data Pesanan Barang</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-info">Kode Faktur : {{ $pemesanan->kode }}</span>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample4">
            <div class="table-responsive scrollbar">
                <table id="tableEstimate" class="table table-sm table-striped table-bordered mb-0 fs--1"
                    data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                    <thead class="bg-200 text-800">
                        <tr class="text-center bg-200 text-800">
                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                #
                            </th>
                            <th style="min-width: 50px" class="sortalign-middle white-space-nowrap">
                                Adjust
                            </th>
                            <th style="min-width: 100px" class="sortalign-middle white-space-nowrap">
                                Kode Faktur
                            </th>
                            <th style="min-width: 100px" class="sortalign-middle white-space-nowrap">
                                Nama Barang | Kode Barang
                            </th>
                            <th style="min-width: 100px" class="sortalign-middle bg-primary text-white white-space-nowrap">
                                Jumlah
                            </th>
                            <th style="min-width: 100px" class="sortalign-middle white-space-nowrap">
                                Satuan
                            </th>
                        </tr>
                    </thead>
                    <tbody id="table-posts" class="list">
                        @foreach ($pb as $asu)
                            <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    @if ($asu->token)
                                        OK
                                    @else
                                        <form action="{{ route('adjust.barang', $asu->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="token" value="OK">
                                            <input type="hidden" name="pesanan" value="{{ $asu->jumlah }}">
                                            <input type="hidden" name="stok" value="{{ $asu->barang_->jumlah }}">
                                            <button class="btn btn-sm btn-success"><i
                                                    class="fas fa-check-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                    @if ($asu->pemesanan_id)
                                        {{ $asu->pemesanan_id }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap tgl">
                                    @if ($asu->barang_id)
                                        {{ $asu->barang_->barang }} | {{ $asu->barang_->kode }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                    @if ($asu->jumlah)
                                        {{ $asu->jumlah }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                    @if ($asu->barang_id)
                                        {{ $asu->barang_->satuan }}
                                    @else
                                        -
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center bg-light">
            @if ($pemesanan->status == 'Selesai')
            @else
                <form action="{{ route('pemesanan.f', $pemesanan->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Selesai">
                    <button class="btn btn-success btn-sm"><i class="fas fa-save"></i> Selesai</button>
                </form>
            @endif
        </div>
    </div>
@endsection
