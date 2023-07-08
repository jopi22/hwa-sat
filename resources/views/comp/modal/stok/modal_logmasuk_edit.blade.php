@foreach ($log_list as $edit)
    <div class="modal fade" id="edit-{{ $edit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 800px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('log.m.u', $edit->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-gas-pump"></i>
                            {{ $edit->stok_->barang }}
                        </h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-floating">
                                    <select required class="form-control form-control-sm" name="tgl">
                                        <option value="{{ $edit->tgl }}">{{ $edit->tgl }}</option>
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
                                    </select><label>Tanggal</label>
                                </div>
                                <div class="form-floating">
                                    <select class="form-control form-control-sm mt-2" name="barang_id">
                                        <option value="{{ $edit->barang_id }}">{{ $edit->stok_->barang }}</option>
                                        @foreach ($barang as $item)
                                            <option value="{{ $item->id }}">{{ $item->barang }}</option>
                                        @endforeach
                                    </select> <label>Barang</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input required maxlength="50" class="form-control form-control-sm mt-2"
                                        name="jumlah" type="number" value="{{ $edit->jumlah }}" />
                                    <label>Jumlah</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control form-control-sm mt-2" name="ket" id="" cols="30" rows="10">{{ $edit->jumlah }}</textarea> <label>Keterangan</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="jenis" value="Onderdil">
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
