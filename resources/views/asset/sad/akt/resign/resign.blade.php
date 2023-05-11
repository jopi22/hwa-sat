@extends('layouts.layout')

@section('judul')
    Data Resign | HWA &bull; SAT
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
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fab fa-pagelines"></i> Aktivitas <span
                    class="badge bg-soft-secondary text-secondary bg-sm rounded-pill"><i class="fas fa-check"></i>
                </span></h6>
                <h4 class="mb-0 text-primary fw-bold"> Data Resign</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","name","username","status","level"],"page":10,"pagination":true}'>
            <div class="row ms-3 mt-2 mb-2 g-0 flex-between-left">
                <div class="col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered fs--1 mb-0 overflow-hidden">
                        <thead class="bg-secondary text-white text-center">
                            <tr>
                                <th style="min-width: 100px" class="sort" data-sort="aksi">Aksi</th>
                                <th style="min-width: 150px" class="sort" data-sort="id">Kode Karyawan</th>
                                <th style="min-width: 400px" class="sort" data-sort="name">
                                    Nama Karyawan</th>
                                <th style="min-width: 100px" class="sort" data-sort="surat">Surat</th>
                                <th style="min-width: 100px" class="sort" data-sort="status">Status Akun</th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($asu as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a href="{{ route('res.i', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-primary" type="button"><i class="fas fa-file-alt"></i></a>
                                            <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                title="Hapus Surat"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-black fw-semi-bold text-center align-middle white-space-nowrap id">
                                        K{{ $res->karyawan_->tgl_gabung->format('ym') }}{{ $res->karyawan_->id }}</td>
                                    <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                                        {{ $res->karyawan_->name }}</td>
                                    <td
                                        class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                                        @if ($res->surat == null)
                                            <span class="badge rounded-pill bg-danger">Tidak Ada</span>
                                        @else
                                            <span class="badge rounded-pill bg-primary">Ada</span>
                                        @endif
                                    </td>
                                    <td class="text-black text-center fw-semi-bold align-middle white-space-nowrap">
                                        @if ($res->status == 'Belum')
                                            <span class="badge rounded-pill bg-secondary">Belum Konfirmasi</span>
                                        @else
                                            @if ($res->status == 'Diterima')
                                                <span class="badge rounded-pill bg-success">Diterima</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">Ditolak</span>
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-3"><button class="btn btn-sm btn-falcon-default me-1"
                        type="button" title="Previous" data-list-pagination="prev"><span
                            class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                        title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                </div>
            @endif
        </div>
        <div class="card-footer py-2 bg-light">
            {{-- // --}}
        </div>
    </div>

    @include('comp.modal.resign.modal_resign_delete')
@endsection
