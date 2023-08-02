@extends('layouts.layout')

@section('judul')
    Hauling | Rekapitulasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
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
                                                            <input required type="date" maxlength="25"
                                                                class="form-control form-control-sm" name="tgl[]">
                                                            <input required type="hidden" name="master_id[]"
                                                                value="{{ $master->id }}">
                                                        </td>
                                                        <td class="align-middle white-space-nowrap">
                                                            <select required name="kar_id[]"
                                                                class="form-control form-control-sm">
                                                                <option value=""></option>
                                                                @foreach ($kar as $asu)
                                                                    <option value="{{ $asu->kar_->id }}">
                                                                        {{ $asu->kar_->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td class="align-middle white-space-nowrap">
                                                            <select required name="equip_id[]"
                                                                class="form-control form-control-sm">
                                                                <option value=""></option>
                                                                @foreach ($equip as $asu)
                                                                    <option value="{{ $asu->id }}">
                                                                        {{ $asu->no_unit }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td class="align-middle white-space-nowrap">
                                                            <select required name="start_loc[]"
                                                                class="form-control form-control-sm">
                                                                <option value=""></option>
                                                                @foreach ($lok as $asu)
                                                                    <option value="{{ $asu->id }}">
                                                                        {{ $asu->location }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td class="align-middle white-space-nowrap">
                                                            <select required name="end_loc[]"
                                                                class="form-control form-control-sm">
                                                                <option value=""></option>
                                                                @foreach ($lok as $asu)
                                                                    <option value="{{ $asu->id }}">
                                                                        {{ $asu->location }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td class="align-middle white-space-nowrap">
                                                            <select required name="dedi_id[]"
                                                                class="form-control form-control-sm">
                                                                <option value=""></option>
                                                                @foreach ($dedi as $asu)
                                                                    <option value="{{ $asu->id }}">
                                                                        {{ $asu->dedicated }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td class="align-middle white-space-nowrap">
                                                            <input required type="number"
                                                                class="form-control form-control-sm" name="timbangan[]">
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
                    <h4 class="text-primary fw-bold mb-0">Hauling & Timbangan</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <h6 class="text-danger mb-0">Rekapitulasi Master :</h6>
                    </div>
                    <div class="col-md-auto">
                        <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/illustrations/ticket-bg.png') }}"
                    alt="" width="150" />
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light">
            {{-- // --}}
        </div>
        <div class="tab-content">
            <div class="tab-pane preview-tab-pane active" role="tabpanel"
                aria-labelledby="tab-dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc"
                id="dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc">
                <div class="collapse" id="collapseExample">
                    <div class="border p-x1 rounded">
                        <form action="{{ route('ha.s') }}" method="post">
                            @csrf
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
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Tanggal
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Driver
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Unit
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Start Location
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    End Location
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Dedicated
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                                    Timbangan (Kg)
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
                                                    <input required type="date" maxlength="25"
                                                        class="form-control form-control-sm" name="tgl[]">
                                                    <input required type="hidden" name="master_id[]"
                                                        value="{{ $master->id }}">
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <select required name="kar_id[]" class="form-control form-control-sm">
                                                        <option value=""></option>
                                                        @foreach ($kar as $asu)
                                                            <option value="{{ $asu->kar_->id }}">
                                                                {{ $asu->kar_->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <select required name="equip_id[]" class="form-control form-control-sm">
                                                        <option value=""></option>
                                                        @foreach ($equip as $asu)
                                                            <option value="{{ $asu->id }}">
                                                                {{ $asu->no_unit }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <select required name="start_loc[]"
                                                        class="form-control form-control-sm">
                                                        <option value=""></option>
                                                        @foreach ($lok as $asu)
                                                            <option value="{{ $asu->id }}">
                                                                {{ $asu->location }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <select required name="end_loc[]" class="form-control form-control-sm">
                                                        <option value=""></option>
                                                        @foreach ($lok as $asu)
                                                            <option value="{{ $asu->id }}">
                                                                {{ $asu->location }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <select required name="dedi_id[]" class="form-control form-control-sm">
                                                        <option value=""></option>
                                                        @foreach ($dedi as $asu)
                                                            <option value="{{ $asu->id }}">
                                                                {{ $asu->dedicated }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td class="align-middle white-space-nowrap">
                                                    <input required type="number" class="form-control form-control-sm"
                                                        name="timbangan[]">
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
        <div id="tableExample4"
            data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
            <div class="row mt-2 mb-2 ms-3 g-0 flex-between-left">
                <div class="col-6">
                    <div class="row g-1">
                        <div class="col-sm-6">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 ">
                            <select class="form-select form-select-sm" aria-label="Bulk actions"
                                data-list-filter="data-list-filter">
                                <option selected="" value="">Filter: Brand</option>
                                {{-- @foreach ($equipment as $item)
                                            <option value="{{ $item->brand }}">{{ $item->brand }}</option>
                                        @endforeach --}}
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="btn-group  btn-group-sm mx-2" role="group">
                        <a href="#"><button class="btn btn-sm btn-falcon-success mx-2" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" type="button"><span data-fa-transform="shrink-3"
                                    class="fas fa-plus"></span></button></a>
                        <a href="{{ route('r.ha.p.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                            rel="noopener noreferrer">
                            <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-bordered mb-0 data-table fs--1"
                    data-options='{"paging":false,"scrollY":"300px","searching":false,"scrollCollapse":true,"fixedColumns":{"left":1},"scrollX":true}'>
                    <thead class="bg-200 text-center text-900">
                        <tr>
                            <th class="sort bg-secondary text-white">#</th>
                            <th class="sort bg-secondary text-white">Aksi</th>
                            <th class="sort bg-secondary text-white">Tanggal</th>
                            <th class="sort bg-secondary text-white" sorted="nama">Driver</th>
                            <th class="sort bg-secondary text-white">No Unit</th>
                            <th class="sort bg-secondary text-white">Start Location</th>
                            <th class="sort bg-secondary text-white">End Location</th>
                            <th class="sort bg-secondary text-white">Dedicated</th>
                            <th class="sort text-end bg-primary text-white">Timbangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hauling as $asu)
                            <tr class="fw-semi-bold">
                                <td class="text-1000">{{ $loop->iteration }}</td>
                                <td class="text-center">
                                    <div class="btn-group  btn-group-sm" role="group">
                                        <a class="btn btn-warning" type="button" data-bs-toggle="modal"
                                            data-bs-target="#edit-{{ $asu->id }}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#hapus-{{ $asu->id }}" data-bs-placement="top"
                                            title="Absensi Karyawan"><i class="fas fa-trash-alt"></i></a>

                                    </div>
                                </td>
                                <td class="text-1000">{{ $asu->tgl->format('d-m-Y') }}</td>
                                <td class="text-1000 nama">{{ $asu->kar_->name }}</td>
                                <td class="text-1000">{{ $asu->equip_->no_unit }}</td>
                                <td class="text-1000">{{ $asu->loc_s->location }}</td>
                                <td class="text-1000">{{ $asu->loc_e->location }}</td>
                                <td class="text-1000">{{ $asu->dedi_->dedicated }}</td>
                                <td class="text-end bg-200 text-1000">{{ $asu->timbangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light d-flex flex-between-end py-2">
            {{-- // --}}
        </div>
    </div>

    @foreach ($hauling as $res)
        <div class="modal fade" id="edit-{{ $res->id }}" data-bs-keyboard="false" data-bs-backdrop="static"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-6" role="document">
                <div class="modal-content border-0">
                    <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                            class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body p-0">
                        <form action="{{ route('ha.u', $res->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="master_id" value="{{ $res->master_id }}">
                            <div class="bg-warning rounded-top-lg py-3 ps-4 pe-6">
                                <h4 class="mb-1 text-white" id="staticBackdropLabel">
                                    <i class="fas fa-wrench"></i>{{ $res->tid }}
                                </h4>
                                <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                            </div>
                            <div class="p-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <input required value="{{ $res->tgl }}"
                                                            class="form-control datetimepicker" id="datetimepicker"
                                                            name="tgl" type="text"
                                                            data-options='{"enableTime":true,"dateFormat":"Y/m/d H:i","disableMobile":true}' />
                                                        <label for="floatingSelect">Pilih Tanggal</label>
                                                    </div>
                                                    @error('tgl')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <select required name="dedi_id" class="form-select form-select-sm"
                                                            id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option value="{{ $res->dedi_id }}">
                                                                {{ $res->dedi_->dedicated }}</option>
                                                            @foreach ($dedi as $s)
                                                                <option value="{{ $s->id }}">
                                                                    {{ $s->dedicated }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect"> Dedicated</label>
                                                    </div>
                                                    @error('dedi_id')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <select required name="start_loc"
                                                            class="form-select form-select-sm" id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option value="{{ $res->start_loc }}">
                                                                {{ $res->loc_s->location }}</option>
                                                            @foreach ($lok as $s)
                                                                <option value="{{ $s->id }}">
                                                                    {{ $s->location }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect"> Start Location</label>
                                                    </div>
                                                    @error('start_loc')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <select required name="end_loc" class="form-select form-select-sm"
                                                            id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option value="{{ $res->end_loc }}">
                                                                {{ $res->loc_e->location }}</option>
                                                            @foreach ($lok as $s)
                                                                <option value="{{ $s->id }}">
                                                                    {{ $s->location }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect"> End Location</label>
                                                    </div>
                                                    @error('end_loc')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <select required name="kar_id" class="form-select form-select-sm"
                                                            id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option value="{{ $res->kar_id }}">
                                                                {{ $res->kar_->name }}</option>
                                                            @foreach ($kar as $s)
                                                                <option value="{{ $s->kar_->id }}">
                                                                    {{ $s->kar_->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect"> Driver</label>
                                                    </div>
                                                    @error('kar_id')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <select required name="equip_id"
                                                            class="form-select form-select-sm" id="floatingSelect"
                                                            aria-label="Floating label select example">
                                                            <option value="{{ $res->equip_id }}">
                                                                {{ $res->equip_->no_unit }}</option>
                                                            @foreach ($equip as $s)
                                                                <option value="{{ $s->id }}">
                                                                    {{ $s->no_unit }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <label for="floatingSelect"> Unit</label>
                                                    </div>
                                                    @error('equip_id')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <div class="form-floating">
                                                        <input required type="number" name="timbangan"
                                                            class="form-control" value="{{ $res->timbangan }}">
                                                        <label for="floatingSelect"> Timbangan</label>
                                                    </div>
                                                    @error('timbangan')
                                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning btn-sm mb-3 me-3"><i class="fas fa-save"></i>
                                    Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($hauling as $res)
        <div class="modal fade" id="hapus-{{ $res->id }}" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                        <div class="position-relative z-index-1 light">
                            <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                                {{ $res->id }}</h5>
                        </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <h5 class="text text-900">Ente Yakin, Untuk
                            Menghapus Data Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <form action="{{ route('ha.d', $res->id) }}" method="post">
                            @csrf
                            @method('delete')
                            {{-- <input type="hidden" name="delete" value="{{ $res->id }}"> --}}
                            <button type="submit" class="btn btn-danger ms-2"><i class="fas fa-trash"></i> Ya,
                                Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
