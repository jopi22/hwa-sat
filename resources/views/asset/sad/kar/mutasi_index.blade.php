@extends('layouts.layout')

@section('judul')
    Mutasi & PHK | HWA &bull; SAT
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
                    <h4 class="mb-0 text-primary fw-bold">Mutasi & PHK</h4>
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
        <div class="card-header py-2 bg-light">
            {{-- // --}}
        </div>
        <div id="tableExample3"
            data-list='{"valueNames":["id","nik","no","tgl","name","site","tgl","kimper","tgl2","agama","status"],"page":10,"pagination":true,"filter":{"key":"site"}}'>
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
                        <option selected="" value="">Filter: Site</option>
                        @foreach ($site as $item)
                            <option value="{{ $item->nama }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>&nbsp;
                {{-- <div class="col-sm-auto">
                    <div class="btn-group  btn-group-sm mx-2" role="group">
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-falcon-default mx-2 dropdown-toggle" id="dropdownMenuButton"
                                type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-print"></i></button>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-warning" target="_blank"
                                    href="{{ route('mut.p.pdf', Crypt::EncryptString(Auth::user()->id)) }}"><i
                                        class="fas fa-file-pdf"></i>
                                    Print PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                <th style="min-width: 80px" class="sort align-middle white-space-nowrap" data-sort="nik">
                                    NIK
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="name">
                                    Nama Karyawan
                                </th>
                                <th style="min-width: 200px" class="sort align-middle white-space-nowrap" data-sort="site">
                                    Site
                                </th>
                                <th style="min-width: 100px" class="sort align-middle white-space-nowrap" data-sort="site">
                                    PHK
                                </th>
                                <th style="min-width: 500px" class="sort align-middle white-space-nowrap">
                                    Pilih Site Mutasi
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($kar as $res)
                                <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-1000 text-center white-space-nowrap no">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap nik">
                                        @if ($res->username)
                                            {{ $res->username }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap name">
                                        @if ($res->name)
                                            {{ $res->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        @if ($res->site_id)
                                            {{ $res->site_->nama }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap site">
                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="PHK">
                                            <input type="hidden" name="tgl_mutasi" value="{{ date('d-m-Y') }}">
                                            <button type="submit" class="btn btn-sm btn-dark">
                                                PHK</button>
                                        </form>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        @if ($res->status == 'Resign')
                                            Resign
                                        @else
                                            <div class="row">
                                                @if ($res->site_id == 1)
                                                    <div class="col-lg-2">
                                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="site_id" value="2">
                                                            <input type="hidden" name="status" value="Mutasi">
                                                            <input type="hidden" name="tgl_mutasi"
                                                                value="{{ date('d-m-Y') }}">
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                Air Upas</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-2 ms-2">
                                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="site_id" value="3">
                                                            <input type="hidden" name="status" value="Mutasi">
                                                            <input type="hidden" name="tgl_mutasi"
                                                                value="{{ date('d-m-Y') }}">
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                Melak</button>
                                                        </form>
                                                    </div>
                                                @endif
                                                @if ($res->site_id == 2)
                                                    <div class="col-lg-2">
                                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="site_id" value="1">
                                                            <input type="hidden" name="status" value="Mutasi">
                                                            <input type="hidden" name="tgl_mutasi"
                                                                value="{{ date('d-m-Y') }}">
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                Sandai</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-2 ms-2">
                                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="site_id" value="3">
                                                            <input type="hidden" name="status" value="Mutasi">
                                                            <input type="hidden" name="tgl_mutasi"
                                                                value="{{ date('d-m-Y') }}">
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                Melak</button>
                                                        </form>
                                                    </div>
                                                @endif
                                                @if ($res->site_id == 3)
                                                    <div class="col-lg-2">
                                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="site_id" value="1">
                                                            <input type="hidden" name="status" value="Mutasi">
                                                            <input type="hidden" name="tgl_mutasi"
                                                                value="{{ date('d-m-Y') }}">
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                Sandai</button>
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <form action="{{ route('mut.s', $res->id) }}" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <input type="hidden" name="site_id" value="2">
                                                            <input type="hidden" name="status" value="Mutasi">
                                                            <input type="hidden" name="tgl_mutasi"
                                                                value="{{ date('d-m-Y') }}">
                                                            <button type="submit" class="btn btn-sm btn-primary">
                                                                Air Upas</button>
                                                        </form>
                                                    </div>
                                                @endif
                                            </div>
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

@endsection
