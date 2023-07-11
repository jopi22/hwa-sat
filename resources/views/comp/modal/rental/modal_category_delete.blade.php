@foreach ($category as $asu)
    <div class="modal fade" id="hapus-{{ $asu->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('category.u', $asu->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Delete">
                    <input type="hidden" name="category" value="{{ $asu->category }}">
                    <input type="hidden" name="ket" value="{{ $asu->ket }}">
                    <input type="hidden" name="hapus" value="---">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-trash-alt"></i>
                            {{ $asu->category }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <h5 class="text text-900">Anda Yakin, Untuk
                            Menghapus Data Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal"
                            aria-label="Close"><span class="fas fa-times"></span>
                            Batal
                        </button>
                        <button class="btn btn-sm btn-danger" type="submit"><span class="fas fa-trash-alt"></span>
                            Ya, Hapus
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
