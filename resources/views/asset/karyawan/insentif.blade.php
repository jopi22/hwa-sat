@extends('layouts.layout_horizontal')

@section('judul')
    Insentif | HWA &bull; SAT
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
@endsection


@section('konten')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});opacity: 0.7;">
        </div>
        <!--/.bg-holder-->
        <div class="card-body position-relative">
            <h5>Penghasilan Intensif</h5>
            {{-- <p class="fs--1">April 21, 2019, 5:33 PM</p> --}}
            <div><strong class="me-2">Periode: <span
                        class="text-info">{{ $master->created_at->format('F Y') }}</span></strong>
            </div>
        </div>
    </div>

    @if (Auth::user()->tipe_gaji == 'AI')
        <div class="card overflow-hidden mb-3 mt-3">
            <div class="card-header bg-primary py-2">
                <h5 class="text-white">Insentif</h5>
            </div>
            <div class="card-body p-0">
                <div class="row mx-0">
                    <div class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                        <h6 class="fs--1 mb-3 text-700">Rekap Data Hours Meter</h6>
                        <div class="row mt-2">
                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hours Meter Reguler
                                </p>
                            </div>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_hm }} Jam</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Hours Meter Manual</p>
                            </div>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_jam }} Jam</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                <hr class=" bg-success ps-10">
                                <hr class=" bg-success ps-10">
                                <p class="mb-0 ps-3 fw-semi-bold text-success">+</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                <p class="mb-0 fs--1 fw-semi-bold text-success text-nowrap">Grand Hours Meter
                                </p>
                            </div>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                <p class="mb-0 fs--1 ps-8 fw-semi-bold text-success">:</p>
                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-success">{{ $grand_tot }} Jam
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-x1">
                        <h6 class="fs--1 mb-3 text-700">Perhitungan Insentif</h6>
                        <div class="row mt-2">
                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Grand Hours Meter</p>
                            </div>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                <p class="mb-0 fs--1 ps-6 fw-semi-bold text-700">:</p>
                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $grand_tot }} Jam</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Insentif / Jam
                                </p>
                            </div>
                            <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                <p class="mb-0 fs--1 ps-6 fw-semi-bold text-700">:</p>
                                <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_ins }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                <hr class="bg-success ps-10">
                                <hr class="bg-success ps-5">
                                <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                            </div>
                        </div>
                        <div class="row row mt-2 border-bottom border-dashed">
                            <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                <p class="mb-3 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan
                                    Insentif</p>
                            </div>
                            <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                <p class="mb-3 fs--1 ps-6 fw-semi-bold text-primary">:</p>
                                <p class="mb-3 fs--1 ps-3 fw-semi-bold text-primary">Rp {{ $insentif }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-light">
                <!-- // -->
            </div>
        </div>
    @else
        @if (Auth::user()->tipe_gaji == 'AL')
            <div class="card overflow-hidden mb-3 mt-3">
                <div class="card-header bg-primary py-2">
                    <h5 class="text-white">Lemburan</h5>
                </div>
                <div class="card-body p-0">
                    <div class="row mx-0">
                        <div class="col-md-6 p-x1 border-md-end border-bottom border-md-bottom-0 border-dashed">
                            <h6 class="fs--1 mb-3 text-700">Rekap Data Over Time</h6>
                            <div class="row mt-2">
                                <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                    <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Over Time Total
                                    </p>
                                </div>
                                <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                    <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                    <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_jam_lemburan }}
                                        Jam</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-x1">
                            <h6 class="fs--1 mb-3 text-700">Perhitungan Lemburan</h6>
                            <div class="row mt-2">
                                <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                    <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Over Time Total
                                    </p>
                                </div>
                                <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                    <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                    <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">{{ $tot_jam_lemburan }}
                                        Jam</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-3 col-sm-2 col-md-3 col-lg-2">
                                    <p class="mb-0 fs--1 fw-semi-bold text-1000 text-nowrap">Standar Lemburan /
                                        Jam</p>
                                </div>
                                <div class="col-9 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                    <p class="mb-0 fs--1 ps-8 fw-semi-bold text-700">:</p>
                                    <p class="mb-0 fs--1 ps-3 fw-semi-bold text-1000">Rp {{ $str_lem }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex align-items-center">
                                    <hr class="bg-success ps-10">
                                    <hr class="bg-success ps-10">
                                    <p class="mb-0 ps-3 fw-semi-bold text-success">*</p>
                                </div>
                            </div>
                            <div class="row row mt-2 border-bottom border-dashed">
                                <div class="col-3 mb-3 col-sm-2 col-md-3 col-lg-2">
                                    <p class="mb-3 fs--1 fw-semi-bold text-primary text-nowrap">Penghasilan
                                        Lemburan</p>
                                </div>
                                <div class="col-9 mb-3 col-sm-10 col-md-9 col-lg-10 d-flex align-items-center">
                                    <p class="mb-3 fs--1 ps-8 fw-semi-bold text-primary">:</p>
                                    <p class="mb-3 fs--1 ps-3 fw-semi-bold text-primary">Rp
                                        {{ $lemburan }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    <!-- // -->
                </div>
            </div>
        @else
        @endif
    @endif

@endsection
