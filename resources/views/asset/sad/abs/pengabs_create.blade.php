@extends('layouts.layout')

@section('judul')
Formulir Pengajuan Saya | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    {{-- // CKEditor // --}}
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
    {{-- // Form // --}}
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    {{-- // Table //  --}}
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    {{-- // Ajax // --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    {{-- // Form // --}}
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    {{-- // Table //  --}}
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>

    {{-- delete model --}}
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
                <tr>
                    <input type="hidden" name="pengajuan_fk[]"
                        value="{{ $today }}-{{ $time }}">
                    <td class="text-center"><a href="javascript:void(0)" class="text-danger remove" title="Remove"><i class="fas fa-minus-square"></i></a></td>
                    <td>
                        <select class="form-control form-control-sm" type="text" name="absensi_id[]" id=""
                            style="min-width:150px">
                            <option></option>
                            @foreach ($tgl_list as $item)
                                <option class="text-center" value="{{ $item->id }}">{{ $item->tgl }}</option>
                            @endforeach
                        </select>
                        @error('hwa_absensi_id')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
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
@if ($cek->periode == $periode)
        @if ($cek->ket == 1)
     {{-- // Header // --}}
     <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('peng.abs.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <a href="{{ route('peng.abs.c') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-spinner text-primary"></i></button></a>
                            <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                                {{ date('F Y') }}</span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> Buat Pengajuan Absensi Saya</span>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <form action="{{ route('peng.abs.s') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card mb-3">
            <div class="card-header bg-primary">
                <h5 class="mb-0 text-white"><i class="fas fa-clipboard-list"></i> Formulir Pengajuan Saya </h5>
            </div>
            <div class="card-body mb-4">
                <div class="row">
                    <div class="col-8">
                        <input type="hidden" name="pengajuan_pk" value="{{ $today }}-{{ $time }}">
                        <input type="hidden" name="surat" value="-">
                        <input type="hidden" name="master_id" value="{{ $master->id }}">

                        <label class="form-label mt-3">Nama Anda</label>
                        <input disabled type="text" value="{{ Auth::user()->name }}" class="form-control">
                        <input type="hidden" name="karyawan" value="{{ Auth::user()->id }}" class="form-control">

                        <label class="form-label mt-3">Pilih Keterangan</label>
                        <select required name="status" class="form-control">
                            <option></option>
                                <option value="3">Sakit</option>
                                <option value="5">Izin</option>
                                <option value="6">Cuti</option>
                        </select>
                        @error('status')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror

                        <label class="form-label mt-3">File Surat/Dokumen  <code>"PDF"</code></label>
                        <input class="form-control" accept=".pdf" type="file" value="{{ old('file') }}" name="file" />
                        @error('file')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-4">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm table-white" id="tableEstimate">
                                <thead>
                                    <tr>
                                        <th style="width: 50px"></th>
                                        <th style="width: 400px">Pilih Tanggal Pengajuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <input type="hidden" name="pengajuan_fk[]"
                                            value="{{ $today }}-{{ $time }}">
                                        <td class="text-center"><a href="javascript:void(0)" class="text-success" title="Add"
                                                id="addBtn"><i class="fas fa-plus-square"></i></a></td>
                                        <td>
                                            <select required class="form-control form-control-sm" type="text" name="absensi_id[]" id=""
                                                style="min-width:150px">
                                                <option></option>
                                                @foreach ($tgl_list as $item)
                                                    <option class="text-center" value="{{ $item->id }}">{{ $item->tgl }}</option>
                                                @endforeach
                                            </select>
                                            @error('hwa_absensi_id')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success btn-sm mt-5" type="submit"><i class="fas fa-save me-1"></i>Simpan
                    </button>
            </div>
                        <div class="card-footer bg-primary">
               {{-- // --}}
            </div>
        </div>
    </form>
@else
            @include('comp.card.card404_kalender')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
