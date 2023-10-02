@extends('layouts.layout')

@section('judul')
    Kalender | Rekapitulasi
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    {{-- // Eksport Excel // --}}
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    {{-- // Eksport Excel // --}}
    <script type="text/javascript">
        function htmlTableToExcel(type) {
            var data = document.getElementById('tblToExcl');
            var excelFile = XLSX.utils.table_to_book(data, {
                sheet: "sheet1"
            });
            XLSX.write(excelFile, {
                bookType: type,
                bookSST: true,
                type: 'base64'
            });
            XLSX.writeFile(excelFile, 'Rekap Absensi.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Human Resource & General Affairs <span
                        class="text-danger">{{ $cek->created_at->format('F Y') }}</span></h6>
                <h4 class="mb-0 text-primary fw-bold">Kalender Absen {{ $cek->created_at->format('F Y') }}<span
                        class="text-info fw-medium"></span></h4>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body py-5 py-sm-3">
            <div class="row g-5 g-sm-0">
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-success">Kehadiran Total</h6>
                            <h3 class="fw-normal text-success" data-countup='{"endValue":{{ $hadir }}}'>0
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-danger">Alpha Total</h6>
                            <h3 class="fw-normal text-danger" data-countup='{"endValue":{{ $alpha }}}'>0
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-warning">Cuti Total</h6>
                            <h3 class="fw-normal text-warning" data-countup='{"endValue":{{ $cuti }}}'>0
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-info">Izin Ket/Tanpa Ket</h6>
                            <div class="text-center">
                                <h3 class="fw-normal text-info">{{ $izin_k }}/{{ $izin_tk }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-info">Sakit Ket/Tanpa Ket</h6>
                            <h3 class="fw-normal text-info">{{ $sakit_k }}/{{ $sakit_tk }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div>
                        <div class="text-center">
                            <h6 class="text-700">Progres Absensi (%)</h6>
                            <h3 class="fw-normal text-700" data-countup='{"endValue":{{ $progres }}}'>0</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @foreach ($abs as $item)
        @if ($item->periode_id)
        <div class="card mb-3">
            <div class="card-header bg-light py-2 d-flex flex-between-center">
                <div class="row flex-between-center">
                    <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                        {{-- <button class="btn btn-sm btn-falcon-warning" id="printButton" onclick="print()"><i
                                class="fas fa-file-pdf"></i></button> --}}
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0">
                <div id="tableExample3"
                    data-list='{"valueNames":["id","nik","no","tgl","nama","jab","tipe","kimper","tgl2","agama","status"],"page":10,"pagination":true,"filter":{"key":"jab"}}'>
                    <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                        <div class="col-sm-3">
                            <form>
                                <div class="input-group"><input
                                        class="form-control form-control-sm shadow-none search" type="search"
                                        placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>&nbsp;
                        <div class="col-sm-3">
                            <button class="btn btn-sm btn-falcon-success" id="button"
                                onclick="htmlTableToExcel('xlsx')"><i class="fas fa-file-excel"></i></button>
                        </div>&nbsp;
                    </div>
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl"
                            class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                            <thead class="bg-200 text-800">
                                <tr class="text-center">
                                    <td style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="id">
                                        NIK
                                    </td>
                                    <td style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Nama
                                    </td>
                                    @if ($per->total == 28)
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            1
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            2
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            3
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            4
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            5
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            6
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            7
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            8
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            9
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            10
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            11
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            12
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            13
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            14
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            15
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            16
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            17
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            18
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            19
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            10
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            21
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            22
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            23
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            24
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            25
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            26
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            27
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                            28
                                        </td>
                                    @else
                                        @if ($per->total == 29)
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                1
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                2
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                3
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                4
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                5
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                6
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                7
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                8
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                9
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                10
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                11
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                12
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                13
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                14
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                15
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                16
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                17
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                18
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                19
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                20
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                21
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                22
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                23
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                24
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                25
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                26
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                27
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                28
                                            </td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                29
                                            </td>
                                        @else
                                            @if ($per->total == 30)
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    1</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    2</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    3</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    4</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    5</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    6</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    7</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    8</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    9</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    10</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    11</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    12</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    13</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    14</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    15</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    16</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    17</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    18</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    19</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    20</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    21</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    22</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    23</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    24</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    25</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    26</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    27</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    28</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    29</td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    30</td>
                                            @else
                                                @if ($per->total == 31)
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        1
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        2
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        3
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        4
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        5
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        6
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        7
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        8
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        9
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        10
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        11
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        12
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        13
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        14
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        15
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        16
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        17
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        18
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        19
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        20
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        21
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        22
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        23
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        24
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        25
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        26
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        27
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        28
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        29
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        30
                                                    </td>
                                                    <td
                                                        class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                        31
                                                    </td>
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($kar as $res)
                                    <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-1000 white-space-nowrap id">
                                            @if ($res->username)
                                                {{ $res->username }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap nama">
                                            @if ($res->name)
                                                {{ $res->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        @foreach ($res->absensi_ as $item)
                                            @if ($item->periode_id == $per->id)
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    @if ($item->status == 8)
                                                        <span class="badge bg-light text-500">-</span>
                                                    @else
                                                        @if ($item->status == 7)
                                                            <span class="badge bg-danger">A</span>
                                                        @else
                                                            @if ($item->status == 6)
                                                                <span class="badge bg-warning">C</span>
                                                            @else
                                                                @if ($item->status == 5)
                                                                    <span class="badge bg-info">I</span>
                                                                @else
                                                                    @if ($item->status == 4)
                                                                        <span class="badge bg-info">N</span>
                                                                    @else
                                                                        @if ($item->status == 3)
                                                                            <span
                                                                                class="badge bg-secondary">S</span>
                                                                        @else
                                                                            @if ($item->status == 2)
                                                                                <span
                                                                                    class="badge bg-secondary">T</span>
                                                                            @else
                                                                                @if ($item->status == 1)
                                                                                    <span
                                                                                        class="badge bg-success">H</span>
                                                                                @else
                                                                                @endif
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                </td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="d-flex justify-content-center mt-3 mb-3"><button
                            class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                            data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                            type="button" title="Next" data-list-pagination="next"><span
                                class="fas fa-chevron-right">
                            </span></button>
                    </div> --}}
                </div>
            </div>
            <div class="card-footer bg-light d-flex flex-between-center py-2">
                {{-- // --}}
            </div>
        </div>
        @endif
    @endforeach

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-auto"><span class="badge bg-success">H</span><span class="text-1000 fs--1">
                        Hadir</span></div>
                <div class="col-auto"><span class="badge bg-danger">A</span><span class="text-1000 fs--1">
                        Alpha</span></div>
                <div class="col-auto"> <span class="badge bg-warning">C</span><span class="text-1000 fs--1">
                        Cuti</span></div>
                <div class="col-auto"> <span class="badge bg-info">I</span><span class="text-1000 fs--1"> Izin
                    </span></div>
                {{-- <div class="col-auto"> <span class="badge bg-info">N</span><span class="text-1000 fs--1"> Izin
                        Tanpa
                        Keterangan</span></div> --}}
                <div class="col-auto"> <span class="badge bg-secondary">S</span><span class="text-1000 fs--1">
                        Sakit
                    </span></div>
                {{-- <div class="col-auto"> <span class="badge bg-secondary">T</span><span class="text-1000 fs--1">
                        Sakit
                        Tanpa Keterangan</span></div> --}}
            </div>
        </div>
    </div>
@endsection
