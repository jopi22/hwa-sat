@extends('layouts.layout')

@section('judul')
    {{ $peng->id }} | Rekapitulasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <span class="badge bg-soft-danger text-danger bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                {{ $master->created_at->format('F Y') }}</span>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn btn-falcon-default btn-sm" href="{{ route('r.peng.g') }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Back to Main Table">
                <span class="fas fa-list"></span>
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <span class=" fw-semi-bold text-primary"> Info Pengajuan Absensi</span>
            <span class="mx-1 mx-sm-2 text-300">: </span>
            <span class=" fw-semi-bold text-info"> {{$peng->id}}</span>
        </div>
    </div>
</div>

    @include('comp.alert')

    <div class="row g-3">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-light">
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="mb-0">
                                @if ($peng->respon_status == 'Belum')
                                    <h6 class="mb-0 fs-1"><span class="badge bg-sm bg-secondary rounded-pill"><i
                                                class="fas fa-question-circle"></i> Belum Direspon</span></h6> <code>Harap
                                        anda respon pengajuan ini.</code>
                                @else
                                    @if ($peng->respon_status == 'Ditolak')
                                        <h6 class="mb-0 fs-1"><span class="badge bg-sm bg-danger rounded-pill"><i
                                                    class="fas fa-times-circle"></i> Ditolak</span></h6>
                                    @else
                                        @if ($peng->respon_status == 'Diterima')
                                            <h6 class="mb-0 fs-1"><span class="badge bg-sm bg-success rounded-pill"><i
                                                        class="fas fa-check-circle"></i> Diterima</span></h6>
                                        @else
                                        @endif
                                    @endif
                                @endif
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-md-flex d-xl-inline-block d-xxl-flex align-items-center justify-content-between mb-x1">
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar avatar-3xl">
                                <img class="rounded-circle"
                                    src="@if ($peng->kar_peng_->image) {{ asset($peng->kar_peng_->image) }}
                                @else
                                {{ asset('assets/img/team/avatar.png') }} @endif" />
                            </div>
                            <p class="mb-0">
                                <a class="fw-semi-bold mb-0 text-800"
                                    href="contact-details.html">{{ $peng->kar_peng_->name }}</a>
                                <span class="fs--2 text-800 fw-normal mx-2">via web</span><a
                                    class="mb-0 fs--1 d-block text-500">K{{ $peng->kar_peng_->tgl_gabung->format('ym') }}{{ $peng->kar_peng_->id }}</a>
                            </p>
                        </div>
                        <p class="mb-0 fs--2 fs-sm--1 fw-semi-bold mt-2 mt-md-0 mt-xl-2 mt-xxl-0 ms-5">
                            {{ $peng->created_at->format('l, d F Y') }}<span class="mx-1">|</span><span
                                class="fst-italic">{{ $peng->created_at->format('h:i A') }}
                                ({{ $peng->created_at->diffforhumans() }})</span></p>
                    </div>
                    <div>
                        <h6 class="mb-3 fw-semi-bold text-1000">Perihal :
                            @if ($peng->status == 3)
                                Sakit
                            @else
                                @if ($peng->status == 5)
                                    Izin
                                @else
                                    @if ($peng->status == 6)
                                        Cuti
                                    @else
                                    @endif
                                @endif
                            @endif
                        </h6>
                        <p>Tanggal Yang Diajukan :</p>
                        <ul class="text-1000">
                            @foreach ($penglist as $list)
                                <li>{{ $list->tgl }}</li>
                            @endforeach
                            @foreach ($penglist_ as $list)
                                <li>{{ $list->tgl_->tgl }}</li>
                            @endforeach
                        </ul>
                        <hr class="my-x1" />
                        <p class="fs--1 text-1000 mb-sm-0 font-sans-serif fw-medium mb-0"><span
                                class="fas fa-link me-2"></span>File Terlampir :</p>
                        <div class="p-x1 bg-light rounded-3 mt-3">
                            <div class="d-inline-flex flex-column">
                                <a href="{{ asset($peng->file) }}" target="__blank" rel="noopener noreferrer">
                                    <div class="btn border p-2 rounded-3 d-flex bg-white dark__bg-1000 fs--1"><span
                                            class="fs-1 fas fa-file-alt"></span><span class="ms-2 me-3">File
                                            Dokumen</span>
                                        <div class="text-300 ms-auto" data-bs-toggle="tooltip" data-bs-placement="right"
                                            title="Download"><span class="fas fa-arrow-down"></span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-light" id="preview-footer">
                    @if ($peng->respon_status == 'Belum')
                        <div class="row gx-2">
                            <div class="col-auto">
                                <form action="{{ route('peng.abs.terima') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="delete_pengabs" value="{{ $peng->id }}">
                                    <input type="hidden" name="id_peng" value="{{ $peng->id }}">
                                    <input type="hidden" name="karyawan_peng" value="{{ $peng->karyawan }}">
                                    <input type="hidden" name="master_id" value="{{ $peng->master_id }}">
                                    <input type="hidden" name="surat" value="{{ $peng->surat }}">
                                    <input type="hidden" name="file" value="{{ $peng->file }}">
                                    <input type="hidden" name="status_peng" value="{{ $peng->status }}">
                                    <input type="hidden" name="pengajuan_pk" value="{{ $peng->pengajuan_pk }}">
                                    <input type="hidden" name="created_at" value="{{ $peng->created_at }}">
                                    <input type="hidden" name="periode_id_" value="{{ $peng->periode_id }}">
                                    @foreach ($penglist_ as $res2)
                                        <input type="hidden" name="delete_id[]" value="{{ $res2->tgl_->id }}">
                                        <input type="hidden" name="id[]" class="form-control"
                                            value="{{ $res2->tgl_->id }}">
                                        <input type="hidden" name="karyawan[]" class="form-control"
                                            value="{{ $peng->kar_peng_->id }}">
                                        <input type="hidden" name="tgl[]" class="form-control"
                                            value="{{ $res2->tgl_->tgl }}">
                                        <input type="hidden" name="status[]" class="form-control"
                                            value="{{ $peng->status }}">
                                        <input type="hidden" name="periode_id[]" class="form-control"
                                            value="{{ $res2->tgl_->periode_id }}">
                                        <input type="hidden" name="kode_unik[]" class="form-control"
                                            value="{{ $res2->tgl_->kode_unik }}">
                                        <input type="hidden" name="pengajuan_fk[]" class="form-control" value="-">
                                    @endforeach
                                    <button class="btn btn-success btn-sm fs--1" type="submit"><span
                                            class="fas fa-check-circle"></span><span
                                            class="d-none d-sm-inline-block ms-1">Terima</span></button>
                                </form>
                            </div>
                            <div class="col-auto">
                                <form action="{{ route('peng.abs.tolak', $peng->id) }}" method="post">
                                    @method('put')
                                    @csrf
                                    <button class="btn btn-danger btn-sm fs--1" type="submit"><span
                                            class="fas fa-times-circle"></span><span
                                            class="d-none d-sm-inline-block ms-1">Tolak</span></button>
                                </form>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h6 class="mb-0">List Pengajuan</h6>
                </div>
                <div class="card-body pb-0">
                    @foreach ($all as $res)
                        <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                            <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2"
                                    src="@if ($res->kar_peng_->image) {{ asset($res->kar_peng_->image) }}
                                    @else
                                    {{ asset('assets/img/team/avatar.png') }} @endif"
                                    alt="" /></div>
                            <div class="ms-3 flex-shrink-1 flex-grow-1">
                                <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold"
                                        href="{{ route('r.peng.abs.i', Crypt::encryptString($res->id)) }}">#{{ $res->id }}
                                        | {{ $res->kar_peng_->name }}</a></h6>
                                <div class="fs--1"><span class="fw-semi-bold">
                                        @if ($res->status == 3)
                                            Kondisi Kesehatan
                                        @else
                                            @if ($res->status == 5)
                                                Pengajuan Izin
                                            @else
                                                @if ($res->status == 6)
                                                    Pengajuan Cuti
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    </span><span
                                        class="fw-medium text-600 ms-2">{{ $res->created_at->diffforhumans() }}</span>
                                </div>
                            </div>
                        </div>
                        <hr class="text-200" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
