@extends('layouts.layout')

@section('judul')
    Data Pemakaian Barang | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Data Pemakaian Barang.' + type);
        }
    </script>
@endsection

@section('superadmin')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Data Pemakaian Barang</h5>
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
            data-list='{"valueNames":["id","barang","unit","kode","tgl","hmkm","barang","ket"],"page":10,"pagination":true,"filter":{"key":"unit"}}'>
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
                        <option selected="" value="">Filter: Unit</option>
                        @foreach ($filter as $item)
                            <option value="{{ $item->no_unit }}">{{ $item->no_unit }}</option>
                        @endforeach
                    </select>
                </div>&nbsp;
            </div>
            @if ($cek == 0)
                <div class="row align-items-center">
                    <div class="col-lg-12 ps-lg-4 my-5 text-center text-lg-start">
                        <h5 class="text-secondary text-center">-- Data Kosong --</h5>
                    </div>
                </div>
            @else
                <div class="table-responsive scrollbar">
                    <table id="tblToExcl" class="table table-sm table-bordered mb-0 fs--1 overflow-hidden">
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    ID
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tgl
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                    data-sort="barang">
                                    Nama Barang/Kode
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="unit">
                                    No Unit
                                </th>
                                <th style="min-width: 100px" class="sort bg-primary text-white align-middle white-space-nowrap"
                                    data-sort="jumlah">
                                    Jumlah
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap" data-sort="hmkm">
                                    HM/KM
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="ket">
                                    Keterangan
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($pb as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap id">
                                        @if ($res->id)
                                            {{ $res->id }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        @if ($res->tgl)
                                            {{ $res->tgl->format('d-m-Y') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap barang">
                                        @if ($res->barang_id)
                                            {{ $res->barang_->barang }}{{ $res->barang_->kode }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap unit">
                                        @if ($res->equip_id)
                                            {{ $res->equip_->no_unit }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle bg-200 text-center text-1000 white-space-nowrap jumlah">
                                        @if ($res->jumlah)
                                            {{ $res->jumlah }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap hmkm">
                                        @if ($res->hmkm)
                                            {{ $res->hmkm }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap ket">
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
                <div class="d-flex justify-content-center mt-3 mb-3"><button class="btn btn-sm btn-falcon-default me-1"
                        type="button" title="Previous" data-list-pagination="prev"><span
                            class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                        title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
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
