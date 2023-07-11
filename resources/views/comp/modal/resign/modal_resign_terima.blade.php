@foreach ($all as $ter)
    <div class="modal fade" id="terima-{{ $ter->id }}" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-success">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-check-circle"></i>
                            {{ $ter->kar_->name }}</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('res.t', $ter->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Diterima">
                    <div class="modal-body py-4 px-5">
                        <h5 class="text text-900">Anda Yakin, Untuk
                            Menerima Pengajuan Resign Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <button type="submit" class="btn btn-success ms-2"><i class="fas fa-check-circle"></i> Ya,
                            Terima</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
