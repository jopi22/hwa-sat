@extends('layouts.layout')

@section('judul')
    Dedicated | HWA &bull; SAT
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
                    <a href="javascript:void(0)" class="text-danger remove" title="Remove"><i class="fas fa-minus-square fs-2"></i></a>
                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <input required type="text" maxlength="25"
                                                        class="form-control form-control-sm" name="dedicated[]">
                                                    <input required type="hidden" name="status[]" value="Aktif">
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <input type="text" maxlength="50"
                                                        class="form-control form-control-sm" name="ket[]">
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
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                <div>
                    <h6 class="text-primary fs--1 mb-0"><i class="fas fa-truck-monster"></i> Rental Performance
                    </h6>
                    <h4 class="text-primary fw-bold mb-0">Dedicated</h4>
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
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc"
                id="dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc">
                <div class="collapse" id="collapseExample">
                    <div class="border p-x1 rounded">
                        <form action="{{ route('dedicated.s') }}" method="post">
                            @csrf
                            <p class="fs--1 mb-0"><strong>Notes: </strong>Kolom Berwarna
                                Merah <i class="fas fa-square text-danger"></i> Wajib Diisi | Tekan Tombol <i
                                    class="fas fa-plus-square text-success"></i> Untuk Tambah
                                Baris</p>
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
                                                <th style="min-width: 150px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Dedicated
                                                </th>
                                                <th style="min-width: 300px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                                    Keterangan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-posts" class="list">
                                            <tr class="btn-reveal-trigger text-center text-1000 fw-semi-bold">
                                                <td class="align-middle white-space-nowrap">
                                                    <a href="javascript:void(0)" class="text-success" title="Add"
                                                        id="addBtn"><i class="fas fa-plus-square fs-2"></i></a>
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <input required type="text" maxlength="25"
                                                        class="form-control form-control-sm" name="dedicated[]">
                                                    <input required type="hidden" name="status[]" value="Aktif">
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <input type="text" maxlength="50"
                                                        class="form-control form-control-sm" name="ket[]">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm btn-success mt-3" type="submit"><i class="fas fa-save"></i>
                                    Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","akt","ket"],"page":10,"pagination":true,"filter":{"key":"jab"}}'>
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
                        <a href="#"><button class="btn btn-sm btn-falcon-success mx-2" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" type="button"><span data-fa-transform="shrink-3"
                                    class="fas fa-plus"></span></button></a>
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
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                    data-sort="akt">
                                    Dedicated
                                </th>
                                <th style="min-width: 300px" class="sort align-middle white-space-nowrap"
                                    data-sort="ket">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($dedicated as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <button data-bs-toggle="modal" data-bs-target="#edit-{{ $res->id }}"
                                                class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                            <button data-bs-toggle="modal" data-bs-target="#hapus-{{ $res->id }}"
                                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap akt">
                                        @if ($res->dedicated)
                                            {{ $res->dedicated }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap akt">
                                        @if ($res->ket)
                                            {{ $res->ket }}
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

    @include('comp.modal.rental.modal_dedicated_edit')
    @include('comp.modal.rental.modal_dedicated_delete')
@endsection
