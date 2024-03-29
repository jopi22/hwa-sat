@extends('layouts.layout')

@section('judul')
    Rekap Hours Meter | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Hours Meter.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Hours Meter <span
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
                    data-list='{"valueNames":["id","nik","tgl","name","payment","dedi","lok","shift","rem","kode","cat","com","shift"],"filter":{"key":"payment"}}'>
                    <div class="row mt-2 mb-2 ms-3 g-0">
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
                                <option selected="" value="">Filter: No Unit</option>
                                @foreach ($equipment as $item)
                                    <option value="{{ $item->no_unit }}">{{ $item->no_unit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive scrollbar">
                        <table id="tblToExcl" class="table table-sm table-bordered mb-0 fs--1"
                            data-options='{"paging":false,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true}'>
                            <thead>
                                <tr>
                                    <th style="min-width: 50px"data-sort="no">
                                        No
                                    </th>
                                    <th style="min-width: 100px" class="sort" data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 80px" class="sort" data-sort="shift">
                                        Shift
                                    </th>
                                    <th style="min-width: 120px" class="sort" data-sort="kode">
                                        Code Unit
                                    </th>
                                    <th style="min-width: 120px" class="sort" data-sort="payment">
                                        No Unit
                                    </th>
                                    <th style="min-width: 80px" class="sort">
                                        HM Awal</th>
                                    <th style="min-width: 80px" class="sort text-center">
                                        HM Akhir
                                    </th>
                                    <th style="min-width: 80px" class="sort">
                                        HM Total (Hours)
                                    </th>
                                    <th style="min-width: 80px">
                                        Jam Start</th>
                                    <th style="min-width: 80px">
                                        Jam Stop
                                    </th>
                                    <th style="min-width: 80px">
                                        Rest Time
                                    </th>
                                    <th style="min-width: 80px">
                                        Total Jam (Hours)
                                    </th>
                                    <th style="min-width: 80px">
                                        Total (Hours)
                                    </th>
                                    <th style="min-width: 150px; max-width: 400px;" class="sort" data-sort="dedi">
                                        Dedicated
                                    </th>
                                    <th style="min-width: 150px; max-width: 400px;" class="sort" data-sort="lok">
                                        Location
                                    </th>
                                    <th style="min-width: 80px" class="sort " data-sort="nik">
                                        NIK
                                    </th>
                                    <th style="min-width: 250px; max-width: 400px;" class="sort " data-sort="name">
                                        Operator
                                        / Driver
                                    </th>
                                    <th style="min-width: 150px; max-width: 400px;" class="sort" data-sort="rem">
                                        Remark
                                    </th>
                                    <th style="min-width: 150px; max-width: 400px;" class="sort" data-sort="cat">
                                        Category
                                    </th>
                                    <th style="min-width: 200px; max-width: 400px;" class="sort" data-sort="com">
                                        Combine
                                    </th>
                                    <th style="min-width: 80px" class="sort">
                                        HM
                                        Potongan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($perform_list as $res)
                                    <tr id="index_{{ $res->id }}">
                                        <td class="align-middle text-center white-space-nowrap">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap shift">
                                            @if ($res->shift_id)
                                                {{ $res->shift_->shift }}
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
                                        <td class="align-middle text-center white-space-nowrap payment">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->no_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->hm_awal)
                                                {{ $res->hm_awal }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->hm_akhir)
                                                {{ $res->hm_akhir }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle  text-center white-space-nowrap">
                                            @if ($res->hm_total)
                                                {{ $res->hm_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->jam_awal)
                                                {{ $res->jam_awal->format('H:i') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->jam_akhir)
                                                {{ $res->jam_akhir->format('H:i') }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->rest_time)
                                                {{ $res->rest_time }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle  text-center white-space-nowrap">
                                            @if ($res->jam_total)
                                                {{ $res->jam_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap">
                                            @if ($res->hm_total)
                                                {{ $res->hm_total }}
                                            @else
                                                {{ $res->jam_total }}
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap dedi">
                                            @if ($res->dedicated_id)
                                                {{ $res->dedicated_->dedicated }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center white-space-nowrap lok">
                                            @if ($res->lokasi_id)
                                                {{ $res->lokasi_->location }}
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
                                        <td class="align-middle  white-space-nowrap name">
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
                                        <td class="align-middletext-center white-space-nowrap cat">
                                            @if ($res->category_id)
                                                {{ $res->category_->category }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middletext-center white-space-nowrap com">
                                            @if ($res->category_id)
                                                {{ $res->category_->category }}{{ $res->lokasi_->location }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle  text-center white-space-nowrap">
                                            @if ($res->hm_pot)
                                                {{ $res->hm_pot }}
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
        </div>
        <div class="card-footer bg-light">

        </div>
    </div>
@endsection
