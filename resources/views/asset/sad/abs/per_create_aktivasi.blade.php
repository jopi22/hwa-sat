@extends('layouts.layout')

@section('judul')
    Absensi Data - {{ $per->periode }} | HWA-HRIS
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
    {{-- // Header // --}}
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('per.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-arrow-left text-primary"></i></button></a>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('per.ca', Crypt::encryptString($per->id)) }}"><button
                        class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-danger">Absensi Data</span>
            </div>
        </div>
        @include('comp.button.kar_btn')
    </div>

    @include('comp.alert')

    <div class="card">
        <div class="card-body">
            {{-- Jumlah Kehadiran :<span> {{ $hari }}</span><br> --}}
            Jumlah Gaji Pokok :<span> {{ $g_pokok }}</span><br>
            Total Estimasi Gaji Pokok :<span> {{ $gaji }}</span><br>
        </div>
    </div>
    <br>
    <div class="card mb-2">
        <div class="card-body mt-3 pt-0 position-relative">
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-800">ID</th>
                    <th class="text-800">Status Kalender</th>
                    @if ($per->ket == 0)
                        <th class="text-800">Aksi</th>
                    @else
                    @endif
                    <th class="text-800">Periode (Bulan-Tahun)</th>
                    <th class="text-800">Jumlah Hari</th>
                </tr>
                <tr>
                    <th class="text-black fw-medium">{{ $per->id }}</th>
                    <th class="text-black fw-medium">
                        @if ($per->ket == 0)
                            Belum Aktif
                        @else
                            Aktif
                        @endif
                    </th>
                    @if ($per->ket == 0)
                        <th class="text-black fw-medium">
                            @if ($per->total == 28)
                                <form action="{{ route('per.a') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                    <input type="hidden" name="id" value="{{ $per->id }}">
                                    <input type="hidden" name="periode" value="{{ $per->periode }}">
                                    <input type="hidden" name="total" value="{{ $per->total }}">
                                    <input type="hidden" name="status_" value="{{ $per->status }}">
                                    <input type="hidden" name="ket" value="1">
                                    <input type="hidden" name="created_at" value="{{ $per->created_at }}">
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="01-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="02-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="03-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="04-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="05-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="06-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="07-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="08-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="09-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="10-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="11-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="12-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="13-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="14-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="15-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="16-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="17-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="18-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="19-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="20-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="21-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="22-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="23-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="24-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="25-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="26-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="27-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach
                                    @foreach ($kar as $res)
                                        <input type="hidden" value="28-{{ $per->periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                    @endforeach

                                    <button class="btn btn-success btn-sm" type="submit"> <i
                                            class="fas fa-check-circle"></i>
                                        Aktivasi</button>
                                </form>
                            @else
                                @if ($per->total == 29)
                                    <form action="{{ route('per.a') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                        <input type="hidden" name="id" value="{{ $per->id }}">
                                        <input type="hidden" name="periode" value="{{ $per->periode }}">
                                        <input type="hidden" name="total" value="{{ $per->total }}">
                                        <input type="hidden" name="status_" value="{{ $per->status }}">
                                        <input type="hidden" name="ket" value="1">
                                        <input type="hidden" name="created_at" value="{{ $per->created_at }}">
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="01-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="02-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="03-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="04-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="05-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="06-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="07-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="08-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="09-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="10-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="11-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="12-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="13-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="14-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="15-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="16-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="17-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="18-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="19-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="20-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="21-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="22-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="23-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="24-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="25-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="26-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="27-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="28-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="29-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                        @endforeach

                                        <button class="btn btn-success btn-sm" type="submit"> <i
                                                class="fas fa-check-circle"></i>
                                            Aktivasi</button>
                                    </form>
                                @else
                                    @if ($per->total == 30)
                                        <form action="{{ route('per.a') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                            <input type="hidden" name="id" value="{{ $per->id }}">
                                            <input type="hidden" name="periode" value="{{ $per->periode }}">
                                            <input type="hidden" name="total" value="{{ $per->total }}">
                                            <input type="hidden" name="status_" value="{{ $per->status }}">
                                            <input type="hidden" name="ket" value="1">
                                            <input type="hidden" name="created_at" value="{{ $per->created_at }}">
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="01-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="02-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="03-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="04-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="05-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="06-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="07-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="08-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="09-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="10-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="11-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="12-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="13-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="14-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="15-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="16-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="17-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="18-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="19-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="20-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="21-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="22-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="23-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="24-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="25-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="26-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="27-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="28-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="29-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="30-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}"
                                                    name="periode_id[]">
                                            @endforeach

                                            <button class="btn btn-success btn-sm" type="submit"> <i
                                                    class="fas fa-check-circle"></i>
                                                Aktivasi</button>
                                        </form>
                                    @else
                                        @if ($per->total == 31)
                                            <form action="{{ route('per.a') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                                <input type="hidden" name="id" value="{{ $per->id }}">
                                                <input type="hidden" name="periode" value="{{ $per->periode }}">
                                                <input type="hidden" name="total" value="{{ $per->total }}">
                                                <input type="hidden" name="status_" value="{{ $per->status }}">
                                                <input type="hidden" name="ket" value="1">
                                                <input type="hidden" name="created_at"
                                                    value="{{ $per->created_at }}">
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="01-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="02-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="03-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="04-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="05-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="06-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="07-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="08-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="09-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="10-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="11-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="12-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="13-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="14-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="15-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="16-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="17-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="18-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="19-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="20-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="21-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="22-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="23-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="24-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="25-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="26-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="27-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="28-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="29-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="30-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="31-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                @endforeach

                                                <button class="btn btn-success btn-sm" type="submit"> <i
                                                        class="fas fa-check-circle"></i>
                                                    Aktivasi</button>
                                            </form>
                                        @else
                                            Kososng
                                        @endif
                                    @endif
                                @endif
                            @endif
                        </th>
                    @else
                    @endif
                    <th class="text-black fw-medium">{{ $per->created_at->format('F Y') }}</th>
                    <th class="text-black fw-medium">{{ $per->total }} Hari</th>
                </tr>
            </table>
        </div>
    </div>


    @foreach ($abs as $item)
        @if ($item->periode_id)
            <div class="card mb-3">
                <div class="card-header bg-light">
                    <div class="row flex-between-center">
                        <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                            <h5 class="mb-0 text-black" data-anchor="data-anchor"><i class="far fa-calendar-alt"></i>
                                Kalender {{ $per->created_at->format('F Y') }}</h5>
                        </div>
                        <div class="col-6 col-sm-auto ms-auto text-end ps-0">
                            {{-- // --}}
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0">
                    <table class="table mb-0 data-table fs--1"
                        data-options='{"paging":false,"scrollY":"1000px","searching":false,"scrollCollapse":true,"fixedColumns":{"left":2},"scrollX":true}'>
                        <thead class="bg-200 text-900">
                            <tr>
                                <th style="width: 80px" class="sort pe-1 align-middle white-space-nowrap">ID</th>
                                <th style="width: 100px" class="sort pe-1 align-middle  white-space-nowrap">Karyawan
                                </th>
                                @if ($per->total == 28)
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">1</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">2</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">3</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">4</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">5</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">6</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">7</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">8</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">9</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">10
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">11
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">12
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">13
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">14
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">15
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">16
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">17
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">18
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">19
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">10
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">21
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">22
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">23
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">24
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">25
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">26
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">27
                                    </td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">28
                                    </td>
                                @else
                                    @if ($per->total == 29)
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">1
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">2
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">3
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">4
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">5
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">6
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">7
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">8
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">9
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">10
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">11
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">12
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">13
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">14
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">15
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">16
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">17
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">18
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">19
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">20
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">21
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">22
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">23
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">24
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">25
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">26
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">27
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">28
                                        </td>
                                        <td class="align-middle white-space-nowrap fw-semi-bold text-center text-black">29
                                        </td>
                                    @else
                                        @if ($per->total == 30)
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                1</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                2</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                3</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                4</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                5</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                6</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                7</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                8</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                9</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                10</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                11</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                12</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                13</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                14</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                15</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                16</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                17</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                18</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                19</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                20</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                21</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                22</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                23</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                24</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                25</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                26</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                27</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                28</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                29</td>
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                30</td>
                                        @else
                                            @if ($per->total == 31)
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    1
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    2
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    3
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    4
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    5
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    6
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    7
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    8
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    9
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    10
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    11
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    12
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    13
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    14
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    15
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    16
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    17
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    18
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    19
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    20
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    21
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    22
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    23
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    24
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    25
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    26
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    27
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    28
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    29
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    30
                                                </td>
                                                <td
                                                    class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                    31
                                                </td>
                                            @else
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kar as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-black">
                                        {{ $res->id }}</td>
                                    <td class="align-middle white-space-nowrap fw-semi-bold text-black">
                                        {{ $res->name }}</td>



                                    @foreach ($res->absensi_ as $item)
                                        @if ($item->periode_id == $per->id)
                                            <td
                                                class="align-middle white-space-nowrap fw-semi-bold text-center text-black">
                                                @if ($item->status == 8)
                                                    <span class="badge bg-light text-500">-</span>
                                                @else
                                                    @if ($item->status == 7)
                                                        <span class="badge bg-danger">A</span>
                                                    @else
                                                        @if ($item->status == 6)
                                                            <span class="badge bg-warning">C</span>
                                                        @else
                                                            @if ($item->status == 5)
                                                                <span class="badge bg-info">I</span>
                                                            @else
                                                                @if ($item->status == 4)
                                                                    <span class="badge bg-info">?</span>
                                                                @else
                                                                    @if ($item->status == 3)
                                                                        <span class="badge bg-secondary">S</span>
                                                                    @else
                                                                        @if ($item->status == 2)
                                                                            <span class="badge bg-secondary">?</span>
                                                                        @else
                                                                            @if ($item->status == 1)
                                                                                <span class="badge bg-success">H</span>
                                                                            @else
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
                                            </td>
                                        @endif
                                    @endforeach

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    @endforeach

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-auto"><span class="badge bg-success">H</span><span class="text-1000 fs--1">
                        Hadir</span></div>
                <div class="col-auto"><span class="badge bg-danger">A</span><span class="text-1000 fs--1">
                        Alpha</span></div>
                <div class="col-auto"> <span class="badge bg-warning">C</span><span class="text-1000 fs--1">
                        Cuti</span></div>
                <div class="col-auto"> <span class="badge bg-info">I</span><span class="text-1000 fs--1"> Izin
                        Disertai Keterangan</span></div>
                <div class="col-auto"> <span class="badge bg-info">?</span><span class="text-1000 fs--1"> Izin Tanpa
                        Keterangan</span></div>
                <div class="col-auto"> <span class="badge bg-secondary">S</span><span class="text-1000 fs--1"> Sakit
                        Disertai Keterangan</span></div>
                <div class="col-auto"> <span class="badge bg-secondary">?</span><span class="text-1000 fs--1"> Sakit
                        Tanpa Keterangan</span></div>
            </div>
        </div>
    </div>

@endsection
