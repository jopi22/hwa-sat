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
            <form>
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-sitemap"></i> Edit
                        Bank</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Nama Bank</label>
                        <input type="hidden" id="data_id">
                        <input class="form-control" id="bank_edit" type="text" maxlength="25" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times"></span>
                        Batal
                    </button>
                    <button class="btn btn-sm btn-warning" type="button" id="update"><span
                            class="fas fa-magic"></span>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- -- Update Menggunakan Ajax -- --}}
<script>
    // -- (1) membuat even pada button --
    $('body').on('click', '#btn-edit-post', function() {

        // -- identifikasi variable di ajax --
        let data_id = $(this).data('id');

        //-- proses get data dengan ajax --
        $.ajax({
            url: `ajax_bank_show/${data_id}`,
            type: "GET",
            cache: false,
            success: function(response) {

                //-- melempar data dengan id --
                $('#data_id').val(response.data.id);
                $('#bank_edit').val(response.data.bank);

                //-- membuka modal --
                $(`#modal-edit`).modal('show');
            }
        });
    });

    //-- (2) proses edit data
    $('#update').click(function(e) {
        e.preventDefault();

        //-- identifikasi variable di ajax --
        let data_id = $('#data_id').val();
        let bank = $('#bank_edit').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //-- proses update data --
        $.ajax({

            url: `ajax_bank_update/${data_id}`,
            type: "PUT",
            cache: false,
            data: {
                "bank": bank,
                "_token": token
            },
            success: function(response) {

                //-- data yg akan bereaksi setelah data dihapus  --
                let post = `
                <tr id="index_${response.data.id}" class="btn-reveal-trigger">
                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                        <div class="btn-group  btn-group-sm" role="group">
                            <a href="javascript:void(0)" id="btn-edit-post"
                                data-bs-target="${response.data.id}" data-id="${response.data.id}"
                                class="btn btn-warning" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Edit Jabatan"><span
                                    class="fas fa-edit"></span></a>
                            <a href="javascript:void(0)" id="btn-delete-post"
                                data-bs-target="${response.data.id}" data-id="${response.data.id}"
                                class="btn btn-danger" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Hapus Jabatan"><span
                                    class="fas fa-times-circle"></span></a>
                        </div>
                    </td>
                    <td class="text-black text-center fw-semi-bold"> <span class="badge bg-warning"><i class="fas fa-check"></i></span></td></td>
                    <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                        ${response.data.bank}
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
