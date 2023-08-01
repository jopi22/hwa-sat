@extends('layouts.layout')

@section('judul')
    Rekapitulasi Master| HWA &bull; SAT
@endsection

@section('sad_menu')
    {{-- @if ($master->periode == $periode) --}}
        @include('layouts.panel.sad.vertikal_rekap')
    {{-- @else
        @include('layouts.panel.sad.vertikal_off')
    @endif --}}
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

@section('konten')
    @include('comp.alert')
    @if ($val == 0)
        @include('comp.card.card_validasi')
    @else
        <div class="card mb-3 bg-light shadow-none">
            <div class="bg-holder bg-card d-none d-sm-block"
                style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-1.png') }});"></div>
            <!--/.bg-holder-->
            <div class="card-header d-flex align-items-center z-index-1 p-0">
                <img src="{{ asset('assets/img/illustrations/bg-wave.png') }}" alt="" width="56" />
                <div class="ms-n0">
                    <h6 class="mb-1 text-primary"><i class="fas fa-clipboard-check"></i> Rekapitulasi Data <span
                            class="mb-1 text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                    <h4 class="mb-0 text-primary fw-bold">Rekapitulasi Periode {{ $master->created_at->format('F Y') }}
                        <span class="mb-1 text-info"></span>
                    </h4>
                </div>
            </div>
        </div>
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
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.abs.kel') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Data Absensi</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-envelope text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.peng.g') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Pengajuan Surat</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-calendar-alt text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.abs.kal') }}">
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
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-stopwatch text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.hm.p') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Hours Meter</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-envelope text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.hm.e') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Performa Equipment</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-calendar-alt text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.hm.m') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">HM Manual</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-calendar-alt text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.hm.k') }}">
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
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.ot.l') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Over Time</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-chart-bar text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.ot.k') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Performa Helper</h5>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-wrench text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.bd.l') }}">
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
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.kas.l') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Kas Perusahaan</h5>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-donate text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.g.l') }}">
                                        <h5 class="fs--1 text-600 mb-0 ps-3">Income Karyawan</h5>
                                    </a>
                                </div>
                            </div>
                            <div
                                class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                                <div class="d-flex align-items-center">
                                    <span class="fas fa-utensils text-primary"></span>
                                    <a class="stretched-link text-decoration-none" href="{{ route('r.cat.l') }}">
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
        </div>

        <div class="col-md-12 mb-3 col-xxl-4">
            <div class="card h-100">
                <div class="card-header text-center">
                    <div class="d-flex align-items-center text-center"><img class="me-2"
                            src="{{ asset('assets/img/tickets/unassigned.png') }}" alt="" height="35" />
                        <h5 class="fs-0 fw-normal text-center text-800 mb-0">Proses Akhir Validasi</h5>
                    </div>
                </div>
                <div class="card-body p-0">
                    <button type="button" class="btn btn-success ms-3" data-bs-toggle="modal"
                        data-bs-target="#finish"><i class="fas fa-flag-checkered"></i> Arsipkan Master Data</button>
                </div>
                <div class="card-footer bg-light text-end py-2">
                    {{-- // --}}
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="finish" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-success">
                        <div class="position-relative z-index-1 light">
                            {{-- <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-flag-checkered-alt"></i>sdas</h5> --}}
                        </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body py-4 px-5">
                        <h5 class="text text-900">Ente Yakin, Untuk
                            Mengarsipkan Master Data Ini?</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <form action="{{ route('r.arsip', $master->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="hidden" name="status" value="Arsip">
                            <button type="submit" class="btn btn-success ms-2"><i class="fas fa-check-circle"></i> Ya,
                                Arsipkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
