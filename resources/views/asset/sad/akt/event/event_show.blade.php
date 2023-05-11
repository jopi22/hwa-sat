@extends('layouts.layout')

@section('judul')
    Buat Event | HWA &bull; SAT
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
    <div class="card mb-3"><img class="card-img-top" src="{{ asset($eve->foto) }}" height="400px" />
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="d-flex">
                        <div class="calendar me-2"><span class="calendar-month">{{ $eve->start->format('M') }}</span><span
                                class="calendar-day">{{ $eve->start->format('d') }}
                            </span></div>
                        <div class="flex-1 fs--1">
                            <h5 class="fs-0">{{ $eve->event }}</h5>
                            <p class="mb-0">Organisasi <a href="#!">{{ $eve->org }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto mt-4 mt-md-0">
                    <a href="{{ route('eve.e', Crypt::encryptString($eve->id)) }}"><button
                            class="btn btn-falcon-warning btn-sm px-4 px-sm-5" type="button"><i class="fas fa-edit"></i>
                            Edit</button></a>
                    <button class="btn btn-falcon-danger btn-sm px-4 px-sm-5" type="button" data-bs-toggle="modal"
                        data-bs-target="#hapus-{{ $eve->id }}"><i class="fas fa-trash-alt"></i> Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-lg-8 pe-lg-2">
            <div class="card mb-3 mb-lg-0">
                <div class="card-body">
                    <h5 class="fs-0 mb-3">Deskripsi</h5>
                    <p>{{ $eve->detail }}</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 fs--1">
                    <div class="card-body">
                        <h6>Tanggal & Waktu</h6>
                        <p class="mb-1">{{ $eve->start->format('d M Y / H:i') }} sd
                            {{ $eve->finish->format('d M Y / H:i') }}</p>
                        <h6 class="mt-4">Lokasi</h6>
                        <div class="mb-1">{{ $eve->location }}
                            <h6 class="mt-4">Organisasi</h6>
                            <p class="fs--1 mb-0">{{ $eve->org }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('comp.modal.event.modal_event_delete')
    @endsection
