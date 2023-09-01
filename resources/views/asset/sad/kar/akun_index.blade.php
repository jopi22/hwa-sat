@extends('layouts.layout')

@section('judul')
    Kelola Pengguna | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
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
                    <h4 class="mb-0 text-primary fw-bold">Kelola Pengguna</h4>
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
            data-list='{"valueNames":["id","name","username","status","level"],"page":10,"pagination":true}'>
            <div class="row ms-3 mt-2 mb-2 g-0 flex-between-left">
                <div class="col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>
                {{-- <div class="col-sm-auto">
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
                </div> --}}
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped table-bordered fs--1 mb-0 overflow-hidden">
                    <thead class="bg-200 text-800 text-center">
                        <tr>
                            <th style="max-width: 50px" class="sort" data-sort="#">#</th>
                            <th style="min-width: 100px" class="sort" data-sort="aksi">Aksi</th>
                            <th style="min-width: 100px" class="sort" data-sort="status">Status Akun</th>
                            <th style="min-width: 200px" class="sort" data-sort="username">
                                NIK / ID</th>
                            <th style="min-width: 300px" class="sort" data-sort="name">
                                Nama</th>
                            <th style="min-width: 100px" class="sort" data-sort="password">Password</th>
                            <th style="min-width: 200px" class="sort" data-sort="level">Role Akun</th>
                        </tr>
                    </thead>
                    <tbody id="table-posts" class="list">
                        @foreach ($kar as $res)
                            <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                <td class="text-black text-center fw-semi-bold">{{ $loop->iteration }}</td>
                                <td class="align-middle text-1000 text-center white-space-nowrap id">
                                    <div class="btn-group  btn-group-sm" role="group">
                                        @if ($res->level == 1)
                                            <span class="id fs--1 text-400"><i>Hidden</i></span>
                                        @else
                                            @if ($res->level == 2)
                                                <button data-bs-toggle="modal" data-bs-target="#reset-{{ $res->id }}"
                                                    class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                            @else
                                                @if ($res->level == null)
                                                    <form action="{{ route('akun.n.a', $res->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="password" value="hwa">
                                                        <input type="hidden" name="level" value="4">
                                                        <button type="submit" class="btn btn-sm btn-success"><i
                                                                class="fas fa-power-off"></i></button>
                                                    </form>
                                                @else
                                                    @if ($res->password)
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#off-{{ $res->id }}"
                                                            class="btn btn-danger"><i class="fas fa-power-off"></i></button>
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#reset-{{ $res->id }}"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                                    @endif
                                                    @if ($res->password == null)
                                                        <button data-bs-toggle="modal"
                                                            data-bs-target="#on-{{ $res->id }}"
                                                            class="btn btn-info"><i class="fas fa-power-off"></i></button>
                                                        {{-- <button data-bs-toggle="modal"
                                                            data-bs-target="#reset-{{ $res->id }}"
                                                            class="btn btn-warning"><i class="fas fa-edit"></i></button> --}}
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    </div>
                                </td>
                                <td class="text-black text-center fw-semi-bold align-middle white-space-nowrap">
                                    @if ($res->level == null)
                                        <span class="badge rounded-pill bg-secondary">Baru</span>
                                    @else
                                        @if ($res->password == null)
                                            <span class="badge rounded-pill bg-danger">Tidak Aktif</span>
                                        @else
                                            <span class="badge rounded-pill bg-info">Aktif</span>
                                        @endif
                                    @endif
                                </td>
                                <td
                                    class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                                    @if ($res->username)
                                        {{ $res->username }}
                                    @else
                                        -
                                    @endif
                                </td>
                                <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                                    {{ $res->name }}</td>
                                <td
                                    class="text-black fw-semi-bold text-center align-middlefs-0 white-space-nowrap payment">
                                    @if ($res->level == 1)
                                        <span class="id fs--1 text-400"><i>Hidden</i></span>
                                    @else
                                        @if ($res->level == null)
                                            -
                                        @else
                                            @if ($res->password == null)
                                                -
                                            @else
                                                <button class="btn btn-info btn-sm" type="button"
                                                    data-bs-container="body" data-bs-toggle="popover"
                                                    data-bs-placement="top"
                                                    data-bs-content="{{ $res->password_view }}"><i
                                                        class="fas fa-eye"></i></button>
                                            @endif
                                        @endif
                                    @endif
                                </td>
                                <td class="text-black text-center fw-semi-bold align-middle white-space-nowrap level">
                                    @if ($res->level == 1)
                                        Developer
                                    @else
                                        @if ($res->level == 2)
                                            Superadmin
                                        @else
                                            @if ($res->level == 3)
                                                Admin
                                            @else
                                                @if ($res->level == 4)
                                                    Pekerja
                                                @else
                                                    -
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
            <div class="d-flex justify-content-center mt-3 mb-3"><button class="btn btn-sm btn-falcon-default me-1"
                    type="button" title="Previous" data-list-pagination="prev"><span
                        class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                    title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
            </div>
        </div>
        <div class="card-footer py-2 bg-light">
            {{-- // --}}
        </div>
    </div>

    @include('comp.modal.akun.modal_akun_nonaktif')
    @include('comp.modal.akun.modal_akun_aktif')
    @include('comp.modal.akun.modal_akun_edit')
@endsection
