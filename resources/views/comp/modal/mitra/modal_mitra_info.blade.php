@foreach ($mit as $del)
    <div class="modal fade" id="info-{{ $del->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                        <h4 class="mb-1" id="staticBackdropLabel">{{ $del->perusahaan }}</h4>
                    </div>
                    <div class="p-4">
                        <embed width="100%" height="400px" type="application/pdf"
                            src="{{ asset($del->file_kontrak) }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
