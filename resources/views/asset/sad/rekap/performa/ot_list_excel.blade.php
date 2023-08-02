@extends('layouts.layout')

@section('judul')
    Rekap Helper {{ $master->created_at->format('F Y') }} | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Helper.' + type);
        }
    </script>
@endsection

@section('superadmin')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Helper
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
            <div id="tableExample3"
                data-list='{"valueNames":["id","nik","tgl","nama","rem","unit"],"page":10,"pagination":true,"filter":{"key":"nama"}}'>
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
                            <option selected="" value="">Filter: Helper</option>
                            @foreach ($kar as $item)
                                <option value="{{ $item->kar_->name }}">{{ $item->kar_->name }}</option>
                            @endforeach
                        </select>
                    </div>&nbsp;
                    <div class="col-sm-3">
                        <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="fas fa-plus text-success"
                                data-fa-transform="shrink-3"></span><span
                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                        </button>
                        <a href="{{ route('ot.l.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                            rel="noopener noreferrer">
                            <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                            </button>
                        </a>
                    </div>
                </div>
                @if ($cek_perform == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-sm table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead>
                                <tr>
                                    <th>Rekap Helper</th>
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
                                        data-sort="unit">
                                        No Unit
                                    </th>
                                    <th style="min-width: 50px"
                                        class="sort align-middle white-space-nowrap">
                                        Jam Mulai
                                    </th>
                                    <th style="min-width: 50px"
                                        class="sort align-middle white-space-nowrap">
                                        Jam Selesai
                                    </th>
                                    <th style="min-width: 50px"
                                        class="sort align-middle white-space-nowrap">
                                        Jam Total
                                    </th>
                                    <th style="min-width: 80px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="nik">
                                        NIK
                                    </th>
                                    <th style="min-width: 200px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Helper / Mekanik
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort align-middle white-space-nowrap"
                                        data-sort="rem">
                                        Remark
                                    </th>
                                    <th style="min-width: 50px"
                                        class="sort align-middle white-space-nowrap">
                                        Jam Potongan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($perform as $res)
                                    <tr id="" class="btn-reveal-trigger fw-semi-bold">
                                        <td class="align-middle text-center white-space-nowrap id">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap unit">
                                            @if ($res->equip_id)
                                                {{ $res->equipot_->equip_->no_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->jam_mulai)
                                                {{ $res->jam_mulai->format('H:i A') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->jam_selesai)
                                                {{ $res->jam_selesai->format('H:i A') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="-space-nowrap">
                                            @if ($res->jam_total)
                                                {{ $res->jam_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap nik">
                                            @if ($res->kar_id)
                                                {{ $res->kar_->username }}
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
                                        <td class="align-middle white-space-nowrap rem">
                                            @if ($res->remark)
                                                {{ $res->remark }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="-space-nowrap">
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
