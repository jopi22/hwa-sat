@extends('layouts.layout')

@section('judul')
    Surat Peringatan | HWA &bull; SAT
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
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Human Resource & General Affairs <span
                        class="badge bg-soft-secondary text-secondary bg-sm rounded-pill"><i class="fas fa-check"></i>
                    </span>
                </h6>
                <h4 class="mb-0 text-primary fw-bold">Surat Peringatan</h4>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <embed width="100%" height="400px" type="application/pdf" src="{{ asset($sp->surat) }}" />
        <div class="card-footer py-2 bg-light">
            {{-- // --}}
        </div>
    </div>

@endsection
