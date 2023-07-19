@extends('layouts.layout_horizontal')

@section('judul')
    Hours Meter Performa | HWA &bull; SAT
@endsection


@section('konten')
    <div class="col-md-12 mb-2 col-xxl-12">
        <div class="card  h-100">
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-12 border-200 border-md-200 border-bottom  pb-x1 pe-md-x1">
                        <div class="row g-0">
                            <div class="col-2"><img class="mt-1" src="{{ asset('assets/img/tickets/reports/7.png') }}"
                                    alt="" width="39" />
                                <h2 class="mt-2 mb-1 text-700 fw-normal">{{ $total_hm }}<span
                                        class="fas fa-caret-up ms-2 me-1 fs--1 text-primary"></span></h2>
                                <h6 class="mb-0">Total Hours Meter</h6>
                            </div>
                            <div class="col-9 d-flex align-items-center px-0">
                                <div class="h-50 w-100"
                                    data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["#"
                                @foreach ($list as $item)
                                ,"{{ $item->tgl }}" @endforeach
                            ]},"series":[{"type":"line","data":[0
                                @foreach ($list as $item)
                                ,{{ $item->hm_total }} @endforeach
                                ],"color":"#2c7be5","smooth":true,"lineStyle":{"width":2},"areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(44, 123, 229, .25)"},{"offset":1,"color":"rgba(44, 123, 229, 0)"}]}}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"0px"}}'
                                    data-echart-responsive="true"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card" id="ticketsTable"
            data-list='{"valueNames":["client","subject","status","priority","agent"],"page":13,"pagination":true,"fallback":"tickets-table-fallback"}'>
            <div class="card-header border-bottom border-200 px-0">
                <div class="d-lg-flex justify-content-between">
                    <div class="row flex-between-center gy-2 px-x1">
                        <div class="col-auto pe-0">
                            <h6 class="mb-0">Performa HM Periode {{ $master->created_at->format('F Y') }}</h6>
                        </div>
                        <div class="col-auto">
                            <form>
                                <div class="input-group input-search-width"><input
                                        class="form-control form-control-sm shadow-none search" type="search"
                                        placeholder="Search  by tgl" aria-label="search" /><button
                                        class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span
                                            class="fa fa-search fs--1"></span></button></div>
                            </form>
                        </div>
                    </div>
                    <div class="border-bottom border-200 my-3"></div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive scrollbar">
                    <table class="table table-sm mb-0 fs--1 table-view-tickets">
                        <thead class="text-800 bg-light">
                            <tr>
                                <th style="width: 20px" class="py-2 fs-0 pe-2" style="width: 28px;">
                                    #
                                </th>
                                <th style="width: 100px" class="sort align-middle ps-2" data-sort="client">
                                    Tanggal</th>
                                <th style="width: 100px" class="sort align-middle" data-sort="status">HM Start</th>
                                <th style="width: 100px" class="sort align-middle" data-sort="status">HM Stop</th>
                                <th style="width: 100px" class="sort align-middle" data-sort="status">Jumlah HM</th>
                            </tr>
                        </thead>
                        <tbody class="list" id="table-ticket-body">
                            @foreach ($list as $asu)
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <h6 class="mb-0">{{ $asu->tgl }}</h6>
                                    </td>
                                    <td class="align-middle asu white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <h6 class="mb-0">{{ $asu->hm_awal }}</h6>
                                    </td>
                                    <td class="align-middle asu white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <h6 class="mb-0">{{ $asu->hm_akhir }}</h6>
                                    </td>
                                    <td class="align-middle asu white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <h6 class="mb-0">{{ $asu->hm_total }}</h6>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center d-none" id="tickets-table-fallback">
                        <p class="fw-bold fs-1 mt-3">No ticket found</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button"
                        title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                        title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
            </div>
        </div>
    </div>
@endsection
