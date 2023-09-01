@extends('layouts.layout')

@section('judul')
{{ $cat_m->master_id }} | Add Catering | HWA &bull; SAT
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
        $("#addBtn").on("click", function ()
            {
                // Adding a row inside the tbody.
                $("#tableEstimate tbody").append(`
                <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                    <td class="align-middle text-1000 text-center white-space-nowrap">
                        <a href="javascript:void(0)" class="text-danger remove" title="Remove"><i class="fas fa-minus-square fs-2"></i></a>
                        <input type="hidden" name="cat_id[]" value="{{ $cat_m->id }}">
                        <input type="hidden" name="master_id[]" value="{{ $cat_m->master_id }}">
                    </td>
                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                        <select required name="tgl[]" class="form-select form-select-sm">
                            <option></option>
                            @if ($master->total == 28)
                                <option value="1-{{ $master->periode }}">
                                    1-{{ $master->periode }}</option>
                                <option value="2-{{ $master->periode }}">
                                    2-{{ $master->periode }}</option>
                                <option value="3-{{ $master->periode }}">
                                    3-{{ $master->periode }}</option>
                                <option value="4-{{ $master->periode }}">
                                    4-{{ $master->periode }}</option>
                                <option value="5-{{ $master->periode }}">
                                    5-{{ $master->periode }}</option>
                                <option value="6-{{ $master->periode }}">
                                    6-{{ $master->periode }}</option>
                                <option value="7-{{ $master->periode }}">
                                    7-{{ $master->periode }}</option>
                                <option value="8-{{ $master->periode }}">
                                    8-{{ $master->periode }}</option>
                                <option value="9-{{ $master->periode }}">
                                    9-{{ $master->periode }}</option>
                                <option value="10-{{ $master->periode }}">
                                    10-{{ $master->periode }}</option>
                                <option value="11-{{ $master->periode }}">
                                    11-{{ $master->periode }}</option>
                                <option value="12-{{ $master->periode }}">
                                    12-{{ $master->periode }}</option>
                                <option value="13-{{ $master->periode }}">
                                    13-{{ $master->periode }}</option>
                                <option value="14-{{ $master->periode }}">
                                    14-{{ $master->periode }}</option>
                                <option value="15-{{ $master->periode }}">
                                    15-{{ $master->periode }}</option>
                                <option value="16-{{ $master->periode }}">
                                    16-{{ $master->periode }}</option>
                                <option value="17-{{ $master->periode }}">
                                    17-{{ $master->periode }}</option>
                                <option value="18-{{ $master->periode }}">
                                    18-{{ $master->periode }}</option>
                                <option value="19-{{ $master->periode }}">
                                    19-{{ $master->periode }}</option>
                                <option value="20-{{ $master->periode }}">
                                    20-{{ $master->periode }}</option>
                                <option value="21-{{ $master->periode }}">
                                    21-{{ $master->periode }}</option>
                                <option value="22-{{ $master->periode }}">
                                    22-{{ $master->periode }}</option>
                                <option value="23-{{ $master->periode }}">
                                    23-{{ $master->periode }}</option>
                                <option value="24-{{ $master->periode }}">
                                    24-{{ $master->periode }}</option>
                                <option value="25-{{ $master->periode }}">
                                    25-{{ $master->periode }}</option>
                                <option value="26-{{ $master->periode }}">
                                    26-{{ $master->periode }}</option>
                                <option value="27-{{ $master->periode }}">
                                    27-{{ $master->periode }}</option>
                                <option value="28-{{ $master->periode }}">
                                    28-{{ $master->periode }}</option>
                            @else
                                @if ($master->total == 29)
                                    <option value="1-{{ $master->periode }}">
                                        1-{{ $master->periode }}</option>
                                    <option value="2-{{ $master->periode }}">
                                        2-{{ $master->periode }}</option>
                                    <option value="3-{{ $master->periode }}">
                                        3-{{ $master->periode }}</option>
                                    <option value="4-{{ $master->periode }}">
                                        4-{{ $master->periode }}</option>
                                    <option value="5-{{ $master->periode }}">
                                        5-{{ $master->periode }}</option>
                                    <option value="6-{{ $master->periode }}">
                                        6-{{ $master->periode }}</option>
                                    <option value="7-{{ $master->periode }}">
                                        7-{{ $master->periode }}</option>
                                    <option value="8-{{ $master->periode }}">
                                        8-{{ $master->periode }}</option>
                                    <option value="9-{{ $master->periode }}">
                                        9-{{ $master->periode }}</option>
                                    <option value="10-{{ $master->periode }}">
                                        10-{{ $master->periode }}</option>
                                    <option value="11-{{ $master->periode }}">
                                        11-{{ $master->periode }}</option>
                                    <option value="12-{{ $master->periode }}">
                                        12-{{ $master->periode }}</option>
                                    <option value="13-{{ $master->periode }}">
                                        13-{{ $master->periode }}</option>
                                    <option value="14-{{ $master->periode }}">
                                        14-{{ $master->periode }}</option>
                                    <option value="15-{{ $master->periode }}">
                                        15-{{ $master->periode }}</option>
                                    <option value="16-{{ $master->periode }}">
                                        16-{{ $master->periode }}</option>
                                    <option value="17-{{ $master->periode }}">
                                        17-{{ $master->periode }}</option>
                                    <option value="18-{{ $master->periode }}">
                                        18-{{ $master->periode }}</option>
                                    <option value="19-{{ $master->periode }}">
                                        19-{{ $master->periode }}</option>
                                    <option value="20-{{ $master->periode }}">
                                        20-{{ $master->periode }}</option>
                                    <option value="21-{{ $master->periode }}">
                                        21-{{ $master->periode }}</option>
                                    <option value="22-{{ $master->periode }}">
                                        22-{{ $master->periode }}</option>
                                    <option value="23-{{ $master->periode }}">
                                        23-{{ $master->periode }}</option>
                                    <option value="24-{{ $master->periode }}">
                                        24-{{ $master->periode }}</option>
                                    <option value="25-{{ $master->periode }}">
                                        25-{{ $master->periode }}</option>
                                    <option value="26-{{ $master->periode }}">
                                        26-{{ $master->periode }}</option>
                                    <option value="27-{{ $master->periode }}">
                                        27-{{ $master->periode }}</option>
                                    <option value="28-{{ $master->periode }}">
                                        28-{{ $master->periode }}</option>
                                    <option value="29-{{ $master->periode }}">
                                        29-{{ $master->periode }}</option>
                                @else
                                    @if ($master->total == 30)
                                        <option value="1-{{ $master->periode }}">
                                            1-{{ $master->periode }}</option>
                                        <option value="2-{{ $master->periode }}">
                                            2-{{ $master->periode }}</option>
                                        <option value="3-{{ $master->periode }}">
                                            3-{{ $master->periode }}</option>
                                        <option value="4-{{ $master->periode }}">
                                            4-{{ $master->periode }}</option>
                                        <option value="5-{{ $master->periode }}">
                                            5-{{ $master->periode }}</option>
                                        <option value="6-{{ $master->periode }}">
                                            6-{{ $master->periode }}</option>
                                        <option value="7-{{ $master->periode }}">
                                            7-{{ $master->periode }}</option>
                                        <option value="8-{{ $master->periode }}">
                                            8-{{ $master->periode }}</option>
                                        <option value="9-{{ $master->periode }}">
                                            9-{{ $master->periode }}</option>
                                        <option value="10-{{ $master->periode }}">
                                            10-{{ $master->periode }}</option>
                                        <option value="11-{{ $master->periode }}">
                                            11-{{ $master->periode }}</option>
                                        <option value="12-{{ $master->periode }}">
                                            12-{{ $master->periode }}</option>
                                        <option value="13-{{ $master->periode }}">
                                            13-{{ $master->periode }}</option>
                                        <option value="14-{{ $master->periode }}">
                                            14-{{ $master->periode }}</option>
                                        <option value="15-{{ $master->periode }}">
                                            15-{{ $master->periode }}</option>
                                        <option value="16-{{ $master->periode }}">
                                            16-{{ $master->periode }}</option>
                                        <option value="17-{{ $master->periode }}">
                                            17-{{ $master->periode }}</option>
                                        <option value="18-{{ $master->periode }}">
                                            18-{{ $master->periode }}</option>
                                        <option value="19-{{ $master->periode }}">
                                            19-{{ $master->periode }}</option>
                                        <option value="20-{{ $master->periode }}">
                                            20-{{ $master->periode }}</option>
                                        <option value="21-{{ $master->periode }}">
                                            21-{{ $master->periode }}</option>
                                        <option value="22-{{ $master->periode }}">
                                            22-{{ $master->periode }}</option>
                                        <option value="23-{{ $master->periode }}">
                                            23-{{ $master->periode }}</option>
                                        <option value="24-{{ $master->periode }}">
                                            24-{{ $master->periode }}</option>
                                        <option value="25-{{ $master->periode }}">
                                            25-{{ $master->periode }}</option>
                                        <option value="26-{{ $master->periode }}">
                                            26-{{ $master->periode }}</option>
                                        <option value="27-{{ $master->periode }}">
                                            27-{{ $master->periode }}</option>
                                        <option value="28-{{ $master->periode }}">
                                            28-{{ $master->periode }}</option>
                                        <option value="29-{{ $master->periode }}">
                                            29-{{ $master->periode }}</option>
                                        <option value="30-{{ $master->periode }}">
                                            30-{{ $master->periode }}</option>
                                    @else
                                        @if ($master->total == 31)
                                            <option value="1-{{ $master->periode }}">
                                                1-{{ $master->periode }}</option>
                                            <option value="2-{{ $master->periode }}">
                                                2-{{ $master->periode }}</option>
                                            <option value="3-{{ $master->periode }}">
                                                3-{{ $master->periode }}</option>
                                            <option value="4-{{ $master->periode }}">
                                                4-{{ $master->periode }}</option>
                                            <option value="5-{{ $master->periode }}">
                                                5-{{ $master->periode }}</option>
                                            <option value="6-{{ $master->periode }}">
                                                6-{{ $master->periode }}</option>
                                            <option value="7-{{ $master->periode }}">
                                                7-{{ $master->periode }}</option>
                                            <option value="8-{{ $master->periode }}">
                                                8-{{ $master->periode }}</option>
                                            <option value="9-{{ $master->periode }}">
                                                9-{{ $master->periode }}</option>
                                            <option value="10-{{ $master->periode }}">
                                                10-{{ $master->periode }}</option>
                                            <option value="11-{{ $master->periode }}">
                                                11-{{ $master->periode }}</option>
                                            <option value="12-{{ $master->periode }}">
                                                12-{{ $master->periode }}</option>
                                            <option value="13-{{ $master->periode }}">
                                                13-{{ $master->periode }}</option>
                                            <option value="14-{{ $master->periode }}">
                                                14-{{ $master->periode }}</option>
                                            <option value="15-{{ $master->periode }}">
                                                15-{{ $master->periode }}</option>
                                            <option value="16-{{ $master->periode }}">
                                                16-{{ $master->periode }}</option>
                                            <option value="17-{{ $master->periode }}">
                                                17-{{ $master->periode }}</option>
                                            <option value="18-{{ $master->periode }}">
                                                18-{{ $master->periode }}</option>
                                            <option value="19-{{ $master->periode }}">
                                                19-{{ $master->periode }}</option>
                                            <option value="20-{{ $master->periode }}">
                                                20-{{ $master->periode }}</option>
                                            <option value="21-{{ $master->periode }}">
                                                21-{{ $master->periode }}</option>
                                            <option value="22-{{ $master->periode }}">
                                                22-{{ $master->periode }}</option>
                                            <option value="23-{{ $master->periode }}">
                                                23-{{ $master->periode }}</option>
                                            <option value="24-{{ $master->periode }}">
                                                24-{{ $master->periode }}</option>
                                            <option value="25-{{ $master->periode }}">
                                                25-{{ $master->periode }}</option>
                                            <option value="26-{{ $master->periode }}">
                                                26-{{ $master->periode }}</option>
                                            <option value="27-{{ $master->periode }}">
                                                27-{{ $master->periode }}</option>
                                            <option value="28-{{ $master->periode }}">
                                                28-{{ $master->periode }}</option>
                                            <option value="29-{{ $master->periode }}">
                                                29-{{ $master->periode }}</option>
                                            <option value="30-{{ $master->periode }}">
                                                30-{{ $master->periode }}</option>
                                            <option value="31-{{ $master->periode }}">
                                                31-{{ $master->periode }}</option>
                                        @else
                                        @endif
                                    @endif
                                @endif
                            @endif
                        </select>
                    </td>
                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                        <input required max="1000" type="number" class="form-control form-control-sm" name="pagi[]">
                    </td>
                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                        <input required max="1000" type="number" class="form-control form-control-sm" name="siang[]">
                    </td>
                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                        <input required max="1000" type="number" class="form-control form-control-sm" name="sore[]">
                    </td>
                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                        <input required max="1000" type="number" class="form-control form-control-sm" name="malam[]">
                    </td>
                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                        <input required maxlength="50" type="text" class="form-control form-control-sm" name="ket[]">
                    </td>
                </tr>
                `);
            });
        $("#tableEstimate tbody").on("click", ".remove", function ()
        {
            // Getting all the rows next to the row
            // containing the clicked button
            var child = $(this).closest("tr").nextAll();
            // Iterating across all the rows
            // obtained to change the index
            child.each(function () {
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

        $("#tableEstimate tbody").on("input", ".unit_price", function () {
            var unit_price = parseFloat($(this).val());
            var qty = parseFloat($(this).closest("tr").find(".qty").val());
            var total = $(this).closest("tr").find(".total");
            total.val(unit_price * qty);

            calc_total();
        });

        $("#tableEstimate tbody").on("input", ".qty", function () {
            var qty = parseFloat($(this).val());
            var unit_price = parseFloat($(this).closest("tr").find(".unit_price").val());
            var total = $(this).closest("tr").find(".total");
            total.val(unit_price * qty);
            calc_total();
        });
        function calc_total() {
            var sum = 0;
            $(".total").each(function () {
            sum += parseFloat($(this).val());
            });
            $(".subtotal").text(sum);

            var amounts = sum;
            var tax     = 100;
            $(document).on("change keyup blur", "#qty", function()
            {
                var qty = $("#qty").val();
                var discount = $(".discount").val();
                $(".total").val(amounts * qty);
                $("#sum_total").val(amounts * qty);
                $("#tax_1").val((amounts * qty)/tax);
                $("#grand_total").val((parseInt(amounts)) - (parseInt(discount)));
            });
        }
    </script>
@endsection

@section('konten')
<div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
    <div class="col d-flex align-items-center">
        <div>
            <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                        class="fas fa-home text-primary"></i></button></a>
            <a href="{{ route('cat.l') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                        class="fas fa-list text-primary"></i></button></a>
            <a href="{{ route('cat.c') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                        class="fas fa-spinner text-primary"></i></button></a>
            <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                {{ date('F Y') }}</span>
        </div>
        <div class="ms-1">&nbsp;
            <span class=" fw-semi-bold text-primary">Catering Tambah</span>
        </div>
    </div>
</div>

    @include('comp.alert')

<form action="{{ route('cat.s') }}" method="post">
@csrf
    <div class="card mb-3">
        <div class="card-header bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample4">
            <div class="table-responsive scrollbar">
                <table id="tableEstimate" class="table table-sm table-striped table-bordered mb-0 fs--1"
                    data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                    <thead class="bg-200 text-800">
                        <tr class="text-center bg-secondary text-white">
                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                data-sort="no">
                                Add Row
                            </th>
                            <th style="min-width: 180px" class="sort align-middle white-space-nowrap"
                                data-sort="tgl">
                                Tanggal
                            </th>
                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                data-sort="shift">
                                Pagi
                            </th>
                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                data-sort="shift">
                                Siang
                            </th>
                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                data-sort="shift">
                                Sore
                            </th>
                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                data-sort="shift">
                                Malam
                            </th>
                            <th style="min-width: 400px; max-width: 400px;"
                                class="sort align-middle white-space-nowrap" data-sort="name">
                                Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tbody id="table-posts" class="list">
                        <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                <a href="javascript:void(0)" class="text-success"
                                    title="Add" id="addBtn"><i class="fas fa-plus-square fs-2"></i></a>
                                <input type="hidden" name="cat_id[]" value="{{ $cat_m->id }}">
                                <input type="hidden" name="master_id[]" value="{{ $cat_m->master_id }}">
                            </td>
                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                <select required name="tgl[]" class="form-select form-select-sm">
                                    <option></option>
                                    @if ($master->total == 28)
                                        <option value="1-{{ $master->periode }}">
                                            1-{{ $master->periode }}</option>
                                        <option value="2-{{ $master->periode }}">
                                            2-{{ $master->periode }}</option>
                                        <option value="3-{{ $master->periode }}">
                                            3-{{ $master->periode }}</option>
                                        <option value="4-{{ $master->periode }}">
                                            4-{{ $master->periode }}</option>
                                        <option value="5-{{ $master->periode }}">
                                            5-{{ $master->periode }}</option>
                                        <option value="6-{{ $master->periode }}">
                                            6-{{ $master->periode }}</option>
                                        <option value="7-{{ $master->periode }}">
                                            7-{{ $master->periode }}</option>
                                        <option value="8-{{ $master->periode }}">
                                            8-{{ $master->periode }}</option>
                                        <option value="9-{{ $master->periode }}">
                                            9-{{ $master->periode }}</option>
                                        <option value="10-{{ $master->periode }}">
                                            10-{{ $master->periode }}</option>
                                        <option value="11-{{ $master->periode }}">
                                            11-{{ $master->periode }}</option>
                                        <option value="12-{{ $master->periode }}">
                                            12-{{ $master->periode }}</option>
                                        <option value="13-{{ $master->periode }}">
                                            13-{{ $master->periode }}</option>
                                        <option value="14-{{ $master->periode }}">
                                            14-{{ $master->periode }}</option>
                                        <option value="15-{{ $master->periode }}">
                                            15-{{ $master->periode }}</option>
                                        <option value="16-{{ $master->periode }}">
                                            16-{{ $master->periode }}</option>
                                        <option value="17-{{ $master->periode }}">
                                            17-{{ $master->periode }}</option>
                                        <option value="18-{{ $master->periode }}">
                                            18-{{ $master->periode }}</option>
                                        <option value="19-{{ $master->periode }}">
                                            19-{{ $master->periode }}</option>
                                        <option value="20-{{ $master->periode }}">
                                            20-{{ $master->periode }}</option>
                                        <option value="21-{{ $master->periode }}">
                                            21-{{ $master->periode }}</option>
                                        <option value="22-{{ $master->periode }}">
                                            22-{{ $master->periode }}</option>
                                        <option value="23-{{ $master->periode }}">
                                            23-{{ $master->periode }}</option>
                                        <option value="24-{{ $master->periode }}">
                                            24-{{ $master->periode }}</option>
                                        <option value="25-{{ $master->periode }}">
                                            25-{{ $master->periode }}</option>
                                        <option value="26-{{ $master->periode }}">
                                            26-{{ $master->periode }}</option>
                                        <option value="27-{{ $master->periode }}">
                                            27-{{ $master->periode }}</option>
                                        <option value="28-{{ $master->periode }}">
                                            28-{{ $master->periode }}</option>
                                    @else
                                        @if ($master->total == 29)
                                            <option value="1-{{ $master->periode }}">
                                                1-{{ $master->periode }}</option>
                                            <option value="2-{{ $master->periode }}">
                                                2-{{ $master->periode }}</option>
                                            <option value="3-{{ $master->periode }}">
                                                3-{{ $master->periode }}</option>
                                            <option value="4-{{ $master->periode }}">
                                                4-{{ $master->periode }}</option>
                                            <option value="5-{{ $master->periode }}">
                                                5-{{ $master->periode }}</option>
                                            <option value="6-{{ $master->periode }}">
                                                6-{{ $master->periode }}</option>
                                            <option value="7-{{ $master->periode }}">
                                                7-{{ $master->periode }}</option>
                                            <option value="8-{{ $master->periode }}">
                                                8-{{ $master->periode }}</option>
                                            <option value="9-{{ $master->periode }}">
                                                9-{{ $master->periode }}</option>
                                            <option value="10-{{ $master->periode }}">
                                                10-{{ $master->periode }}</option>
                                            <option value="11-{{ $master->periode }}">
                                                11-{{ $master->periode }}</option>
                                            <option value="12-{{ $master->periode }}">
                                                12-{{ $master->periode }}</option>
                                            <option value="13-{{ $master->periode }}">
                                                13-{{ $master->periode }}</option>
                                            <option value="14-{{ $master->periode }}">
                                                14-{{ $master->periode }}</option>
                                            <option value="15-{{ $master->periode }}">
                                                15-{{ $master->periode }}</option>
                                            <option value="16-{{ $master->periode }}">
                                                16-{{ $master->periode }}</option>
                                            <option value="17-{{ $master->periode }}">
                                                17-{{ $master->periode }}</option>
                                            <option value="18-{{ $master->periode }}">
                                                18-{{ $master->periode }}</option>
                                            <option value="19-{{ $master->periode }}">
                                                19-{{ $master->periode }}</option>
                                            <option value="20-{{ $master->periode }}">
                                                20-{{ $master->periode }}</option>
                                            <option value="21-{{ $master->periode }}">
                                                21-{{ $master->periode }}</option>
                                            <option value="22-{{ $master->periode }}">
                                                22-{{ $master->periode }}</option>
                                            <option value="23-{{ $master->periode }}">
                                                23-{{ $master->periode }}</option>
                                            <option value="24-{{ $master->periode }}">
                                                24-{{ $master->periode }}</option>
                                            <option value="25-{{ $master->periode }}">
                                                25-{{ $master->periode }}</option>
                                            <option value="26-{{ $master->periode }}">
                                                26-{{ $master->periode }}</option>
                                            <option value="27-{{ $master->periode }}">
                                                27-{{ $master->periode }}</option>
                                            <option value="28-{{ $master->periode }}">
                                                28-{{ $master->periode }}</option>
                                            <option value="29-{{ $master->periode }}">
                                                29-{{ $master->periode }}</option>
                                        @else
                                            @if ($master->total == 30)
                                                <option value="1-{{ $master->periode }}">
                                                    1-{{ $master->periode }}</option>
                                                <option value="2-{{ $master->periode }}">
                                                    2-{{ $master->periode }}</option>
                                                <option value="3-{{ $master->periode }}">
                                                    3-{{ $master->periode }}</option>
                                                <option value="4-{{ $master->periode }}">
                                                    4-{{ $master->periode }}</option>
                                                <option value="5-{{ $master->periode }}">
                                                    5-{{ $master->periode }}</option>
                                                <option value="6-{{ $master->periode }}">
                                                    6-{{ $master->periode }}</option>
                                                <option value="7-{{ $master->periode }}">
                                                    7-{{ $master->periode }}</option>
                                                <option value="8-{{ $master->periode }}">
                                                    8-{{ $master->periode }}</option>
                                                <option value="9-{{ $master->periode }}">
                                                    9-{{ $master->periode }}</option>
                                                <option value="10-{{ $master->periode }}">
                                                    10-{{ $master->periode }}</option>
                                                <option value="11-{{ $master->periode }}">
                                                    11-{{ $master->periode }}</option>
                                                <option value="12-{{ $master->periode }}">
                                                    12-{{ $master->periode }}</option>
                                                <option value="13-{{ $master->periode }}">
                                                    13-{{ $master->periode }}</option>
                                                <option value="14-{{ $master->periode }}">
                                                    14-{{ $master->periode }}</option>
                                                <option value="15-{{ $master->periode }}">
                                                    15-{{ $master->periode }}</option>
                                                <option value="16-{{ $master->periode }}">
                                                    16-{{ $master->periode }}</option>
                                                <option value="17-{{ $master->periode }}">
                                                    17-{{ $master->periode }}</option>
                                                <option value="18-{{ $master->periode }}">
                                                    18-{{ $master->periode }}</option>
                                                <option value="19-{{ $master->periode }}">
                                                    19-{{ $master->periode }}</option>
                                                <option value="20-{{ $master->periode }}">
                                                    20-{{ $master->periode }}</option>
                                                <option value="21-{{ $master->periode }}">
                                                    21-{{ $master->periode }}</option>
                                                <option value="22-{{ $master->periode }}">
                                                    22-{{ $master->periode }}</option>
                                                <option value="23-{{ $master->periode }}">
                                                    23-{{ $master->periode }}</option>
                                                <option value="24-{{ $master->periode }}">
                                                    24-{{ $master->periode }}</option>
                                                <option value="25-{{ $master->periode }}">
                                                    25-{{ $master->periode }}</option>
                                                <option value="26-{{ $master->periode }}">
                                                    26-{{ $master->periode }}</option>
                                                <option value="27-{{ $master->periode }}">
                                                    27-{{ $master->periode }}</option>
                                                <option value="28-{{ $master->periode }}">
                                                    28-{{ $master->periode }}</option>
                                                <option value="29-{{ $master->periode }}">
                                                    29-{{ $master->periode }}</option>
                                                <option value="30-{{ $master->periode }}">
                                                    30-{{ $master->periode }}</option>
                                            @else
                                                @if ($master->total == 31)
                                                    <option value="1-{{ $master->periode }}">
                                                        1-{{ $master->periode }}</option>
                                                    <option value="2-{{ $master->periode }}">
                                                        2-{{ $master->periode }}</option>
                                                    <option value="3-{{ $master->periode }}">
                                                        3-{{ $master->periode }}</option>
                                                    <option value="4-{{ $master->periode }}">
                                                        4-{{ $master->periode }}</option>
                                                    <option value="5-{{ $master->periode }}">
                                                        5-{{ $master->periode }}</option>
                                                    <option value="6-{{ $master->periode }}">
                                                        6-{{ $master->periode }}</option>
                                                    <option value="7-{{ $master->periode }}">
                                                        7-{{ $master->periode }}</option>
                                                    <option value="8-{{ $master->periode }}">
                                                        8-{{ $master->periode }}</option>
                                                    <option value="9-{{ $master->periode }}">
                                                        9-{{ $master->periode }}</option>
                                                    <option value="10-{{ $master->periode }}">
                                                        10-{{ $master->periode }}</option>
                                                    <option value="11-{{ $master->periode }}">
                                                        11-{{ $master->periode }}</option>
                                                    <option value="12-{{ $master->periode }}">
                                                        12-{{ $master->periode }}</option>
                                                    <option value="13-{{ $master->periode }}">
                                                        13-{{ $master->periode }}</option>
                                                    <option value="14-{{ $master->periode }}">
                                                        14-{{ $master->periode }}</option>
                                                    <option value="15-{{ $master->periode }}">
                                                        15-{{ $master->periode }}</option>
                                                    <option value="16-{{ $master->periode }}">
                                                        16-{{ $master->periode }}</option>
                                                    <option value="17-{{ $master->periode }}">
                                                        17-{{ $master->periode }}</option>
                                                    <option value="18-{{ $master->periode }}">
                                                        18-{{ $master->periode }}</option>
                                                    <option value="19-{{ $master->periode }}">
                                                        19-{{ $master->periode }}</option>
                                                    <option value="20-{{ $master->periode }}">
                                                        20-{{ $master->periode }}</option>
                                                    <option value="21-{{ $master->periode }}">
                                                        21-{{ $master->periode }}</option>
                                                    <option value="22-{{ $master->periode }}">
                                                        22-{{ $master->periode }}</option>
                                                    <option value="23-{{ $master->periode }}">
                                                        23-{{ $master->periode }}</option>
                                                    <option value="24-{{ $master->periode }}">
                                                        24-{{ $master->periode }}</option>
                                                    <option value="25-{{ $master->periode }}">
                                                        25-{{ $master->periode }}</option>
                                                    <option value="26-{{ $master->periode }}">
                                                        26-{{ $master->periode }}</option>
                                                    <option value="27-{{ $master->periode }}">
                                                        27-{{ $master->periode }}</option>
                                                    <option value="28-{{ $master->periode }}">
                                                        28-{{ $master->periode }}</option>
                                                    <option value="29-{{ $master->periode }}">
                                                        29-{{ $master->periode }}</option>
                                                    <option value="30-{{ $master->periode }}">
                                                        30-{{ $master->periode }}</option>
                                                    <option value="31-{{ $master->periode }}">
                                                        31-{{ $master->periode }}</option>
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                </select>
                            </td>
                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                <input required max="1000" type="number" class="form-control form-control-sm" name="pagi[]">
                            </td>
                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                <input required max="1000" type="number" class="form-control form-control-sm" name="siang[]">
                            </td>
                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                <input required max="1000" type="number" class="form-control form-control-sm" name="sore[]">
                            </td>
                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                <input required max="1000" type="number" class="form-control form-control-sm" name="malam[]">
                            </td>
                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                <input required maxlength="50" type="text" class="form-control form-control-sm" name="ket[]">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light">
            <button class="btn btn-sm btn-success" type="submit"><i class="fas fa-save"></i>
                Simpan</button>
        </div>
    </div>
</form>
@endsection
