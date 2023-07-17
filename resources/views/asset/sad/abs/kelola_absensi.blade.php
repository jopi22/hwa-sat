@extends('layouts.layout')

@section('judul')
    Kelola Absensi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
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
            XLSX.writeFile(excelFile, 'HWA_Excel.' + type);
        }
    </script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
    @if ($cek->periode == $periode)
        @if ($cek->ket == 1)
        <div class="card mb-3 bg-100 shadow-none border">
            <div class="row gx-0 flex-between-center">
                <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                        src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                    <div>
                        <h6 class="text-primary fs--1 mb-0"><i class="fas fa-users"></i> Human Resource & General Affairs
                        </h6>
                        <h4 class="text-primary fw-bold mb-0">Kelola Absensi</h4>
                    </div>
                </div>
                <div class="col-sm-auto d-flex align-items-center">
                    <form class="row align-items-center g-3">
                        <div class="col-auto">
                            <h6 class="text-info mb-0">Master Present :</h6>
                        </div>
                        <div class="col-md-auto">
                            <h6 class="mb-0">{{ $cek->created_at->format('F Y') }}</h6>
                        </div>
                    </form>
                    <img class="ms-2 d-md-none d-lg-block"
            src="{{ asset('assets/img/illustrations/ticket-bg.png') }}" alt=""
            width="150" />
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
                                <form action="{{ route('abs.f') }}" class="form-inline" method="GET">
                                    <div class="input-group">
                                        <input class="form-control datetimepicker form-control-sm shadow-none"
                                            name="search" id="start-date" type="text" placeholder="Cari Tanggal"
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
                            {{-- <div class="col-auto col-sm-3 mb-3">
                                <button class="btn btn-sm btn-falcon-info" id="button"
                                    onclick="htmlTableToExcel('xlsx')"><i class="fas fa-print"></i> Print</button>
                            </div> --}}
                        </div>
                        <div class="table-responsive scrollbar">
                            @if ($master->status == 0)
                            @else
                                <form action="{{ route('abs.abs') }}" method="post">
                                    @csrf
                                    <table id="tblToExcl" class="table table-bordered table-striped fs--1 mb-0">
                                        <thead class="bg-200 text-900">
                                            <tr>
                                                <th style="min-width: 250px">ID Absensi</th>
                                                <th style="min-width: 250px">Tgl Absensi</th>
                                                <th style="min-width: 250px"
                                                    class="text-center text-white bg-danger text-1000">Aksi
                                                </th>
                                                <th style="min-width: 250px" class="sort" data-sort="name">Nama</th>
                                                <th style="min-width: 250px" class="sort" data-sort="id">NIK</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            @foreach ($abs as $res)
                                                <input type="hidden" name="delete_id[]" value="{{ $res->id }}">
                                                <input type="hidden" name="id[]" value="{{ $res->id }}">
                                                <input type="hidden" name="tgl[]" value="{{ $res->tgl }}">
                                                <input type="hidden" name="karyawan[]" value="{{ $res->karyawan }}">
                                                <input type="hidden" name="periode_id[]" value="{{ $res->periode_id }}">
                                                <input type="hidden" name="pengajuan_fk[]"
                                                    value="{{ $res->pengajuan_fk }}">
                                                <input type="hidden" name="kode_unik[]" value="{{ $res->kode_unik }}">
                                                <tr>
                                                    <td class="align-middle text-1000 fw-semi-bold">{{ $res->id }}
                                                    </td>
                                                    <td class="align-middle text-1000 fw-semi-bold">{{ $res->tgl }}
                                                    </td>
                                                    <td class="align-middle text-1000 fw-semi-bold text-center">
                                                        <select name="status[]" class="form-control form-control-sm">
                                                            <option value="{{ $res->status }}">
                                                                {{ $res->status_absensi_->status }}</option>
                                                            <option value="1">Hadir</option>
                                                            <option value="7">Alpha / AFK</option>
                                                            <option value="2">Sakit</option>
                                                            <option value="4">Izin</option>
                                                        </select>
                                                    </td>
                                                    <td class="name text-1000 fw-semi-bold align-middle">
                                                        {{ $res->karyawan_->name }}
                                                    </td>
                                                    <td class="id text-1000 fw-semi-bold align-middle">
                                                        {{ $res->karyawan_->username }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="min-width: 250px">ID Absensi</th>
                                                <th style="min-width: 250px">Tgl Absensi</th>
                                                <th style="min-width: 250px" class="text-center bg-200 text-1000">
                                                    <div class="d-grid gap-2">
                                                        <button class="btn btn-success btn-block" type="submit"><i
                                                                class="fas fa-save me-1"></i>Simpan</button>
                                                    </div>
                                                </th>
                                                <th style="min-width: 250px">Nama</th>
                                                <th style="min-width: 250px">ID Karyawan</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    {{-- // --}}
                </div>
            </div>
        @else
            @include('comp.card.card404_kalender')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
