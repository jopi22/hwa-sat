{{-- // Tambah // --}}
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 500px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('so.s') }}" method="POST">
                @csrf
                @foreach ($barang as $asu)
                    <input type="hidden" name="barang_id[]" value="{{ $asu->id }}">
                    <input type="hidden" name="stok_awal[]" value="{{ $asu->jumlah }}">
                @endforeach
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                        Stock Opname
                    </h5>
                </div>
                <div class="modal-body">
                    <p class="fs--1 mb-1"><strong>Notes: </strong>Yang Bertanda Bintang
                        Merah <code>*</code> Tidak Wajib Diisi
                    </p>
                    <div class="col-12">
                        <div class="form-floating mb-2">
                            <input required class="form-control" name="tgl" type="date" />
                            <label>Tanggal</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input required class="form-control" maxlength="50" name="kode" type="text" />
                            <label>Kode</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                            class="fas fa-times"></span>
                        Batal
                    </button>
                    <button class="btn btn-sm btn-success" type="submit"><span class="fas fa-save"></span>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



{{-- // Hapus // --}}
@foreach ($so as $del)
    <div class="modal fade" id="delete-{{ $del->id }}" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 400px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                            {{ $del->id }}</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('so.d', $del->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <div class="modal-body py-4 px-5">
                        <h5 class="text text-900">Anda Yakin, Untuk
                            Menghapus Data Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <button type="submit" class="btn btn-danger ms-2"><i class="fas fa-trash"></i> Ya,
                            Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
