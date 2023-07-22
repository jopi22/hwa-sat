@extends('layouts.layout')

@section('judul')
    {{ $res->id }} Info | HWA &bull; SAT
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
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md d-flex">
                    <div class="avatar avatar-2xl">
                        <img class="rounded-circle" src="../../assets/img/team/1.jpg" alt="" />
                    </div>
                    <div class="flex-1 ms-2">
                        <h5 class="mb-0">{{ $res->kar_->name }}</h5><a class="text-800 fs--1" href="#!"><span
                                class="ms-1 text-500">{{ $res->created_at->format('d-F-Y') }}</span></a>
                    </div>
                </div>
                @if ($res->status == 'Diterima')
                <div class="col-md-auto ms-auto d-flex align-items-center ps-6 ps-md-3"><small>Diterima</small>
                    <span class="fas fa-check-double text-success fs--1 ms-2"></span>
                </div>
                @else
                @endif
            </div>
        </div>
        <div class="card-body bg-light">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="card shadow-none mb-3"><img class="card-img-top" />
                        <div class="card-body">
                            <table>
                                <tr>
                                    <th style="width: 200px">Nama</th>
                                    <th style="width: 20px">:</th>
                                    <th>{{ $res->kar_->name }}</th>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Jabatan</th>
                                    <th style="width: 20px">:</th>
                                    <th>{{ $res->jabatan }}</th>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Email</th>
                                    <th style="width: 20px">:</th>
                                    <th>{{ $res->email }}</th>
                                </tr>
                                <tr>
                                    <th style="width: 200px">No HP</th>
                                    <th style="width: 20px">:</th>
                                    <th>{{ $res->no_hp }}</th>
                                </tr>
                                <tr>
                                    <th style="width: 200px">Lama Bekerja</th>
                                    <th style="width: 20px">:</th>
                                    <th>{{ $res->lama }}</th>
                                </tr>
                            </table>
                            <label class="mt-2">Alasan Pengajuan Surat Keterangan Kerja</label>
                            <small>{!! $res->perihal !!}</small>
                            @if ($res->status == 'Diterima')
                                -
                            @else
                                <div class="text-center">
                                    <button class="btn btn-success bn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#error-modal"><i class="fas fa-check-circle"></i>
                                        Konfirmasi</button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer pt-2">
            {{-- // --}}
        </div>
    </div>


    <!-- ===============================================-->
    <!--     Modal Aktif Akun-->
    <!-- ===============================================-->
    <div class="modal fade" id="error-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content">
                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                    <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('skk.t', $res->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white" id="exampleModalLabel"><i class="fas fa-check-circle"></i>
                            {{ $res->kar_->name }}</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="status" value="Diterima">
                        <label for="">File SKK : </label>
                        <input required accept=".pdf" type="file" name="image" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i> Tutup</span>
                        </button>
                        <button class="btn btn-success" type="submit"><span class="fas fa-check-circle"></span> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
