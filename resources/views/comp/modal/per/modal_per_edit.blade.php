<!-- ===============================================-->
<!--     Modal Edit-->
<!-- ===============================================-->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 500px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="needs-validation" novalidate="">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-calendar-alt"></i> Edit
                        Kalender</h5>
                </div>
                <div class="modal-body">

                    <input type="hidden" id="per_id">

                    <div class="form-group">
                        <label class="form-label" for="nama_bank">Periode</label>
                        <input class="form-control form-control-sm datetimepicker" type="text" placeholder="mm-yyyy"
                            data-options='{"dateFormat":"m-Y","disableMobile":true}' id="periode_show" />

                        <label class="form-label" for="nama_bank">Jumlah Hari</label>
                        <select class="form-control form-control-sm" id="total_show">
                            {{-- <option selected ></option> --}}
                            <option value="28">28 Hari</option>
                            <option value="29">29 Hari</option>
                            <option value="30">30 Hari</option>
                            <option value="31">31 Hari</option>
                        </select>
                        <div class="invalid-feedback">Tidak Boleh Kosong!</div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-warning" type="button" id="update"><span
                            class="fas fa-save"></span> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- -- Update Menggunakan Ajax -- --}}
<script>
    // -- (1) membuat even pada button --
    $('body').on('click', '#btn-edit', function() {

        // -- identifikasi variable di ajax --
        let per_id = $(this).data('id');

        //-- proses get data dengan ajax --
        $.ajax({
            url: `ajax_periode_show/${per_id}`,
            type: "GET",
            cache: false,
            success: function(response) {

                //-- melempar data dengan id --
                $('#per_id').val(response.data.id);
                $('#periode_show').val(response.data.periode);
                $('#total_show').val(response.data.total);

                //-- membuka modal --
                $(`#modal-edit`).modal('show');
            }
        });
    });

    //-- (2) proses edit data
    $('#update').click(function(e) {
        e.preventDefault();

        //-- identifikasi variable di ajax --
        let per_id = $('#per_id').val();
        let periode = $('#periode_show').val();
        let total = $('#total_show').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //-- proses update data --
        $.ajax({

            url: `ajax_periode_update/${per_id}`,
            type: "PUT",
            cache: false,
            data: {
                "periode": periode,
                "total": total,
                "_token": token
            },
            success: function(response) {

                //-- data yg akan bereaksi setelah data dihapus  --
                let post = `
                <tr id="index_${response.data.id}" class="btn-reveal-trigger">
                    <td  class="align-middle white-space-nowrap fw-semi-bold text-black">
                        <span class="badge bg-success"><i class="fas fa-check"></i></span></td>
                    <td  class="align-middle white-space-nowrap fw-semi-bold text-black">
                        ${response.data.periode}</td>
                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                        ${response.data.total}</td>
                    <td class="align-middle text-center">
                        <div class="btn-group  mt-2" role="group">
                            <a href="javascript:void(0)" id="btn-jadwal-kerja" data-bs-target="${response.data.id}"
                                data-id="${response.data.id}" class="btn btn-link btn-dark ms-2 p-0"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Aktivasi Kalender"><span
                                    class="text-success fas fa-calendar-check"></span></a>
                            <a href="javascript:void(0)" id="btn-info" data-bs-target="${response.data.id}"
                                data-id="${response.data.id}" class="btn btn-link btn-dark ms-2 p-0"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Info Kalender"><span
                                    class="text-info fas fa-info-circle"></span></a>
                            <a href="javascript:void(0)" id="btn-edit" data-bs-target="${response.data.id}"
                                data-id="${response.data.id}" class="btn btn-link btn-dark ms-2 p-0"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Kalender"><span
                                    class="text-warning fas fa-edit"></span></a>
                            <a href="javascript:void(0)" id="btn-delete"
                                data-bs-target="${response.data.id}" data-id="${response.data.id}"
                                class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Kalender"><span
                                    class="text-danger fas fa-trash"></span></a>
                        </div>
                    </td>
                </tr>
                `;

                //-- konfirmasi reaksi  --
                $(`#index_${response.data.id}`).replaceWith(post);

                //-- tutup modal --
                $(`#modal-edit`).modal('hide');


            }

        });

    });
</script>
