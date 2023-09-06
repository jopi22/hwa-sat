@extends('layouts.layout')

@section('judul')
    Data Barang | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Data Barang.' + type);
        }
    </script>
@endsection

@section('superadmin')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Data Barang</h5>
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
                data-list='{"valueNames":["id","no","unit","kode","tipe","jenis","status","brand"],"page":1000,"pagination":true,"filter":{"key":"tipe"}}'>
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
                            <option value="Bulldozer">Bulldozer</option>
                            <option value="Dump Truck">Dump Truck</option>
                            <option value="Pick Up">Pick Up</option>
                            <option value="Truck Loader">Truck Loader</option>
                            <option value="Truck Tangki">Truck Tangki</option>
                            <option value="Peralatan Las">Peralatan Las</option>
                            <option value="Kompresor">Kompresor</option>
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
                                    <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                        data-sort="barang">
                                        Nama Barang
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="kode">
                                        Kode Barang
                                    </th>
                                    <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                        data-sort="kat">
                                        Kategori
                                    </th>
                                    <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                        data-sort="jenis">
                                        Jenis
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="tipe">
                                        Jumlah
                                    </th>
                                    <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                        data-sort="jenis">
                                        Satuan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($bar as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-1000 text-center white-space-nowrap no">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap barang">
                                            @if ($res->barang)
                                                {{ $res->barang }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap kode">
                                            @if ($res->kode)
                                                {{ $res->kode }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap kat">
                                            @if ($res->kategori)
                                                {{ $res->kategori }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap jenis">
                                            @if ($res->jenis)
                                                {{ $res->jenis }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap">
                                            @if ($res->jumlah)
                                                {{ $res->jumlah }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap sat">
                                            @if ($res->satuan)
                                                {{ $res->satuan }}
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
