@extends('layouts.layout_horizontal')

@section('judul')
    Pengajuan Absensi | HWA &bull; SAT
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
        $("#addBtn").on("click", function() {
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

@section('konten')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Pelayanan Terpadu</h6>
                <h4 class="mb-0 text-primary fw-bold">Pengajuan Absensi<span class="text-info fw-medium"></span></h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel"
            aria-labelledby="tab-dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc" id="dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc">
            <div class="collapse" id="collapseExample">
                <div class="border p-x1 rounded">
                    <form action="{{ route('peng.abs.s') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-3">
                            <div class="card-header py-2 bg-primary">
                                <h6 class="mb-0 text-white"><i class="fas fa-clipboard-list"></i> Formulir Pengajuan
                                    Saya </h6>
                            </div>
                            <div class="card-body mb-4">
                                <div class="row">
                                    <div class="col-8">
                                        <input type="hidden" name="pengajuan_pk"
                                            value="{{ $today }}-{{ $time }}">
                                        <input type="hidden" name="surat" value="-">
                                        <input type="hidden" name="master_id" value="{{ $master->id }}">

                                        <label class="form-label mt-3">Nama Anda</label>
                                        <input disabled type="text" value="{{ Auth::user()->name }}"
                                            class="form-control">
                                        <input type="hidden" name="karyawan" value="{{ Auth::user()->id }}"
                                            class="form-control">

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

                                        <label class="form-label mt-3">File Surat/Dokumen <code>"PDF"</code></label>
                                        <input class="form-control" accept=".pdf" type="file"
                                            value="{{ old('file') }}" name="file" />
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
                                                        <td class="text-center"><a href="javascript:void(0)"
                                                                class="text-success" title="Add" id="addBtn"><i
                                                                    class="fas fa-plus-square"></i></a></td>
                                                        <td>
                                                            <select required class="form-control form-control-sm"
                                                                type="text" name="absensi_id[]" id=""
                                                                style="min-width:150px">
                                                                <option></option>
                                                                @foreach ($tgl_list as $item)
                                                                    <option class="text-center"
                                                                        value="{{ $item->id }}">
                                                                        {{ $item->tgl }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('hwa_absensi_id')
                                                                <div class="text-danger mt-2 fs--1">{{ $message }}
                                                                </div>
                                                            @enderror
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-sm mt-5" type="submit"><i
                                        class="fas fa-save me-1"></i>Simpan
                                </button>
                            </div>
                            <div class="card-footer bg-primary py-2">
                                {{-- // --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card" id="ticketsTable"
        data-list='{"valueNames":["client","subject","status","priority","agent"],"page":13,"pagination":true,"fallback":"tickets-table-fallback"}'>
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <h6 class="mb-0">Periode {{ $master->created_at->format('F Y') }}</h6>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="input-group input-search-width"><input
                                    class="form-control form-control-sm shadow-none search" type="search"
                                    placeholder="Search  by ID" aria-label="search" /><button
                                    class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span
                                        class="fa fa-search fs--1"></span></button></div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <a href="#"><button class="btn btn-sm btn-falcon-success mx-2" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" type="button"><span data-fa-transform="shrink-3"
                                    class="fas fa-plus"></span> Tambah Pengajuan</button></a>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-sm fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr class="text-center">
                                <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                </th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap" data-sort="client">
                                    ID Pengajuan
                                </th>
                                <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                    data-sort="payment">
                                    Perihal</th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap text-center">
                                    Status
                                </th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Dibuat
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($peng_list as $res)
                                <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center white-space-nowrap client">
                                        {{ $res->id }}
                                    </td>
                                    <td class="align-middle white-space-nowrap payment">
                                        @if ($res->status == 3)
                                            Kondisi Kesehatan
                                        @else
                                            @if ($res->status == 5)
                                                Pengajuan Izin
                                            @else
                                                @if ($res->status == 6)
                                                    Pengajuan Cuti
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->status == 0)
                                            <span class="badge bg-success">Belum Direspon</span>
                                        @else
                                            @if ($res->status == 3)
                                                <span class="badge bg-success">Diterima</span>
                                            @else
                                                @if ($res->status == 5)
                                                    <span class="badge bg-danger">Ditolak</span>
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap tgl">
                                        {{ $res->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center d-none" id="tickets-table-fallback">
                        <p class="fw-bold fs-1 mt-3">No ticket found</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button"
                    title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                    title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>
@endsection
