@foreach ($sinkron as $ter)
    <div class="modal fade" id="sinkron-{{ $ter->id }}" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-info">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fab fa-slack"></i>
                            {{ $ter->name }}</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('res.sinkron', $ter->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Resign">
                    <div class="modal-body py-4 px-5">
                        <h5 class="text text-900">Anda Yakin, Untuk
                            Sinkronisasi Data Pengajuan Resign Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <button type="submit" class="btn btn-info ms-2"><i class="fab fa-slack"></i> Sinkron</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
