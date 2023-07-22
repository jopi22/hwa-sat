@extends('layouts.layout_horizontal')
{{-- @extends('layouts.layout') --}}

@section('judul')
    HWA - Sarana Administrasi Terpadu
@endsection

@section('konten')
    <div class="card mb-2 bg-transparent-50 overflow-hidden">
        <div class="card-header position-relative">
            <div class="bg-holder d-none d-md-block bg-card z-index-1"
                style="background-image:url({{ asset('assets/img/icons/spot-illustrations/48.png') }});background-size:230px;background-position:right bottom;z-index:-1;">
            </div>
            <!--/.bg-holder-->
            <div class="position-relative z-index-2">
                <div>
                    <h3 class="text-primary mb-1">Welcome, {{ Auth::user()->name }}!</h3>
                    <p>Selamat Datang Di Aplikasi HWA Sarana Administrasi Terpadu..</p>
                </div>
                <div class="d-flex py-3">
                    <div class="pe-3">
                        <p class="text-600 fs--1 fw-medium">Kehadiran Anda </p>
                        <h4 class="text-800 mb-0">{{ $hadir }} Hari</h4>
                    </div>
                    <div class="ps-3">
                        <p class="text-600 fs--1">Performa Anda </p>
                        @if (Auth::user()->tipe_gaji == 'AI')
                            <h4 class="text-800 mb-0">{{ $performa_hm }} HM</h4>
                        @else
                            @if (Auth::user()->tipe_gaji == 'AL')
                                <h4 class="text-800 mb-0">{{ $performa_ot }} Jam</h4>
                            @else
                            -
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card-body p-0">
            <ul class="mb-0 list-unstyled">
                <li class="alert mb-0 rounded-0 py-3 px-x1 alert-warning border-x-0 border-top-0">
                    <div class="row flex-between-center">
                        <div class="col">
                            <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>5 products</strong> didn’t publish to your Facebook page
                                </p>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium"
                                href="#!">View products<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                    </div>
                </li>
                <li class="alert mb-0 rounded-0 py-3 px-x1 greetings-item border-top border-x-0 border-top-0">
                    <div class="row flex-between-center">
                        <div class="col">
                            <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have payments that need to be captured
                                </p>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium"
                                href="#!">View payments<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                    </div>
                </li>
                <li class="alert mb-0 rounded-0 py-3 px-x1 greetings-item border-top  border-0">
                    <div class="row flex-between-center">
                        <div class="col">
                            <div class="d-flex">
                                <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need to be fulfilled</p>
                            </div>
                        </div>
                        <div class="col-auto d-flex align-items-center"><a class="alert-link fs--1 fw-medium"
                                href="#!">View orders<i class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                    </div>
                </li>
            </ul>
        </div> --}}
    </div>

    <div class="card">
        <div class="card-body overflow-hidden p-lg-6">
            <div class="row align-items-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/icons/spot-illustrations/21.png"
                        alt="" />
                </div>
                <div class="col-lg-6 ps-lg-4 my-5 text-center text-lg-start">
                    <h3 class="text-primary">No Content</h3>
                    <p class="lead">Create Something Beautiful</p><a class="btn btn-falcon-primary" href="#">Getting
                        started</a>
                </div>
            </div>
        </div>
    </div>
@endsection
