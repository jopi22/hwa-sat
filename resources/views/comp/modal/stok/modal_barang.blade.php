{{-- // Tambah // --}}
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 800px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('barang.s') }}" method="POST">
                @csrf
                <input type="hidden" name="status" value="Aktif">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                        Data Barang
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input required maxlength="2o" class="form-control form-control-sm mt-2" name="barang"
                                    type="text" />
                                <label>Nama Barang</label>
                            </div>
                            <div class="form-floating">
                                <input required maxlength="20" class="form-control form-control-sm" name="kode"
                                    type="text" />
                                <label>Kode Barang</label>
                            </div>
                            <div class="form-floating">
                                <select required class="form-control form-control-sm mt-2" name="kategori">
                                    <option value=""></option>
                                    <option value="Spare Part">Spare Part</option>
                                    <option value="Bahan Bakar">Bahan Bakar</option>
                                    <option value="Oli">Oli</option>
                                    <option value="Lain-lain">Lain-lain</option>
                                </select> <label>Kategori</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input required maxlength="50" class="form-control form-control-sm mt-2" name="jumlah"
                                    type="number" />
                                <label>Jumlah</label>
                            </div>
                            <div class="form-floating">
                                <select required class="form-control form-control-sm mt-2" name="satuan">
                                    <option value=""></option>
                                    <option value="Pcs">Pcs</option>
                                    <option value="Liter">Liter</option>
                                    <option value="Kilo Gram">Kilo Gram</option>
                                    <option value="Set">Set</option>
                                    <option value="Botol">Botol</option>
                                    <option value="Barel">Barel</option>
                                </select> <label>Satuan</label>
                            </div>
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

{{-- // Edit //  --}}
@foreach ($bar as $edit)
    <div class="modal fade" id="edit-{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 800px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('barang.u', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Aktif">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                            Data Barang
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-2">
                                    <input required maxlength="2o" class="form-control form-control-sm mt-2"
                                        value="{{ $edit->barang }}" name="barang" type="text" />
                                    <label>Nama Barang</label>
                                </div>
                                <div class="form-floating">
                                    <input required maxlength="20" class="form-control form-control-sm"
                                        value="{{ $edit->kode }}" name="kode" type="text" />
                                    <label>Kode Barang</label>
                                </div>
                                <div class="form-floating">
                                    <select required class="form-control form-control-sm mt-2" name="kategori">
                                        <option value="{{ $edit->kategori }}">{{ $edit->kategori }}</option>
                                        <option value="Spare Part">Spare Part</option>
                                        <option value="Bahan Bakar">Bahan Bakar</option>
                                        <option value="Oli">Oli</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select> <label>Kategori</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input required maxlength="50" class="form-control form-control-sm mt-2"
                                        value="{{ $edit->jumlah }}" name="jumlah" type="number" />
                                    <label>Jumlah</label>
                                </div>
                                <div class="form-floating">
                                    <select required class="form-control form-control-sm mt-2" name="satuan">
                                        <option value="{{ $edit->satuan }}">{{ $edit->satuan }}</option>
                                        <option value="Pcs">Pcs</option>
                                        <option value="Liter">Liter</option>
                                        <option value="Kilo Gram">Kilo Gram</option>
                                        <option value="Set">Set</option>
                                        <option value="Botol">Botol</option>
                                        <option value="Barel">Barel</option>
                                    </select> <label>Satuan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal"
                            aria-label="Close"><span class="fas fa-times"></span>
                            Batal
                        </button>
                        <button class="btn btn-sm btn-warning" type="submit"><span class="fas fa-magic"></span>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach

{{-- // Hapus // --}}
@foreach ($bar as $del)
    <div class="modal fade" id="delete-{{ $del->id }}" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                            {{ $del->barang }}</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('barang.d', $del->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Delete">
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
