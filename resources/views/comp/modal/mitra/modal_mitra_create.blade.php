<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <form action="{{ route('mit.s') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-success rounded-top-lg py-3 ps-4 pe-6">
                        <h4 class="mb-1 text-white" id="staticBackdropLabel">
                            <i class="fas fa-building   "></i> Tambah Mitra Perusahaan
                        </h4>
                        <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                    </div>
                    <div class="p-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <div class="form-floating">
                                            <textarea required name="perusahaan" maxlength="100" class="form-control form-control-sm" id="floatingTextarea2"
                                                style="height: 80px"></textarea>
                                            <label for="floatingTextarea2">Nama Perusahaan</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2">
                                        <div class="form-control">
                                            <input class="form-control" id="datetimepicker" name="logo"
                                                accept=".png, .jpeg, .jpg" type="file" />
                                            <label for="floatingTextarea2">Logo Perusahaan</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <input required type="number" name="sewa_exc"
                                                    class="form-control form-select-sm" id="floatingInput"
                                                    aria-label="Floating label select example">
                                                <label for="floatingInput">Unit Excavator</label>
                                            </div>
                                            @error('sewa_exc')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <input required type="number" name="sewa_vb"
                                                    class="form-control form-select-sm" id="floatingInput"
                                                    aria-label="Floating label select example">
                                                <label for="floatingInput">Unit Vibro </label>
                                            </div>
                                            @error('sewa_vb')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <input required type="number" name="sewa_dt"
                                                    class="form-control form-select-sm" id="floatingInput"
                                                    aria-label="Floating label select example">
                                                <label for="floatingInput">Unit Dump Truck</label>
                                            </div>
                                            @error('sewa_dt')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <input required type="number" name="sewa_lain"
                                                    class="form-control form-select-sm" id="floatingInput"
                                                    aria-label="Floating label select example">
                                                <label for="floatingInput">Unit Pendukung</label>
                                            </div>
                                            @error('sewa_lain')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav flex-lg-column fs--1">
                                    <li class="nav-item me-2 mb-2 me-lg-0">
                                        <label class="form-label">Tanggal Kontrak</label>
                                        <input class="form-control datetimepicker" id="datetimepicker"
                                            name="tgl_kontrak" type="text"
                                            data-options='{"enableTime":false,"dateFormat":"Y/m/d","disableMobile":true}' />
                                        @error('tgl_kontrak')
                                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                        @enderror
                                    </li>
                                    <li class="nav-item me-2 mb-2 me-lg-0">
                                        <label class="form-label">Kontrak Selesai</label>
                                        <input class="form-control datetimepicker" id="datetimepicker"
                                            name="akhir_kontrak" type="text"
                                            data-options='{"enableTime":false,"dateFormat":"Y/m/d","disableMobile":true}' />
                                        @error('akhir_kontrak')
                                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                        @enderror
                                    </li>
                                    <li class="nav-item me-2 mb-2 me-lg-0">
                                        <label class="form-label">File Kontrak</label>
                                        <input class="form-control" id="datetimepicker"
                                                name="file_kontrak" accept=".pdf" type="file"/>
                                        @error('file_kontrak')
                                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                        @enderror
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-sm mb-3 me-3"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
