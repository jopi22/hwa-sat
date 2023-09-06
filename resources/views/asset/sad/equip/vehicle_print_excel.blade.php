@extends('layouts.layout')

@section('judul')
    Vehicle | HWA &bull; SAT
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    {{-- // Eksport Excel // --}}
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
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
            XLSX.writeFile(excelFile, 'Vehicle.' + type);
        }
    </script>
@endsection

@section('superadmin')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Vehicle
                    </h5>
                </div>
                <div class="col-auto">
                    <button id="button" onclick="htmlTableToExcel('xlsx')" class="btn btn-success btn-sm me-1 mb-2 mb-sm-0"
                        type="button"><span class="fas fa-arrow-down me-1"> </span>Download Excel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header py-2"></div>
        <div class="card-body p-3">
            <div id="tableExample4"
                data-list='{"valueNames":["id","kode","dedi","tgl","unit","rem","tipe","des"],"filter":{"key":"tipe"}}'>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><span>No</span></th>
                                    <th><span>No Unit</span></th>
                                    <th><span>Kode Unit</span></th>
                                    <th><span>Model</span></th>
                                    <th><span>Tipe</span></th>
                                    <th><span>No Rangka</span></th>
                                    <th><span>Brand</span></th>
                                    <th><span>Mulai Operasional</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equip as $asu)
                                    <tr>
                                        <td><span>{{ $loop->iteration }}</span></td>
                                        <td>
                                            <span>
                                                @if ($asu->no_unit)
                                                    {{ $asu->no_unit }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                @if ($asu->kode_unit)
                                                    {{ $asu->kode_unit }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                @if ($asu->model)
                                                    {{ $asu->model }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                @if ($asu->tipe)
                                                    {{ $asu->tipe }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                @if ($asu->no_rangka)
                                                    {{ $asu->no_rangka }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                @if ($asu->brand)
                                                    {{ $asu->brand }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <span>
                                                @if ($asu->start_op)
                                                    {{ $asu->start_op->format('d-m-Y') }}
                                                @else
                                                    -
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-footer bg-light">
            <p class="fs--1 mb-0"><strong>Notes: </strong>We really appreciate your business and if there’s anything else
                we
                can do, please let us know!</p>
        </div>
    </div>
@endsection
