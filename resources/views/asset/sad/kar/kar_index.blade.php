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

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> SDM <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="fas fa-key"></i>
                </span></h6>
                <h4 class="mb-0 text-primary fw-bold">Karyawan</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","no","tgl","nama","jab","tipe","status"],"page":10,"pagination":true,"filter":{"key":"status"}}'>
            <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                <div class="col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
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
                <div class="col-sm-auto">
                    <div class="btn-group  btn-group-sm mx-2" role="group">
                        <a href="{{ route('kar.c') }}"><button class="btn btn-sm btn-falcon-success mx-2"
                                type="button"><span data-fa-transform="shrink-3" class="fas fa-plus"></span> </button></a>
                        <a href="{{ route('akun.g') }}"><button class="btn btn-sm btn-falcon-default mx-2"
                                type="button"><span data-fa-transform="shrink-3" class="fas fa-unlock-alt"></span>
                            </button></a>
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-print"></i></button>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i>
                                    Print Excel
                                </a>
                                <a class="dropdown-item text-warning" href="#!"><i class="fas fa-file-pdf"></i>
                                    Print PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered mb-0 fs--1 overflow-hidden">
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="id">
                                    ID
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="nama">
                                    Nama
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="jab">
                                    Jabatan
                                </th>
                                <th style="min-width: 100px" class="sort  align-middle white-space-nowrap"
                                    data-sort="status">
                                    Status
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="tipe">
                                    Tipe Income
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Tgl Gabung
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($kar as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a href="{{ route('kar.i', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-info" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Detail Karyawan"><i
                                                    class="fas fa-info-circle"></i></a>
                                            <a href="{{ route('kar.e', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-warning" type="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Edit Karyawan"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                title="Absensi Karyawan"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        @if ($res->tgl_gabung)
                                            K{{ $res->tgl_gabung->format('ym') }}{{ $res->id }}
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
                                                    <span class="id fs--1 text-400">Kosong</span>
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tipe">
                                        @if ($res->tipe_gaji == 'A')
                                            Gaji Pokok
                                        @else
                                            @if ($res->tipe_gaji == 'AI')
                                                Gaji Pokok + Insentif
                                            @else
                                                @if ($res->tipe_gaji == 'AL')
                                                    Gaji Pokok + Lemburan
                                                @else
                                                    -
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap tgl">
                                        {{ $res->tgl_gabung->format('d-m-Y') }}
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

    @include('comp.modal.kar.modal_kar_delete')
@endsection
