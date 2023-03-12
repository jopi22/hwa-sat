<!-- ===============================================-->
<!--     Modal Edit-->
<!-- ===============================================-->
<div class="modal fade" id="edit-modal" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <form>
                    <input type="hidden" id="equip_id">
                    <div class="bg-warning rounded-top-lg py-3 ps-4 pe-6">
                        <h4 class="mb-1 text-white" id="staticBackdropLabel">
                            <i class="fas fa-truck-monster"></i> Edit Equipment
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
                                                <input required maxlength="25" class="form-control form-control-sm"
                                                    id="no_unit_id">
                                                <label for="no_unit-id">No Unit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <input required maxlength="50" class="form-control form-control-sm"
                                                    id="kode_unit_id">
                                                <label for="no_unit-id">Kode Unit</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <div class="form-floating">
                                            <input required maxlength="50" class="form-control form-control-sm"
                                                id="model_id">
                                            <label for="no_unit-id">Model</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input required maxlength="25" class="form-control form-control-sm"
                                                id="tipe_id">
                                            <label for="no_unit-id">Tipe</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input required maxlength="25" class="form-control form-control-sm"
                                                id="brand_id">
                                            <label for="no_unit-id">Brand</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-warning" type="button" id="update"><span
                                class="fas fa-magic"></span>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



{{-- -- Update Menggunakan Ajax -- --}}
<script>
    // -- (1) membuat even pada button --
    $('body').on('click', '#edit-btn', function() {

        // -- identifikasi variable di ajax --
        let equip_id = $(this).data('id');

        //-- proses get data dengan ajax --
        $.ajax({
            url: `ajax_equip_show/${equip_id}`,
            type: "GET",
            cache: false,
            success: function(response) {

                //-- melempar data dengan id --
                $('#equip_id').val(response.data.id);
                $('#no_unit_id').val(response.data.no_unit);
                $('#tipe_id').val(response.data.tipe);
                $('#kode_unit_id').val(response.data.kode_unit);
                $('#brand_id').val(response.data.brand);
                $('#model_id').val(response.data.model);

                //-- membuka modal --
                $(`#edit-modal`).modal('show');
            }
        });
    });

    //-- (2) proses edit data
    $('#update').click(function(e) {
        e.preventDefault();

        //-- identifikasi variable di ajax --
        let equip_id = $('#equip_id').val();
        let no_unit = $('#no_unit_id').val();
        let kode_unit = $('#kode_unit_id').val();
        let model = $('#model_id').val();
        let tipe = $('#tipe_id').val();
        let brand = $('#brand_id').val();
        let token = $("meta[name='csrf-token']").attr("content");

        //-- proses update data --
        $.ajax({

            url: `ajax_equip_update/${equip_id}`,
            type: "PUT",
            cache: false,
            data: {
                "no_unit": no_unit,
                "kode_unit": kode_unit,
                "model": model,
                "tipe": tipe,
                "brand": brand,
                "_token": token
            },
            success: function(response) {

                //-- data yg akan bereaksi setelah data dihapus  --
                let post = `
                <tr id="index_${response.data.id}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                <td class="align-middle text-1000 text-center white-space-nowrap id">
                    <div class="btn-group  btn-group-sm" role="group">
                        <button class="btn btn-info" type="button" data-bs-toggle="modal"
                            data-bs-target="#detail-${response.data.id}" title="Detail"><i
                                class="fas fa-info-circle"></i></button>
                        <a href="javascript:void(0)" id="edit-btn"
                            data-bs-target="${response.data.id}" data-id="${response.data.id}"
                            class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Edit"><span class="fas fa-edit"></span></a>
                        <a href="javascript:void(0)" id="hapus-btn"
                            data-bs-target="${response.data.id}" data-id="${response.data.id}"
                            class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Hapus"><span class="fas fa-trash-alt"></span></a>
                    </div>
                </td>
                <td class="align-middle text-1000 text-center white-space-nowrap no">
                    <span class="badge bg-warning"><i class="fas fa-check"></i></span>
                </td>
                <td class="align-middle text-1000 text-center white-space-nowrap id">
                    ${response.data.id}
                </td>
                <td class="align-middle text-1000 white-space-nowrap unit">
                    ${response.data.no_unit}
                </td>
                <td class="align-middle text-1000 white-space-nowrap kode">
                    ${response.data.kode_unit}
                </td>
                <td class="align-middle text-1000 white-space-nowrap model">
                    ${response.data.model}
                </td>
                <td class="align-middle text-1000 white-space-nowrap tipe">
                    ${response.data.tipe}
                </td>
                <td class="align-middle text-1000 white-space-nowrap jenis">
                    ${response.data.jenis}
                </td>
                <td class="align-middle text-1000 white-space-nowrap brand">
                    ${response.data.brand}
                </td>
                <td class="align-middle text-center text-1000 white-space-nowrap status">
                    <span class="badge rounded-pill bg-info">Aktif</span>
                </td>
            </tr>
        `;

                //-- konfirmasi reaksi  --
                $(`#index_${response.data.id}`).replaceWith(post);

                //-- tutup modal --
                $(`#edit-modal`).modal('hide');


            }

        });

    });
</script>
