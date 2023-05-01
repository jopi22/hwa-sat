<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('dok.s') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-success">
                        <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-file-alt"></i> Tambah
                            Dokumen </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nama File</label>
                            <input required class="form-control" maxlength="70" name="nama" type="text"
                                placeholder="Nama File" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Kategori</label>
                            <input required class="form-control" maxlength="70" name="kategori" type="text"
                                placeholder="Kategori" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">File Dokumen:</label>
                            <input type="file" name="file" accept=".pdf" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Simpan </button>
                </div>
            </form>
        </div>
    </div>
</div>
