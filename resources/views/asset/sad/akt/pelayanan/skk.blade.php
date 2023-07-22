@extends('layouts.layout')

@section('judul')
    Data Pengajuan SKK | HWA &bull; SAT
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
<div class="card mb-2 bg-light shadow-none">
    <div class="bg-holder bg-card d-none d-sm-block"
        style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
    <!--/.bg-holder-->
    <div class="card-header d-flex align-items-center z-index-1 p-0"><img
            src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
        <div class="ms-n3">
            <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Human Resource & General Affairs</h6>
            <h4 class="mb-0 text-primary fw-bold">Surat Keterangan Kerja
                <span class="text-info fw-medium"></span></h4>
        </div>
    </div>
</div>

    @include('comp.alert')

    <div class="card overflow-hidden mb-3">
        <div class="card-header bg-light p-0">
            <div class="row">
                <div class="col-auto">
                    <ul class="nav nav-tabs border-0 top-courses-tab flex-nowrap" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 active" role="tab"
                                id="popularPaid-tab" data-bs-toggle="tab" href="#popularPaid" aria-controls="popularPaid"
                                aria-selected="false">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center">
                                        <span class="mt-auto far fas fa-clipboard-list fs-2"></span>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                        <h6 class="mb-0 lh-1">All Data ({{ $all_c }})</h6>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false" role="tab"
                                id="popularFree-tab" data-bs-toggle="tab" href="#popularFree" aria-controls="popularFree"
                                aria-selected="true">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center"><span
                                            class="mt-auto fas fa-envelope fs-2"></span></div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                        <h6 class="mb-0 lh-1">Belum Direspon ({{ $nores_c }})</h6>
                                    </div>
                                </div>
                            </a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link p-x1 mb-0 false" role="tab"
                                id="topPaid-tab" data-bs-toggle="tab" href="#topPaid" aria-controls="topPaid"
                                aria-selected="false">
                                <div class="d-flex gap-1 py-1 pe-3">
                                    <div class="d-flex flex-column flex-between-center">
                                        <span class="mt-auto fas fa-clipboard-check fs-2"></span>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-1 text-700 fs--2 text-nowrap"> Pengajuan</h6>
                                        <h6 class="mb-0 lh-1">Diterima ({{ $ter_c }})</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="tab-content">

                <div class="tab-pane active" id="popularPaid" role="tabpanel" aria-labelledby="popularPaid-tab">
                    <div id="tableExample4"
                        data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                        <div class="row justify-content-center mt-2 g-0">
                            <div class="col-auto col-sm-3">
                                <form>
                                    <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                            type="search" placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>&nbsp;
                            <div class="col-auto col-sm-3">
                                <select class="form-select form-select-sm mb-3" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Filter Status</option>
                                    <option value="Diterima">Diterima</option>
                                    <option value="Belum">Belum Diterima</option>
                                </select>
                            </div>
                        </div>
                        @if ($cek_all == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-sm fs--1 mb-0">
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center">
                                            <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="ss">Aksi
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="idp">ID Pengajuan
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="idk">NIK
                                            </th>
                                            <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                data-sort="name">Nama Karyawan
                                            </th>
                                            <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                data-sort="payment">
                                                Status
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl">Tgl Pengajuan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($all as $res)
                                            <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="align-middle text-center white-space-nowrap ">
                                                    <div class="btn-group  btn-group-sm" role="group">
                                                        <a href="{{ route('skk.i', Crypt::EncryptString($res->id)) }}"
                                                            class="btn btn-info" type="button"><i class="fas fa-eye"></i> Lihat</a>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap idp">
                                                    {{ $res->id }}</td>
                                                <td class="align-middle text-center white-space-nowrap idk">
                                                    {{ $res->kar_->username }}
                                                </td>
                                                <td class="align-middle white-space-nowrap name">
                                                    {{ $res->kar_->name }}
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap payment">
                                                    @if ($res->status == 'Belum')
                                                        <span class="badge rounded-pill bg-secondary">Belum
                                                            Konfirmasi</span>
                                                    @else
                                                        @if ($res->status == 'Diterima')
                                                            <span class="badge rounded-pill bg-success">Diterima</span>
                                                        @else
                                                            <span class="badge rounded-pill bg-danger">Ditolak</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap tgl">
                                                    {{ $res->created_at->format('d-m-Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="tab-pane" id="popularFree" role="tabpanel" aria-labelledby="popularFree-tab">
                    <div id="tableExample4"
                        data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                        <div class="row justify-content-center mt-2 g-0">
                            <div class="col-auto col-sm-3">
                                <form>
                                    <div class="input-group"><input
                                            class="form-control form-control-sm shadow-none mb-3 search" type="search"
                                            placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($cek_nores == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-sm fs--1 mb-0">
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center">
                                            <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="ss">Aksi
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="idp">ID Pengajuan
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="idk">NIK
                                            </th>
                                            <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                data-sort="name">Nama Karyawan
                                            </th>
                                            <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                data-sort="payment">
                                                Status
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl">Tgl Pengajuan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($nores as $res)
                                            <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="align-middle text-center white-space-nowrap ">
                                                    <div class="btn-group  btn-group-sm" role="group">
                                                        @if ($res->status == 'Belum')
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#info-{{ $res->id }}"
                                                                class="btn btn-primary" type="button"><i
                                                                    class="fas fa-file-alt"></i></a>
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#terima-{{ $res->id }}"
                                                                class="btn btn-success" type="button"><i
                                                                    class="fas fa-check-circle"></i></a>
                                                        @else
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#info-{{ $res->id }}"
                                                                class="btn btn-primary" type="button"><i
                                                                    class="fas fa-file-alt"></i></a>
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#sinkron-{{ $res->karyawan }}"
                                                                class="btn btn-info" type="button"><i
                                                                    class="fab fa-slack"></i></a>
                                                        @endif
                                                        {{-- <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                            title="Hapus Surat"><i class="fas fa-trash-alt"></i></a> --}}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap idp">
                                                    {{ $res->id }}</td>
                                                <td class="align-middle text-center white-space-nowrap idk">
                                                    {{ $res->kar_->username }}
                                                </td>
                                                <td class="align-middle white-space-nowrap name">
                                                    {{ $res->kar_->name }}
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap payment">
                                                    @if ($res->status == 'Belum')
                                                        <span class="badge rounded-pill bg-secondary">Belum
                                                            Konfirmasi</span>
                                                    @else
                                                        @if ($res->status == 'Diterima')
                                                            <span class="badge rounded-pill bg-success">Diterima</span>
                                                        @else
                                                            <span class="badge rounded-pill bg-danger">Ditolak</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap tgl">
                                                    {{ $res->created_at->format('d-m-Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="tab-pane" id="topPaid" role="tabpanel" aria-labelledby="topPaid-tab">
                    <div id="tableExample4"
                        data-list='{"valueNames":["idp","idk","name","tgl","payment"],"filter":{"key":"payment"}}'>
                        <div class="row justify-content-center mt-2 g-0">
                            <div class="col-auto col-sm-3">
                                <form>
                                    <div class="input-group"><input
                                            class="form-control form-control-sm mb-3 shadow-none search" type="search"
                                            placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if ($cek_ter == 0)
                            <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                        @else
                            <div class="table-responsive scrollbar">
                                <table class="table table-bordered table-sm fs--1 mb-0">
                                    <thead class="bg-200 text-800">
                                        <tr class="text-center">
                                            <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="ss">Aksi
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="idp">ID Pengajuan
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="idk">NIK
                                            </th>
                                            <th style="width: 400px" class="sort align-middle white-space-nowrap"
                                                data-sort="name">Nama Karyawan
                                            </th>
                                            <th style="width: 200px" class="sort align-middle white-space-nowrap"
                                                data-sort="payment">
                                                Status
                                            </th>
                                            <th style="width: 100px" class="sort align-middle white-space-nowrap"
                                                data-sort="tgl">Tgl Pengajuan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($ter as $res)
                                            <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="align-middle text-center white-space-nowrap ">
                                                    <div class="btn-group  btn-group-sm" role="group">
                                                        @if ($res->status == 'Belum')
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#info-{{ $res->id }}"
                                                                class="btn btn-primary" type="button"><i
                                                                    class="fas fa-file-alt"></i></a>
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#terima-{{ $res->id }}"
                                                                class="btn btn-success" type="button"><i
                                                                    class="fas fa-check-circle"></i></a>
                                                        @else
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#info-{{ $res->id }}"
                                                                class="btn btn-primary" type="button"><i
                                                                    class="fas fa-file-alt"></i></a>
                                                            <a data-bs-toggle="modal"
                                                                data-bs-target="#sinkron-{{ $res->karyawan }}"
                                                                class="btn btn-info" type="button"><i
                                                                    class="fab fa-slack"></i></a>
                                                        @endif
                                                        {{-- <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                                            data-bs-target="#hapus-{{ $res->id }}" data-bs-placement="top"
                                                            title="Hapus Surat"><i class="fas fa-trash-alt"></i></a> --}}
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap idp">
                                                    {{ $res->id }}</td>
                                                <td class="align-middle text-center white-space-nowrap idk">
                                                    {{ $res->kar_->username }}
                                                </td>
                                                <td class="align-middle white-space-nowrap name">
                                                    {{ $res->kar_->name }}
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap payment">
                                                    @if ($res->status == 'Belum')
                                                        <span class="badge rounded-pill bg-secondary">Belum
                                                            Konfirmasi</span>
                                                    @else
                                                        @if ($res->status == 'Diterima')
                                                            <span class="badge rounded-pill bg-success">Diterima</span>
                                                        @else
                                                            <span class="badge rounded-pill bg-danger">Ditolak</span>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap tgl">
                                                    {{ $res->created_at->format('d-m-Y') }}</td>
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
        <div class="card-footer bg-light py-3">
            {{-- // --}}
        </div>
    </div>

    @include('comp.modal.resign.modal_resign_terima')
    @include('comp.modal.resign.modal_resign_sinkron')
    @include('comp.modal.resign.modal_resign_info')
@endsection
