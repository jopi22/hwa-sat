<!-- ===============================================-->
<!--     Modal Edit Jabatan-->
<!-- ===============================================-->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 500px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-sitemap"></i>
                        Jabatan
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label" for="jabatan">Nama Jabatan</label>
                        <input required maxlength="25" class="form-control" id="jabatan" type="text" />
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="jabatan">Keterangan</label>
                        <input required maxlength="50" class="form-control" id="ket" type="text" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times"></span>
                        Batal
                    </button>
                    <button class="btn btn-sm btn-success" type="button" id="store"><span
                            class="fas fa-save"></span>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- -- Store Menggunakan Ajax -- --}}
<script>
    //-- (1) proses Create data
    $('#store').click(function(e) {
        e.preventDefault();

        //-- identifikasi variable di ajax --
        let jabatan = $('#jabatan').val();
        let ket = $('#ket').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //-- proses store data --
        $.ajax({
            url: `ajax_jab_store`,
            type: "POST",
            cache: false,
            data: {
                "jabatan": jabatan,
                "ket": ket,
                "_token": token
            },
            success: function(response) {
                //data post
                let post = `
                <tr id="index_${response.data.id}" class="btn-reveal-trigger">
                    <td class="text-black text-center fw-semi-bold"> <span class="badge bg-success"><i class="fas fa-check"></i></span></td></td>
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
                    <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                        ${response.data.jabatan}
                    </td>
                    <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                        ${response.data.ket}
                    </td>
                </tr>
                    `;

                //append to table
                $('#table-posts').prepend(post);

                //clear form
                $('#jabatan').val('');
                $('#ket').val('');

                //close modal
                $('#modal-create').modal('hide');


            }

        });

    });
</script>
