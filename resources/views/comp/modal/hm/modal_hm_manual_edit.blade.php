@foreach ($all as $hasil)
    <div class="modal fade" id="edit-{{ $hasil->id }}" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1"><button
                        class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body p-0">
                    <form action="{{ route('hm.m.u', $hasil->id) }}" method="post">
                        @method('PUT')
                        @csrf
                        <div class="bg-warning rounded-top-lg py-3 ps-4 pe-6">
                            <h4 class="mb-1 text-white" id="staticBackdropLabel">
                                <i class="fas fa-stopwatch"></i> Id HM: {{ $hasil->id }}
                            </h4>
                            <p class="fs--2 mb-0 text-white">Author: {{ Auth::user()->name }}</p>
                        </div>
                        <div class="p-4">
                            <div class="row">
                                <div class="col-lg-12 mb-2">
                                    <span class="text-warning fs--1"><i class="fas fa-info-circle"></i> Bertanda Bintang
                                        <code>*</code> Tidak Wajib Diisi.</span>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="tgl" class="form-select form-select-sm"
                                                        id="floatingSelect" aria-label="Floating label select example">
                                                        <option value="{{ $hasil->tgl }}">{{ $hasil->tgl }}</option>
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
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="shift_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->shift_id }}">
                                                            {{ $hasil->shift_->shift }}</option>
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
                                                    <select required name="equip_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->equip_id }}">
                                                            {{ $hasil->equip_->no_unit }}</option>
                                                        @foreach ($equip as $asu)
                                                            <option value="{{ $asu->equip_->id }}">
                                                                {{ $asu->equip_->no_unit }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Pilih Unit</label>
                                                </div>
                                                @error('equip_id')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="category_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->category_id }}">
                                                            {{ $hasil->category_->category }}</option>
                                                        @foreach ($category as $asu)
                                                            <option value="{{ $asu->id }}">
                                                                {{ $asu->category }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Pilih Category</label>
                                                </div>
                                                @error('category_id')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="kar_id" class="form-select form-select-sm"
                                                        id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->kar_id }}">
                                                            {{ $hasil->kar_->name }}
                                                        </option>
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
                                                    <select required name="lokasi_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->lokasi_id }}">
                                                            {{ $hasil->lokasi_->location }}</option>
                                                        @foreach ($lok as $s)
                                                            <option value="{{ $s->id }}">{{ $s->location }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Pilih Lokasi</label>
                                                </div>
                                                @error('lokasi_id')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="dedicated_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->dedicated_id }}">
                                                            {{ $hasil->dedicated_->dedicated }}</option>
                                                        @foreach ($dedi as $b)
                                                            <option value="{{ $b->id }}">
                                                                {{ $b->dedicated }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Pilih Dedicated</label>
                                                </div>
                                                @error('dedicated_id')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-2">
                                                <div class="form-floating">
                                                    <select required name="aktivitas_id"
                                                        class="form-select form-select-sm" id="floatingSelect"
                                                        aria-label="Floating label select example">
                                                        <option value="{{ $hasil->aktivitas_id }}">
                                                            {{ $hasil->aktivitas_->aktivitas }}</option>
                                                        @foreach ($aktivitas as $bro)
                                                            <option value="{{ $bro->id }}">
                                                                {{ $bro->aktivitas }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <label for="floatingSelect">Pilih Aktivitas</label>
                                                </div>
                                                @error('aktivitas_id')
                                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" name="remark" value="{{ $hasil->remark }}"
                                                    class="form-control form-control-sm">
                                                <label for="floatingSelect">Remark</label>
                                            </div>
                                            @error('remark')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="nav flex-lg-column fs--1">
                                        <li class="nav-item me-2 mb-2 me-lg-0">
                                            <label class="form-label">Jam Mulai</label>
                                            <input required class="form-control form-control-sm datetimepicker"
                                                name="jam_awal" id="datetimepicker" type="text"
                                                value="{{ $hasil->jam_awal }}"
                                                data-options='{"enableTime":true,"dateFormat":"Y-m-d H:i","disableMobile":true}' />
                                            @error('jam_awal')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </li>
                                        <li class="nav-item me-2 mb-2 me-lg-0">
                                            <label class="form-label">Jam Selesai</label>
                                            <input required class="form-control form-control-sm datetimepicker"
                                                name="jam_akhir" id="datetimepicker" type="text"
                                                value="{{ $hasil->jam_akhir }}"
                                                data-options='{"enableTime":true,"dateFormat":"Y-m-d H:i","disableMobile":true}' />
                                            @error('jam_akhir')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </li>
                                        <li class="nav-item me-2 mb-2 me-lg-0">
                                            <label class="form-label">HM Potongan<code>*</code></label>
                                            <input class="form-control form-control-sm" name="hm_pot" type="number"
                                                value="{{ $hasil->hm_pot }}" />
                                            @error('hm_pot')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </li>
                                        <li class="nav-item me-2 mb-2 me-lg-0">
                                            <label class="form-label">Rest Time<code>*</code></label>
                                            <input class="form-control form-control-sm" name="rest_time"
                                                type="number" value="{{ $hasil->rest_time }}" />
                                            @error('rest_time')
                                                <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                            @enderror
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning btn-sm me-3"><i class="fas fa-magic"></i>
                                Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endforeach
