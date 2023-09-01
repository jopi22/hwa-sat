@extends('layouts.layout')

@section('judul')
    Karyawan | HWA &bull; SAT
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
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                <div>
                    <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Human Resource & General Affairs</h6>
                    <h4 class="mb-0 text-primary fw-bold">Karyawan PT Harapan Wahyu Abadi</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-key"></i>
                            Division Data</span>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}"
                    alt="" width="130" />
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light p-0">
            <div class="row">
                <div class="col-auto">
                    <ul class="nav nav-tabs border-0 top-courses-tab flex-nowrap" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 active" role="tab"
                                id="popularPaid-tab" data-bs-toggle="tab" href="#popularPaid" aria-controls="popularPaid"
                                aria-selected="false">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center">
                                        <span class="mt-auto fas fa-user-check fs-2"></span>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap"> Data Karyawan</h6>
                                        <h6 class="mb-0 lh-1">Aktif ({{ $all_aktif }})</h6>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false" role="tab"
                                id="popularFree-tab" data-bs-toggle="tab" href="#popularFree" aria-controls="popularFree"
                                aria-selected="true">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center"><span
                                            class="mt-auto fas fa-users fs-2"></span></div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap"> Data Karyawan</h6>
                                        <h6 class="mb-0 lh-1">Semua ({{ $all_cek }})</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto mt-4">
                    <div class="btn-group  btn-group-sm mx-2" role="group">
                        <a href="{{ route('kar.c') }}"><button class="btn btn-sm btn-falcon-success mx-2"
                                type="button"><span data-fa-transform="shrink-3" class="fas fa-plus"></span>
                            </button></a>
                        <a href="{{ route('akun.g') }}"><button class="btn btn-sm btn-falcon-default mx-2"
                                type="button"><span data-fa-transform="shrink-3" class="fas fa-unlock-alt"></span>
                            </button></a>
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-print"></i></button>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-success" target="_blank"
                                    href="{{ route('kar.p.excel', Crypt::EncryptString(Auth::user()->id)) }}"><i
                                        class="fas fa-file-excel"></i>
                                    Print Excel
                                </a>
                                <a class="dropdown-item text-warning" target="_blank"
                                    href="{{ route('kar.p.pdf', Crypt::EncryptString(Auth::user()->id)) }}"><i
                                        class="fas fa-file-pdf"></i>
                                    Print PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <div class="tab-content">

                <div class="tab-pane active" id="popularPaid" role="tabpanel" aria-labelledby="popularPaid-tab">
                    <div id="tableExample3"
                        data-list='{"valueNames":["id","nik","no","tgl","nama","jab","tipe","kimper","tgl2","agama","status"],"page":10,"pagination":true,"filter":{"key":"jab"}}'>
                        @if ($all_aktif == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                                <div class="col-sm-3">
                                    <form>
                                        <div class="input-group"><input
                                                class="form-control form-control-sm shadow-none search" type="search"
                                                placeholder="Pencarian..." aria-label="search" />
                                        </div>
                                    </form>
                                </div>&nbsp;
                                <div class="col-sm-3 ">
                                    <select class="form-select form-select-sm" aria-label="Bulk actions"
                                        data-list-filter="data-list-filter">
                                        <option selected="" value="">Filter: Jabatan</option>
                                        @foreach ($jab_f as $item)
                                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>&nbsp;
                            </div>
                            <div class="table-responsive scrollbar">
                                <table class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center">
                                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap"
                                                data-sort="no">
                                                #
                                            </th>
                                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                                Aksi
                                            </th>
                                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap"
                                                data-sort="nik">
                                                NIK
                                            </th>
                                            <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                                data-sort="nama">
                                                Nama
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="jab">
                                                Jabatan
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl">
                                                Tgl Gabung
                                            </th>
                                            <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                                data-sort="kimper">
                                                KIMPER
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl2">
                                                ED KIMPER
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="agama">
                                                Agama
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="agama">
                                                Tipe Income
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list">
                                        @foreach ($aktif as $res)
                                            <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="align-middle text-1000 text-center white-space-nowrap no">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                    <div class="btn-group  btn-group-sm" role="group">
                                                        <a href="{{ route('kar.i', Crypt::encryptString($res->id)) }}"
                                                            class="btn btn-info" type="button" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Detail Karyawan"><i
                                                                class="fas fa-info-circle"></i></a>
                                                        <a href="{{ route('kar.e', Crypt::encryptString($res->id)) }}"
                                                            class="btn btn-warning" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit Karyawan"><i class="fas fa-edit"></i></a>
                                                        <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#hapus-{{ $res->id }}"
                                                            data-bs-placement="top" title="Absensi Karyawan"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap nik">
                                                    @if ($res->username)
                                                        {{ $res->username }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap nama">
                                                    @if ($res->name)
                                                        {{ $res->name }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap jab">
                                                    @if ($res->jabatan)
                                                        {{ $res->jabatan }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                                    {{ $res->tgl_gabung->format('d-m-Y') }}
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap kimper">
                                                    @if ($res->kimper)
                                                        {{ $res->kimper }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap tgl2">
                                                    @if ($res->ed_kimper)
                                                        {{ $res->ed_kimper->format('d-m-Y') }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap agama">
                                                    @if ($res->agama)
                                                        {{ $res->agama }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap tipe">
                                                    @if ($res->tipe_gaji)
                                                        {{ $res->tipe_gaji }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex justify-content-center mt-3 mb-3"><button
                                    class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                                    type="button" title="Next" data-list-pagination="next"><span
                                        class="fas fa-chevron-right"> </span></button>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="tab-pane" id="popularFree" role="tabpanel" aria-labelledby="popularFree-tab">
                    <div id="tableExample4"
                        data-list='{"valueNames":["id","nik","no","tgl","nama","jab","tipe","kimper","tgl2","agama","status"],"filter":{"key":"jab"}}'>
                        @if ($all_cek == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                                <div class="col-sm-3">
                                    <form>
                                        <div class="input-group"><input
                                                class="form-control form-control-sm shadow-none search" type="search"
                                                placeholder="Pencarian..." aria-label="search" />
                                        </div>
                                    </form>
                                </div>&nbsp;
                                <div class="col-sm-3 ">
                                    <select class="form-select form-select-sm" aria-label="Bulk actions"
                                        data-list-filter="data-list-filter">
                                        <option selected="" value="">Filter: Jabatan</option>
                                        @foreach ($jab_f as $item)
                                            <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                        @endforeach
                                    </select>
                                </div>&nbsp;
                            </div>
                            <div class="table-responsive scrollbar">
                                <table class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center">
                                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap"
                                                data-sort="no">
                                                #
                                            </th>
                                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                                Aksi
                                            </th>
                                            <th style="min-width: 50px" class="sort align-middle white-space-nowrap"
                                                data-sort="nik">
                                                NIK
                                            </th>
                                            <th style="min-width: 200px" class="sort align-middle white-space-nowrap"
                                                data-sort="nama">
                                                Nama
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="jab">
                                                Jabatan
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl">
                                                Tgl Gabung
                                            </th>
                                            <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                                data-sort="kimper">
                                                KIMPER
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl2">
                                                ED KIMPER
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="agama">
                                                Agama
                                            </th>
                                            <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="agama">
                                                Tipe Income
                                            </th>
                                            <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                                data-sort="status">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list">
                                        @foreach ($all as $res)
                                            <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="align-middle text-1000 text-center white-space-nowrap no">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                    <div class="btn-group  btn-group-sm" role="group">
                                                        <a href="{{ route('kar.i', Crypt::encryptString($res->id)) }}"
                                                            class="btn btn-info" type="button" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Detail Karyawan"><i
                                                                class="fas fa-info-circle"></i></a>
                                                        <a href="{{ route('kar.e', Crypt::encryptString($res->id)) }}"
                                                            class="btn btn-warning" type="button"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Edit Karyawan"><i class="fas fa-edit"></i></a>
                                                        <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#hapus-{{ $res->id }}"
                                                            data-bs-placement="top" title="Absensi Karyawan"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap nik">
                                                    @if ($res->username)
                                                        {{ $res->username }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap nama">
                                                    @if ($res->name)
                                                        {{ $res->name }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 white-space-nowrap jab">
                                                    @if ($res->jabatan)
                                                        {{ $res->jabatan }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                                    {{ $res->tgl_gabung->format('d-m-Y') }}
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap kimper">
                                                    @if ($res->kimper)
                                                        {{ $res->kimper }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap tgl2">
                                                    @if ($res->ed_kimper)
                                                        {{ $res->ed_kimper->format('d-m-Y') }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap agama">
                                                    @if ($res->agama)
                                                        {{ $res->agama }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-1000 text-center white-space-nowrap tipe">
                                                    @if ($res->tipe_gaji)
                                                        {{ $res->tipe_gaji }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center text-1000 white-space-nowrap tipe">
                                                    @if ($res->status == 'Aktif')
                                                        <span class="badge rounded-pill bg-info">Aktif</span>
                                                    @else
                                                        @if ($res->status == 'Resign')
                                                            <span class="badge rounded-pill bg-danger">Resign</span>
                                                        @else
                                                            @if ($res->status == 'Mutasi')
                                                                <span class="badge rounded-pill bg-warning">Mutasi</span>
                                                            @else
                                                                @if ($res->status == 'Mutasi')
                                                                    <span
                                                                        class="badge rounded-pill bg-warning">Mutasi</span>
                                                                @else
                                                                    <span class="badge rounded-pill bg-dark text-white">PHK</span>
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div class="card-footer py-2 bg-light">
            {{-- // --}}
        </div>
    </div>

    @include('comp.modal.kar.modal_kar_delete')
@endsection
