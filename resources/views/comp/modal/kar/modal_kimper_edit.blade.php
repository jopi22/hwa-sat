@foreach ($kar as $edit)
    <div class="modal fade" id="edit-{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 800px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('kim.u', $edit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-user"></i>
                            {{ $edit->name }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Nomor KIMPER</label>
                                    <input required class="form-control" name="kimper" type="text"
                                        value="{{ $edit->kimper }}" />
                                </div>
                                <div class="form-group">
                                    <label>ED KIMPER</label>
                                    <input required value="{{ $edit->ed_kimper }}" class="form-control datetimepicker"
                                        name="ed_kimper" id="datepicker" type="text"
                                        placeholder="Pilih Tanggal ED KIMPER" data-options='{"disableMobile":true}' />
                                </div>
                                <div class="form-group">
                                    <label>File KIMPER</label>
                                    <input class="form-control" name="file_kimper" type="file"
                                        accept=".png, .jpg, .jpeg" />
                                </div>
                                <div class="form-group">
                                    <label>Test Medis</label>
                                    <input class="form-control" name="file_tes_medis" type="file" accept=".pdf" />
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>SIM A</label>
                                    <input class="form-control" accept=".png, .jpg, .jpeg" name="file_sim_a" type="file" />
                                </div>
                                <div class="form-group">
                                    <label>SIM B1</label>
                                    <input class="form-control" accept=".png, .jpg, .jpeg" name="file_sim_b1" type="file" />
                                </div>
                                <div class="form-group">
                                    <label>SIM B2</label>
                                    <input class="form-control" accept=".png, .jpg, .jpeg" name="file_sim_b2" type="file" />
                                </div>
                            </div>
                        </div>
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
