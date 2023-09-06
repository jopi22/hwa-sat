@extends('layouts.layout')

@section('judul')
    Tambah Equiupment | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
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
            <tr class="btn-reveal-trigger text-center text-1000 fw-semi-bold">
                    <td class="align-middle white-space-nowrap">
                        <a href="javascript:void(0)" class="text-success" title="Add" id="addBtn"><i
                class="fas fa-plus-square fs-2"></i></a>
                                <input type="hidden" name="jenis[]" value="Heavy Equipment">
                                <input type="hidden" name="status[]" value="Aktif">
                    </td>
                    <td class="align-middle white-space-nowrap">
                        <input required type="text" maxlength="50" class="form-control form-control-sm"
                            name="no_unit[]">
                    </td>
                    <td class="align-middle white-space-nowrap">
                        <input required type="text" maxlength="50" class="form-control form-control-sm"
                            name="kode_unit[]">
                    </td>
                    <td class="align-middle white-space-nowrap">
                        <input required type="text" maxlength="50" class="form-control form-control-sm"
                            name="model[]">
                    </td>
                    <td class="align-middle white-space-nowrap">
                                    <select required name="tipe[]" class="form-control form-control-sm">
                                        <option></option>
                                        <option value="Excavator">Excavator</option>
                                        <option value="Vibro">Vibro</option>
                                        <option value="Bulldoser">Bulldozer</option>
                                    </select>
                                </td>
                    <td class="align-middle white-space-nowrap">
                        <input required type="text" maxlength="50" class="form-control form-control-sm"
                            name="brand[]">
                    </td>
<td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="50" class="form-control form-control-sm"
                                        name="no_rangka[]">
                                </td>
                    <td class="align-middle white-space-nowrap">
                        <input required type="date" class="form-control form-control-sm"
                                        name="start_op[]">
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
            <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-key"></i>
                Division Data</span>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn btn-falcon-default btn-sm" href="{{ route('heavy.l') }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Back to Main Table">
                <span class="fas fa-list"></span>
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <span class=" fw-semi-bold text-primary"> Tambah Heavy Equipment</span>
        </div>
    </div>
</div>

    <form action="{{ route('equip.s') }}" method="post">
        @csrf
        <input type="hidden" name="heavy" value="1">
        <div class="card mb-3">
            <div class="card-header text-center bg-success py-2">
                <h5 class="text-white"><i class="fas fa-snowplow"></i> Form Tambah Heavy Equipment</h5>
            </div>
            <div class="card-header bg-light">
                <p class="fs--1 mb-0"><strong>Notes: </strong>Kolom Berwarna
                    Merah <i class="fas fa-square text-danger"></i> Wajib Diisi | Tekan Tombol <i
                        class="fas fa-plus-square text-success"></i> Untuk Tambah
                    Baris</p>
            </div>
            <div id="tableExample4">
                <div class="table-responsive scrollbar">
                    <table id="tableEstimate" class="table table-sm table-striped table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center bg-secondary text-white">
                                <th style="min-width: 20px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Add Row
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    No Unit
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Kode Unit
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Model
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Tipe
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Brand
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    No Rangka
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Tgl Operasional
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            <tr class="btn-reveal-trigger text-center text-1000 fw-semi-bold">
                                <td class="align-middle white-space-nowrap">
                                    <a href="javascript:void(0)" class="text-success" title="Add" id="addBtn"><i
                                            class="fas fa-plus-square fs-2"></i></a>
                                    <input type="hidden" name="jenis[]" value="Heavy Equipment">
                                    <input type="hidden" name="status[]" value="Aktif">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="50" class="form-control form-control-sm"
                                        name="no_unit[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="50" class="form-control form-control-sm"
                                        name="kode_unit[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="50" class="form-control form-control-sm"
                                        name="model[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select required name="tipe[]" class="form-control form-control-sm">
                                        <option></option>
                                        <option value="Excavator">Excavator</option>
                                        <option value="Vibro">Vibro</option>
                                        <option value="Bulldoser">Bulldozer</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="50" class="form-control form-control-sm"
                                        name="brand[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="50" class="form-control form-control-sm"
                                        name="no_rangka[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="date" class="form-control form-control-sm" name="start_op[]">
                                </td>
                            </tr>
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
