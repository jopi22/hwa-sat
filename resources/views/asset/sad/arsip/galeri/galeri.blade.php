@extends('layouts.layout')

@section('judul')
    Galeri | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/choices/choices.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-file-archive"></i> Arsip <span
                        class="mb-1 text-info">Sekunder</span>
                </h6>
                <h4 class="mb-0 text-primary fw-bold">Galeri</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-body d-flex justify-content-between">
            <div>
                <button class="btn btn-sm btn-falcon-success mx-2" type="button" data-bs-toggle="modal"
                    data-bs-target="#error-modal"><span data-fa-transform="shrink-3" class="fas fa-plus"></span>
                    Galeri
                </button>
            </div>
        </div>
    </div>

    <div class="row g-0">
        @if ($cek == 0)
            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
        @else
            @foreach ($gal as $res)
                <div class="col-lg-6 pe-lg-2">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="row flex-between-end">
                                <div class="col-auto align-self-center">
                                    <h6 class="mb-0" data-anchor="data-anchor">{{ $res->nama }}</h6>
                                </div>
                                <div class="col-auto ms-auto">
                                    <h6 class="mb-0 text-secondary">{{ $res->tgl->format('d F Y') }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-light overflow-hidden">
                            <div class="tab-content">
                                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                                    aria-labelledby="tab-dom-022716ec-5027-4749-91b0-bf004ae4c134"
                                    id="dom-022716ec-5027-4749-91b0-bf004ae4c134">
                                    <div class="hoverbox rounded-3 text-center">
                                        <img class="img-fluid" src="{{ asset($res->foto) }}" alt="" />
                                        <div class="light hoverbox-content bg-dark p-5 flex-center">
                                            <div>
                                                <p class="lead text-white">{{ $res->deskripsi }}</p>
                                                <a class="btn btn-light btn-sm mt-1" href="{{ route('gal.i', Crypt::encryptString($res->id)) }}">Lihat Koleksi Foto</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    @include('comp.modal.galeri.modal_galeri_create')
    {{-- @include('comp.modal.dokumen.modal_dokumen_info') --}}
    {{-- @include('comp.modal.dokumen.modal_dokumen_delete') --}}
@endsection
