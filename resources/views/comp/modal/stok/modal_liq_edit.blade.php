@foreach ($liq as $edit)
    <div class="modal fade" id="edit-{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 800px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('liq.u', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                            {{ $edit->barang }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <input required maxlength="50" class="form-control form-control-sm mt-2"
                                        name="barang" type="text" value="{{ $edit->barang }}" />
                                    <label>Nama Barang</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-control form-control-sm mt-2" name="brand">
                                        <option value="{{ $edit->brand }}">{{ $edit->brand }}</option>
                                        @foreach ($brand as $item)
                                            <option value="{{ $item->brand }}">{{ $item->brand }}</option>
                                        @endforeach
                                    </select> <label>Brand</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-control form-control-sm mt-2" name="tipe_alat" name=""
                                        id="">
                                        <option value="{{ $edit->tipe_alat }}">{{ $edit->tipe_alat }}</option>
                                        <option value="Heavy Equipment">Heavy Equipment</option>
                                        <option value="Dump Truck">Dump Truck</option>
                                        <option value="Support Equipment">Support Equipment</option>
                                    </select> <label>Tipe Alat</label>
                                </div>
                            </div>
                            <div class="col-6">
                                                                <div class="form-floating">
                                    <input required maxlength="50" class="form-control form-control-sm mt-2"
                                        name="jumlah" type="number" value="{{ $edit->jumlah }}" />
                                    <label>Jumlah Onderdil</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-control form-control-sm mt-2" name="satuan">
                                        <option value="{{ $edit->satuan }}">{{ $edit->satuan }}</option>
                                        <option value="Liter">Liter</option>
                                        <option value="Botol">Botol</option>
                                    </select> <label>Satuan</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="jenis" value="Liquid">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-sm btn-light" type="button" data-bs-dismiss="modal"
                            aria-label="Close"><span class="fas fa-times"></span>
                            Batal
                        </button>
                        <button class="btn btn-sm btn-warning" type="submit"><span class="fas fa-save"></span>
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
