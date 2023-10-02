@extends('layouts.layout')

@section('judul')
    Rekap Performance Unit | HWA &bull; SAT
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
                {{-- @if ($cek_master == 1)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 border-lg-end border-lg-bottom border-lg-0 pb-3 pb-lg-0">
                                    <div class="d-flex flex-between-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                                <span class="fs--2 fas fa-snowplow text-primary"></span></div>
                                            <h6 class="mb-0">EXCA200 </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">{{ $tot_exca200 }}</p>
                                            <div class="d-flex flex-column">
                                                @if ($last_exca200->hm_total > $rate_exca200)
                                                    <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                                                @else
                                                    <span class="me-1 text-danger fas fa-caret-down text-primary"></span>
                                                @endif
                                                <p class="fs--2 mb-0 text-nowrap">{{ $min_exca200 }} -
                                                    {{ $max_exca200 }} </p>
                                            </div>

                                        </div>
                                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                                            data-echarts='{"series":[{"type":"line","data":[ @foreach ($exca200 as $item)
                        {{ $item->hm_total }}, @endforeach {{ $last_exca200->hm_total }}],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-lg-end border-lg-bottom border-lg-0 pb-3 pb-lg-0">
                                    <div class="d-flex flex-between-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                                <span class="fs--2 fas fas fa-snowplow text-primary"></span></div>
                                            <h6 class="mb-0">EXCA200LA </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">{{ $tot_exca200la }}</p>
                                            <div class="d-flex flex-column">
                                                @if ($last_exca200la->hm_total > $rate_exca200la)
                                                    <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                                                @else
                                                    <span class="me-1 text-danger fas fa-caret-down text-primary"></span>
                                                @endif
                                                <p class="fs--2 mb-0 text-nowrap">{{ $min_exca200la }} -
                                                    {{ $max_exca200la }} </p>
                                            </div>

                                        </div>
                                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                                            data-echarts='{"series":[{"type":"line","data":[ @foreach ($exca200la as $item)
                        {{ $item->hm_total }}, @endforeach {{ $last_exca200la->hm_total }}],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-lg-bottom border-lg-0 pb-3 pb-lg-0">
                                    <div class="d-flex flex-between-center mb-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                                <span class="fs--2 fas fa-snowplow text-primary"></span></div>
                                            <h6 class="mb-0">EXCA300 </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">{{ $tot_exca300 }}</p>
                                            <div class="d-flex flex-column">
                                                @if ($last_exca300->hm_total > $rate_exca300)
                                                    <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                                                @else
                                                    <span class="me-1 text-danger fas fa-caret-down text-primary"></span>
                                                @endif
                                                <p class="fs--2 mb-0 text-nowrap">{{ $min_exca300 }} -
                                                    {{ $max_exca300 }} </p>
                                            </div>

                                        </div>
                                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                                            data-echarts='{"series":[{"type":"line","data":[ @foreach ($exca300 as $item)
                        {{ $item->hm_total }}, @endforeach {{ $last_exca300->hm_total }}],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-lg-end border-bottom border-lg-0 pb-3 pb-lg-0">
                                    <div class="d-flex flex-between-center mt-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                                <span class="fs--2 fas fas fa-tractor text-primary"></span></div>
                                            <h6 class="mb-0">Vibro </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <p class="font-sans-serif lh-1 fs-4 pe-2">{{ $tot_vibro }}</p>
                                            <div class="d-flex flex-column">
                                                @if ($last_vibro->hm_total > $rate_vibro)
                                                    <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                                                @else
                                                    <span class="me-1 text-danger fas fa-caret-down text-primary"></span>
                                                @endif
                                                <p class="fs--2 mb-0 text-nowrap">{{ $min_vibro }} -
                                                    {{ $max_vibro }} </p>
                                            </div>
                                        </div>
                                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                                            data-echarts='{"series":[{"type":"line","data":[ @foreach ($vibro as $item)
                        {{ $item->hm_total }}, @endforeach {{ $last_vibro->hm_total }}],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-lg-end border-bottom border-lg-0 pb-3 pb-lg-0">
                                    <div class="d-flex flex-between-center mt-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                                <span class="fs--2 fas fa-truck-monster text-primary"></span></div>
                                            <h6 class="mb-0">HINO500 </h6>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <p class="font-sans-serif lh-1 mb-1 fs-4 pe-2">{{ $tot_hino500 }}</p>
                                            <div class="d-flex flex-column">
                                                @if ($last_hino500->hm_total > $rate_hino500)
                                                    <span class="me-1 text-success fas fa-caret-up text-primary"></span>
                                                @else
                                                    <span class="me-1 text-danger fas fa-caret-down text-primary"></span>
                                                @endif
                                                <p class="fs--2 mb-0 text-nowrap">{{ $min_hino500 }} -
                                                    {{ $max_hino500 }} </p>
                                            </div>

                                        </div>
                                        <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                                            data-echarts='{"series":[{"type":"line","data":[ @foreach ($hino500 as $item)
                        {{ $item->hm_total }}, @endforeach {{ $last_hino500->hm_total }}],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 border-bottom border-lg-0 pb-3 pb-lg-0">
                                    <div class="d-flex flex-between-center mt-3">
                                        <div class="d-flex align-items-center">
                                            <div
                                                class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary">
                                                <span class="fs--2 fas fa-truck-pickup text-primary"></span></div>
                                            <h6 class="mb-0">OTHER </h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif --}}
                <div class="card mb-2 bg-light shadow-none">
                    <div class="bg-holder bg-card d-none d-sm-block"
                        style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
                    <!--/.bg-holder-->
                    <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                            src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                            width="96" />
                        <div class="ms-n3">
                            <h6 class="mb-1 text-primary"><i class="fas fa-truck-monster"></i> Rental Performance <span
                                    class="text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                            <h4 class="mb-0 text-primary fw-bold">Rekap Performance Unit
                                <span class="text-info fw-medium"></span>
                            </h4>
                        </div>
                    </div>
                </div>

                @include('comp.alert')

                <div class="card overflow-hidden mb-2">
                    <div class="card-header bg-light">
                        <div class="d-lg-flex justify-content-between">
                            <div class="row flex-between-center gy-2 px-x1">
                                <div class="col-auto pe-0">
                                    <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                                        <a href="{{ route('hm.p') }}"><button class="btn btn-sm text-primary"
                                                type="button"><i class="fas fa-stopwatch"></i> Hours Meter</button></a>
                                        <a href="{{ route('hm.p.u') }}"><button class="btn btn-sm active text-warning"
                                                type="button"><i class="fas fa-truck-monster"></i>
                                                Unit</button></a>
                                        <a href="{{ route('hm.p.od') }}"><button class="btn btn-sm text-primary"
                                                type="button"><i class="fas fa-users"></i> Operator &
                                                Driver</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom border-200 my-3"></div>
                            <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                                <div class="col-auto pe-0">
                                    <a href="{{ route('hm.u.p.excel', Crypt::EncryptString(Auth::user()->id)) }}"
                                        target="_blank" rel="noopener noreferrer">
                                        <button class="btn btn-sm btn-falcon-default mx-2"><i class="fas fa-print"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="tableExample4"
                            data-list='{"valueNames":["id","unit","kode","jenis","payment","model","brand","shift","rem"],"filter":{"key":"payment"}}'>
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
                                            <option selected="" value="">Filter: Tipe</option>
                                            <option value="Excavator">Excavator</option>
                                            <option value="Vibro">Vibro</option>
                                            <option value="Bulldozer">Bulldozer</option>
                                            <option value="Dump Truck">Dump Truck</option>
                                            <option value="Pick Up">Pick Up</option>
                                            <option value="Truck Loader">Truck Loader</option>
                                            <option value="Truck Tangki">Truck Tangki</option>
                                            <option value="Peralatan Las">Peralatan Las</option>
                                            <option value="Kompresor">Kompresor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="table-responsive scrollbar">
                                    <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                                        data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                        <thead class="bg-200 text-800">
                                            <tr class="text-center">
                                                <th style="min-width: 50px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="no">
                                                    #
                                                </th>
                                                <th style="min-width: 50px"
                                                    class="bg-secondary text-white align-middle white-space-nowrap">
                                                    Aksi
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="unit">
                                                    No Unit
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="model">
                                                    Model
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="payment">
                                                    Tipe
                                                </th>
                                                <th style="min-width: 100px"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="brand">
                                                    Brand
                                                </th>
                                                <th style="min-width: 80px"
                                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                                    HM Awal</th>
                                                <th style="min-width: 80px"
                                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                                    HM Akhir
                                                </th>
                                                <th style="min-width: 80px"
                                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                                    HM
                                                    Potongan
                                                </th>
                                                <th style="min-width: 80px"
                                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                                    HM
                                                    Total
                                                </th>
                                                <th style="min-width: 80px; max-width: 400px;"
                                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                                    data-sort="lok">Alokasi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table-posts" class="list">
                                            @foreach ($equip as $res)
                                                <tr id="index_{{ $res->id }}"
                                                    class="btn-reveal-trigger text-1000 fw-semi-bold">
                                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                        <div class="btn-group  btn-group-sm" role="group">
                                                            <a href="{{ route('hm.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                                class="btn btn-info" type="button"><i
                                                                    class="fas fa-info-circle">
                                                                </i> Lihat
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-1000 text-center white-space-nowrap unit">
                                                        @if ($res->equip_id)
                                                            {{ $res->equip_->no_unit }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="align-middle text-1000 text-center white-space-nowrap model">
                                                        @if ($res->equip_id)
                                                            {{ $res->equip_->model }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="align-middle text-1000 text-center white-space-nowrap payment">
                                                        @if ($res->equip_->tipe)
                                                            {{ $res->equip_->tipe }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td
                                                        class="align-middle text-1000 text-center white-space-nowrap brand">
                                                        @if ($res->equip_id)
                                                            {{ $res->equip_->brand }}
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
                                                    <td class="align-middle text-1000 text-center white-space-nowrap">
                                                        @if ($res->total_pot)
                                                            {{ $res->total_pot }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td class="align-middle text-1000 text-center white-space-nowrap">
                                                        @if ($res->grand_total)
                                                            {{ $res->grand_total }}
                                                        @else
                                                            -
                                                        @endif
                                                    </td>
                                                    <td class="align-middle text-1000 text-center white-space-nowrap name">
                                                        @if ($res->alokasi)
                                                            {{ $res->alokasi }}
                                                        @else
                                                            {{ $mitra->inisial }}
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
