<div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('foto.s') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <input type="hidden" name="galeri_id" value="{{ $gal->id }}">
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-success">
                        <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-image"></i> Tambah
                            Foto </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">Thumbnail:</label>
                            <input type="file" name="foto[]" multiple accept=".png, .jpg, .jped" class="form-control">
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
