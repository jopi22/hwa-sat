@extends('layouts.layout')

@section('judul')
    Kalender | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
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
    @if ($cek->periode == $periode)
        @if ($cek->ket == 1)
            <div class="card mb-3 bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                    <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                            src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                            width="90" />
                        <div>
                            <h6 class="text-primary fs--1 mb-0"><i class="fas fa-users"></i> Human Resource & General Affairs
                            </h6>
                            <h4 class="text-primary fw-bold mb-0">Kalender {{ $cek->created_at->format('F Y') }}</h4>
                        </div>
                    </div>
                    <div class="col-sm-auto d-flex align-items-center">
                        <form class="row align-items-center g-3">
                            <div class="col-auto">
                                <h6 class="text-info mb-0">Master Present :</h6>
                            </div>
                            <div class="col-md-auto">
                                <h6 class="mb-0">{{ $cek->created_at->format('F Y') }}</h6>
                            </div>
                        </form>
                        <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/illustrations/ticket-bg.png') }}"
                            alt="" width="150" />
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
                        <div class="card-header bg-light">
                            <div class="row flex-between-center">
                                <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                                    {{-- <button class="btn btn-sm btn-falcon-warning" id="printButton" onclick="print()"><i
                                            class="fas fa-file-pdf"></i></button> --}}
                                    <button class="btn btn-sm btn-falcon-success" id="button"
                                        onclick="htmlTableToExcel('xlsx')"><i class="fas fa-file-excel"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0">
                            <table id="tblToExcl" class="table mb-0 data-table fs--1"
                                data-options='{"paging":false,"scrollY":"1000px","searching":false,"scrollCollapse":true,"fixedColumns":{"left":2},"scrollX":true}'>
                                <thead class="bg-200 text-900">
                                    <tr>
                                        <th style="width: 80px" class="sort pe-1 align-middle white-space-nowrap">ID</th>
                                        <th style="width: 100px" class="sort pe-1 align-middle  white-space-nowrap">Karyawan
                                        </th>
                                        @if ($per->total == 28)
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                1
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                2
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                3
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                4
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                5
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                6
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                7
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                8
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                9
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                10
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                11
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                12
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                13
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                14
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                15
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                16
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                17
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                18
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                19
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                10
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                21
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                22
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                23
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                24
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                25
                                            </td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
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
                                <tbody>
                                    @foreach ($kar as $res)
                                        <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-black">
                                                K{{ $res->tgl_gabung->format('ym') }}{{ $res->id }}</td>
                                            <td class="align-middle white-space-nowrap fw-semi-bold text-black">
                                                {{ $res->name }}</td>
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
                                                                                <span class="badge bg-secondary">S</span>
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
                                Disertai Keterangan</span></div>
                        <div class="col-auto"> <span class="badge bg-info">N</span><span class="text-1000 fs--1"> Izin
                                Tanpa
                                Keterangan</span></div>
                        <div class="col-auto"> <span class="badge bg-secondary">S</span><span class="text-1000 fs--1">
                                Sakit
                                Disertai Keterangan</span></div>
                        <div class="col-auto"> <span class="badge bg-secondary">T</span><span class="text-1000 fs--1">
                                Sakit
                                Tanpa Keterangan</span></div>
                    </div>
                </div>
            </div>
        @else
            @include('comp.card.card404_kalender')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
