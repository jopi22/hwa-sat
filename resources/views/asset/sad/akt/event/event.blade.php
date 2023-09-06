@extends('layouts.layout')

@section('judul')
    Event | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}">
    <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
<div class="card mb-3 bg-100 shadow-none border">
    <div class="row gx-0 flex-between-center">
        <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
            <div>
                <h6 class="text-primary fs--1 mb-0"><i class="fab fa-hornbill"></i> PT Harapan Wahyu Abadi Site Sandai
                </h6>
                <h4 class="text-primary fw-bold mb-0">Event </h4>
            </div>
        </div>
        <div class="col-sm-auto d-flex align-items-center">
            <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}"
                alt="" width="130" />
        </div>
    </div>
</div>

    @include('comp.alert')

    <div class="card mb-3 mb-lg-0">
        <div class="card-header bg-light d-flex justify-content-between">
            <a href="{{ route('eve.c') }}">
                <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop"><span class="fas fa-plus text-success"
                        data-fa-transform="shrink-3"></span>
                    Tambah<span class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                </button>
            </a>
        </div>
        <div class="card-body fs--1">
            <div class="row">
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    @foreach ($eve as $asu)
                        <div class="col-md-6 h-100">
                            <div class="d-flex btn-reveal-trigger">
                                <div class="calendar"><span
                                        class="calendar-month">{{ $asu->start->format('M') }}</span><span
                                        class="calendar-day">{{ $asu->start->format('d') }}</span>
                                </div>
                                <div class="flex-1 position-relative ps-3">
                                    <h6 class="fs-0 mb-0"><a
                                            href="{{ route('eve.i', Crypt::encryptString($asu->id)) }}">{{ $asu->event }}</a>
                                    </h6>
                                    <p class="mb-1">Organisasi: <a href="#!"
                                            class="text-700">{{ $asu->org }}</a>
                                    </p>
                                    <p class="text-1000 mb-0">Waktu Mulai: {{ $asu->start->format('H:i') }}</p>
                                    <p class="text-1000 mb-0">Durasi: {{ $asu->start->format('d/m/Y') }} -
                                        {{ $asu->finish->format('d/m/Y') }}</p>{{ $asu->location }}
                                    <div class="border-bottom border-dashed my-3"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
            @endif
        </div>
    </div>

@endsection
