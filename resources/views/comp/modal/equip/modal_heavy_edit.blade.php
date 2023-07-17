<!-- ===============================================-->
<!--     Modal Edit-->
<!-- ===============================================-->
@foreach ($equip as $asu)
    <div class="modal fade" id="edit-{{ $asu->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <form action="{{ route('equip.u', $asu->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="equip_id">
                        <div class="bg-warning rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1 text-white" id="staticBackdropLabel">
                                <i class="fas fa-truck-monster"></i> {{ $asu->no_unit }}
                            </h4>
                            <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                        </div>
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <input required maxlength="50" class="form-control form-control-sm"
                                                        name="no_unit" value="{{ $asu->no_unit }}">
                                                    <label for="no_unit-id">No Unit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <input required maxlength="50" class="form-control form-control-sm"
                                                        name="kode_unit" value="{{ $asu->kode_unit }}""
                                                        id="kode_unit_id">
                                                    <label for="no_unit-id">Kode Unit</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <div class="form-floating">
                                                <input required maxlength="50" class="form-control form-control-sm"
                                                    value="{{ $asu->model }}">
                                                <label for="no_unit-id">Model</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <select required name="tipe" class="form-control form-control-sm">
                                                    <option value="{{ $asu->tipe }}">{{ $asu->tipe }}</option>
                                                    <option value="Excavator">Excavator</option>
                                                    <option value="Vibro">Vibro</option>
                                                    <option value="Bulldozer">Bulldozer</option>
                                                    <option value="Dump Truck">Dump Truck</option>
                                                    <option value="Pick Up">Pick Up</option>
                                                    <option value="Truck Loader">Truck Loader</option>
                                                    <option value="Truck Tangki">Truck Tangki</option>
                                                    <option value="Peralatan Las">Peralatan Las</option>
                                                    <option value="Kompresor">Kompresor</option>
                                                </select>
                                                <label for="no_unit-id">Tipe</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required maxlength="50" class="form-control form-control-sm"
                                                    name="brand" value="{{ $asu->brand }}"" id="brand_id">
                                                <label for="no_unit-id">Brand</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-floating">
                                                <input required maxlength="50" class="form-control form-control-sm"
                                                    name="no_rangka" value="{{ $asu->no_rangka }}"" id="no_rangka">
                                                <label for="no_unit-id">No Rangka</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-sm btn-warning" type="submit"><span class="fas fa-magic"></span>
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
