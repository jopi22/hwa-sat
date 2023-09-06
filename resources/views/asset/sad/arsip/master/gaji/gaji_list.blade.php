@extends('layouts.layout')

@section('judul')
    Penghasilan Karyawan | Arsip | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
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

@section('superadmin')
<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-archive"></i>
                Arsip</span>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn btn-falcon-default btn-sm" href="{{ route('amast.g') }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Halaman Menu Arsip">
                <span class="fas fa-list"></span>
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn fw-semi-bold btn-falcon-success btn-sm" href="{{ route('master.gdp', $master->id) }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Master {{ $master->created_at->format('F Y') }}">
                {{ $master->created_at->format('F Y') }}
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <span class=" fw-semi-bold text-primary"> Penghasilan Karyawan</span>
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
                            <h6 class="text-700">Gaji Pokok Total</h6>
                            <h3 class="fw-normal text-700"
                                data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $pokok }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Insentif Total</h6>
                            <h3 class="fw-normal text-700"
                                data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $insentif }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Lemburan Total</h6>
                            <h3 class="fw-normal text-700"
                                data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $lemburan }}}'>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-primary">Grand Total</h6>
                            <h3 class="fw-normal text-primary"
                                data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $grand }}}'>0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-light py-2">
            {{-- // --}}
        </div>
        <div id="tableExample4" data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
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
                                <option selected="" value="">Filter: Jabatan</option>
                                @foreach ($jabatan as $item)
                                    <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                    data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                    <thead class="bg-200 text-800">
                        <tr class="text-center">
                            {{-- <th style="min-width: 50px" class="bg-secondary text-white align-middle white-space-nowrap">
                                Aksi
                            </th> --}}
                            <th style="min-width: 50px" class="sort bg-secondary text-white align-middle white-space-nowrap"
                                data-sort="no">
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
                                class="sort bg-secondary text-white align-middle white-space-nowrap " data-sort="payment"
                                data-sort="payment">
                                Jabatan
                            </th>
                            <th style="min-width: 100px"
                                class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="payment">
                                Tipe Income
                            </th>
                    </thead>
                    <tbody id="table-posts" class="list">
                        @foreach ($kar_list as $res)
                            <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                {{-- <td class="align-middle text-center text-1000 white-space-nowrap no">
                                    <a href="{{ route('g.i', Crypt::encryptString($res->kar_id)) }}"
                                        class="btn btn-info btn-sm"><span class="fas fa-info-circle"></span></a>
                                </td> --}}
                                <td class="align-middle text-center text-1000 white-space-nowrap no">
                                    {{ $loop->iteration }}</td>
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

@endsection
