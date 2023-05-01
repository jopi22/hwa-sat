<!-- ===============================================-->
<!--     Modal Quick Karyawan-->
<!-- ===============================================-->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 500px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="needs-validation" novalidate="">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><span
                            class="fs--1 bi-lightning-fill"></span> Quick Tambah
                        Karyawan</h5>
                </div>
                <div class="modal-body">

                    <input type="hidden" id="status_karyawan" value="Aktif">
                    <input type="hidden" id="password" value="hwa">
                    <input type="hidden" id="trash" value="0">
                    <input type="hidden" id="created_by" value="{{ Auth::user()->name }}">

                    <div class="form-group">
                        <label class="form-label" for="name">Nama Karyawan</label>
                        <input class="form-control form-control-sm" id="name" type="text" maxlength="40"
                            required />
                        <div class="text-danger fs--1 text-sm mt-2" role="alert" id="alert-name"></div>
                    </div>

                    <hr style="margin-bottom: 0%">

                    <div class="form-group">
                        <label class="form-label" for="no_hp">No Handphone</label>
                        <input class="form-control form-control-sm" id="no_hp" type="number" placeholder="08xxx" maxlength="20"
                            required />
                        <div class="text-danger fs--1 text-sm mt-2" role="alert" id="alert-no_hp"></div>
                    </div>

                    <hr style="margin-bottom: 0%">

                    <div class="form-group">
                        <label class="form-label">Tanggal Bergabung</label>
                        <input class="form-control datetimepicker" id="tgl_gabung" type="text"
                            placeholder="dd-mm-yyyy" data-options='{"dateFormat":"d-m-Y","disableMobile":true}' required />
                        <div class="text-danger fs--1 text-sm mt-2" role="alert" id="alert-tgl_gabung"></div>
                    </div>

                    <hr style="margin-bottom: 0%">

                    <label class="form-label">Jabatan</label>
                    <select class="form-select form-select-sm" id="jabatan" aria-label="Default select example"
                        required>
                        <option></option>
                        @foreach ($jab as $res)
                            <option value="{{ $res->nama_jabatan }}">{{ $res->nama_jabatan }}</option>
                        @endforeach
                    </select>
                    <div class="text-danger fs--1 text-sm mt-2" role="alert" id="alert-jabatan"></div>

                    <hr style="margin-bottom: 0%">

                    <label class="form-label">Level</label>
                    <select class="form-select form-select-sm" id="level" aria-label="Default select example"
                        required>
                        <option selected value="4">4 (Pekerja)</option>
                        <option value="3">3 (Admin)</option>
                    </select>
                    <div class="text-danger fs--1 text-sm mt-2" role="alert" id="alert-level"></div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"
                        type="button"><span class="fas fa-times"></span>
                        Batal</button>
                    <button class="btn btn-sm btn-success" type="submit" id="store"><span
                            class="fas fa-save"></span> Simpan </button>
                </div>

            </form>
        </div>
    </div>
</div>

