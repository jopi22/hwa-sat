@extends('layouts.layout')

@section('judul')
    Master Generate & Setting | HWA-SAT
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('konten')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary">Master Setting <span class="text-info">{{ date('F Y') }}</span></h6>
                <h4 class="mb-0 text-primary fw-bold">Generate & Setting Master Data<span
                        class="text-info fw-medium"></span></h4>
            </div>
        </div>
    </div>

    {{-- <div class="card mb-3 bg-100 shadow-none border">
    <div class="row gx-0 flex-between-center">
        <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                width="90" />
            <div>
                <h6 class="text-primary fs--1 mb-0"><i class="fas fa-chess-queen"></i> Master Setting
                </h6>
                <h4 class="text-primary fw-bold mb-0">Generate & Setting Master Data</h4>
            </div>
        </div>
        <div class="col-sm-auto d-flex align-items-center">
            <form class="row align-items-center g-3">
                <div class="col-auto">
                    <h6 class="text-info mb-0">Master Present :</h6>
                </div>
                <div class="col-md-auto">
                    <h6 class="mb-0">{{ date('F Y') }}</h6>
                </div>
            </form>
            <img class="ms-2 d-md-none d-lg-block"
                src="{{ asset('assets/img/illustrations/ticket-bg.png') }}" alt=""
                width="150" />
        </div>
    </div>
</div> --}}

    @include('comp.alert')

    <div class="card">
        {{-- // Setting Master // --}}
        <div class="bg-light d-flex flex-column gap-3 p-x1">
            <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                <div class="row flex-between-center">
                    <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                        <h5
                            class="mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-0 mt-xl-x1 mt-xxl-0 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200">
                            Setting Standarisasi Master</h5>
                        <table class="mt-2">
                            <tr>
                                <th class="text-700 fw-normal fs--1" style="min-width: 180px">Standar Gaji Pokok</th>
                                <th class="text-700 fw-normal fs--1">:</th>
                                <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $pokok }} /Bln</th>
                            </tr>
                            <tr>
                                <th class="text-700 fw-normal fs--1" style="min-width: 180px">Standar Insentif / Jam</th>
                                <th class="text-700 fw-normal fs--1">:</th>
                                <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $insentif }} /Jam</th>
                            </tr>
                            <tr>
                                <th class="text-700 fw-normal fs--1" style="min-width: 180px">Standar Lemburan / Jam</th>
                                <th class="text-700 fw-normal fs--1">:</th>
                                <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $lemburan }} /Jam</th>
                            </tr>
                            <tr>
                                <th class="text-700 fw-normal fs--1" style="min-width: 180px">Total Hari</th>
                                <th class="text-700 fw-normal fs--1">:</th>
                                <th class="text-1000 fw-normal fs--1">&nbsp;{{ $per->total }} Hari</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto d-flex flex-between-center">
                        <div class="dropdown font-sans-serif">
                            <button class="btn btn-falcon-warning btn-sm" data-bs-toggle="modal" data-bs-target="#anjing"><i
                                    class="fas fa-cogs"></i> Setting</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- // Generate Kalender Absensi // --}}
        <div class="bg-light d-flex flex-column gap-3 p-x1">
            <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                <div class="row flex-between-center">
                    <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                        <h5
                            class="mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-0 mt-xl-x1 mt-xxl-0 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200">
                            Kalender Absensi</h5>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto d-flex flex-between-center">
                        <div class="dropdown font-sans-serif">
                            @if ($per->ket == 0)
                                @if ($per->total == 28)
                                    <form action="{{ route('kal.gen') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                        <input type="hidden" name="id" value="{{ $per->id }}">
                                        <input type="hidden" name="periode" value="{{ $per->periode }}">
                                        <input type="hidden" name="total" value="{{ $per->total }}">
                                        <input type="hidden" name="status_" value="{{ $per->status }}">
                                        <input type="hidden" name="ket" value="1">
                                        <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                        <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
                                        <input type="hidden" name="pokok" value="{{ $per->pokok }}">
                                        <input type="hidden" name="insentif" value="{{ $per->insentif }}">
                                        <input type="hidden" name="lemburan" value="{{ $per->lemburan }}">
                                        <input type="hidden" name="created_at" value="{{ $per->created_at }}">
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="01-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="02-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="03-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="04-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="05-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="06-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="07-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="08-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="09-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="10-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="11-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="12-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="13-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="14-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="15-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="16-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="17-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="18-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="19-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="20-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="21-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="22-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="23-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="24-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="25-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="26-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="27-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach
                                        @foreach ($kar as $res)
                                            <input type="hidden" value="28-{{ $per->periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                name="kode_unik[]">
                                        @endforeach

                                        <button class="btn btn-success btn-sm" type="submit"> <i
                                                class="fas fa-check-circle"></i>
                                            Generate</button>
                                    </form>
                                @else
                                    @if ($per->total == 29)
                                        <form action="{{ route('kal.gen') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                            <input type="hidden" name="id" value="{{ $per->id }}">
                                            <input type="hidden" name="periode" value="{{ $per->periode }}">
                                            <input type="hidden" name="total" value="{{ $per->total }}">
                                            <input type="hidden" name="status_" value="{{ $per->status }}">
                                            <input type="hidden" name="ket" value="1">
                                            <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                            <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
                                            <input type="hidden" name="created_at" value="{{ $per->created_at }}">
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="01-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="02-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="03-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="04-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="05-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="06-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="07-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="08-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="09-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="10-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="11-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="12-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="13-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="14-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="15-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="16-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="17-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="18-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="19-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="20-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="21-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="22-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="23-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="24-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="25-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="26-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="27-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="28-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach
                                            @foreach ($kar as $res)
                                                <input type="hidden" value="29-{{ $per->periode }}" name="tgl[]">
                                                <input type="hidden" value="{{ $res->id }}" name="karyawan[]">
                                                <input type="hidden" value="8" name="status[]">
                                                <input type="hidden" value="{{ $per->id }}" name="periode_id[]">
                                                <input type="hidden" value="{{ $per->id }}{{ $res->id }}"
                                                    name="kode_unik[]">
                                            @endforeach

                                            <button class="btn btn-success btn-sm" type="submit"> <i
                                                    class="fas fa-check-circle"></i>
                                                Generate</button>
                                        </form>
                                    @else
                                        @if ($per->total == 30)
                                            <form action="{{ route('kal.gen') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                                <input type="hidden" name="id" value="{{ $per->id }}">
                                                <input type="hidden" name="periode" value="{{ $per->periode }}">
                                                <input type="hidden" name="total" value="{{ $per->total }}">
                                                <input type="hidden" name="status_" value="{{ $per->status }}">
                                                <input type="hidden" name="ket" value="1">
                                                <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                                <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
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
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="02-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="03-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="04-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="05-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="06-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="07-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="08-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="09-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="10-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="11-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="12-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="13-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="14-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="15-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="16-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="17-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="18-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="19-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="20-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="21-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="22-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="23-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="24-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="25-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="26-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="27-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="28-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="29-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach
                                                @foreach ($kar as $res)
                                                    <input type="hidden" value="30-{{ $per->periode }}"
                                                        name="tgl[]">
                                                    <input type="hidden" value="{{ $res->id }}"
                                                        name="karyawan[]">
                                                    <input type="hidden" value="8" name="status[]">
                                                    <input type="hidden" value="{{ $per->id }}"
                                                        name="periode_id[]">
                                                    <input type="hidden"
                                                        value="{{ $per->id }}{{ $res->id }}"
                                                        name="kode_unik[]">
                                                @endforeach

                                                <button class="btn btn-success btn-sm" type="submit"> <i
                                                        class="fas fa-check-circle"></i>
                                                    Generate</button>
                                            </form>
                                        @else
                                            @if ($per->total == 31)
                                                <form action="{{ route('kal.gen') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="delete_id"
                                                        value="{{ $per->id }}">
                                                    <input type="hidden" name="id"
                                                        value="{{ $per->id }}">
                                                    <input type="hidden" name="periode"
                                                        value="{{ $per->periode }}">
                                                    <input type="hidden" name="total"
                                                        value="{{ $per->total }}">
                                                    <input type="hidden" name="status_"
                                                        value="{{ $per->status }}">
                                                    <input type="hidden" name="ket" value="1">
                                                    <input type="hidden" name="ket1"
                                                        value="{{ $per->ket1 }}">
                                                    <input type="hidden" name="ket2"
                                                        value="{{ $per->ket2 }}">
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
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="02-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="03-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="04-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="05-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="06-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="07-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="08-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="09-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="10-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="11-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="12-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="13-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="14-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="15-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="16-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="17-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="18-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="19-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="20-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="21-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="22-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="23-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="24-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="25-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="26-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="27-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="28-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="29-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="30-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach
                                                    @foreach ($kar as $res)
                                                        <input type="hidden" value="31-{{ $per->periode }}"
                                                            name="tgl[]">
                                                        <input type="hidden" value="{{ $res->id }}"
                                                            name="karyawan[]">
                                                        <input type="hidden" value="8" name="status[]">
                                                        <input type="hidden" value="{{ $per->id }}"
                                                            name="periode_id[]">
                                                        <input type="hidden"
                                                            value="{{ $per->id }}{{ $res->id }}"
                                                            name="kode_unik[]">
                                                    @endforeach

                                                    <button class="btn btn-success btn-sm" type="submit"> <i
                                                            class="fas fa-check-circle"></i>
                                                        Generate</button>
                                                </form>
                                            @else
                                                Kosong
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            @else
                                Sudah Digenerate
                            @endif

                        </div>
                    </div>
                </div>
                <h6 class="mb-0 mt-2"><span class="fas fa-info-circle text-secondary me-2"></span><span
                        class="text-600">Fungsi ini akan membuat kalender absensi, data digenerate dari karyawan yang
                        berstatus aktif.</span></h6>
            </div>
        </div>

        {{-- // Generate Karyawan // --}}
        <div class="bg-light d-flex flex-column gap-3 p-x1">
            <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                <div class="row flex-between-center">
                    <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                        <h5
                            class="mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-0 mt-xl-x1 mt-xxl-0 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200">
                            Karyawan</h5>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto d-flex flex-between-center">
                        <div class="dropdown font-sans-serif">
                            @if ($per->ket1 == 0)
                                <form action="{{ route('kar.gen') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                    <input type="hidden" name="id" value="{{ $per->id }}">
                                    <input type="hidden" name="periode" value="{{ $per->periode }}">
                                    <input type="hidden" name="total" value="{{ $per->total }}">
                                    <input type="hidden" name="status_" value="{{ $per->status }}">
                                    <input type="hidden" name="ket" value="{{ $per->ket }}">
                                    <input type="hidden" name="ket1" value="1">
                                    <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
                                    <input type="hidden" name="pokok" value="{{ $per->pokok }}">
                                    <input type="hidden" name="insentif" value="{{ $per->insentif }}">
                                    <input type="hidden" name="lemburan" value="{{ $per->lemburan }}">
                                    <input type="hidden" name="created_at" value="{{ $per->created_at }}">

                                    @foreach ($kar as $item)
                                        <input type="hidden" name="kode_unik[]"
                                            value="{{ $per->id }}{{ $item->id }}">
                                        <input type="hidden" name="master_id[]" value="{{ $per->id }}">
                                        <input type="hidden" name="kar_id[]" value="{{ $item->id }}">
                                        <input type="hidden" name="tipe_gaji[]" value="{{ $item->tipe_gaji }}">
                                    @endforeach

                                    <button class="btn btn-success btn-sm" type="submit"> <i
                                            class="fas fa-check-circle"></i>
                                        Generate</button>
                                </form>
                            @else
                                Sudah Digenerate
                            @endif

                        </div>
                    </div>
                </div>
                <h6 class="mb-0 mt-2"><span class="fas fa-info-circle text-secondary me-2"></span><span
                        class="text-600">Fungsi ini akan membuat data master gaji pokok, insentif & lemburan, data
                        digenerate dari karyawan yang berstatus aktif.</span></h6>
            </div>
        </div>

        {{-- // Generate Equipment // --}}
        <div class="bg-light d-flex flex-column gap-3 p-x1">
            <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                <div class="row flex-between-center">
                    <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                        <h5
                            class="mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-0 mt-xl-x1 mt-xxl-0 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200">
                            Equipment</h5>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto d-flex flex-between-center">
                        <div class="dropdown font-sans-serif">
                            @if ($per->ket2 == 0)
                                <form action="{{ route('equip.gen') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="delete_id" value="{{ $per->id }}">
                                    <input type="hidden" name="id" value="{{ $per->id }}">
                                    <input type="hidden" name="periode" value="{{ $per->periode }}">
                                    <input type="hidden" name="total" value="{{ $per->total }}">
                                    <input type="hidden" name="status_" value="{{ $per->status }}">
                                    <input type="hidden" name="ket" value="{{ $per->ket }}">
                                    <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                    <input type="hidden" name="ket2" value="1">
                                    <input type="hidden" name="pokok" value="{{ $per->pokok }}">
                                    <input type="hidden" name="insentif" value="{{ $per->insentif }}">
                                    <input type="hidden" name="lemburan" value="{{ $per->lemburan }}">
                                    <input type="hidden" name="created_at" value="{{ $per->created_at }}">

                                    @foreach ($equip as $item)
                                        <input type="hidden" name="kode_unik[]"
                                            value="{{ $per->id }}{{ $item->id }}">
                                        <input type="hidden" name="master_id[]" value="{{ $per->id }}">
                                        <input type="hidden" name="equip_id[]" value="{{ $item->id }}">
                                    @endforeach

                                    <button class="btn btn-success btn-sm" type="submit"> <i
                                            class="fas fa-check-circle"></i>
                                        Generate</button>
                                </form>
                            @else
                                Sudah Digenerate
                            @endif

                        </div>
                    </div>
                </div>
                <h6 class="mb-0 mt-2"><span class="fas fa-info-circle text-secondary me-2"></span><span
                        class="text-600">Fungsi ini akan membuatkan data master performa Hours Meter, data digenerate dari
                        equipment yang
                        berstatus aktif.</span></h6>
            </div>
        </div>

        {{-- // Generate Catering // --}}
        <div class="bg-light d-flex flex-column gap-3 p-x1">
            <div class="bg-white dark__bg-1100 p-x1 rounded-3 shadow-sm">
                <div class="row flex-between-center">
                    <div class="col-12 col-md-7 col-xl-12 col-xxl-8 order-1 order-md-0 order-xl-1 order-xxl-0">
                        <h5
                            class="mb-0 border-top border-md-0 border-xl-top border-xxl-0 mt-x1 mt-md-0 mt-xl-x1 mt-xxl-0 pt-x1 pt-md-0 pt-xl-x1 pt-xxl-0 border-200 border-xl-200">
                            Catering</h5>
                    </div>
                    <div class="col-12 col-md-auto col-xl-12 col-xxl-auto d-flex flex-between-center">
                        <div class="dropdown font-sans-serif">
                            @if ($cek_cat == 0)
                                <form action="{{ route('cat.gen') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="master_id" value="{{ $per->id }}">
                                    <button class="btn btn-success btn-sm" type="submit"> <i
                                            class="fas fa-check-circle"></i>
                                        Generate</button>
                                </form>
                            @else
                                Sudah Digenerate
                            @endif
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 mt-2"><span class="fas fa-info-circle text-secondary me-2"></span><span
                        class="text-600">Fungsi ini akan membuat data master catering.</span></h6>
            </div>
        </div>
    </div>

    <!-- ===============================================-->
    <!--     Modal Setting-->
    <!-- ===============================================-->
    <div class="modal fade" id="anjing" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <form action="{{ route('mas.u') }}" method="post">
                @csrf
                <input type="hidden" name="id_m" value="{{ $per->id }}">
                <input type="hidden" name="delete_m" value="{{ $per->id }}">
                <input type="hidden" name="total_m" value="{{ $per->total }}">
                <input type="hidden" name="periode_m" value="{{ $per->periode }}">
                <input type="hidden" name="status_m" value="{{ $per->status }}">
                <input type="hidden" name="ket_m" value="{{ $per->ket }}">
                <input type="hidden" name="ket1_m" value="{{ $per->ket1 }}">
                <input type="hidden" name="ket2_m" value="{{ $per->ket2 }}">
                <input type="hidden" name="created_at_m" value="{{ $per->created_at }}">
                <input type="hidden" name="updated_at_m" value="{{ date('Y-m-d') }}">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-warning">
                        <div class="position-relative z-index-1 light">
                            <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-cogs"></i>
                                Setting Master
                            </h5>
                        </div><button type="button"
                            class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <label>Standar Gaji Pokok /Bln (Rp)</label>
                        <input required max="100000000" type="number" class="form-control form-control-sm"
                            name="pokok" value="{{ $per->pokok }}">
                        <hr>
                        <label>Standar Insentif /Jam (Rp)</label>
                        <input required max="100000000" type="number" class="form-control form-control-sm"
                            name="insentif" value="{{ $per->insentif }}">
                        <hr>
                        <label>Standar Lemburan /Jam (Rp)</label>
                        <input required max="100000000" type="number" class="form-control form-control-sm"
                            name="lemburan" value="{{ $per->lemburan }}">
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class="btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <button type="submit" class="btn btn-warning ms-2"><i class="fas fa-check-circle"></i>
                            Konfirmasi
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
