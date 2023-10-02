@extends('layouts.layout')

@section('judul')
    Rekap Breakdown {{ $master->created_at->format('F Y') }} | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Breakdown.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Breakdown /
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
                data-list='{"valueNames":["id","kode","dedi","tgl","unit","rem","tipe","des"],"filter":{"key":"tipe"}}'>
                <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                    <div class="col-sm-3">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Pencarian..." aria-label="search" />
                            </div>
                        </form>
                    </div>&nbsp;
                    <div class="col-sm-3 ">
                        <select class="form-select form-select-sm" aria-label="Bulk actions"
                            data-list-filter="data-list-filter">
                            <option selected="" value="">Filter: Tipe</option>
                            <option value="Excavator">Excavator</option>
                            <option value="Vibro">Vibro</option>
                            <option value="Dump Truck">Dump Truck</option>
                            <option value="Peralatan Pendukung">Peralatan Pendukung</option>
                        </select>
                    </div>&nbsp;
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead>
                                <tr>
                                    <th>Rekap Breakdown</th>
                                    <th>{{ $master->created_at->format('F Y') }}</th>
                                </tr>
                                <tr class="text-center">
                                    <th style="min-width: 50px"
                                        class="sort align-middle white-space-nowrap">
                                        #
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="tipe">
                                        Type
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="kode">
                                        Code Unit
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="unit">
                                        No Unit
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap">
                                        Start
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap">
                                        Stop
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap">
                                        Total (Hours)
                                    </th>
                                    <th style="min-width: 100px"
                                        class="align-middle white-space-nowrap" data-sort="dedi">
                                        Dedicated
                                    </th>
                                    <th style="min-width: 200px"
                                        class="align-middle white-space-nowrap" data-sort="des">
                                        Description of Breakdown
                                    </th>
                                    <th style="min-width: 200px"
                                        class="align-middle white-space-nowrap" data-sort="rem">
                                        Remark
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($bd as $res)
                                    <tr>
                                        <td class="align-middle white-space-nowrap id">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle white-space-nowrap tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap tipe">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->tipe }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap kode">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->kode_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap unit">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->no_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap">
                                            @if ($res->jam_mulai)
                                                {{ $res->jam_mulai->format('H:i A') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap">
                                            @if ($res->jam_selesai)
                                                {{ $res->jam_selesai->format('H:i A') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap">
                                            @if ($res->jam_total)
                                                {{ $res->jam_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap dedi">
                                            @if ($res->dedicated_id)
                                                {{ $res->dedi_->dedicated }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap des">
                                            @if ($res->deskripsi)
                                                {{ $res->deskripsi }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap rem">
                                            @if ($res->remark)
                                                {{ $res->remark }}
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

        </div>
    </div>
@endsection
