    <!-- ===============================================-->
    <!--     Modal Hapus-->
    <!-- ===============================================-->
    <div class="modal fade" id="hapus-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                            Hapus</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <input type="hidden" id="equip_del">
                    <input type="hidden" id="status_del" value="Delete">
                    <div class="modal-body py-4 px-5">
                        <input disabled type="text" class="form-control mt-2 mb-2" id="no_unit_del">
                        <h5 class="text text-900">Ente Yakin, Untuk
                            Menghapus Data Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button"
                            class=" btn btn-sm btn-light"><i class="fas fa-times"></i> Batal</button>
                        <button type="button" id="delete" class="btn btn-sm btn-danger ms-2"><i
                                class="fas fa-trash"></i> Ya,
                            Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        // -- (1) membuat even pada button --
        $('body').on('click', '#hapus-btn', function() {
            // -- identifikasi variable di ajax --
            let equip_del = $(this).data('id');

            //-- proses get data dengan ajax --
            $.ajax({
                url: `ajax_equip_show/${equip_del}`,
                type: "GET",
                cache: false,
                success: function(response) {

                    //-- melempar data dengan id --
                    $('#equip_del').val(response.data.id);
                    $('#no_unit_del').val(response.data.no_unit);

                    //-- membuka modal --
                    $(`#hapus-modal`).modal('show');
                }
            });
        });

        //-- (2) proses edit data
        $('#delete').click(function(e) {
            e.preventDefault();

            //-- identifikasi variable di ajax --
            let equip_del = $('#equip_del').val();
            let status = $('#status_del').val();
            let token = $("meta[name='csrf-token']").attr("content");

            //-- proses update data --
            $.ajax({

                url: `ajax_equip_delete/${equip_del}`,
                type: "PUT",
                cache: false,
                data: {
                    "status": status,
                    "_token": token
                },
                success: function(response) {

                    //-- konfirmasi reaksi  --
                    $(`#index_${response.data.id}`).remove();

                    //-- tutup modal --
                    $(`#hapus-modal`).modal('hide');

                }

            });

        });
    </script>
