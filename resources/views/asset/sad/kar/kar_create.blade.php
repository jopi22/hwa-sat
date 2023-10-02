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
                    <input required type="number" maxlength="25" class="form-control "
                        name="username[]">
                        <input required type="hidden" maxlength="25" class="form-control "
                                        name="site_id[]" value="1">
                </td>
                <td class="align-middle white-space-nowrap">
                    <input required type="text" maxlength="25" class="form-control "
                        name="name[]">
                </td>
                <td class="align-middle white-space-nowrap">
                    <select required name="tipe_gaji[]" class="form-control ">
                        <option></option>
                        <option value="A">Gaji Pokok</option>
                        <option value="AI">Gaji Pokok + Insentif</option>
                        <option value="AL">Gaji Pokok + Lemburan</option>
                    </select>
                </td>
                <td class="align-middle white-space-nowrap">
                    <select required name="jabatan[]" class="form-control ">
                        <option></option>
                        @foreach ($jabatan as $item)
                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                        @endforeach
                    </select>
                </td>
                <td class="align-middle white-space-nowrap">
                                    <input required type="date" class="form-control "
                                        name="tgl_gabung[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select required name="agama[]" class="form-control ">
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
                                    <input required type="number" maxlength="50" class="form-control " name="no_ktp[]">
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
    </script>
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


    @include('comp.alert')

    <form action="{{ route('kar.s') }}" method="post">
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
                                    Tipe Gaji
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
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    Agama
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-danger text-white align-middle white-space-nowrap">
                                    No KTP
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
                                    <input required type="number" maxlength="25" class="form-control " name="username[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="text" maxlength="25" class="form-control " name="name[]">
                                    <input required type="hidden" maxlength="25" class="form-control " name="site_id[]"
                                        value="1">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select required name="tipe_gaji[]" class="form-control ">
                                        <option></option>
                                        <option value="A">Gaji Pokok</option>
                                        <option value="AI">Gaji Pokok + Insentif</option>
                                        <option value="AL">Gaji Pokok + Lemburan</option>
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select required name="jabatan[]" class="form-control ">
                                        <option></option>
                                        @foreach ($jabatan as $item)
                                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input required type="date" class="form-control " name="tgl_gabung[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <select required name="agama[]" class="form-control ">
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
                                    <input required type="number" maxlength="50" class="form-control " name="no_ktp[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="text" maxlength="50" class="form-control " name="kimper[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="date" class="form-control " name="ed_kimper[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="text" maxlength="50" class="form-control " name="nama_rek[]">
                                </td>
                                <td class="align-middle white-space-nowrap">
                                    <input type="number" maxlength="50" class="form-control " name="no_rek[]">
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
    </form>
@endsection
