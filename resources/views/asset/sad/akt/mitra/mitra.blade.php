@extends('layouts.layout')

@section('judul')
    Mitra Perusahaan | HWA &bull; SAT
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
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fab fa-pagelines"></i> Aktivitas <span
                    class="badge bg-soft-secondary text-secondary bg-sm rounded-pill"><i class="fas fa-check"></i>
                </span></h6>
                <h4 class="mb-0 text-primary fw-bold"> Mitra Perusahaan</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card">
        <div class="card-header bg-light d-flex flex-between-center py-2">
            <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop"><span class="fas fa-plus text-success" data-fa-transform="shrink-3"></span>
                Tambah<span class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
            </button>
        </div>
        <div class="card-body p-0 overflow-hidden">
            <div class="row g-0">
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    @foreach ($mit as $item)
                        <div class="col-12 p-x1">
                            <div class="row">
                                <div class="col-sm-5 col-md-4">
                                    <div class="position-relative h-sm-100"><a class="d-block h-100"
                                            href="product-details.html"><img
                                                class="img-fluid fit-cover w-sm-100 h-sm-100 rounded-1 absolute-sm-centered"
                                                src="{{ asset($item->logo) }}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-sm-7 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h5 class="mt-3 mt-sm-0">{{ $item->perusahaan }}</h5>
                                            <p class="fs--1 mb-2 mb-md-3">{{ $item->tgl_kontrak->format('d-m-Y') }} -
                                                {{ $item->akhir_kontrak->format('d-m-Y') }}
                                            </p>
                                            <ul class="list-unstyled d-none d-lg-block">
                                                <li><span class="fas fa-circle"
                                                        data-fa-transform="shrink-12"></span><span>{{ $item->sewa_exc }}
                                                        Excavator</span>
                                                </li>
                                                <li><span class="fas fa-circle"
                                                        data-fa-transform="shrink-12"></span><span>{{ $item->sewa_dt }}
                                                        Dump
                                                        Truck</span></li>
                                                <li><span class="fas fa-circle"
                                                        data-fa-transform="shrink-12"></span><span>{{ $item->sewa_vb }}
                                                        Vibro</span></li>
                                                <li><span class="fas fa-circle"
                                                        data-fa-transform="shrink-12"></span><span>{{ $item->sewa_lain }}
                                                        Peralatan Pendukung</span>
                                                </li>
                                                <li><span class="fas fa-circle"
                                                        data-fa-transform="shrink-12"></span><span>{{ $item->sewa_total }}
                                                        Total</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 d-flex justify-content-between flex-column">
                                            <div class="mt-2">
                                                <a class="btn btn-sm btn-primary d-lg-block mt-lg-2" data-bs-toggle="modal"
                                                    data-bs-target="#info-{{ $item->id }}" data-bs-placement="top"
                                                    title="Hapus Kontrak"><span class="fas fa-file-alt"> </span><span
                                                        class="ms-2 d-none d-md-inline-block">File Kontrak</span></a>
                                                <a class="btn btn-sm btn-warning d-lg-block mt-lg-2" data-bs-toggle="modal"
                                                    data-bs-target="#edit-{{ $item->id }}" data-bs-placement="top"
                                                    title="Edit Kontrak"><span class="fas fa-edit"> </span><span
                                                        class="ms-2 d-none d-md-inline-block">Edit Kontrak</span></a>
                                                <a class="btn btn-sm btn-danger d-lg-block mt-lg-2" data-bs-toggle="modal"
                                                    data-bs-target="#hapus-{{ $item->id }}" data-bs-placement="top"
                                                    title="Hapus Kontrak"><span class="fas fa-trash-alt"> </span><span
                                                        class="ms-2 d-none d-md-inline-block">Hapus Kontrak</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom border-dashed my-3"></div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    @include('comp.modal.mitra.modal_mitra_create')
    @include('comp.modal.mitra.modal_mitra_info')
    @include('comp.modal.mitra.modal_mitra_edit')
    @include('comp.modal.mitra.modal_mitra_delete')
@endsection
