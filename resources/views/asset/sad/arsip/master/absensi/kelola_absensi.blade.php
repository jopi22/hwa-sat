@extends('layouts.layout')

@section('judul')
    Absensi | Arsip | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
@endsection

@section('link')
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
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
            XLSX.writeFile(excelFile, 'HWA_Absensi.' + type);
        }
    </script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-archive"></i>
                Arsip</span>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn btn-falcon-default btn-sm" href="{{ route('amast.g') }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Halaman Menu Arsip">
                <span class="fas fa-list"></span>
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn fw-semi-bold btn-falcon-success btn-sm" href="{{ route('master.gdp', $master->id) }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Master {{ $master->created_at->format('F Y') }}">
                {{ $master->created_at->format('F Y') }}
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <span class=" fw-semi-bold text-primary"> Data Absensi</span>
        </div>
    </div>
</div>

    @include('comp.alert')

    {{-- // Konten // --}}
    <div class="card mb-3">
        <div class="card-header bg-light">
            {{-- // --}}
        </div>
        <div class="card-body mt-3 pt-0">
            <div id="tableExample3" data-list='{"valueNames":["name","id"]}'>
                <div class="row justify-content-center g-0">
                    <div class="col-auto col-sm-3 mb-3">
                        <form action="{{ route('a.abs.f') }}" class="form-inline" method="GET">
                            <div class="input-group">
                                <input class="form-control datetimepicker form-control-sm shadow-none" name="search"
                                    id="start-date" type="text" placeholder="Cari Tanggal"
                                    data-options='{"dateFormat":"d-m-Y","disableMobile":true}' />
                                <button type="submit" class="input-group-text bg-200"><i
                                        class="fa fa-search fs--1 text-success"></i></button>
                            </div>
                        </form>
                    </div> &nbsp;
                    <div class="col-auto col-sm-3 mb-3">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Cari Nama & Id Karyawan" aria-label="search" />
                            </div>
                        </form>
                    </div>&nbsp;
                    <div class="col-auto col-sm-3 mb-3">
                        <button class="btn btn-sm btn-falcon-success" id="button" onclick="htmlTableToExcel('xlsx')"><i
                                class="fas fa-file-excel"></i> Excel</button>
                    </div>
                </div>
                <div class="table-responsive scrollbar">
                    <table id="tblToExcl" class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th style="min-width: 250px">ID Absensi</th>
                                <th style="min-width: 250px">Tgl Absensi</th>
                                <th style="min-width: 250px" class="sort" data-sort="name">Nama</th>
                                <th style="min-width: 250px" class="sort" data-sort="id">ID Karyawan</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($abs as $res)
                                <input type="hidden" name="delete_id[]" value="{{ $res->id }}">
                                <input type="hidden" name="id[]" value="{{ $res->id }}">
                                <input type="hidden" name="tgl[]" value="{{ $res->tgl }}">
                                <input type="hidden" name="karyawan[]" value="{{ $res->karyawan }}">
                                <input type="hidden" name="periode_id[]" value="{{ $res->periode_id }}">
                                <input type="hidden" name="pengajuan_fk[]" value="{{ $res->pengajuan_fk }}">
                                <input type="hidden" name="kode_unik[]" value="{{ $res->kode_unik }}">
                                <tr>
                                    <td class="align-middle text-1000 fw-semi-bold">{{ $res->id }}
                                    </td>
                                    <td class="align-middle text-1000 fw-semi-bold">{{ $res->tgl }}
                                    </td>
                                    <td class="name text-1000 fw-semi-bold align-middle">
                                        {{ $res->karyawan_->name }}
                                    </td>
                                    <td class="id text-1000 fw-semi-bold align-middle">
                                        K{{ $res->karyawan_->tgl_gabung->format('ym') }}{{ $res->karyawan_->id }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer bg-light">
            {{-- // --}}
        </div>
    </div>
@endsection
