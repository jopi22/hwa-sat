@extends('layouts.layout')

@section('judul')
    {{ $pemesanan->kode }} | Tambah Data Pesanan Barang | HWA &bull; SAT
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
    <script>
        $(document).on('click', '.delete_estimate', function() {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.ids').text());
        });
    </script>
    <script>
        var rowIdx = 1;
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableEstimate tbody").append(`
            <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <a href="javascript:void(0)" class="text-danger remove" title="Remove"><i class="fas fa-minus-square fs-2"></i></a>
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                    <input required max="1000" type="number" class="form-control form-control-sm"
                                        name="pemesanan_id[]">
                                    <input type="hidden" value="{{ $pemesanan->id }}" name="barang_id[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                    <input required max="1000" type="number" class="form-control form-control-sm"
                                        name="jumlah[]">
                                </td>
                            </tr>
                `);
        });
        $("#tableEstimate tbody").on("click", ".remove", function() {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();
            // Iterating across all the rows
            // obtained to change the index
            child.each(function() {
                // Getting <tr> id.
                var id = $(this).attr("id");

                // Getting the <p> inside the .row-index class.
                var idx = $(this).children(".row-index").children("p");

                // Gets the row number from <tr> id.
                var dig = parseInt(id.substring(1));

                // Modifying row index.
                idx.html(`${dig - 1}`);

                // Modifying row id.
                $(this).attr("id", `R${dig - 1}`);
            });

            // Removing the current row.
            $(this).closest("tr").remove();

            // Decreasing total number of rows by 1.
            rowIdx--;
        });

        $("#tableEstimate tbody").on("input", ".unit_price", function() {
            var unit_price = parseFloat($(this).val());
            var qty = parseFloat($(this).closest("tr").find(".qty").val());
            var total = $(this).closest("tr").find(".total");
            total.val(unit_price * qty);

            calc_total();
        });

        $("#tableEstimate tbody").on("input", ".qty", function() {
            var qty = parseFloat($(this).val());
            var unit_price = parseFloat($(this).closest("tr").find(".unit_price").val());
            var total = $(this).closest("tr").find(".total");
            total.val(unit_price * qty);
            calc_total();
        });

        function calc_total() {
            var sum = 0;
            $(".total").each(function() {
                sum += parseFloat($(this).val());
            });
            $(".subtotal").text(sum);

            var amounts = sum;
            var tax = 100;
            $(document).on("change keyup blur", "#qty", function() {
                var qty = $("#qty").val();
                var discount = $(".discount").val();
                $(".total").val(amounts * qty);
                $("#sum_total").val(amounts * qty);
                $("#tax_1").val((amounts * qty) / tax);
                $("#grand_total").val((parseInt(amounts)) - (parseInt(discount)));
            });
        }
    </script>
@endsection

@section('superadmin')
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

    <form action="{{ route('pemesanan.l.s') }}" method="post">
        @csrf
        <input type="hidden" name="del_faktur" value="{{ $pemesanan->id }}">
        <input type="hidden" name="id_faktur" value="{{ $pemesanan->id }}">
        <input type="hidden" name="tgl" value="{{ $pemesanan->tgl }}">
        <input type="hidden" name="kode" value="{{ $pemesanan->kode }}">
        <input type="hidden" name="status" value="OK">
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
                                <th style="min-width: 100px" class="sortalign-middle white-space-nowrap">
                                    Kode Faktur
                                </th>
                                <th style="min-width: 100px" class="sortalign-middle white-space-nowrap">
                                    Nama Barang | Kode Barang
                                </th>
                                <th style="min-width: 100px"
                                    class="sortalign-middle bg-primary text-white white-space-nowrap">
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
                                        <input type="hidden" value=" {{ $asu->id }}" name="del_barang[]">
                                        <input type="hidden" value=" {{ $asu->id }}" name="id_barang[]">
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        @if ($asu->pemesanan_id)
                                            {{ $asu->pemesanan_id }}
                                            <input type="hidden" value=" {{ $asu->pemesanan_id }}" name="pemesanan_id[]">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap tgl">
                                        @if ($asu->barang_id)
                                            {{ $asu->barang_->barang }} | {{ $asu->barang_->kode }}
                                            <input type="hidden" value="{{ $asu->barang_id }}" name="barang_id[]">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        <input type="number" name="jumlah[]" value="{{ $asu->jumlah }}"
                                            class="form-control form-control-sm">
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
