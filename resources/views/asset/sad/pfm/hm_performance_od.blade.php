@extends('layouts.layout')

@section('judul')
    Performance Operator & Driver | HWA &bull; SAT
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
    <script src="{{ asset('vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('konten')
    @if ($master->periode == $periode)
        @if ($master->ket2 == 1)
            @if ($master->ket1 == 1)
            <div class="card mb-3 bg-100 shadow-none border">
                <div class="row gx-0 flex-between-center">
                    <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                            src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                            width="90" />
                        <div>
                            <h6 class="text-primary fs--1 mb-0"><i class="fas fa-truck-monster"></i> Rental Performance
                            </h6>
                            <h4 class="text-primary fw-bold mb-0">Performance Operator & Driver</h4>
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

                <div class="card overflow-hidden mb-3">
                    <div class="card-header bg-light">
                        <div class="row flex-between-left">
                            <div class="col-auto ms-2">
                                <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                                    <a href="{{ route('hm.p') }}"><button class="btn btn-sm text-primary" type="button"><i
                                                class="fas fa-stopwatch"></i> Hours Meter</button></a>
                                    <a href="{{ route('hm.p.u') }}"><button class="btn btn-sm text-primary"
                                            type="button"><i class="fas fa-truck-monster"></i>
                                            Unit</button></a>
                                    <a href="{{ route('hm.p.od') }}"><button class="btn btn-sm active text-warning"
                                            type="button"><i class="fas fa-users"></i> Operator &
                                            Driver</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="tableExample4"
                            data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                            @if ($cek_perform == 0)
                                <div class="row align-items-center">
                                    <div class="col-lg-12 ps-lg-4 my-5 text-center text-lg-start">
                                        <h5 class="text-secondary text-center">-- Data Kosong --</h5>
                                    </div>
                                </div>
                            @else
                                <div class="row mt-2 mb-2 ms-3 g-0">
                                    <div class="col-sm-3">
                                        <form>
                                            <div class="input-group"><input
                                                    class="form-control form-control-sm shadow-none search" type="search"
                                                    placeholder="Pencarian..." aria-label="search" />
                                            </div>
                                        </form>
                                    </div>&nbsp;
                                    <div class="col-sm-3 ">
                                        <select class="form-select form-select-sm" aria-label="Bulk actions"
                                            data-list-filter="data-list-filter">
                                            <option selected="" value="">Filter: Jabatan</option>
                                            @foreach ($jab as $item)
                                                <option value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-auto">
                                        <div class="btn-group  btn-group-sm mx-2" role="group">
                                            <a href="{{ route('hm.od.p.excel', Crypt::EncryptString(Auth::user()->id)) }}"
                                                target="_blank" rel="noopener noreferrer">
                                                <button class="btn btn-sm btn-falcon-success mx-2"><i
                                                        class="fas fa-file-excel"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive scrollbar">
                                    <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                        <thead class="bg-200 text-800">
                                            <tr class="text-center">
                                                <th style="min-width: 50px"
                                                    class="bg-secondary text-white align-middle white-space-nowrap">
                                                    Aksi
                                                </th>
                                                <th style="min-width: 50px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="no">
                                                    #
                                                </th>
                                                <th style="min-width: 120px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="id">
                                                    ID O/D
                                                </th>
                                                <th style="min-width: 350px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="nama">
                                                    Nama
                                                </th>
                                                <th style="min-width: 150px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="payment">
                                                    Jabatan
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-primary text-white align-middle white-space-nowrap"
                                                    data-sort="hm">
                                                    Grand Total HM
                                                </th>
                                                <th style="min-width: 150px"
                                                    class="sort bg-primary text-white align-middle white-space-nowrap"
                                                    data-sort="ins">
                                                    Total Insentif (Rp)</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-posts" class="list">
                                            @foreach ($kar_list as $res)
                                                <tr id="index_{{ $res->id }}"
                                                    class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                        <a href="{{ route('hm.k.i', Crypt::encryptString($res->id)) }}"
                                                            class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i>
                                                            Lihat
                                                        </a>
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
                                                    <td
                                                        class="align-middle text-1000 text-center white-space-nowrap payment">
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
                                                            <h6
                                                                data-countup='{"duration":0,"endValue":{{ $res->insentif }}}'>
                                                                0
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
                    </div>
                    <div class="card-footer bg-light py-3">
                    </div>
                </div>
            @else
                @include('comp.card.card404_karyawan')
            @endif
        @else
            @include('comp.card.card404_equipment')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
