@extends('layouts.layout')

@section('judul')
{{ $eve->id }} | Edit | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
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
<div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
    <div class="col d-flex align-items-center">
        <div>
            <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                        class="fas fa-home text-primary"></i></button></a>
            <a href="{{ route('eve.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                        class="fas fa-list text-primary"></i></button></a>
            <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="far fa-dot-circle"></i>
                Sekunder</span>
        </div>
        <div class="ms-1">&nbsp;
            <span class=" fw-semi-bold text-primary"> Edit Event</span> / <span class="text-info fw-semi-bold">{{ $eve->event }}</span>
        </div>
    </div>
</div>

    @include('comp.alert')

    <div class="card mb-3">
        <form action="{{ route('eve.u', $eve->id) }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-header">
                <h5 class="mb-0">Event Detail</h5>
            </div>
            <div class="card-body bg-light">
                <div class="row gx-2">
                    <div class="col-12 mb-3"><label class="form-label" for="event-name">Judul Event</label><input
                            class="form-control" maxlength="50 " name="event" type="text" value="{{ $eve->event }}" />
                    </div>
                    <div class="col-sm-6 mb-3"><label class="form-label" for="start-time">Waktu Mulai</label><input
                            class="form-control datetimepicker" name="start" type="text" value="{{ $eve->start }}"
                            data-options='{"enableTime":true,"noCalendar":false,"disableMobile":true}' />
                    </div>
                    <div class="col-sm-6 mb-3"><label class="form-label" for="end-time">Waktu Selesai</label><input
                            class="form-control datetimepicker" name="finish" type="text" value="{{ $eve->finish }}"
                            data-options='{"enableTime":true,"noCalendar":false,"disableMobile":true}' />
                    </div>
                    <div class="col-sm-6"><label class="form-label" for="registration-deadline">Organisasi
                        </label><input class="form-control" maxlength="50" name="org" type="text"
                            value="{{ $eve->org }}" /></div>
                    <div class="col-sm-6"><label class="form-label" for="registration-deadline">Lokasi
                        </label><input class="form-control" maxlength="50" name="location" type="text"
                            value="{{ $eve->location }}" /></div>
                    <div class="col-12">
                        <div class="border-bottom border-dashed my-3"></div>
                    </div>
                    <div class="col-12"><label class="form-label" for="event-description">Deskripsi</label>
                        <textarea class="form-control" name="detail" rows="6">{{ $eve->detail }}</textarea>
                    </div>
                    <div class="border-bottom border-dashed my-3"></div>
                    <div class="col-12"><label class="form-label" for="event-description">Foto</label>
                        <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="foto">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                        <h5 class="mb-2 mb-md-0">Nice Job! You're almost done</h5>
                    </div>
                    <div class="col-auto"><button type="submit" class="btn btn-warning btn-sm me-2"><i class="fas fa-save"></i> Update   </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
