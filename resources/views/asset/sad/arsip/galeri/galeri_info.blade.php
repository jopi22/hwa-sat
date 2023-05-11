@extends('layouts.layout')

@section('judul')
    {{ $gal->nama }} | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/choices/choices.min.css') }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.css" rel="stylesheet') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>
    <script src="{{ asset('vendors/glightbox/glightbox.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('gal.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="far fa-dot-circle"></i>
                    Sekunder</span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> {{ $gal->nama }}</span>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-end">
                <div class="col-auto align-self-center">
                    <button class="btn btn-sm btn-falcon-success mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#error-modal"><span data-fa-transform="shrink-3" class="fas fa-plus"></span>
                        Foto
                    </button>
                    <button class="btn btn-sm btn-falcon-warning mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#edit-modal"><span data-fa-transform="shrink-3" class="fas fa-edit"></span>
                        Edit Galeri
                    </button>
                    <button class="btn btn-sm btn-falcon-danger mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#hapus-{{ $gal->id }}"><span data-fa-transform="shrink-3"
                            class="fas fa-trash-alt"></span>
                        Hapus Galeri
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="tab-content">
                <div class="tab-pane preview-tab-pane active" role="tabpanel"
                    aria-labelledby="tab-dom-4431838b-4a33-4d7a-9c42-bf6e8b509ce8"
                    id="dom-4431838b-4a33-4d7a-9c42-bf6e8b509ce8">
                    <div class="row mx-n1">
                        @foreach ($foto as $res)
                            <div class="col-6 p-1">
                                <a class="post1" href="{{ asset($res->foto) }}" data-gallery="gallery-1">
                                    <img class="img-fluid rounded" src="{{ asset($res->foto) }}" alt="" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('comp.modal.galeri.modal_foto_create')
    @include('comp.modal.galeri.modal_foto_edit')
    @include('comp.modal.galeri.modal_galeri_delete')
@endsection
