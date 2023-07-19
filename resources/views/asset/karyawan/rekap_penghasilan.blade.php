@extends('layouts.layout_horizontal')

@section('judul')
    Rekap Penghasilan | HWA &bull; SAT
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
            <h5>Rekap Penghasilan Anda</h5>
            {{-- <p class="fs--1">April 21, 2019, 5:33 PM</p> --}}
            <div><strong class="me-2">Periode: <span
                        class="text-info">{{ $master->created_at->format('F Y') }}</span></strong>
            </div>
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-sm-6 col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card"
                    style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-1.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Gaji Pokok</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                        data-countup='{"endValue":{{ $gaji_pokok_raw }},"prefix":"Rp&nbsp;"}'>{{ $a }}</div><a
                        class="fw-semi-bold fs--1 text-nowrap" href="###">Lihat Detail<span
                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
            </div>
        </div>
        @if (Auth::user()->tipe_gaji == 'AI')
            <div class="col-sm-6 col-md-4">
                <div class="card overflow-hidden" style="min-width: 12rem">
                    <div class="bg-holder bg-card"
                        style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-2.png') }});">
                    </div>
                    <!--/.bg-holder-->
                    <div class="card-body position-relative">
                        <h6>Insentif</h6>
                        <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                            data-countup='{"endValue":{{ $ins }},"prefix":"Rp&nbsp;"}'>0</div><a
                            class="fw-semi-bold fs--1 text-nowrap" href="###">Lihat Detail<span
                                class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                    </div>
                </div>
            </div>
        @else
            @if (Auth::user()->tipe_gaji == 'AL')
                <div class="col-sm-6 col-md-4">
                    <div class="card overflow-hidden" style="min-width: 12rem">
                        <div class="bg-holder bg-card"
                            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-2.png') }});">
                        </div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <h6>Lemburan</h6>
                            <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                                data-countup='{"endValue":{{ $lem }},"prefix":"Rp&nbsp;"}'>0</div><a
                                class="fw-semi-bold fs--1 text-nowrap" href="###">Lihat Detail<span
                                    class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                        </div>
                    </div>
                </div>
            @else
            @endif
        @endif
        <div class="col-md-4">
            <div class="card overflow-hidden" style="min-width: 12rem">
                <div class="bg-holder bg-card"
                    style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-3.png') }});"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                    <h6>Adjustmen</h6>
                    <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif"
                        data-countup='{"endValue":{{ $adjust_t }},"prefix":"Rp&nbsp;"}'>0</div><a
                        class="fw-semi-bold fs--1 text-nowrap" href="###">Lihat Detai<span
                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive fs--1">
                <table class="table table-striped border-bottom">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th class="border-0">Rekap Penghasilan</th>
                            <th class="border-0 text-end">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-200">
                            <td class="align-middle">
                                <h6 class="mb-0 text-nowrap">Penghasilan Gaji Pokok</h6>
                            </td>
                            <td class="align-middle text-end"
                                data-countup='{"endValue":{{ $gaji_pokok_raw }},"prefix":"Rp&nbsp;"}'>0</td>
                        </tr>
                        <tr class="border-200">
                            <td class="align-middle">
                                <h6 class="mb-0 text-nowrap">Penghasilan Insentif</h6>
                            </td>
                            <td class="align-middle text-end"
                                data-countup='{"endValue":{{ $ins }},"prefix":"Rp&nbsp;"}'>0</td>
                        </tr>
                        <tr class="border-200">
                            <td class="align-middle">
                                <h6 class="mb-0 text-nowrap">Adjustmen</h6>
                            </td>
                            <td class="align-middle text-end"
                                data-countup='{"endValue":{{ $adjust_t }},"prefix":"Rp&nbsp;"}'>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row g-0 justify-content-end">
                <div class="col-auto">
                    <table class="table table-sm table-borderless fs--1 text-end">
                        <tr class="border-top">
                            <th class="text-900">Total:</th>
                            <td class="fw-semi-bold"
                                data-countup='{"endValue":
                            @if (Auth::user()->tipe_gaji == 'AI') {{ $ai_raw }}
                            @else
                            @if (Auth::user()->tipe_gaji == 'AL')
                            {{ $al_raw }}
                            @else
                            @if (Auth::user()->tipe_gaji == 'A')
                            {{ $ai }}
                            @else @endif
                            @endif
                            @endif
                            ,"prefix":"Rp&nbsp;"}'>
                                0
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
