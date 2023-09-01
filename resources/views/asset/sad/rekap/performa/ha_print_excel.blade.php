@extends('layouts.layout')

@section('judul')
    Hauling | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Hauling.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Hauling {{$master->created_at->format('F Y')}}
                        <span class="text-info"> </span>
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
                data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
                <div class="row mt-2 mb-2 ms-3 g-0 flex-between-left">
                    <div class="col-6">
                        <div class="row g-1">
                            <div class="col-sm-6">
                                <form>
                                    <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                            type="search" placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6 ">
                                <select class="form-select form-select-sm" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Filter: Brand</option>
                                    {{-- @foreach ($equipment as $item)
                                    <option value="{{ $item->brand }}">{{ $item->brand }}</option>
                                @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive scrollbar">
                    <table id="tblToExcl" class="table table-sm table-bordered mb-0 data-table fs--1"
                        data-options='{"paging":false,"scrollY":"300px","searching":false,"scrollCollapse":true,"fixedColumns":{"left":1},"scrollX":true}'>
                        <thead class="bg-200 text-center text-900">
                            <tr>
                                <th class="sort bg-secondary text-white">#</th>
                                <th class="sort bg-secondary text-white">Tanggal</th>
                                <th class="sort bg-secondary text-white" sorted="nama">Driver</th>
                                <th class="sort bg-secondary text-white">No Unit</th>
                                <th class="sort bg-secondary text-white">Start Location</th>
                                <th class="sort bg-secondary text-white">End Location</th>
                                <th class="sort bg-secondary text-white">Dedicated</th>
                                <th class="sort text-end bg-primary text-white">Timbangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hauling as $asu)
                                <tr class="fw-semi-bold">
                                    <td class="text-1000">{{ $loop->iteration }}</td>
                                    <td class="text-1000">{{ $asu->tgl->format('d-m-Y') }}</td>
                                    <td class="text-1000 nama">{{ $asu->kar_->name }}</td>
                                    <td class="text-1000">{{ $asu->equip_->no_unit }}</td>
                                    <td class="text-1000">{{ $asu->loc_s->location }}</td>
                                    <td class="text-1000">{{ $asu->loc_e->location }}</td>
                                    <td class="text-1000">{{ $asu->dedi_->dedicated }}</td>
                                    <td class="text-end bg-200 text-1000">{{ $asu->timbangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
