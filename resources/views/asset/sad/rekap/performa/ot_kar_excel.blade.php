@extends('layouts.layout')

@section('judul')
    Rekap Overtime | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Overtime.' + type);
        }
    </script>
@endsection

@section('superadmin')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Overtime <span
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
        <div class="card-body p-0">
            <div class="tab-content">
                <div id="tableExample4"
                    data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                    <div class="row justify-content-left ms-3 mt-3 mb-3 g-0">
                        <div class="col-auto col-sm-3">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>&nbsp;
                        <div class="col-auto col-sm-3 ">
                            <select class="form-select form-select-sm" aria-label="Bulk actions"
                                data-list-filter="data-list-filter">
                                <option selected="" value="">Filter: Jabatan</option>
                                @foreach ($jabatan as $asu)
                                    <option value="{{ $asu->jabatan }}">{{ $asu->jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @if ($cek_perform == 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
                        <div class="table-responsive scrollbar">
                            <table id="tblToExcl" class="table table-bordered mb-0 fs--1"
                                data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                <thead>
                                    <tr>
                                        <th>Rekap Overtime</th>
                                        <th>{{ $master->created_at->format('F Y') }}</th>
                                    </tr>
                                    <tr class="text-center">
                                        <th style="min-width: 50px" class="sort  align-middle white-space-nowrap"
                                            data-sort="no">
                                            #
                                        </th>
                                        <th style="min-width: 80px" class="sort  align-middle white-space-nowrap"
                                            data-sort="id">
                                            NIK
                                        </th>
                                        <th style="min-width: 200px" class="sort  align-middle white-space-nowrap"
                                            data-sort="nama">
                                            Helper / Mekanik
                                        </th>
                                        <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                            data-sort="payment">
                                            Jabatan
                                        </th>
                                        <th style="min-width: 80px" class="sort  align-middle white-space-nowrap"
                                            data-sort="hm">
                                            Jam Total
                                        </th>
                                        <th style="min-width: 80px" class="sort  align-middle white-space-nowrap"
                                            data-sort="ins">
                                            Total Lemburan (Rp)</th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($kar_list as $res)
                                        <tr id="index_{{ $res->id }}">
                                            <td class="align-middle text-center white-space-nowrap no">
                                                {{ $loop->iteration }}</td>
                                            <td class="align-middle text-center white-space-nowrap id">
                                                @if ($res->kar_id)
                                                    K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
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
                                            <td class="align-middle text-center white-space-nowrap payment">
                                                @if ($res->kar_id)
                                                    {{ $res->kar_->jabatan }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-center white-space-nowrap hm">
                                                @if ($res->jam_total)
                                                    {{ $res->jam_total }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-center white-space-nowrap ins">
                                                @if ($res->lemburan)
                                                    <h6 data-countup='{"duration":0,"endValue":{{ $res->lemburan }}}'>0
                                                    </h6>
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
        </div>
        <div class="card-footer bg-light">
            <p class="fs--1 mb-0"><strong>Notes: </strong>We really appreciate your business and if there’s anything else
                we
                can do, please let us know!</p>
        </div>
    </div>
@endsection
