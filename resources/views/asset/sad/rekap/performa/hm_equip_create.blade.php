@extends('layouts.layout')

@section('judul')
    {{ $equip_m->equip_->no_unit }} | Add Perform | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
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
                <td class="align-middle text-1000 text-center white-space-nowrap"><a href="javascript:void(0)" class="text-danger remove" title="Remove"><i class="fas fa-minus-square fs-2"></i></a>
    <input type="hidden" name="equip_id[]" value="{{ $equip_m->equip_id }}">
                <input type="hidden" name="master_id[]" value="{{ $master->id }}">
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
                                <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                    <select required name="shift_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($shift as $item)
                                            <option value="{{ $item->id }}">{{ $item->shift }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap name">
                                    <select required name="kar_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($kar as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} |
                                                {{ $item->username }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input required type="number" class="form-control form-control-sm" name="hm_awal[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input required type="number" class="form-control form-control-sm"
                                        name="hm_akhir[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input type="number" class="form-control form-control-sm" name="hm_pot[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input type="number" class="form-control form-control-sm" name="rest_time[]">
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap dedi">
                                    <select required name="dedicated_id[]" class="form-select form-select-sm">
                                        <option></option>
                                        @foreach ($dedi as $item)
                                            <option value="{{ $item->id }}">{{ $item->dedicated }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap dedi">
                                    <select required name="category_id[]" class="form-select form-select-sm">
                                        <option></option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->category }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap lokasi">
                                    <select required name="lokasi_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($lok as $item)
                                            <option value="{{ $item->id }}">{{ $item->location }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap lokasi">
                                    <select required name="aktivitas_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($aktivitas as $item)
                                            <option value="{{ $item->id }}">{{ $item->aktivitas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap rem">
                                    <input type="text" name="remark[]" class="form-control form-control-sm">
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
                <span class="badge bg-soft-danger text-danger bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                    {{ $master->created_at->format('F Y') }}</span>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <a class="btn btn-falcon-default btn-sm" href="{{ route('hm.create') }}" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Back to Main Table">
                    <span class="fas fa-list"></span>
                </a>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-primary"> Tambah Hours Meter / {{ $equip_m->equip_->tipe }}</span>
                <span class="mx-1 mx-sm-2 text-300">: </span>
                <span class=" fw-semi-bold text-info"> {{ $equip_m->equip_->no_unit }}</span>
            </div>
            <div class="col-auto d-flex align-items-center">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                    <a href="{{ route('r.hm.e.i', Crypt::encryptString($equip_m->equip_id)) }}">
                        <button class="btn btn-sm  text-primary" data-bs-toggle="pill"
                            data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                            aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="false"
                            id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">List</button>
                    </a>
                    <a href="{{ route('r.hm.e.e', Crypt::encryptString($equip_m->equip_id)) }}">
                        <button class="btn btn-sm  text-warning" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                    </a>
                    <a href="{{ route('r.hm.e.c', Crypt::encryptString($equip_m->equip_id)) }}">
                        <button class="btn btn-sm active text-success" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" aria-selected="true"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc">Tambah</button>
                    </a>
                </div>
                <div class="position-relative">&nbsp;
                    <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fas fa-truck-monster"></i></button>
                </div>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"><i class="fas fa-truck-monster"></i> Performance Unit</h5><button
                class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="tableExample4"
                data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
                <div class="col-sm-auto mb-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr class="text-center">
                                    <th style="min-width: 150px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="tgl">
                                        No Unit
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap"
                                        data-sort="payment">
                                        Type
                                    </th>
                                    <th style="min-width: 50px"
                                        class="bg-primary text-white align-middle white-space-nowrap">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($equip_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <div class="btn-group  btn-group-sm" role="group">
                                                <a href="{{ route('r.hm.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-info" type="button"><i
                                                        class="fas fa-info-circle"></i></a>
                                                <a href="{{ route('r.hm.e.e', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-warning" type="button"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('r.hm.e.c', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-success" type="button"><i
                                                        class="fas fa-plus-square"></i></a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                            {{ $res->equip_->no_unit }}</td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            {{ $res->equip_->tipe }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <form action="{{ route('hm.e.st') }}" method="post">
        @csrf
        <div class="card mb-3">
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
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    Add Row
                                </th>
                                <th style="min-width: 180px" class="sort bg-danger align-middle white-space-nowrap"
                                    data-sort="tgl">
                                    Tanggal
                                </th>
                                <th style="min-width: 180px" class="sort bg-danger align-middle white-space-nowrap"
                                    data-sort="shift">
                                    Shift
                                </th>
                                <th style="min-width: 400px; max-width: 400px;"
                                    class="sort bg-danger align-middle white-space-nowrap" data-sort="name">Operator /
                                    Driver
                                </th>
                                <th style="min-width: 150px" class="sort bg-danger align-middle white-space-nowrap">
                                    HM Awal</th>
                                <th style="min-width: 150px"
                                    class="sort bg-danger align-middle white-space-nowrap text-center">
                                    HM Akhir
                                </th>
                                <th style="min-width: 150px" class="sort align-middle white-space-nowrap">HM
                                    Potongan
                                </th>
                                <th style="min-width: 150px" class="sort align-middle white-space-nowrap">Rest
                                    Time
                                </th>
                                <th style="min-width: 300px; max-width: 400px;"
                                    class="sort bg-danger align-middle white-space-nowrap" data-sort="dedi">Dedicated
                                </th>
                                <th style="min-width: 300px; max-width: 400px;"
                                    class="sort bg-danger align-middle white-space-nowrap" data-sort="dedi">Category
                                </th>
                                <th style="min-width: 300px; max-width: 400px;"
                                    class="sort bg-danger align-middle white-space-nowrap" data-sort="lokasi">Lokasi
                                </th>
                                <th style="min-width: 300px; max-width: 400px;"
                                    class="sort bg-danger align-middle white-space-nowrap" data-sort="lokasi">Aktivitas
                                </th>
                                <th style="min-width: 400px; max-width: 400px;"
                                    class="sort align-middle white-space-nowrap" data-sort="rem">Remark
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <a href="javascript:void(0)" class="text-success" title="Add" id="addBtn"><i
                                            class="fas fa-plus-square fs-2"></i></a>
                                    <input type="hidden" name="equip_id[]" value="{{ $equip_m->equip_id }}">
                                    <input type="hidden" name="master_id[]" value="{{ $master->id }}">
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
                                <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                    <select required name="shift_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($shift as $item)
                                            <option value="{{ $item->id }}">{{ $item->shift }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap name">
                                    <select required name="kar_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($kar as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} |
                                                {{ $item->username }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input required type="number" class="form-control form-control-sm" name="hm_awal[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input required type="number" class="form-control form-control-sm"
                                        name="hm_akhir[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input type="number" class="form-control form-control-sm" name="hm_pot[]">
                                </td>
                                <td class="align-middle text-1000 text-center white-space-nowrap">
                                    <input type="number" class="form-control form-control-sm" name="rest_time[]">
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap dedi">
                                    <select required name="dedicated_id[]" class="form-select form-select-sm">
                                        <option></option>
                                        @foreach ($dedi as $item)
                                            <option value="{{ $item->id }}">{{ $item->dedicated }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap dedi">
                                    <select required name="category_id[]" class="form-select form-select-sm">
                                        <option></option>
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->category }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap lokasi">
                                    <select required name="lokasi_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($lok as $item)
                                            <option value="{{ $item->id }}">{{ $item->location }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap lokasi">
                                    <select required name="aktivitas_id[]" class="form-select form-select-sm">
                                        <option>
                                        </option>
                                        @foreach ($aktivitas as $item)
                                            <option value="{{ $item->id }}">{{ $item->aktivitas }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle text-1000 white-space-nowrap rem">
                                    <input type="text" name="remark[]" class="form-control form-control-sm">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" name="equip_id_bro" value="{{ $equip_m->equip_id }}">
                <input type="hidden" name="delete_id_m" value="{{ $equip_m->id }}">
                <input type="hidden" name="id_m" value="{{ $equip_m->id }}">
                <input type="hidden" name="master_id_m" value="{{ $equip_m->master_id }}">
                <input type="hidden" name="equip_id_m" value="{{ $equip_m->equip_id }}">
                <input type="hidden" name="kode_unik" value="{{ $equip_m->kode_unik }}">
                <input type="hidden" name="hm_awal_m" value="{{ $hm_awal }}">
                <input type="hidden" name="hm_akhir_m" value="{{ $hm_akhir }}">
                <input type="hidden" name="total_pot_m" value="{{ $total_pot }}">
                <input type="hidden" name="total_m" value="{{ $total }}">
                <input type="hidden" name="ot_total" value="{{ $equip_m->ot_total }}">
                <input type="hidden" name="valid" value="{{ $equip_m->valid }}">
                <input type="hidden" name="tipe" value="{{ $equip_m->tipe }}">
                <input type="hidden" name="hauling" value="{{ $equip_m->hauling }}">
            </div>
            <div class="card-footer text-center  bg-light">
                <button class="btn text-center btn-sm btn-success" type="submit"><i class="fas fa-save"></i>
                    Simpan</button>
            </div>
        </div>
    </form>
@endsection
