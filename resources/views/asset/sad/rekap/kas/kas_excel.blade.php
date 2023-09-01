@extends('layouts.layout')

@section('judul')
    Rekap Kas | HWA &bull; SAT
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
            XLSX.writeFile(excelFile, 'Rekap Kas.' + type);
        }
    </script>
@endsection

@section('konten')
    <div class="card mb-3 mt-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="text-primary mb-2 mb-md-0"><i class="fas fa-print"></i> Rekap Kas <span
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
        <div class="header py-2">
            {{-- // --}}
        </div>
        <div class="card-body p-0">
            <div class="tab-content">
                <div id="tableExample4"
                    data-list='{"valueNames":["id","no","tgl","unit","rem","tipe","des"],"filter":{"key":"tipe"}}'>
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
                                <option selected="" value="">Filter: Tipe Kas</option>
                                <option value="Debit">Debit</option>
                                <option value="Kredit">Kredit</option>
                                <option value="Kredit Pusat">Kredit Pusat</option>
                            </select>
                        </div>&nbsp;
                    </div>
                    @if ($cek == 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
                        <div class="table-responsive scrollbar">
                            <table id="tblToExcl" class="table table-sm table-bordered mb-0 fs--1"
                                data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                <thead>
                                    <tr>
                                        <th>Rekap Kas Perusahaan</th>
                                        <th>{{ $master->created_at->format('F Y') }}</th>
                                    </tr>
                                    <tr>
                                        <th>Total Kredit Pusat (Rp)</th>
                                        <th>
                                            <p
                                                data-countup='{"duration":0,"endValue":
                                            {{ $kredit_p }}}'>
                                                0
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Total Debit (Rp)</th>
                                        <th>
                                            <p
                                                data-countup='{"duration":0,"endValue":
                                        {{ $debit }}}'>
                                                0
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Total Kredit (Rp)</th>
                                        <th>
                                            <p
                                                data-countup='{"duration":0,"endValue":
                                        {{ $kredit }}}'>
                                                0
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Total Saldo (Rp)</th>
                                        <th>
                                            <p
                                                data-countup='{"duration":0,"endValue":
                                        {{ $saldo }}}'>
                                                0
                                            </p>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th data-sort="tgl">
                                            Tanggal
                                        </th>
                                        <th data-sort="tipe">
                                            Tipe
                                        </th>
                                        <th>
                                            Jumlah (Rp)
                                        </th>
                                        <th data-sort="unit">
                                            Rincian
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($kas as $res)
                                        <tr>
                                            <td class="id">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="tgl">
                                                @if ($res->tgl)
                                                    {{ $res->tgl }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="tipe">
                                                @if ($res->tipe)
                                                    {{ $res->tipe }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td>
                                                @if ($res->jumlah)
                                                    <p data-countup='{"duration":0,"endValue":{{ $res->jumlah }}}'>0
                                                    </p>
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="unit">
                                                @if ($res->rincian)
                                                    {{ $res->rincian }}
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
            {{-- // --}}
        </div>
    </div>
@endsection
