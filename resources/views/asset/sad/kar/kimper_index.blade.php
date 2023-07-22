@extends('layouts.layout')

@section('judul')
    KIMPER | HWA &bull; SAT
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
    <div class="card mb-2 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Human Resource & General Affairs</h6>
                <h4 class="mb-0 text-primary fw-bold">Kartu Izin Mengemudi Perusahaan
                    <span class="text-info fw-medium"></span>
                </h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","nik","no","tgl","name","jab","tgl","kimper","tgl2","agama","status"],"page":10,"pagination":true,"filter":{"key":"jab"}}'>
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
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-print"></i></button>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-warning" target="_blank"
                                    href="{{ route('kim.p.pdf', Crypt::EncryptString(Auth::user()->id)) }}"><i
                                        class="fas fa-file-pdf"></i>
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
                        <thead class="bg-secondary text-white">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="sort align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 180px" class="sort align-middle white-space-nowrap" data-sort="name">
                                    Nama Karyawan
                                </th>
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap" data-sort="jab">
                                    Jabatan
                                </th>
                                <th style="min-width: 20px" class="sort align-middle bg-primary white-space-nowrap">
                                    SIM A
                                </th>
                                <th style="min-width: 20px" class="sort align-middle bg-primary white-space-nowrap">
                                    SIM B1
                                </th>
                                <th style="min-width: 20px" class="sort align-middle bg-primary white-space-nowrap">
                                    SIM B2
                                </th>
                                <th style="min-width: 20px" class="sort align-middle bg-primary white-space-nowrap">
                                    Tes Medis
                                </th>
                                <th style="min-width: 20px" class="sort align-middle bg-primary white-space-nowrap">
                                    KIMPER
                                </th>
                                <th style="min-width: 60px" class="sort align-middle bg-primary white-space-nowrap">
                                    ED KIMPER
                                </th>
                                <th style="min-width: 80px" class="sort align-middle bg-primary white-space-nowrap">
                                    No KIMPER
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($kar as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a class="btn btn-info"
                                                href="{{ route('kar.i', Crypt::EncryptString($res->id)) }}"><i
                                                    class="fas fa-info-circle"></i></a>
                                            <button data-bs-toggle="modal" data-bs-target="#edit-{{ $res->id }}"
                                                class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                        </div>
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap name">
                                        @if ($res->name)
                                            {{ $res->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap jab">
                                        @if ($res->jabatan)
                                            {{ $res->jabatan }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->file_sim_a)
                                            <span class="text text-primary"><i class="fas fa-check-circle"></i></span>
                                        @else
                                            <span class="text text-danger"><i class="fas fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->file_sim_b1)
                                            <span class="text text-primary"><i class="fas fa-check-circle"></i></span>
                                        @else
                                            <span class="text text-danger"><i class="fas fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->file_sim_b2)
                                            <span class="text text-primary"><i class="fas fa-check-circle"></i></span>
                                        @else
                                            <span class="text text-danger"><i class="fas fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->file_tes_medis)
                                            <span class="text text-primary"><i class="fas fa-check-circle"></i></span>
                                        @else
                                            <span class="text text-danger"><i class="fas fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->file_kimper)
                                            <span class="text text-primary"><i class="fas fa-check-circle"></i></span>
                                        @else
                                            <span class="text text-danger"><i class="fas fa-times-circle"></i></span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->ed_kimper)
                                            {{ $res->ed_kimper->format('d-m-Y') }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->kimper)
                                            {{ $res->kimper }}
                                        @else
                                            -
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

    @include('comp.modal.kar.modal_kimper_edit')
@endsection
