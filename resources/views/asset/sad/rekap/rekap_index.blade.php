@extends('layouts.layout')

@section('judul')
    Rekapitulasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-1.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/illustrations/bg-wave.png') }}" alt="" width="76" />
            <div class="ms-n1">
                <h6 class="mb-1 text-primary"><i class="fas fa-clipboard-check"></i> Rekapitulasi <span
                        class="mb-1 text-info">##</span>
                </h6>
                <h4 class="mb-0 text-primary fw-bold">Rekapitulasi Periode ## </h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="row">
        <div class="col-md-6 col-xxl-4">
            <div class="card h-100">
                <div class="card-header">
                    <div class="d-flex align-items-center"><img class="me-2"
                            src="{{ asset('assets/img/tickets/due-tickets.png') }}" alt="" height="35" />
                        <h5 class="fs-0 fw-normal text-800 mb-0">Absensi Karyawan</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="scrollbar-overlay pt-0 px-x1 ask-analytics">

                        <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fas fa-calendar-check text-primary"></span>
                                <a class="stretched-link text-decoration-none" href="{{route('r.abs.kel')}}">
                                    <h5 class="fs--1 text-600 mb-0 ps-3">Data Absensi</h5>
                                </a>
                            </div>
                        </div>
                        <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fas fa-envelope text-primary"></span>
                                <a class="stretched-link text-decoration-none" href="{{route('r.peng.g')}}">
                                    <h5 class="fs--1 text-600 mb-0 ps-3">Pengajuan Surat</h5>
                                </a>
                            </div>
                        </div>
                        <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fas fa-calendar-alt text-primary"></span>
                                <a class="stretched-link text-decoration-none" href="{{route('r.abs.kal')}}">
                                    <h5 class="fs--1 text-600 mb-0 ps-3">Kalender</h5>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer bg-light text-end py-2">
                    {{-- // --}}
                </div>
            </div>
        </div>
    @endsection
