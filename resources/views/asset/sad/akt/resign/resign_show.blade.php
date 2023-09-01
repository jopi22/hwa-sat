@extends('layouts.layout')

@section('judul')
    Data Resign Info | HWA &bull; SAT
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

@section('konten')
    <div class="card mb-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0">{{ $res->karyawan_->name }}</h5>
                </div>
                <div class="col-md-6">
                    @if ($res->status == 'Belum')
                        <div class="row col-6">
                            <div class="col-md-auto">
                                <form action="{{ route('res.tol', $res->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="status" value="Ditolak">
                                    <button class="btn btn-danger btn-sm me-1 mb-2 mb-sm-0" type="submit"><i
                                            class="fas fa-times-circle"></i>Tolak</button>
                                </form>
                            </div>
                            <div class="col-md-auto">
                                <form action="{{ route('res.ter', $res->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="status" value="Diterima">
                                    <button class="btn btn-success btn-sm mb-2 mb-sm-0" type="submit"><i
                                            class="fas fa-check-circle"></i>Terima</button>
                                </form>
                            </div>
                        </div>
                    @else
                        @if ($res->status == 'Ditolak')
                            Pengajuan Telah Ditolak
                        @else
                            @if ($res->status == 'Diterima')
                                Pengajuan Telah Diterima
                            @else
                            @endif
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-body">
            <embed src="{{ $res->surat }}" height="500px" width="100%" type="application/pdf">
        </div>
    </div>
@endsection
