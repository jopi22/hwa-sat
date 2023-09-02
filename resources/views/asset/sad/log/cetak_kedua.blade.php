@extends('layouts.layout')

@section('judul')
    {{ $so->kode }} | Stock Opname Cetak Pertama | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <script src="{{ asset('assets/print/js/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/print/js/jspdf.debug.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2pdf.min.js') }}"></script>
    <script>
        const options = {
            margin: 0.5,
            filename: 'Stock Opname Cetak Kedua.pdf',
            image: {
                type: 'jpeg',
                quality: 500
            },
            html2canvas: {
                scale: 1
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        }

        $('.btn-download').click(function(e) {
            e.preventDefault();
            const element = document.getElementById('invoice');
            html2pdf().from(element).set(options).save();
        });


        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <div>
                <span class="badge bg-soft-info text-info bg-sm rounded-pill"><i class="fas fa-code"></i>
                    {{ $so->kode }}</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <a class="btn btn-falcon-default btn-sm" href="{{ route('so.periode') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Back to Main Table">
                    <span class="fas fa-list"></span>
                </a>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-primary"> Stock Opname</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-info">Cetak Kedua</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-info">Kode SO : {{ $so->kode }}</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <a href="javascript:void(0)" class="btn-download"><button class="btn btn-sm btn-falcon-success mx-2"><i
                            class="fas fa-file-excel"></i>
                    </button> </a>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <form action="{{ route('so.ck.s') }}" method="post">
        @csrf
        <input type="hidden" name="periode_del" value="{{ $so->id }}">
        <input type="hidden" name="periode_id" value="{{ $so->id }}">
        <input type="hidden" name="tgl" value="{{ $so->tgl }}">
        <input type="hidden" name="kode" value="{{ $so->kode }}">
        <input type="hidden" name="hasil" value="{{ $so->hasil }}">
        <input type="hidden" name="status" value="Cetak Kedua">
        <div class="card mb-3">
            <div class="card-header bg-light">
                {{-- // --}}
            </div>
            <div id="invoice">
                <div class="table-responsive scrollbar">
                    <table id="tableEstimate" class="table table-sm  table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center bg-200 text-800">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    #
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap">
                                    Nama Barang | Kode Barang
                                </th>
                                <th style="min-width: 100px" class="sort align-middle  white-space-nowrap">
                                    Stok (Sistem)
                                </th>
                                <th style="min-width: 100px" class="sort align-middle  white-space-nowrap">
                                    Stok Cetak-1
                                </th>
                                <th style="min-width: 100px"
                                    class="sort text-white bg-danger align-middle  white-space-nowrap">
                                    Selisih
                                </th>
                                <th style="min-width: 100px"
                                    class="sortalign-middle bg-primary text-white  white-space-nowrap">
                                    Stok Cetak-2
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
                                        <input type="hidden" value=" {{ $asu->id }}" name="data_del[]">
                                        <input type="hidden" value=" {{ $asu->id }}" name="data_id[]">
                                        <input type="hidden" value=" {{ $asu->so_id }}" name="so_id[]">
                                        <input type="hidden" value="{{ $asu->barang_id }}" name="barang_id[]">
                                        <input type="hidden" value="{{ $asu->stok_awal }}" name="stok_awal[]">
                                        <input type="hidden" value="{{ $asu->stok_cetak1 }}" name="stok_cetak1[]">
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap tgl">
                                        @if ($asu->barang_id)
                                            {{ $asu->barang_->barang }} | {{ $asu->barang_->kode }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        @if ($asu->stok_awal)
                                            {{ $asu->stok_awal }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        @if ($asu->stok_cetak1)
                                            {{ $asu->stok_cetak1 }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        @if ($asu->selisih)
                                            {{ $asu->selisih }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        <input type="number" name="stok_cetak2[]" class="form-control form-control-sm">
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
                <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-save"></i>
                    Simpan</button>
            </div>
        </div>
    </form>
@endsection
