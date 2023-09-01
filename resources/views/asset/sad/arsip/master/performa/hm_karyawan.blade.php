@extends('layouts.layout')

@section('judul')
    Performa O/D | Arsip | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
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

@section('konten')
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
                <a class="btn fw-semi-bold btn-falcon-success btn-sm" href="{{ route('master.gdp', $master->id) }}"
                    data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Master {{ $master->created_at->format('F Y') }}">
                    {{ $master->created_at->format('F Y') }}
                </a>
                <span class="mx-1 mx-sm-2 text-300">| </span>
                <span class=" fw-semi-bold text-primary"> Performance Operator & Driver</span>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-header bg-light">
            {{-- // --}}
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
                </div>&nbsp;
                {{-- <div class="col-auto col-sm-3 ">
                    <a href="{{ route('p.hm.k') }}" target="_blank" rel="noopener noreferrer"><button
                            class="btn btn-sm btn-falcon-info"><i class="fas fa-print"></i> Print</button></a>
                </div> --}}
            </div>
            @if ($cek_perform == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                        <thead class="bg-200 text-800">
                            <tr class="text-center">
                                <th style="min-width: 50px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 120px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                    ID O/D
                                </th>
                                <th style="min-width: 350px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="nama">
                                    Nama
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="payment">
                                    Jabatan
                                </th>
                                <th style="min-width: 100px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="hm">
                                    Grand Total HM
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap" data-sort="ins">
                                    Total Insentif (Rp)</th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($kar_list as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
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
                                    <td class="align-middle text-1000 text-center white-space-nowrap hm">
                                        @if ($res->hm_total)
                                            {{ $res->hm_total }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap ins">
                                        @if ($res->insentif)
                                            <h6 data-countup='{"duration":0,"endValue":{{ $res->insentif }}}'>0
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
