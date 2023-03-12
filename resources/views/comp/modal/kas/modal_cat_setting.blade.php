    <div class="modal fade" id="setting" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <form action="{{ route('cat.set') }}" method="post">
                        @csrf
                        <input type="hidden" name="delete" value="{{ $cat_m->id }}">
                        <input type="hidden" name="id" value="{{ $cat_m->id }}">
                        <input type="hidden" name="master_id" value="{{ $master->id }}">
                        <div class="bg-warning rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1 text-white" id="staticBackdropLabel">
                                <i class="fas fa-coins"></i> Setting Catering {{ date('F Y') }}
                            </h4>
                            <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                        </div>
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <div class="form-floating">
                                                <input required type="text" maxlength="50"
                                                    value="{{ $cat_m->atas_nama }}" name="atas_nama"
                                                    class="form-control form-control-sm" id="floatingInput">
                                                <label for="floatingTextarea2">Nama Pengelola Kantin</label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <input required type="number" max="100000000"
                                                        value="{{ $cat_m->porsi_harga }}" name="porsi_harga"
                                                        class="form-control form-control-sm" id="floatingInput">
                                                    <label for="floatingTextarea2">Harga / Porsi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <input required type="text" maxlength="10"
                                                        value="{{ $cat_m->bank }}" name="bank"
                                                        class="form-control form-control-sm" id="floatingInput">
                                                    <label for="floatingTextarea2">Nama Bank</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <input required type="number" max="100000000"
                                                        value="{{ $cat_m->no_rek }}" name="no_rek"
                                                        class="form-control form-control-sm" id="floatingInput">
                                                    <label for="floatingTextarea2">No Rekening</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning btn-sm mb-3 me-3"><i class="fas fa-save"></i>
                                Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