{{-- -- Store Menggunakan Ajax -- --}}
<script>
    // -- (1) membuat even pada button --
    $('body').on('click', '#btn-create-post', function() {

        //-- membuka modal --
        $('#modal-create').modal('show');
    });

    //-- (2) proses Create data
    $('#store').click(function(e) {
        e.preventDefault();

        //-- identifikasi variable di ajax --
        let name = $('#name').val();
        let tgl_gabung = $('#tgl_gabung').val();
        let jabatan = $('#jabatan').val();
        let status_karyawan = $('#status_karyawan').val();
        let password = $('#password').val();
        let trash = $('#trash').val();
        let no_hp = $('#no_hp').val();
        let level = $('#level').val();
        let created_by = $('#created_by').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //-- proses store data --
        $.ajax({

            url: `/ajax_kar_quick`,
            type: "POST",
            cache: false,
            data: {
                "name": name,
                "tgl_gabung": tgl_gabung,
                "jabatan": jabatan,
                "status_karyawan": status_karyawan,
                "password": password,
                "no_hp": no_hp,
                "level": level,
                "trash": trash,
                "created_by": created_by,
                "_token": token
            },
            success: function(response) {

                // -- Menampilkan alert sukses --
                // Swal.fire({
                //     type: 'success',
                //     icon: 'success',
                //     title: `${response.message}`,
                //     showConfirmButton: false,
                //     timer: 1000
                // });

                //-- data yg akan bereaksi setelah data dihapus ${response.data.id}  --
                let post = `
                <tr id="index_${response.data.id}" class="btn-reveal-trigger">
                    <th class="text-black fw-semi-bold"><span class="badge bg-success"><i class="fas fa-check"></i></span></th>
                    <td class="text-black  fw-semi-bold align-middle white-space-nowrap name">
                        <span class="id fs--1 text-400">Refresh</span>
                    </td>
                    <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                        ${response.data.name}</td>

                    <td
                        class="text-black fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                        ${response.data.jabatan}
                    </td>

                    <td  class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap status">
                        ${response.data.status_karyawan}
                    </td>
                    <td
                        class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                        <span class="id fs--1 text-400">Refresh</span>
                    </td>
                    <th class="align-middle text-center white-space-nowrap aksi">
                        <div class="btn-group mt-0" role="group" aria-label="...">
                            <a href="{{ route('kar.i', Crypt::encryptString($res->id)) }}"
                                class="btn btn-link p-0" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Detail Karyawan"><span
                                    class="text-primary fas fa-info-circle"></span></a>
                            <a href="{{ route('kar.h', Crypt::encryptString($res->id)) }}"
                                class="btn btn-link p-0" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Edit Karyawan"><span
                                    class="text-dark fas fa-history ms-2"></span></a>
                            <a href="{{ route('kar.e', Crypt::encryptString($res->id)) }}"
                                class="btn btn-link p-0" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Edit Karyawan"><span
                                    class="text-warning fas fa-edit ms-2"></span></a>
                            <a href="javascript:void(0)" class="btn btn-link p-0"
                                id="btn-delete-post" data-id="${response.data.id}"><span
                                    class="text-danger fas fa-trash-alt ms-2"></span></a>
                        </div>
                    </th>
                </tr>
                `;

                //-- konfirmasi reaksi  --
                $('#table-posts').prepend(post);

                //-- Mengosongkan form di modal --
                $('#name').val('');
                $('#tgl_gabung').val('');
                $('#jabatan').val('');
                $('#no_hp').val('');

                //-- tutup modal --
                $('#modal-create').modal('hide');


            },
            error: function(error) {

                if (error.responseJSON.name[0]) {

                    //-- tampil alert  --
                    $('#alert-name').removeClass('d-none');
                    $('#alert-name').addClass('d-block');

                    //-- menampilkan pesan eror --
                    $('#alert-name').html(error.responseJSON.name[0]);
                }

                if (error.responseJSON.tgl_gabung[0]) {

                    //-- tampil alert  --
                    $('#alert-tgl_gabung').removeClass('d-none');
                    $('#alert-tgl_gabung').addClass('d-block');

                    //-- menampilkan pesan eror --
                    $('#alert-tgl_gabung').html(error.responseJSON.tgl_gabung[0]);
                }

                if (error.responseJSON.jabatan[0]) {

                    //-- tampil alert  --
                    $('#alert-jabatan').removeClass('d-none');
                    $('#alert-jabatan').addClass('d-block');

                    //-- menampilkan pesan eror --
                    $('#alert-jabatan').html(error.responseJSON.jabatan[0]);
                }

                if (error.responseJSON.no_hp[0]) {

                    //-- tampil alert  --
                    $('#alert-no_hp').removeClass('d-none');
                    $('#alert-no_hp').addClass('d-block');

                    //-- menampilkan pesan eror --
                    $('#alert-no_hp').html(error.responseJSON.no_hp[0]);
                }

            }

        });

    });
</script>
