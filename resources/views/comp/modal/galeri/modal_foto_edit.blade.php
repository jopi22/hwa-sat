<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="rounded-top-lg py-3 ps-4 pe-6 bg-danger">
                    <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-image"></i> Hapus
                        Foto </h4>
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <td>Foto</td>
                                <td>Hapus</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($foto as $del)
                                <tr>
                                    <th><img src="{{ asset($del->foto) }}" width="100px" height="100px"></th>
                                <th>
                                    <form action="{{ route('foto.d') }}" method="post" enctype="multipart/form-data">
                                        @method('POST')
                                        @csrf
                                        <input type="hidden" name="delete" value="{{ $del->id }}">
                                        <button class="btn btn-danger" type="submit"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
