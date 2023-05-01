<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal"
                    aria-label="Close"></button></div>
            <div class="modal-body p-0">
                <form action="{{ route('hm.s') }}" method="post">
                    @csrf
                    <div class="bg-success rounded-top-lg py-3 ps-4 pe-6">
                        <h4 class="mb-1 text-white" id="staticBackdropLabel">
                            <i class="fas fa-stopwatch"></i> Menambahkan Data Hour Meter
                        </h4>
                        <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                    </div>
                    <div class="p-4">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <input class="form-control datetimepicker" id="end-date" type="text"
                                                placeholder="Tanggal"
                                                data-options='{"dateFormat":"d-m-Y","disableMobile":true}'
                                                name="tgl" required />
                                            @error('tgl')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-floating">
                                                <select required name="shift_id" class="form-select form-select-sm"
                                                    id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected=""></option>
                                                    @foreach ($shift as $s)
                                                        <option value="{{ $s->id }}">{{ $s->shift }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Pilih Shift</label>
                                            </div>
                                            @error('shift_id')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <select required name="equip_id" class="form-select form-select-sm"
                                                    id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected=""></option>
                                                    @foreach ($equip as $res)
                                                        <option value="{{ $res->id }}">{{ $res->no_unit }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Pilih Equipment</label>
                                            </div>
                                            @error('equip_id')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <select required name="kar_id" class="form-select form-select-sm"
                                                    id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected=""></option>
                                                    @foreach ($kar as $s)
                                                        <option value="{{ $s->id }}">{{ $s->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Pilih Operator / Driver</label>
                                            </div>
                                            @error('kar_id')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <select required name="lokasi_id" class="form-select form-select-sm"
                                                    id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected=""></option>
                                                    @foreach ($lok as $s)
                                                        <option value="{{ $s->id }}">{{ $s->lokasi }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Pilih Lokasi</label>
                                            </div>
                                            @error('loksasi_id')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <div class="form-floating">
                                                <select required name="dedicated_id" class="form-select form-select-sm"
                                                    id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected=""></option>
                                                    @foreach ($dedi as $res)
                                                        <option value="{{ $res->id }}">{{ $res->dedicated }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelect">Pilih Dedicated</label>
                                            </div>
                                            @error('dedicated_id')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="remark" maxlength="50" class="form-control form-control-sm" id="floatingTextarea2"
                                                style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Remark<code>*</code></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <ul class="nav flex-lg-column fs--1">
                                    <li class="nav-item me-2 mb-2 me-lg-0">
                                        <label class="form-label">HM Awal</label>
                                        <input required class="form-control form-control-sm" name="hm_awal"
                                            type="number" />
                                        @error('hm_awal')
                                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                        @enderror
                                    </li>
                                    <li class="nav-item me-2 mb-2 me-lg-0">
                                        <label class="form-label">HM Akhir</label>
                                        <input required class="form-control form-control-sm" name="hm_akhir"
                                            type="number" />
                                        @error('hm_akhir')
                                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                        @enderror
                                    </li>
                                    <li class="nav-item me-2 mb-2 me-lg-0">
                                        <label class="form-label">HM Potongan<code>*</code></label>
                                        <input class="form-control form-control-sm" name="hm_pot" type="number" />
                                        @error('hm_pot')
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
