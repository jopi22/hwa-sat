@extends('layouts.layout')

@section('judul')
    Overtime | Rekapitulasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    <div class="card mb-3 bg-100 shadow-none border">
        <div class="row gx-0 flex-between-center">
            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                    src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
                <div>
                    <h6 class="text-primary fs--1 mb-0"><i class="fas fa-wrench"></i> Mechanic Division
                    </h6>
                    <h4 class="text-primary fw-bold mb-0">Overtime</h4>
                </div>
            </div>
            <div class="col-sm-auto d-flex align-items-center">
                <form class="row align-items-center g-3">
                    <div class="col-auto">
                        <h6 class="text-danger mb-0">Rekapitulasi Master :</h6>
                    </div>
                    <div class="col-md-auto">
                        <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                    </div>
                </form>
                <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/illustrations/ticket-bg.png') }}"
                    alt="" width="150" />
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light">
            <div class="row flex-between-left">
                <div class="col-auto ms-2">
                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                        <a href="{{ route('r.ot.l') }}"><button class="btn btn-sm text-primary" type="button"><i
                                    class="fas fa-wrench"></i> Helper</button></a>
                        <a href="{{ route('r.ot.k') }}"><button class="btn active btn-sm text-warning" type="button"><i
                                    class="fas fa-users"></i>
                                Overtime</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="tableExample4" data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
            <div class="row justify-content-left ms-3 mt-3 mb-3 g-0">
                <div class="col-auto col-sm-3">
                    <form>
                        <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                type="search" placeholder="Pencarian..." aria-label="search" />
                        </div>
                    </form>
                </div>&nbsp;
                <div class="col-auto col-sm-3 ">
                    <select class="form-select form-select-sm" aria-label="Bulk actions"
                        data-list-filter="data-list-filter">
                        <option selected="" value="">Filter: Jabatan</option>
                        @foreach ($jabatan as $asu)
                            <option value="{{ $asu->jabatan }}">{{ $asu->jabatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('r.ot.k.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                        rel="noopener noreferrer">
                        <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                        </button>
                    </a>
                </div>
            </div>
            @if ($cek_perform == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-sm table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 50px" class="bg-secondary text-white align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 80px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                    NIK
                                </th>
                                <th style="min-width: 200px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="nama">
                                    Helper / Mekanik
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="payment">
                                    Jabatan
                                </th>
                                <th style="min-width: 80px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="hm">
                                    Jam Total
                                </th>
                                <th style="min-width: 80px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="ins">
                                    Total Lemburan (Rp)</th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($kar_list as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $loop->iteration }}</td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        <a href="{{ route('r.ot.k.i', Crypt::encryptString($res->id)) }}"
                                            class="btn btn-info btn-sm"><span class="fas fa-info-circle"></span>
                                            Lihat
                                        </a>
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        @if ($res->kar_id)
                                            K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 white-space-nowrap nama">
                                        @if ($res->kar_id)
                                            {{ $res->kar_->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                        @if ($res->kar_id)
                                            {{ $res->kar_->jabatan }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 bg-100 text-center white-space-nowrap hm">
                                        @if ($res->jam_total)
                                            {{ $res->jam_total }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 bg-200 text-center white-space-nowrap ins">
                                        @if ($res->lemburan)
                                            <h6 data-countup='{"duration":0,"endValue":{{ $res->lemburan }}}'>0
                                            </h6>
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
        <div class="card-footer bg-light">
            {{-- // --}}
        </div>
    </div>
@endsection
