@extends('layouts.layout')

@section('judul')
    Rekap Performance Helper {{ $master->created_at->format('F Y') }} | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Performance Helper.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Performance Helper /
                        {{ $kar->kar_->name }} /
                        <span class="text-info"> {{ $master->created_at->format('F Y') }}</span>
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
        <div class="card-body p-0">
            <div id="tableExample4"
                data-list='{"valueNames":["nama","rem", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                <div class="table-responsive scrollbar">
                    <table id="tblToExcl" class="table table-striped table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead>
                            <tr>
                                <th>Rekap Performance Helper:</th>
                                <td>{{ $master->created_at->format('F Y') }}</td>
                            </tr>
                            <tr>
                                <th style="min-width: 180px">NIK:</th>
                                <th>&nbsp; @if ($kar->kar_id)
                                        {{ $kar->kar_->username }}
                                    @else
                                        -
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th style="min-width: 180px">Nama:</th>
                                <th>&nbsp; @if ($kar->kar_id)
                                        {{ $kar->kar_->name }}
                                    @else
                                        -
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th style="min-width: 180px">Jabatan:</th>
                                <th>&nbsp; @if ($kar->kar_id)
                                        {{ $kar->kar_->jabatan }}
                                    @else
                                        -
                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th style="min-width: 180px">Lokasi:</th>
                                <th>&nbsp; PT. CMI-Sandai</th>
                            </tr>
                            <tr>
                                <th>Total Jam:</th>
                                <td>{{ $total_jam }}</td>
                            </tr>
                            <tr>
                                <th>Total Lemburan (Rp):</th>
                                <td>{{ $lemburan }}</td>
                            </tr>
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tanggal
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="nama">
                                    Helper / Mekanik
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap">
                                    Jam Awal
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap">
                                    Jam Akhir
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap">
                                    Jumlah Jam
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="rem">
                                    Remark
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap">
                                    Jam Potongan
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($data as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger fw-semi-bold">
                                    <td class="align-middle text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap tgl">
                                        @if ($res->tgl)
                                            {{ $res->tgl }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle white-space-nowrap nama">
                                        @if ($res->kar_id)
                                            {{ $res->kar_->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->jam_mulai)
                                            {{ $res->jam_mulai->format('H:i A, d/m/y') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->jam_selesai)
                                            {{ $res->jam_selesai->format('H:i A, d/m/y') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->jam_total)
                                            {{ $res->jam_total }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle  white-space-nowrap">
                                        @if ($res->remark)
                                            {{ $res->remark }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->jam_pot)
                                            {{ $res->jam_pot }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="card-footer bg-light">

        </div>
    </div>
@endsection
