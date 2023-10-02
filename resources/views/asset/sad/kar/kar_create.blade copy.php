@extends('layouts.layout')

@section('judul')
    Tambah Karyawan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function displayImg(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg2(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg3(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg4(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg5(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }
    </script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
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
    {{-- <script>
        var rowIdx = 1;
        $("#addBtn").on("click", function() {
            // Adding a row inside the tbody.
            $("#tableEstimate tbody").append(`
            <tr class="btn-reveal-trigger text-center text-1000 fw-semi-bold">
                <td class="align-middle white-space-nowrap">
                    <a href="javascript:void(0)" class="text-danger remove" title="Remove"><i class="fas fa-minus-square fs-2"></i></a>
                </td>
                <td class="align-middle white-space-nowrap">
                    <input  type="number" maxlength="25" class="form-control "
                        name="username[]">
                        <input  type="hidden" maxlength="25" class="form-control "
                                        name="site_id[]" value="1">
                </td>
                <td class="align-middle white-space-nowrap">
                    <input  type="text" maxlength="25" class="form-control "
                        name="name[]">
                </td>
                <td class="align-middle white-space-nowrap">
                    <select  name="tipe_gaji[]" class="form-control ">
                        <option></option>
                        <option value="A">Gaji Pokok</option>
                        <option value="AI">Gaji Pokok + Insentif</option>
                        <option value="AL">Gaji Pokok + Lemburan</option>
                    </select>
                </td>
                <td class="align-middle white-space-nowrap">
                    <select  name="jabatan[]" class="form-control ">
                        <option></option>
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                        @endforeach
                    </select>
                </td>
                <td class="align-middle white-space-nowrap">
                                    <input  type="date" class="form-control "
                                        name="tgl_gabung[]">
                                </td>
                <td class="align-middle white-space-nowrap">
                                    <input type="text" maxlength="50" class="form-control "
                                        name="kimper[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="date" class="form-control " name="ed_kimper[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="text" maxlength="50" class="form-control "
                                        name="nama_rek[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="number" maxlength="50" class="form-control "
                                        name="no_rek[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select name="bank[]" class="form-control ">
                                        <option value=""></option>
                                        <option value="BRI">BRI</option>
                                        <option value="BNI">BNI</option>
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="Kalbar">Kalbar</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select name="agama[]" class="form-control ">
                                        <option value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                    <input disabled type="text" class="form-control " value="Aktif">
                    <input type="hidden" name="status[]" value="Aktif">
                    <input type="hidden" name="level[]" value="4">
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
    </script> --}}
@endsection

@section('konten')
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('kar.g') }}"><button class="btn  btn-falcon-default btn-sm"><i
                            class="fas fa-arrow-left"></i></button></a>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary">Tambah Karyawan</span>
            </div>
        </div>
    </div>


    {{-- @include('comp.alert') --}}

    <form action="{{ route('kar.s') }}" method="POST" enctype="multipart/form-data"\>
        @csrf
        <div class="card theme-wizard h-100 mb-3">
            <div class="card-header text-center bg-success py-2">
                <h6 class="text-white"><i class="fas fa-plus"></i> Form Tambah Karyawan</h6>
            </div>
            <div class="card-body py-4">
                <div class="row g-2">
                    <span class="text-warning fs--1"><i class="fas fa-info-circle"></i> Yang bertanda
                        Bintang(<code>*</code>) Wajib diisi</span>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Karyawan<code>*</code></label>
                            <input class="form-control" maxlength="25" type="text" name="name" />
                            @error('name')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">NIK<code>*</code></label>
                            <input class="form-control" name="no_hp" type="number" />
                            @error('no_hp')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Asal Daerah</label>
                            <input class="form-control" type="text" name="asal" maxlength="25" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Domsili</label>
                            <textarea class="form-control" name="alamat" cols="30" rows="1" placeholder="Alamat" maxlength="25"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control" type="text" name="email" maxlength="25" />
                            @error('email')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">No Handphone<code>*</code></label>
                            <input class="form-control" type="number" name="nomor_hp" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin<code>*</code></label>
                            <div class="form-check">
                                <input class="form-check-input" id="l" type="radio" name="jenis_kelamin"
                                    value="Laki-laki" />
                                <label class="form-check-label" for="l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" id="p" type="radio" name="jenis_kelamin"
                                    value="Perempuan" />
                                <label class="form-check-label" for="p">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <div class="row" data-dropzone="data-dropzone"
                                data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"540kb","url":"../../assets/img/team"}]}'>
                                <div class="col-md-auto">
                                    <div class="dz-preview dz-preview-single">
                                        <div
                                            class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                            <div class="avatar avatar-4xl">
                                                <img class="rounded-circle" src="{{ asset('assets/img/team/avatar.png') }}"
                                                    id="dImage" />
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label class="form-label">Upload Foto</label><br>
                                    <code class="text-primary">Resolusi Foto 500x500 / Ukuran max 500KB</code>
                                    <input value="{{ old('image') }}" type="file" id="customFile"
                                        class="form-control" accept=".png, .jpg, .jpeg" name="image"
                                        onchange="displayImg(this,'dImage')" />
                                    @error('image')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6 mb-3">
                        <label class="form-label">Agama<code>*</code></label>
                        <select name="agama" class="form-control">
                            <option></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                        @error('agama')
                            <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input class="form-control datetimepicker" name="tgl_lahir" id="datepicker"
                                placeholder="Pilih Tanggal Lahir" type="text" data-options='{"disableMobile":true}' />
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Jabatan<code>*</code></label>
                            <select class="form-select" name="jabatan" aria-label="Default select example">
                                <option></option>
                                @foreach ($jabatan as $res)
                                    <option value="{{ $res->jabatan }}">{{ $res->jabatan }}</option>
                                @endforeach
                            </select>
                            @error('jabatan')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Bergabung<code>*</code></label>
                            <input class="form-control datetimepicker" name="tgl_gabung" id="datepicker" type="text"
                                placeholder="Pilih Tanggal Bergabung" data-options='{"disableMobile":true}' />
                            @error('tgl_gabung')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">KIMPER</label>
                            <input type="text" class="form-control" maxlength="50" name="kimper">
                            {{-- @error('jabatan')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">ED KIMPER</label>
                            <input class="form-control datetimepicker" name="ed_kimper" id="datepicker" type="text"
                                placeholder="Pilih Tanggal ED KIMPER" data-options='{"disableMobile":true}' />
                            @error('ed_kimper')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    {{-- <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Status Pekerjaan
                            </label><br>

                        </div>
                    </div> --}}
                    <input type="hidden" name="status" value="Aktif">
                    <input type="hidden" name="level" value="6">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tipe Gaji<code>*</code>
                            </label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="inlineRadio1" type="radio" name="tipe_gaji"
                                    value="A" />
                                <label class="form-check-label" for="inlineRadio1">Gaji Pokok</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="inlineRadio2" type="radio" name="tipe_gaji"
                                    value="AI" />
                                <label class="form-check-label" for="inlineRadio2">Gaji Pokok + Insentif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" id="inlineRadio3" type="radio" name="tipe_gaji"
                                    value="AL" />
                                <label class="form-check-label" for="inlineRadio3">Gaji Pokok + Lemburan</label>
                            </div>
                            @error('tipe_gaji')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor KTP<code>*</code></label>
                            <input class="form-control" type="number" name="no_ktp" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor SIM A</label>
                            <input class="form-control" type="number" name="no_sim_a" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Bank<code>*</code></label>
                            <select class="form-select" name="bank" aria-label="Default select example">
                                <option></option>
                                <option value="BRI">BRI</option>
                                <option value="BNI">BNI</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="BCA">BCA</option>
                                <option value="Kalbar">Kalbar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor SIM B1</label>
                            <input class="form-control" type="number" name="no_sim_b1" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor Rekening<code>*</code></label>
                            <input class="form-control" type="number" name="no_rek" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor SIM B2</label>
                            <input class="form-control" type="number" name="no_sim_b2" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor BPJS</label>
                            <input class="form-control" type="number" name="no_bpjs" />
                        </div>
                    </div>
                </div>
                <hr>
                {{-- <div class="row g-2">
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload SIM A</label><br>
                            <input value="{{ old('file_sim_a') }}" type="file" id="customFile" class="form-control"
                                accept=".png, .jpg, .jpeg" name="file_sim_a" onchange="displayImg2(this,'dImage2')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sim_a)
                                    <img class="rounded-3" src="{{ asset($kar->file_sim_a) }}" id="dImage2"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage2"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sim_a')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload SIM B1</label><br>
                            <input value="{{ old('file_sim_b1') }}" type="file" id="customFile" class="form-control"
                                accept=".png, .jpg, .jpeg" name="file_sim_b1" onchange="displayImg3(this,'dImage3')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sim_b1)
                                    <img class="rounded-3" src="{{ asset($kar->file_sim_b1) }}" id="dImage3"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage3"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sim_b1')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload SIM B2</label><br>
                            <input value="{{ old('file_sim_b2') }}" type="file" id="customFile" class="form-control"
                                accept=".png, .jpg, .jpeg" name="file_sim_b2" onchange="displayImg4(this,'dImage4')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sim_b2)
                                    <img class="rounded-3" src="{{ asset($kar->file_sim_b2) }}" id="dImage4"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage4"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sim_b2')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload Sertifikat Profesi</label><br>
                            <input value="{{ old('file_sertifikat') }}" type="file" id="customFile"
                                class="form-control" accept=".png, .jpg, .jpeg" name="file_sertifikat"
                                onchange="displayImg5(this,'dImage5')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sertifikat)
                                    <img class="rounded-3" src="{{ asset($kar->file_sertifikat) }}" id="dImage5"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage5"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sertifikat')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="card-footer text-center bg-light py-2">
                <button class="btn btn-success px-5 my-3" type="submit"><i class="fas fa-save"></i> Simpan</button>
            </div>
        </div>
    </form>

    {{-- <form action="{{ route('kar.s') }}" method="post">
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
                                <th style="min-width: 20px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Add Row
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    NIK
                                </th>
                                <th style="min-width: 300px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Nama
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Tipe Income
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Jabatan
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Tgl Gabung
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Kimper
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    ED Kimper
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Nama Rekening
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    No Rekening
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Bank
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Agama
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            <tr class="btn-reveal-trigger text-center text-1000 fw-semi-bold">
                                <td class="align-middle white-space-nowrap">
                                    <a href="javascript:void(0)" class="text-success" title="Add" id="addBtn"><i
                                            class="fas fa-plus-square fs-2"></i></a>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input  type="number" maxlength="25" class="form-control "
                                        name="username[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input  type="text" maxlength="25" class="form-control "
                                        name="name[]">
                                    <input  type="hidden" maxlength="25" class="form-control "
                                        name="site_id[]" value="1">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select  name="tipe_gaji[]" class="form-control ">
                                        <option></option>
                                        <option value="A">Gaji Pokok</option>
                                        <option value="AI">Gaji Pokok + Insentif</option>
                                        <option value="AL">Gaji Pokok + Lemburan</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select  name="jabatan[]" class="form-control ">
                                        <option></option>
                                        @foreach ($jabatan as $item)
                                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input  type="date" class="form-control " name="tgl_gabung[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="text" maxlength="50" class="form-control "
                                        name="kimper[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="date" class="form-control " name="ed_kimper[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="text" maxlength="50" class="form-control "
                                        name="nama_rek[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="number" maxlength="50" class="form-control "
                                        name="no_rek[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select name="bank[]" class="form-control ">
                                        <option value=""></option>
                                        <option value="BRI">BRI</option>
                                        <option value="BNI">BNI</option>
                                        <option value="Mandiri">Mandiri</option>
                                        <option value="Kalbar">Kalbar</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select name="agama[]" class="form-control ">
                                        <option value=""></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input disabled type="text" class="form-control " value="Aktif">
                                    <input type="hidden" name="status[]" value="Aktif">
                                    <input type="hidden" name="level[]" value="6">
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
    </form> --}}
@endsection
