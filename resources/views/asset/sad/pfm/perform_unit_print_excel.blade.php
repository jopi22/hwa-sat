@extends('layouts.layout')

@section('judul')
    Performa Unit | HWA &bull; SAT
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
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Performance Unit <span
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
            <div id="tableExample4"
                data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
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
                            <option selected="" value="">Filter: Tipe</option>
                            <option value="Excavator">Excavator</option>
                            <option value="Vibro">Vibro</option>
                            <option value="Bulldozer">Bulldozer</option>
                            <option value="Dump Truck">Dump Truck</option>
                            <option value="Pick Up">Pick Up</option>
                            <option value="Truck Loader">Truck Loader</option>
                            <option value="Truck Tangki">Truck Tangki</option>
                            <option value="Peralatan Las">Peralatan Las</option>
                            <option value="Kompresor">Kompresor</option>
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
                                <tr class="text-center">
                                    <th style="min-width: 50px"
                                        class="sort" data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort" data-sort="no">
                                        No Unit
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort" data-sort="no">
                                        Kode Unit
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort"
                                        data-sort="mod">
                                        Model
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort"
                                        data-sort="jen">
                                        Jenis
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort"
                                        data-sort="payment">
                                        Tipe
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort"
                                        data-sort="brand">
                                        Brand
                                    </th>
                                    <th style="min-width: 80px"
                                        class="">
                                        HM Awal</th>
                                    <th style="min-width: 80px"
                                        class="">
                                        HM Akhir
                                    </th>
                                    <th style="min-width: 80px"
                                        class="">
                                        HM
                                        Potongan
                                    </th>
                                    <th style="min-width: 80px"
                                        class="">
                                        HM
                                        Total
                                    </th>
                                    <th style="min-width: 80px; max-width: 400px;"
                                        class="sort"
                                        data-sort="lok">Alokasi
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($equip as $res)
                                    <tr id="index_{{ $res->id }}">
                                        <td class="no">
                                            {{ $loop->iteration }}</td>
                                        <td class="tgl">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->no_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="tgl">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->kode_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class=" tgl">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->model }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class=" tgl">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->jenis }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class=" payment">
                                            @if ($res->equip_->tipe)
                                                {{ $res->equip_->tipe }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="id">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->brand }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="">
                                            @if ($res->hm_awal)
                                                {{ $res->hm_awal }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="">
                                            @if ($res->hm_akhir)
                                                {{ $res->hm_akhir }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="">
                                            @if ($res->total_pot)
                                                {{ $res->total_pot }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="">
                                            @if ($res->grand_total)
                                                {{ $res->grand_total }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="">
                                            @if ($res->alokasi)
                                                {{ $res->alokasi }}
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
