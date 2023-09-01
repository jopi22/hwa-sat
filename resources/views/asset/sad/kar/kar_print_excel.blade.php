@extends('layouts.layout')

@section('judul')
    Data Karyawan PT HWA | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Performance Unit.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Data Karyawan PT HWA</h5>
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
            <div id="tableExample3"
                data-list='{"valueNames":["id","nik","no","tgl","nama","jab","tipe","kimper","tgl2","agama","status"],"page":10,"pagination":true,"filter":{"key":"jab"}}'>
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
                            <option selected="" value="">Filter: Jabatan</option>
                            @foreach ($jab_f as $item)
                                <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                            @endforeach
                        </select>
                    </div>&nbsp;
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                            <thead>
                                <tr>
                                    <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 50px" class="sort align-middle white-space-nowrap"
                                        data-sort="nik">
                                        NIK
                                    </th>
                                    <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Nama
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="jab">
                                        Jabatan
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tgl Gabung
                                    </th>
                                    <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                        data-sort="kimper">
                                        KIMPER
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="tgl2">
                                        ED KIMPER
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="agama">
                                        Agama
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="agama">
                                        Tipe Income
                                    </th>
                                    <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                        data-sort="status">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($kar as $res)
                                    <tr>
                                        <td class="align-middle white-space-nowrap no">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle white-space-nowrap nik">
                                            @if ($res->username)
                                                {{ $res->username }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap nama">
                                            @if ($res->name)
                                                {{ $res->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap jab">
                                            @if ($res->jabatan)
                                                {{ $res->jabatan }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap tgl">
                                            {{ $res->tgl_gabung->format('d-m-Y') }}
                                        </td>
                                        <td class="align-middle white-space-nowrap kimper">
                                            @if ($res->kimper)
                                                {{ $res->kimper }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap tgl2">
                                            @if ($res->ed_kimper)
                                                {{ $res->ed_kimper->format('d-m-Y') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap agama">
                                            @if ($res->agama)
                                                {{ $res->agama }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap tipe">
                                            @if ($res->tipe_gaji)
                                                {{ $res->tipe_gaji }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle white-space-nowrap tipe">
                                            @if ($res->status)
                                                {{ $res->status }}
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-3 mb-3"><button
                            class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                            data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                            type="button" title="Next" data-list-pagination="next"><span
                                class="fas fa-chevron-right"> </span></button>
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
