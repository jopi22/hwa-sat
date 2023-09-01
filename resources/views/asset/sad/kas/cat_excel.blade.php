@extends('layouts.layout')

@section('judul')
    Rekap Catering | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Catering.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Catering <span
                            class="text-info">{{ $master->created_at->format('F Y') }}</span></h5>
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
        <div class="card-header py-2">
            {{-- // --}}
        </div>
        <div class="card-body p-0">
            <div id="tableExample4"
                data-list='{"valueNames":["id","no","tgl","unit","rem","tipe","des"],"filter":{"key":"tipe"}}'>
                @if ($cek_list == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-sm  table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead>
                                <tr>
                                    <th>Rekap Catering</th>
                                </tr>
                                <tr>
                                    <th>Periode</th>
                                    <th>&nbsp;{{ date('F Y') }}</th>
                                    <th></th>
                                    <th></th>
                                    <th>Porsi Pagi Total</th>
                                    <th>&nbsp;{{ $pagi }} Porsi</th>
                                </tr>
                                <tr>
                                    <th>Kantin </th>
                                    <th>&nbsp;PT HWA</th>
                                    <th></th>
                                    <th></th>
                                    <th>Porsi Siang Total</th>
                                    <th>&nbsp;{{ $siang }} Porsi</th>
                                </tr>
                                <tr>
                                    <th>Pengurus Kantin</th>
                                    <th>&nbsp;{{ $cat_m->atas_nama }}</th>
                                    <th></th>
                                    <th></th>
                                    <th>Porsi Sore Total</th>
                                    <th>&nbsp;{{ $sore }} Porsi</th>
                                </tr>
                                <tr>
                                    <th>Bank</th>
                                    <th>&nbsp;{{ $cat_m->bank }} </th>
                                    <th></th>
                                    <th></th>
                                    <th>Porsi Malam Total</th>
                                    <th>&nbsp;{{ $malam }} Porsi</th>
                                </tr>
                                <tr>
                                    <th>No Rek</th>
                                    <th>&nbsp;{{ $cat_m->no_rek }} </th>
                                    <th></th>
                                    <th></th>
                                    <th>Grand Porsi</th>
                                    <th>&nbsp;{{ $total }} Porsi</th>
                                </tr>
                                <tr>
                                    <th>Harga / Porsi</th>
                                    <th>&nbsp;Rp {{ $harga_porsi }} </th>
                                    <th></th>
                                    <th></th>
                                    <th>Total Harga</th>
                                    <th>&nbsp;Rp {{ $harga }} </th>
                                </tr>
                                <tr>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Pagi
                                    </th>
                                    <th>
                                        Siang
                                    </th>
                                    <th>
                                        Sore
                                    </th>
                                    <th>
                                        Malam
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    <th>
                                        Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($cat_list as $res)
                                    <tr>
                                        <td class="id">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="pagi">
                                            @if ($res->pagi)
                                                {{ $res->pagi }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="siang">
                                            @if ($res->siang)
                                                {{ $res->siang }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="sore">
                                            @if ($res->sore)
                                                {{ $res->sore }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="malam">
                                            @if ($res->malam)
                                                {{ $res->malam }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="total">
                                            @if ($res->total)
                                                {{ $res->total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="ket">
                                            @if ($res->ket)
                                                {{ $res->ket }}
                                            @else
                                                -
                                            @endif
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
            {{-- // --}}
        </div>
    </div>
@endsection
