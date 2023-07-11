    <!-- ===============================================-->
    <!--     Modal Hapus-->
    <!-- ===============================================-->
    @foreach ($equip as $del)
        <div class="modal fade" id="hapus-{{ $del->id }}" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                        <div class="position-relative z-index-1 light">
                            <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                                {{$del->no_unit}}</h5>
                        </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('equip.d', $del->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="status" value="Delete">
                        <div class="modal-body py-4 px-5">
                            <h5 class="text text-900">Ente Yakin, Untuk
                                Menghapus Data Ini?</h5>
                        </div>
                        <div class="modal-footer">
                            <button data-bs-dismiss="modal" aria-label="Close" type="button"
                                class=" btn btn-sm btn-light"><i class="fas fa-times"></i> Batal</button>
                            <button type="submit" class="btn btn-sm btn-danger ms-2"><i
                                    class="fas fa-trash"></i> Ya,
                                Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
