<!-- ===============================================-->
<!--     Modal NonAktif Akun-->
<!-- ===============================================-->
@foreach ($kar as $res)
    <div class="modal fade" id="off-{{ $res->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('akun.sakelar', $res->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-power-off"></i>
                            {{ $res->name }}</h5>
                    </div>
                    <div class="modal-body">
                        <h5 class="text fs-0 text-900"><span class="fas fa-question-circle"></span> : Apa Anda Yakin,
                            Untuk
                            Nonaktifkan Akun Ini ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i> Tutup</span>
                        </button>
                        <button class="btn btn-danger" type="submit"><span class="fas fa-power-off"></span> Nonaktifkan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
