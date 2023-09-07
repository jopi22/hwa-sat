{{-- // Tambah // --}}
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 800px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('pemakaian.s') }}" method="POST">
                @csrf
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                        Data Barang
                    </h5>
                </div>
                <div class="modal-body">
                    <p class="fs--1 mb-1"><strong>Notes: </strong>Yang Bertanda Bintang
                        Merah <code>*</code> Tidak Wajib Diisi
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input required class="form-control" name="tgl" type="date" />
                                <label>Tanggal</label>
                            </div>
                            <div class="form-floating">
                                <select required class="form-control form-control-sm mt-2" name="equip_id">
                                    <option value=""></option>
                                    @foreach ($filter as $equip)
                                        <option value="{{ $equip->id }}">{{ $equip->no_unit }}</option>
                                    @endforeach
                                </select>
                                <label>Unit</label>
                            </div>
                            <div class="form-floating">
                                <select required class="form-control form-control-sm mt-2" name="barang_id">
                                    <option value=""></option>
                                    @foreach ($barang as $bar)
                                        <option value="{{ $bar->id }}">{{ $bar->barang }}</option>
                                    @endforeach
                                </select> <label>Barang</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input required class="form-control form-control-sm mt-2" name="jumlah"
                                    type="number" />
                                <label>Jumlah</label>
                            </div>
                            <div class="form-floating">
                                <input required maxlength="50" class="form-control form-control-sm mt-2" name="hmkm"
                                    type="number" />
                                <label>HM/KM</label>
                            </div>
                            <div class="form-floating">
                                <input required maxlength="50" class="form-control form-control-sm mt-2" name="ket"
                                    type="text" />
                                <label>Keterangan<code>*</code></label>
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
@foreach ($pb as $edit)
    <div class="modal fade" id="edit-{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 800px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pemakaian.u', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="status" value="Aktif">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                            Data Barang
                        </h5>
                    </div>
                    <div class="modal-body">
                        <p class="fs--1 mb-1"><strong>Notes: </strong>Yang Bertanda Bintang
                            Merah <code>*</code> Tidak Wajib Diisi
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating mb-2">
                                    <input value="{{ $edit->tgl }}" required class="form-control" name="tgl"
                                        type="date" />
                                    <label>Tanggal</label>
                                </div>
                                <div class="form-floating">
                                    <select required class="form-control form-control-sm mt-2" name="equip_id">
                                        <option value="{{ $edit->equip_id }}">{{ $edit->equip_->no_unit }}</option>
                                        @foreach ($filter as $equip)
                                            <option value="{{ $equip->id }}">{{ $equip->no_unit }}</option>
                                        @endforeach
                                    </select>
                                    <label>Unit</label>
                                </div>
                                <div class="form-floating">
                                    <select required class="form-control form-control-sm mt-2" name="barang_id">
                                        <option value="{{ $edit->barang_id }}">{{ $edit->barang_->barang }}</option>
                                        @foreach ($barang as $bar)
                                            <option value="{{ $bar->id }}">{{ $bar->barang }}</option>
                                        @endforeach
                                    </select> <label>Barang</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input required value="{{ $edit->jumlah }}"
                                        class="form-control form-control-sm mt-2" name="jumlah" type="number" />
                                    <label>Jumlah</label>
                                </div>
                                <div class="form-floating">
                                    <input required value="{{ $edit->hmkm }}"
                                        class="form-control form-control-sm mt-2" name="hmkm" type="number" />
                                    <label>HM/KM</label>
                                </div>
                                <div class="form-floating">
                                    <input value="{{ $edit->ket }}" maxlength="50"
                                        class="form-control form-control-sm mt-2" name="ket" type="text" />
                                    <label>Keterangan<code>*</code></label>
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
@foreach ($pb as $del)
    <div class="modal fade" id="delete-{{ $del->id }}" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                            {{ $del->id }}</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pemakaian.d', $del->id) }}" method="post">
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
