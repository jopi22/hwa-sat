@foreach ($bd as $res)
    <div class="modal fade" id="edit-{{ $res->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <form action="{{ route('bd.u') }}" method="post">
                        @csrf
                        <input type="hidden" name="delete" value="{{ $res->id }}">
                        <input type="hidden" name="id" value="{{ $res->id }}">
                        <input type="hidden" name="master_id" value="{{ $master->id }}">
                        <div class="bg-warning rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1 text-white" id="staticBackdropLabel">
                                <i class="fas fa-wrench"></i> ID Breakdown #{{ $res->id }}
                            </h4>
                            <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                        </div>
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <span class="text-warning fs--1"><i class="fas fa-info-circle"></i> Bertanda Bintang
                                        <code>*</code> Tidak Wajib Diisi.</span>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="tgl" class="form-select form-select-sm"
                                                        id="floatingSelect" aria-label="Floating label select example">
                                                        <option value="{{ $res->tgl }}">{{ $res->tgl }}</option>
                                                        @if ($master->total == 28)
                                                            <option value="1-{{ $master->periode }}">
                                                                1-{{ $master->periode }}</option>
                                                            <option value="2-{{ $master->periode }}">
                                                                2-{{ $master->periode }}</option>
                                                            <option value="3-{{ $master->periode }}">
                                                                3-{{ $master->periode }}</option>
                                                            <option value="4-{{ $master->periode }}">
                                                                4-{{ $master->periode }}</option>
                                                            <option value="5-{{ $master->periode }}">
                                                                5-{{ $master->periode }}</option>
                                                            <option value="6-{{ $master->periode }}">
                                                                6-{{ $master->periode }}</option>
                                                            <option value="7-{{ $master->periode }}">
                                                                7-{{ $master->periode }}</option>
                                                            <option value="8-{{ $master->periode }}">
                                                                8-{{ $master->periode }}</option>
                                                            <option value="9-{{ $master->periode }}">
                                                                9-{{ $master->periode }}</option>
                                                            <option value="10-{{ $master->periode }}">
                                                                10-{{ $master->periode }}</option>
                                                            <option value="11-{{ $master->periode }}">
                                                                11-{{ $master->periode }}</option>
                                                            <option value="12-{{ $master->periode }}">
                                                                12-{{ $master->periode }}</option>
                                                            <option value="13-{{ $master->periode }}">
                                                                13-{{ $master->periode }}</option>
                                                            <option value="14-{{ $master->periode }}">
                                                                14-{{ $master->periode }}</option>
                                                            <option value="15-{{ $master->periode }}">
                                                                15-{{ $master->periode }}</option>
                                                            <option value="16-{{ $master->periode }}">
                                                                16-{{ $master->periode }}</option>
                                                            <option value="17-{{ $master->periode }}">
                                                                17-{{ $master->periode }}</option>
                                                            <option value="18-{{ $master->periode }}">
                                                                18-{{ $master->periode }}</option>
                                                            <option value="19-{{ $master->periode }}">
                                                                19-{{ $master->periode }}</option>
                                                            <option value="20-{{ $master->periode }}">
                                                                20-{{ $master->periode }}</option>
                                                            <option value="21-{{ $master->periode }}">
                                                                21-{{ $master->periode }}</option>
                                                            <option value="22-{{ $master->periode }}">
                                                                22-{{ $master->periode }}</option>
                                                            <option value="23-{{ $master->periode }}">
                                                                23-{{ $master->periode }}</option>
                                                            <option value="24-{{ $master->periode }}">
                                                                24-{{ $master->periode }}</option>
                                                            <option value="25-{{ $master->periode }}">
                                                                25-{{ $master->periode }}</option>
                                                            <option value="26-{{ $master->periode }}">
                                                                26-{{ $master->periode }}</option>
                                                            <option value="27-{{ $master->periode }}">
                                                                27-{{ $master->periode }}</option>
                                                            <option value="28-{{ $master->periode }}">
                                                                28-{{ $master->periode }}</option>
                                                        @else
                                                            @if ($master->total == 29)
                                                                <option value="1-{{ $master->periode }}">
                                                                    1-{{ $master->periode }}</option>
                                                                <option value="2-{{ $master->periode }}">
                                                                    2-{{ $master->periode }}</option>
                                                                <option value="3-{{ $master->periode }}">
                                                                    3-{{ $master->periode }}</option>
                                                                <option value="4-{{ $master->periode }}">
                                                                    4-{{ $master->periode }}</option>
                                                                <option value="5-{{ $master->periode }}">
                                                                    5-{{ $master->periode }}</option>
                                                                <option value="6-{{ $master->periode }}">
                                                                    6-{{ $master->periode }}</option>
                                                                <option value="7-{{ $master->periode }}">
                                                                    7-{{ $master->periode }}</option>
                                                                <option value="8-{{ $master->periode }}">
                                                                    8-{{ $master->periode }}</option>
                                                                <option value="9-{{ $master->periode }}">
                                                                    9-{{ $master->periode }}</option>
                                                                <option value="10-{{ $master->periode }}">
                                                                    10-{{ $master->periode }}</option>
                                                                <option value="11-{{ $master->periode }}">
                                                                    11-{{ $master->periode }}</option>
                                                                <option value="12-{{ $master->periode }}">
                                                                    12-{{ $master->periode }}</option>
                                                                <option value="13-{{ $master->periode }}">
                                                                    13-{{ $master->periode }}</option>
                                                                <option value="14-{{ $master->periode }}">
                                                                    14-{{ $master->periode }}</option>
                                                                <option value="15-{{ $master->periode }}">
                                                                    15-{{ $master->periode }}</option>
                                                                <option value="16-{{ $master->periode }}">
                                                                    16-{{ $master->periode }}</option>
                                                                <option value="17-{{ $master->periode }}">
                                                                    17-{{ $master->periode }}</option>
                                                                <option value="18-{{ $master->periode }}">
                                                                    18-{{ $master->periode }}</option>
                                                                <option value="19-{{ $master->periode }}">
                                                                    19-{{ $master->periode }}</option>
                                                                <option value="20-{{ $master->periode }}">
                                                                    20-{{ $master->periode }}</option>
                                                                <option value="21-{{ $master->periode }}">
                                                                    21-{{ $master->periode }}</option>
                                                                <option value="22-{{ $master->periode }}">
                                                                    22-{{ $master->periode }}</option>
                                                                <option value="23-{{ $master->periode }}">
                                                                    23-{{ $master->periode }}</option>
                                                                <option value="24-{{ $master->periode }}">
                                                                    24-{{ $master->periode }}</option>
                                                                <option value="25-{{ $master->periode }}">
                                                                    25-{{ $master->periode }}</option>
                                                                <option value="26-{{ $master->periode }}">
                                                                    26-{{ $master->periode }}</option>
                                                                <option value="27-{{ $master->periode }}">
                                                                    27-{{ $master->periode }}</option>
                                                                <option value="28-{{ $master->periode }}">
                                                                    28-{{ $master->periode }}</option>
                                                                <option value="29-{{ $master->periode }}">
                                                                    29-{{ $master->periode }}</option>
                                                            @else
                                                                @if ($master->total == 30)
                                                                    <option value="1-{{ $master->periode }}">
                                                                        1-{{ $master->periode }}</option>
                                                                    <option value="2-{{ $master->periode }}">
                                                                        2-{{ $master->periode }}</option>
                                                                    <option value="3-{{ $master->periode }}">
                                                                        3-{{ $master->periode }}</option>
                                                                    <option value="4-{{ $master->periode }}">
                                                                        4-{{ $master->periode }}</option>
                                                                    <option value="5-{{ $master->periode }}">
                                                                        5-{{ $master->periode }}</option>
                                                                    <option value="6-{{ $master->periode }}">
                                                                        6-{{ $master->periode }}</option>
                                                                    <option value="7-{{ $master->periode }}">
                                                                        7-{{ $master->periode }}</option>
                                                                    <option value="8-{{ $master->periode }}">
                                                                        8-{{ $master->periode }}</option>
                                                                    <option value="9-{{ $master->periode }}">
                                                                        9-{{ $master->periode }}</option>
                                                                    <option value="10-{{ $master->periode }}">
                                                                        10-{{ $master->periode }}</option>
                                                                    <option value="11-{{ $master->periode }}">
                                                                        11-{{ $master->periode }}</option>
                                                                    <option value="12-{{ $master->periode }}">
                                                                        12-{{ $master->periode }}</option>
                                                                    <option value="13-{{ $master->periode }}">
                                                                        13-{{ $master->periode }}</option>
                                                                    <option value="14-{{ $master->periode }}">
                                                                        14-{{ $master->periode }}</option>
                                                                    <option value="15-{{ $master->periode }}">
                                                                        15-{{ $master->periode }}</option>
                                                                    <option value="16-{{ $master->periode }}">
                                                                        16-{{ $master->periode }}</option>
                                                                    <option value="17-{{ $master->periode }}">
                                                                        17-{{ $master->periode }}</option>
                                                                    <option value="18-{{ $master->periode }}">
                                                                        18-{{ $master->periode }}</option>
                                                                    <option value="19-{{ $master->periode }}">
                                                                        19-{{ $master->periode }}</option>
                                                                    <option value="20-{{ $master->periode }}">
                                                                        20-{{ $master->periode }}</option>
                                                                    <option value="21-{{ $master->periode }}">
                                                                        21-{{ $master->periode }}</option>
                                                                    <option value="22-{{ $master->periode }}">
                                                                        22-{{ $master->periode }}</option>
                                                                    <option value="23-{{ $master->periode }}">
                                                                        23-{{ $master->periode }}</option>
                                                                    <option value="24-{{ $master->periode }}">
                                                                        24-{{ $master->periode }}</option>
                                                                    <option value="25-{{ $master->periode }}">
                                                                        25-{{ $master->periode }}</option>
                                                                    <option value="26-{{ $master->periode }}">
                                                                        26-{{ $master->periode }}</option>
                                                                    <option value="27-{{ $master->periode }}">
                                                                        27-{{ $master->periode }}</option>
                                                                    <option value="28-{{ $master->periode }}">
                                                                        28-{{ $master->periode }}</option>
                                                                    <option value="29-{{ $master->periode }}">
                                                                        29-{{ $master->periode }}</option>
                                                                    <option value="30-{{ $master->periode }}">
                                                                        30-{{ $master->periode }}</option>
                                                                @else
                                                                    @if ($master->total == 31)
                                                                        <option value="1-{{ $master->periode }}">
                                                                            1-{{ $master->periode }}</option>
                                                                        <option value="2-{{ $master->periode }}">
                                                                            2-{{ $master->periode }}</option>
                                                                        <option value="3-{{ $master->periode }}">
                                                                            3-{{ $master->periode }}</option>
                                                                        <option value="4-{{ $master->periode }}">
                                                                            4-{{ $master->periode }}</option>
                                                                        <option value="5-{{ $master->periode }}">
                                                                            5-{{ $master->periode }}</option>
                                                                        <option value="6-{{ $master->periode }}">
                                                                            6-{{ $master->periode }}</option>
                                                                        <option value="7-{{ $master->periode }}">
                                                                            7-{{ $master->periode }}</option>
                                                                        <option value="8-{{ $master->periode }}">
                                                                            8-{{ $master->periode }}</option>
                                                                        <option value="9-{{ $master->periode }}">
                                                                            9-{{ $master->periode }}</option>
                                                                        <option value="10-{{ $master->periode }}">
                                                                            10-{{ $master->periode }}</option>
                                                                        <option value="11-{{ $master->periode }}">
                                                                            11-{{ $master->periode }}</option>
                                                                        <option value="12-{{ $master->periode }}">
                                                                            12-{{ $master->periode }}</option>
                                                                        <option value="13-{{ $master->periode }}">
                                                                            13-{{ $master->periode }}</option>
                                                                        <option value="14-{{ $master->periode }}">
                                                                            14-{{ $master->periode }}</option>
                                                                        <option value="15-{{ $master->periode }}">
                                                                            15-{{ $master->periode }}</option>
                                                                        <option value="16-{{ $master->periode }}">
                                                                            16-{{ $master->periode }}</option>
                                                                        <option value="17-{{ $master->periode }}">
                                                                            17-{{ $master->periode }}</option>
                                                                        <option value="18-{{ $master->periode }}">
                                                                            18-{{ $master->periode }}</option>
                                                                        <option value="19-{{ $master->periode }}">
                                                                            19-{{ $master->periode }}</option>
                                                                        <option value="20-{{ $master->periode }}">
                                                                            20-{{ $master->periode }}</option>
                                                                        <option value="21-{{ $master->periode }}">
                                                                            21-{{ $master->periode }}</option>
                                                                        <option value="22-{{ $master->periode }}">
                                                                            22-{{ $master->periode }}</option>
                                                                        <option value="23-{{ $master->periode }}">
                                                                            23-{{ $master->periode }}</option>
                                                                        <option value="24-{{ $master->periode }}">
                                                                            24-{{ $master->periode }}</option>
                                                                        <option value="25-{{ $master->periode }}">
                                                                            25-{{ $master->periode }}</option>
                                                                        <option value="26-{{ $master->periode }}">
                                                                            26-{{ $master->periode }}</option>
                                                                        <option value="27-{{ $master->periode }}">
                                                                            27-{{ $master->periode }}</option>
                                                                        <option value="28-{{ $master->periode }}">
                                                                            28-{{ $master->periode }}</option>
                                                                        <option value="29-{{ $master->periode }}">
                                                                            29-{{ $master->periode }}</option>
                                                                        <option value="30-{{ $master->periode }}">
                                                                            30-{{ $master->periode }}</option>
                                                                        <option value="31-{{ $master->periode }}">
                                                                            31-{{ $master->periode }}</option>
                                                                    @else
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    </select>
                                                    <label for="floatingSelect">Pilih Tanggal</label>
                                                </div>
                                                @error('tgl')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="equip_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $res->equip_id }}">
                                                            {{ $res->equip_->no_unit }}</option>
                                                        @foreach ($equip as $s)
                                                            <option value="{{ $s->id }}">{{ $s->no_unit }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Pilih Unit</label>
                                                </div>
                                                @error('equip_id')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2">
                                            <div class="form-floating">
                                                <textarea name="deskripsi" maxlength="100" class="form-control form-control-sm" id="floatingTextarea2"
                                                    style="height: 100px">{{ $res->deskripsi }}</textarea>
                                                <label for="floatingTextarea2">Deskripsi<code>*</code></label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="remark" maxlength="100" class="form-control form-control-sm" id="floatingTextarea2"
                                                    style="height: 100px">{{ $res->remark }}</textarea>
                                                <label for="floatingTextarea2">Remark<code>*</code></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <ul class="nav flex-lg-column fs--1">
                                        <li class="nav-item me-2 mb-2 me-lg-0">
                                            <label class="form-label">Jam Mulai</label>
                                            <input class="form-control datetimepicker" id="datetimepicker"
                                                name="jam_mulai" type="text"
                                                data-options='{"enableTime":true,"dateFormat":"Y/m/d H:i","disableMobile":true}' />
                                            @error('jam_mulai')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </li>
                                        <li class="nav-item me-2 mb-2 me-lg-0">
                                            <label class="form-label">Jam Selesai</label>
                                            <input class="form-control datetimepicker" id="datetimepicker"
                                                name="jam_selesai" type="text"
                                                data-options='{"enableTime":true,"dateFormat":"Y/m/d H:i","disableMobile":true}' />
                                            @error('jam_selesai')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success btn-sm mb-3 me-3"><i class="fas fa-save"></i>
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endforeach
