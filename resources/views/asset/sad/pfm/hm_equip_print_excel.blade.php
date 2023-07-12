@extends('layouts.layout')

@section('judul')
    Unit {{ $equip_m->equip_->no_unit }} | HWA &bull; SAT
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

@section('superadmin')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Performance Unit
                        {{ $equip_m->equip_->no_unit }} <span
                            class="text-info"> {{ $master->created_at->format('F Y') }}</span></h5>
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
                data-list='{"valueNames":["id","no","tgl","nik","payment","dedi","lokasi","shift","remark"],"filter":{"key":"payment"}}'>
                <div class="row justify-content-left ms-3 mt-3 g-0">
                    <div class="col-auto col-sm-3">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Pencarian" aria-label="search" />
                            </div>
                        </form>
                    </div>&nbsp;
                    <div class="col-auto col-sm-3">
                        <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                            data-list-filter="data-list-filter">
                            <option selected="" value="">Filter: Operator / Driver</option>
                            @foreach ($kar_filter as $item)
                                <option value="{{ $item->kar_->name }}">{{ $item->kar_->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr>
                                    <th>{{ $equip_m->equip_->no_unit }}</th>
                                </tr>
                                <tr class="text-center text-white bg-secondary">
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="shift">
                                        Shift
                                    </th>
                                    <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                        data-sort="id">
                                        NIK
                                    </th>
                                    <th style="min-width: 250px" class="sort align-middle white-space-nowrap"
                                        data-sort="payment">Operator /
                                        Driver
                                    </th>
                                    <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                        HM Awal</th>
                                    <th style="min-width: 80px"
                                        class="sort bg-primary align-middle white-space-nowrap text-center">
                                        HM Akhir
                                    </th>
                                    <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                        HM
                                        Total
                                    </th>
                                    <th style="min-width: 80px" class="sort bg-primary align-middle white-space-nowrap">
                                        HM
                                        Potongan
                                    </th>
                                    <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                        data-sort="remark">Remark
                                    </th>
                                    <th style="min-width: 80px"
                                        class="bg-secondary text-white align-middle white-space-nowrap">
                                        Jam Awal</th>
                                    <th style="min-width: 80px"
                                        class="bg-secondary text-white align-middle white-space-nowrap text-center">
                                        Jam Akhir
                                    </th>
                                    <th style="min-width: 80px"
                                        class="bg-secondary text-white align-middle white-space-nowrap">Jam Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            {{ $loop->iteration }}</td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                            {{ $res->tgl }}</td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                            {{ $res->shift_->shift }}
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap nik">
                                            @if ($res->kar_id)
                                                {{ $res->kar_->username }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap payment">
                                            @if ($res->kar_id)
                                                {{ $res->kar_->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_awal)
                                                {{ $res->hm_awal }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_akhir)
                                                {{ $res->hm_akhir }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_total)
                                                {{ $res->hm_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->hm_pot)
                                                {{ $res->hm_pot }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap remark">
                                            @if ($res->remark)
                                                {{ $res->remark }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_awal)
                                                {{ $res->jam_awal->format('H:i') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_akhir)
                                                {{ $res->jam_akhir->format('H:i') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jam_total)
                                                {{ $res->jam_total }}
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
            <p class="fs--1 mb-0"><strong>Notes: </strong>We really appreciate your business and if there’s anything else
                we
                can do, please let us know!</p>
        </div>
    </div>
@endsection
