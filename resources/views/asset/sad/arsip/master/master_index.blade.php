@extends('layouts.layout')

@section('judul')
    {{ $master->periode }} | Arsip | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
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
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-file-archive"></i>  <a
                        href="{{ route('amast.g') }}"><span class="text-danger">Master Arsip</span></a>
                </h6>
                <h4 class="mb-0 text-primary fw-bold">{{ $master->created_at->format('F Y') }} <span
                        class="mb-1 text-info"></span> </h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    @if ($cek == 0)
        @include('comp.card.card_kosong')
    @else
        <div class="row">
            <div class="col-md-6 mb-3 col-xxl-4">
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
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.abs.kel', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Data Absensi</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-envelope text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.peng.g', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Pengajuan Surat</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-calendar-alt text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.abs.kal', $master->id) }}">
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

            <div class="col-md-6 mb-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ asset('assets/img/tickets/reports/7.png') }}" alt="" height="35" />
                            <h5 class="fs-0 fw-normal text-800 mb-0">Hours Meter</h5>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="scrollbar-overlay pt-0 px-x1 ask-analytics">
                            {{-- <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fas fa-stopwatch text-primary"></span>
                                <a class="stretched-link text-decoration-none" href="{{ route('r.hm.p') }}">
                                    <h5 class="fs--1 text-600 mb-0 ps-3">Hours Meter</h5>
                                </a>
                            </div>
                        </div> --}}
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-envelope text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.hm.e', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Performa Equipment</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-calendar-alt text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.hm.k', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Performa O/D</h5>
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

            <div class="col-md-6 mb-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ asset('assets/img/tickets/reports/4.png') }}" alt="" height="35" />
                            <h5 class="fs-0 fw-normal text-800 mb-0">Over Time</h5>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="scrollbar-overlay pt-0 px-x1 ask-analytics">

                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-clock text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.ot.l', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Over Time</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-chart-bar text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.ot.k', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Performa Helper</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-wrench text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.bd.l', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Breakdown</h5>
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

            <div class="col-md-6 mb-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ asset('assets/img/tickets/reports/2.png') }}" alt="" height="35" />
                            <h5 class="fs-0 fw-normal text-800 mb-0">Keuangan</h5>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="scrollbar-overlay pt-0 px-x1 ask-analytics">

                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-coins text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.kas.l', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Kas Perusahaan</h5>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-donate text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.g.l', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Income Karyawan</h5>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-utensils text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.cat.l', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Catering</h5>
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

            <div class="col-md-6 mb-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ asset('assets/img/tickets/open-tickets.png') }}" alt=""
                                height="35" />
                            <h5 class="fs-0 fw-normal text-800 mb-0">Logistik</h5>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="scrollbar-overlay pt-0 px-x1 ask-analytics">
                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="far fa-share-square text-primary"></span>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('a.log.e.l', $master->id) }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Barang Keluar</h5>
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

            {{-- <div class="col-md-6 mb-3 col-xxl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex align-items-center"><img class="me-2"
                                src="{{ asset('assets/img/tickets/unassigned.png') }}" alt="" height="35" />
                            <h5 class="fs-0 fw-normal text-800 mb-0">Proses Akhir Validasi</h5>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <button type="button" class="btn btn-success ms-3" data-bs-toggle="modal"
                            data-bs-target="#finish"><i class="fas fa-flag-checkered"></i> Arsipkan Master Data</button>
                    </div>
                    <div class="card-footer bg-light text-end py-2">
                    </div>
                </div>
            </div> --}}

        </div>
    @endif
@endsection
