@extends('layouts.layout')

@section('judul')
    Kas Perusahaan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
    @if ($master->periode == $periode)
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                    width="90" />
                <div>
                    <h6 class="text-primary fs--1 mb-0"><i class="fas fa-coins"></i> Finance Division
                    </h6>
                    <h4 class="text-primary fw-bold mb-0">Kas Perusahaan</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <h6 class="text-info mb-0">Master Present :</h6>
                    </div>
                    <div class="col-md-auto">
                        <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block"
                    src="{{ asset('assets/img/illustrations/ticket-bg.png') }}" alt=""
                    width="150" />
            </div>
        </div>
    </div>
        @include('comp.alert')

        <div class="card mb-3">
            <div class="card-body py-5 py-sm-3">
                <div class="row g-5 g-sm-0">
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-warning">Total Kredit Pusat</h6>
                                <h3 class="fw-normal text-warning"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $kredit_p }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-success">Total Debit</h6>
                                <h3 class="fw-normal text-success"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $debit }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-danger">Total Kredit</h6>
                                <h3 class="fw-normal text-danger"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $kredit }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-primary">Total Saldo</h6>
                                <h3 class="fw-normal text-primary"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $saldo }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-light d-flex flex-between-center py-2">
                {{-- // --}}
            </div>
            <div id="tableExample4"
                data-list='{"valueNames":["id","no","tgl","unit","rem","tipe","des"],"filter":{"key":"tipe"}}'>
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
                            <option selected="" value="">Filter: Tipe Kas</option>
                            <option value="Debit">Debit</option>
                            <option value="Kredit">Kredit</option>
                            <option value="Kredit Pusat">Kredit Pusat</option>
                        </select>
                    </div>&nbsp;
                    <div class="col-sm-3">
                        <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="fas fa-plus text-success"
                                data-fa-transform="shrink-3"></span><span
                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                        </button>
                        <a href="{{ route('kas.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                            rel="noopener noreferrer">
                            <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                            </button>
                        </a>
                    </div>
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr class="text-center">
                                    <th style="min-width: 50px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap">
                                        Aksi
                                    </th>
                                    <th style="min-width: 50px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                        #
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="tipe">
                                        Tipe
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-primary text-white align-middle white-space-nowrap">
                                        Jumlah (Rp)
                                    </th>
                                    <th style="min-width: 400px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="unit">
                                        Rincian
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($kas as $res)
                                    <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-1000 text-center white-space-nowrap id">
                                            <div class="btn-group  btn-group-sm" role="group">
                                                <a href="javascript:void(0)" data-bs-target="#edit-{{ $res->id }}"
                                                    data-id="{{ $res->id }}" data-bs-toggle="modal"
                                                    class="btn btn-warning" type="button"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0)" data-bs-target="#hapus-{{ $res->id }}"
                                                    data-id="{{ $res->id }}" data-bs-toggle="modal"
                                                    class="btn btn-danger" type="button"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap id">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-center text-1000 white-space-nowrap tipe">
                                            @if ($res->tipe == 'Debit')
                                                <span class="badge bg-success rounded-pill bg-sm"><i
                                                        class="fas fa-plus-circle"></i> Debit</span>
                                            @else
                                                @if ($res->tipe == 'Kredit')
                                                    <span class="badge bg-danger rounded-pill bg-sm"><i
                                                            class="fas fa-minus-circle"></i> Kredit</span>
                                                @else
                                                    @if ($res->tipe == 'Kredit Pusat')
                                                        <span class="badge bg-warning rounded-pill bg-sm "><i
                                                                class="fas fa-minus-circle"></i> Kredit Pusat</span>
                                                    @else
                                                        -
                                                    @endif
                                                @endif
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap">
                                            @if ($res->jumlah)
                                                <h6 data-countup='{"duration":0,"endValue":{{ $res->jumlah }}}'>0
                                                </h6>
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap unit">
                                            @if ($res->rincian)
                                                {{ $res->rincian }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
            <div class="card-footer bg-light py-2">
                {{-- // --}}
            </div>
        </div>
        @include('comp.modal.kas.modal_kas_create')
        @include('comp.modal.kas.modal_kas_edit')
        @include('comp.modal.kas.modal_kas_hapus')
    @else
        @include('comp.card.card404')
    @endif
@endsection
