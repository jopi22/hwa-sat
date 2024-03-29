@extends('layouts.layout')

@section('judul')
    Rekap Sewa Hours Meter | Rekapitulasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal_rekap')
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
    <div class="card mb-2 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-coins"></i> Finance Division <span
                        class="text-danger">{{ $master->created_at->format('F Y') }}</span></h6>
                <h4 class="mb-0 text-primary fw-bold">Rekap Biaya Sewa HM<span class="text-info fw-medium"></span></h4>
            </div>
        </div>
    </div>

    <div class="card mb-2 bg-line-chart-gradient">
        <div class="card-body py-5 py-sm-3 bg-transparent light">
            <div class="row g-5 g-sm-0">
                <div class="col-sm-4">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-white fw-normal">Potongan HM</h6>
                            <h5 class=" text-white" data-countup='{"endValue":{{ $t_pot }}}'>0
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-white fw-normal">Total HM</h6>
                            <h5 class=" text-white" data-countup='{"endValue":{{ $t_hm }}}'>0</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div>
                        <div class="text-center">
                            <h6 class="fw-normal text-white">Total HM Manual</h6>
                            <h5 class=" text-white" data-countup='{"endValue":{{ $t_jam }}}'>0</h5>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-5 g-sm-0">
                    <div class="col-sm-4">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Grand Total HM</h6>
                                <h5 class=" text-white" data-countup='{"endValue":{{ $hm_grand }}}'>0
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Standar Biaya Sewa per HM</h6>
                                <h5 class="text-white" data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $str_sewa }}}'>
                                    0
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div>
                            <div class="text-center">
                                <h6 class="fw-normal text-white">Grand Total Biaya Sewa</h6>
                                <h5 class="text-white" data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $tot_sewa }}}'>
                                    0
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card overflow-hidden mb-3">
        <div class="card-header bg-light">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                            <a href="{{ route('r.hm.sewa') }}"><button class="btn btn-sm active text-warning"
                                    type="button"><i class="fas fa-stopwatch"></i> Hours Meter</button></a>
                            <a href="{{ route('r.unit.sewa') }}"><button class="btn btn-sm text-primary" type="button"><i
                                        class="fas fa-truck-monster"></i>
                                    Unit</button></a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <div class="col-auto pe-0">
                        <a href="{{ route('r.hm.p.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                            rel="noopener noreferrer">
                            <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="tab-content">
                <div id="tableExample4"
                    data-list='{"valueNames":["id","nik","tgl","name","payment","dedi","lok","shift","rem","kode","cat","com","shift"],"page":10,"pagination":true,"filter":{"key":"payment"}}'>
                    <div class="row mt-2 mb-2 ms-3 g-0">
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
                                <option selected="" value="">Filter: No Unit</option>
                                @foreach ($equipment as $item)
                                    <option value="{{ $item->no_unit }}">{{ $item->no_unit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    @if ($cek_perform == 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-bordered mb-0 fs--1"
                                data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true}'>
                                <thead class="bg-200 text-800">
                                    <tr class="text-center bg-secondary text-white">
                                        <th style="min-width: 50px" class="align-middle white-space-nowrap"
                                            data-sort="no">
                                            #
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap"
                                            data-sort="no">
                                            Id HM
                                        </th>
                                        <th style="min-width: 100px" class="sort align-middle white-space-nowrap"
                                            data-sort="tgl">
                                            Tanggal
                                        </th>
                                        <th style="min-width: 80px" class="sort align-middle white-space-nowrap"
                                            data-sort="shift">
                                            Shift
                                        </th>
                                        <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                            data-sort="kode">
                                            Code Unit
                                        </th>
                                        <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                            data-sort="payment">
                                            No Unit
                                        </th>
                                        <th style="min-width: 80px"
                                            class="sort bg-primary align-middle white-space-nowrap">
                                            HM Awal</th>
                                        <th style="min-width: 80px"
                                            class="sort bg-primary align-middle white-space-nowrap text-center">
                                            HM Akhir
                                        </th>
                                        <th style="min-width: 80px"
                                            class="sort bg-primary bg-primary align-middle white-space-nowrap">
                                            HM Total (Hours)
                                        </th>
                                        <th style="min-width: 80px" class="align-middle white-space-nowrap">
                                            Jam Start</th>
                                        <th style="min-width: 80px" class="align-middle white-space-nowrap text-center">
                                            Jam Stop
                                        </th>
                                        <th style="min-width: 80px" class="align-middle white-space-nowrap text-center">
                                            Rest Time
                                        </th>
                                        <th style="min-width: 80px" class="align-middle white-space-nowrap">
                                            Total Jam (Hours)
                                        </th>
                                        <th style="min-width: 80px" class="align-middle bg-primary white-space-nowrap">
                                            Total (Hours)
                                        </th>
                                        <th style="min-width: 150px; max-width: 400px;"
                                            class="sort align-middle white-space-nowrap" data-sort="dedi">
                                            Dedicated
                                        </th>
                                        <th style="min-width: 150px; max-width: 400px;"
                                            class="sort align-middle white-space-nowrap" data-sort="lok">
                                            Location
                                        </th>
                                        <th style="min-width: 80px"
                                            class="sort align-middle bg-primary white-space-nowrap" data-sort="nik">
                                            NIK
                                        </th>
                                        <th style="min-width: 250px; max-width: 400px;"
                                            class="sort align-middle bg-primary white-space-nowrap" data-sort="name">
                                            Operator
                                            / Driver
                                        </th>
                                        <th style="min-width: 150px; max-width: 400px;"
                                            class="sort align-middle white-space-nowrap" data-sort="rem">
                                            Remark
                                        </th>
                                        <th style="min-width: 150px; max-width: 400px;"
                                            class="sort align-middle white-space-nowrap" data-sort="cat">
                                            Category
                                        </th>
                                        <th style="min-width: 200px; max-width: 400px;"
                                            class="sort align-middle white-space-nowrap" data-sort="com">
                                            Combine
                                        </th>
                                        <th style="min-width: 80px"
                                            class="sort bg-danger align-middle white-space-nowrap">
                                            HM
                                            Potongan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($perform_list as $res)
                                        <tr id="index_{{ $res->id }}"
                                            class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-center text-1000 white-space-nowrap">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                {{ $res->id }}</td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                @if ($res->tgl)
                                                    {{ $res->tgl }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap shift">
                                                @if ($res->shift_id)
                                                    {{ $res->shift_->shift }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap kode">
                                                @if ($res->equip_id)
                                                    {{ $res->equip_->kode_unit }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                                @if ($res->equip_id)
                                                    {{ $res->equip_->no_unit }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->hm_awal)
                                                    {{ $res->hm_awal }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->hm_akhir)
                                                    {{ $res->hm_akhir }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-200 text-1000 text-center white-space-nowrap">
                                                @if ($res->hm_total)
                                                    {{ $res->hm_total }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->jam_awal)
                                                    {{ $res->jam_awal->format('H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->jam_akhir)
                                                    {{ $res->jam_akhir->format('H:i') }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->rest_time)
                                                    {{ $res->rest_time }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-200 text-1000 text-center white-space-nowrap">
                                                @if ($res->jam_total)
                                                    {{ $res->jam_total }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td
                                                class="align-middle bg-secondary text-white text-center white-space-nowrap">
                                                @if ($res->hm_total)
                                                    {{ $res->hm_total }}
                                                @else
                                                    {{ $res->jam_total }}
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap dedi">
                                                @if ($res->dedicated_id)
                                                    {{ $res->dedicated_->dedicated }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap lok">
                                                @if ($res->lokasi_id)
                                                    {{ $res->lokasi_->location }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-300 text-1000 text-center white-space-nowrap nik">
                                                @if ($res->kar_id)
                                                    {{ $res->kar_->username }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-200 text-1000 white-space-nowrap name">
                                                @if ($res->kar_id)
                                                    {{ $res->kar_->name }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 white-space-nowrap rem">
                                                @if ($res->remark)
                                                    {{ $res->remark }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middletext-center text-1000 white-space-nowrap cat">
                                                @if ($res->category_id)
                                                    {{ $res->category_->category }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middletext-center text-1000 white-space-nowrap com">
                                                @if ($res->category_id)
                                                    {{ $res->category_->category }}{{ $res->lokasi_->location }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle bg-200 text-1000 text-center white-space-nowrap">
                                                @if ($res->hm_pot)
                                                    {{ $res->hm_pot }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-3 mt-3 d-flex justify-content-center">
                            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                                data-list-pagination="prev">
                                <span class="fas fa-chevron-left"></span>
                            </button>
                            <ul class="pagination mb-0"></ul>
                            <ul class="pagination mb-0"></ul>
                            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                                data-list-pagination="next">
                                <span class="fas fa-chevron-right"> </span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-footer bg-light py-3">
        </div>
    </div>
@endsection
