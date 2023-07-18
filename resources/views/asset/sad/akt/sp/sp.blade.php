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

@section('konten')
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                <div>
                    <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Human Resource & General Affairs</h6>
                    <h4 class="mb-0 text-primary fw-bold">Surat Peringatan</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-key"></i>
                            Division Data</span>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block"
                    src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}" alt="" width="130" />
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3" data-list='{"valueNames":["nama","surat"],"page":10,"pagination":true}'>
            <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                <div class="col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>&nbsp;
                <div class="col-sm-auto">
                    <button class="btn btn-sm btn-falcon-success mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#sp1">SP-1
                    </button>
                    <button class="btn btn-sm btn-falcon-warning mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#sp2">SP-2
                    </button>
                    <button class="btn btn-sm btn-falcon-danger mx-2" type="button" data-bs-toggle="modal"
                        data-bs-target="#sp3">SP-3
                    </button>
                </div>
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                    data-sort="surat">
                                    Nomor Surat
                                </th>
                                <th style="min-width: 80px" class="sort  align-middle white-space-nowrap" data-sort="surat">
                                    Jenis SP
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="nama">
                                    Nama Karyawan
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tgl Pengajuan
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($sp as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            @if ($res->jenis == 'SP-3')
                                                <a class="btn btn-dark" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#phk-{{ $res->id }}" data-bs-placement="top"
                                                    title="PHK">PHK</a>
                                            @endif
                                            <a href="{{ route('sp.i', Crypt::EncryptString($res->id)) }}"
                                                class="btn btn-primary" type="button"><i class="fas fa-file-alt"></i></a>
                                            <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                title="Hapus SP"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap surat">
                                        @if ($res->no)
                                            {{ $res->no }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap surat">
                                        @if ($res->jenis == 'SP-1')
                                            <span class="badge bg-success rounded-pill">SP-1</span>
                                        @else
                                            @if ($res->jenis == 'SP-2')
                                                <span class="badge bg-warning rounded-pill">SP-2</span>
                                            @else
                                                @if ($res->jenis == 'SP-3')
                                                    <span class="badge bg-danger rounded-pill">SP-3</span>
                                                @else
                                                    -
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap nama">
                                        @if ($res->kar_id)
                                            {{ $res->kar_->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        {{ $res->created_at->format('d-m-Y') }}
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

    @include('comp.modal.sp.modal_sp_create')
    {{-- @include('comp.modal.sp.modal_sp_info') --}}
    @include('comp.modal.sp.modal_sp_delete')

@endsection
