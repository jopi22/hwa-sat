<!-- ===============================================-->
<!--     Modal Tambah Onderdil-->
<!-- ===============================================-->
<div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog mt-6" style="max-width: 800px">
        <div class="modal-content">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('liq.s') }}" method="POST">
                @csrf
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                        Data Liquid
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating">
                                <input required maxlength="50" class="form-control form-control-sm mt-2" name="barang"
                                    type="text" />
                                <label>Nama Barang</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-control form-control-sm mt-2" name="brand">
                                    <option value=""></option>
                                    @foreach ($brand as $item)
                                        <option value="{{ $item->brand }}">{{ $item->brand }}</option>
                                    @endforeach
                                </select> <label>Brand</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-control form-control-sm mt-2" name="tipe_alat" name=""
                                    id="">
                                    <option value=""></option>
                                    <option value="Heavy Equipment">Heavy Equipment</option>
                                    <option value="Dump Truck">Dump Truck</option>
                                    <option value="Support Equipment">Support Equipment</option>
                                </select> <label>Tipe Alat</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input required maxlength="50" class="form-control form-control-sm mt-2" name="jumlah"
                                    type="number" />
                                <label>Jumlah Onderdil</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-control form-control-sm mt-2" name="satuan">
                                    <option value=""></option>
                                    <option value="Liter">Liter</option>
                                    <option value="Botol">Botol</option>
                                </select> <label>Satuan</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="jenis" value="Liquid">
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
