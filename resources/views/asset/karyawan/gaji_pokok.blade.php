@extends('layouts.layout_horizontal')

@section('judul')
    Gaji Pokok | HWA &bull; SAT
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
@endsection


@section('konten')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url({{asset('assets/img/icons/spot-illustrations/corner-4.png')}});opacity: 0.7;"></div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <h5>Penghasilan Gaji Pokok</h5>
            {{-- <p class="fs--1">April 21, 2019, 5:33 PM</p> --}}
            <div><strong class="me-2">Periode: <span
                        class="text-info">{{ $master->created_at->format('F Y') }}</span></strong>
            </div>
        </div>
    </div>

    <div class="card overflow-hidden mb-3 mt-3">
        <div class="card-header bg-primary py-2">
            <h5 class="text-white">Gaji Pokok</h5>
        </div>
        <div class="card-body p-0">
            <div class="row mx-0">
                <div class="col-md-5 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                    <h6 class="fs--1 mb-3 text-700">Rekap Data Absensi</h6>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit (TK)</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_stk }} Hari</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Cuti</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_c }} Hari</p>
                        </div>
                    </div>
                    <div class="row mt-2 border-bottom border-dashed">
                        <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Alpha</p>
                        </div>
                        <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_a }} Hari</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hadir</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_h }} Hari</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Sakit</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $abs_s }} Hari</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                            <hr class="bg-success ps-8">
                            <hr class="bg-success ps-5">
                            <p class="mb-0 ps-3 fw-semi-bold text-success">+</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-3 fs--1 fw-semi-bold text-success text-nowrap">Total Hari Valid</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">:</p>
                            <p class="mb-3 fs--1 ps-3 fw-semi-bold text-success">{{ $hari_valid }} Hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto p-x1">
                    <h6 class="fs--1 mb-3 text-700">Perhitungan Gaji Pokok</h6>
                    <div class="row mt-3">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji Bulanan</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_bulanan }}</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Master</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $master->total }} Hari</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                            <hr class=" bg-success ps-10">
                            <hr class=" bg-success ps-10">
                            <p class="mb-0 ps-3 fw-semi-bold text-success">/</p>
                        </div>
                    </div>
                    <div class="row border-bottom border-dashed">
                        <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-success text-nowrap">Standar Gaji Harian
                            </p>
                        </div>
                        <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-success">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-success">Rp {{ $str_harian }}</p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Gaji Harian</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_harian }}</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Total Hari Valid</p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $hari_valid }} Hari</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                            <hr class="bg-success ps-10">
                            <hr class="bg-success ps-10">
                            <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                            <p class="mb-0 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan Gaji Pokok
                            </p>
                        </div>
                        <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                            <p class="mb-0 fs--1 ps-8 fw-semi-bold text-primary">:</p>
                            <p class="mb-0 fs--1 ps-3 fw-semi-bold text-primary"
                            data-countup='{"endValue":{{ $gaji_pokok_raw }},"prefix":"Rp&nbsp;"}'>0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer bg-light">
            <!-- // -->
        </div>
    </div>


@endsection
