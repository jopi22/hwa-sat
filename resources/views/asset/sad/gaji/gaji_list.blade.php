@extends('layouts.layout')

@section('judul')
    Income | HWA &bull; SAT
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
    <div class="card mb-2 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-coins"></i> Finance Divison <span
                        class="text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                <h4 class="mb-0 text-primary fw-bold">Penghasilan Karyawan
                    <span class="text-info fw-medium"></span>
                </h4>
            </div>
        </div>
    </div>

        @include('comp.alert')

        {{-- <div class="card mb-2 bg-line-chart-gradient">
            <div class="card-body py-5 py-sm-3 bg-transparent light">
                <div class="row g-5 g-sm-0">
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Gaji Pokok Total</h6>
                                <h5 class="text-white"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $pokok }}}'>0</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Insentif Total</h6>
                                <h5 class="text-white"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $insentif }}}'>0</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Lemburan Total</h6>
                                <h5 class="text-white"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $lemburan }}}'>0</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Grand Total</h6>
                                <h5 class="text-white"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $grand }}}'>0</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="card mb-3">
            <div class="card-header bg-light py-2">
                {{-- // --}}
            </div>
            <div id="tableExample4"
                data-list='{"valueNames":["nama","id", "tipe","ins","hm"],"filter":{"key":"tipe"}}'>
                <div class="row mt-2 ms-3 mb-2 g-0">
                    <div class="col-6">
                        <div class="row g-1">
                            <div class="col-sm-6">
                                <form>
                                    <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                            type="search" placeholder="Pencarian..." aria-label="search" />
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-6 ">
                                <select class="form-select form-select-sm" aria-label="Bulk actions"
                                    data-list-filter="data-list-filter">
                                    <option selected="" value="">Filter: Tipe Income</option>
                                    @foreach ($kar_list as $item)
                                        <option value="{{ $item->tipe_gaji }}">{{ $item->tipe_gaji }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive scrollbar">
                    <table class="table table-striped table-sm table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px" class="bg-secondary text-white align-middle white-space-nowrap">
                                    Aksi
                                </th>
                                <th style="min-width: 50px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                    ID Karyawan
                                </th>
                                <th style="min-width: 350px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="nama">
                                    Nama
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap "
                                    data-sort="payment" data-sort="payment">
                                    Jabatan
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="tipe">
                                    Tipe Income
                                </th>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($kar_list as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        <a href="{{ route('g.i', Crypt::encryptString($res->kar_id)) }}"
                                            class="btn btn-info btn-sm"><span class="fas fa-info-circle"></span> Lihat</a>
                                    </td>
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $loop->iteration }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        @if ($res->kar_id)
                                            {{ $res->kar_->username }}
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
            </div>
            <div class="card-footer bg-light py-2">
                {{-- // --}}
            </div>
        </div>
    @else
    @include('comp.card.card404')
    @endif
@endsection
