{{-- HM MODEL ALAT --}}
{{-- @if ($cek_master == 1)
    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 border-lg-end border-lg-bottom border-lg-0 pb-3 pb-lg-0">
                    <div class="d-flex flex-between-center mb-3">
                        <div class="d-flex align-items-center">
                            <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                                    class="fs--2 fas fa-snowplow text-primary"></span></div>
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
                                <p class="fs--2 mb-0 text-nowrap">{{ $min_exca200 }} - {{ $max_exca200 }} </p>
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
                            <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                                    class="fs--2 fas fas fa-snowplow text-primary"></span></div>
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
                                <p class="fs--2 mb-0 text-nowrap">{{ $min_exca200la }} - {{ $max_exca200la }} </p>
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
                            <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                                    class="fs--2 fas fa-snowplow text-primary"></span></div>
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
                                <p class="fs--2 mb-0 text-nowrap">{{ $min_exca300 }} - {{ $max_exca300 }} </p>
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
                            <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                                    class="fs--2 fas fas fa-tractor text-primary"></span></div>
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
                                <p class="fs--2 mb-0 text-nowrap">{{ $min_vibro }} - {{ $max_vibro }} </p>
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
                            <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                                    class="fs--2 fas fa-truck-monster text-primary"></span></div>
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
                                <p class="fs--2 mb-0 text-nowrap">{{ $min_hino500 }} - {{ $max_hino500 }} </p>
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
                            <div class="icon-item icon-item-sm bg-soft-primary shadow-none me-2 bg-soft-primary"><span
                                    class="fs--2 fas fa-truck-pickup text-primary"></span></div>
                            <h6 class="mb-0">OTHER </h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endif --}}


<div class="card">
    <div class="card-header pb-0">
        <h6 class="mb-0 mt-2 d-flex align-items-center">Total Order</h6>
    </div>
    <div class="card-body">
        <div class="row align-items-end">
            <div class="col">
                <p class="font-sans-serif lh-1 mb-1 fs-2">58.4K</p>
                <div class="badge badge-soft-primary rounded-pill fs--2"><span
                        class="fas fa-caret-up me-1"></span>13.6%
                </div>
            </div>
            <div class="col-auto ps-0">
                <div class="total-order-ecommerce"
                    data-echarts='{"series":[{"type":"line","data":[110,100,250,210,530,480,320,325]}],"grid":{"bottom":"-10px"}}'>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="card h-100">
    <div class="card-body">
        <div class="row g-0">
            <div class="col-md-6 border-200 border-md-200 border-bottom border-md-end pb-x1 pe-md-x1">
                <div class="row g-0">
                    <div class="col-6"><img class="mt-1" src="../assets/img/tickets/hold-tickets.png"
                            alt="" width="39" />
                        <h2 class="mt-2 mb-1 text-700 fw-normal">25<span
                                class="fas fa-caret-up ms-2 me-1 fs--1 text-primary"></span><span
                                class="fs--1 fw-semi-bold text-primary">5.3%</span></h2>
                        <h6 class="mb-0">On Hold Tickets</h6>
                    </div>
                    <div class="col-6 d-flex align-items-center px-0">
                        <div class="h-50 w-100"
                            data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 1","Week 2","Week 3","Week 4","Week 5","Week 6"]},"series":[{"type":"line","data":[100,40,60,935,920,40],"color":"#2c7be5","smooth":true,"lineStyle":{"width":2},"areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(44, 123, 229, .25)"},{"offset":1,"color":"rgba(44, 123, 229, 0)"}]}}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"0px"}}'
                            data-echart-responsive="true"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-md-x1 pb-x1 pt-x1 pt-md-0 border-bottom border-200">
                <div class="row g-0">
                    <div class="col-6"><img class="mt-1" src="../assets/img/tickets/open-tickets.png"
                            alt="" width="39" />
                        <h2 class="mt-2 mb-1 text-700 fw-normal">05<span
                                class="fas fa-caret-up ms-2 me-1 fs--1 text-success"></span><span
                                class="fs--1 fw-semi-bold text-success">3.20%</span></h2>
                        <h6 class="mb-0">Open the ticket</h6>
                    </div>
                    <div class="col-6 d-flex align-items-center px-0">
                        <div class="h-50 w-100"
                            data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 1","Week 2","Week 3","Week 4","Week 5","Week 6"]},"series":[{"type":"line","data":[10,12,16,14,20,25],"color":"#00d27a","smooth":true,"lineStyle":{"width":2},"areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(0, 210, 122, .25)"},{"offset":1,"color":"rgba(0, 210, 122, 0)"}]}}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"0px"}}'
                            data-echart-responsive="true"></div>
                    </div>
                </div>
            </div>
            <div
                class="col-md-6 border-md-200 border-200 border-bottom border-md-bottom-0 border-md-end pt-x1 pe-md-x1 pb-x1 pb-md-0">
                <div class="row g-0">
                    <div class="col-6"><img class="mt-1" src="../assets/img/tickets/due-tickets.png"
                            alt="" width="39" />
                        <h2 class="mt-2 mb-1 text-700 fw-normal">02<span
                                class="fas fa-caret-up ms-2 me-1 fs--1 text-info"></span><span
                                class="fs--1 fw-semi-bold text-info">2.3%</span></h2>
                        <h6 class="mb-0">Due Tickets Today</h6>
                    </div>
                    <div class="col-6 d-flex align-items-center px-0">
                        <div class="h-50 w-100"
                            data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 1","Week 2","Week 3","Week 4","Week 5","Week 6"]},"series":[{"type":"line","data":[15,10,15,10,12,10],"color":"#27bcfd","smooth":true,"lineStyle":{"width":2},"areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(39, 188, 253, .25)"},{"offset":1,"color":"rgba(39, 188, 253, 0)"}]}}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"0px"}}'
                            data-echart-responsive="true"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ps-md-x1 pt-x1">
                <div class="row g-0">
                    <div class="col-6"><img class="mt-1" src="../assets/img/tickets/unassigned.png"
                            alt="" width="39" />
                        <h2 class="mt-2 mb-1 text-700 fw-normal">03<span
                                class="fas fa-caret-up ms-2 me-1 fs--1 text-warning"></span><span
                                class="fs--1 fw-semi-bold text-warning">3.12%</span></h2>
                        <h6 class="mb-0">Unassigned</h6>
                    </div>
                    <div class="col-6 d-flex align-items-center px-0">
                        <div class="h-50 w-100"
                            data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 1","Week 2","Week 3","Week 4","Week 5","Week 6"]},"series":[{"type":"line","data":[10,15,12,11,14,12],"color":"#f5803e","smooth":true,"lineStyle":{"width":2},"areaStyle":{"color":{"type":"linear","x":0,"y":0,"x2":0,"y2":1,"colorStops":[{"offset":0,"color":"rgba(245, 128, 62, .25)"},{"offset":1,"color":"rgba(245, 128, 62, 0)"}]}}}],"grid":{"bottom":"2%","top":"2%","right":"0","left":"0px"}}'
                            data-echart-responsive="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3 mb-3">
    <div class="col-sm-6 col-md-4">
        <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card"
                style="background-image:url(../assets/img/icons/spot-illustrations/corner-1.png);"></div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h6>Customers<span class="badge badge-soft-warning rounded-pill ms-2">-0.23%</span></h6>
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-warning"
                    data-countup='{"endValue":58.386,"decimalPlaces":2,"suffix":"k"}'>0</div><a
                    class="fw-semi-bold fs--1 text-nowrap" href="../app/e-commerce/customers.html">See all<span
                        class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card"
                style="background-image:url(../assets/img/icons/spot-illustrations/corner-2.png);"></div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h6>Orders<span class="badge badge-soft-info rounded-pill ms-2">0.0%</span></h6>
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif text-info"
                    data-countup='{"endValue":23.434,"decimalPlaces":2,"suffix":"k"}'>0</div><a
                    class="fw-semi-bold fs--1 text-nowrap" href="../app/e-commerce/orders/order-list.html">All
                    orders<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card overflow-hidden" style="min-width: 12rem">
            <div class="bg-holder bg-card"
                style="background-image:url(../assets/img/icons/spot-illustrations/corner-3.png);"></div>
            <!--/.bg-holder-->
            <div class="card-body position-relative">
                <h6>Revenue<span class="badge badge-soft-success rounded-pill ms-2">9.54%</span></h6>
                <div class="display-4 fs-4 mb-2 fw-normal font-sans-serif"
                    data-countup='{"endValue":43594,"prefix":"$"}'>0</div><a class="fw-semi-bold fs--1 text-nowrap"
                    href="../index.html">Statistics<span class="fas fa-angle-right ms-1"
                        data-fa-transform="down-1"></span></a>
            </div>
        </div>
    </div>

    <div class="card h-100">
        <div class="card-body p-0">
            <div class="scrollbar">
                <table
                    class="table table-dashboard mb-0 table-borderless fs--1 border-200 overflow-hidden rounded-3 table-member-info">
                    <thead class="bg-light">
                        <tr class="text-900">
                            <th>Member info</th>
                            <th class="text-center">Attendance</th>
                            <th class="text-center">Today</th>
                            <th class="text-end">This Week</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-bottom border-200">
                            <td>
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="../assets/img/team/7.jpg" alt="" />
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="../pages/user/profile.html">Gavin Belson</a></h6>
                                        <p class="text-500 fs--2 mb-0">CRM dashboard design</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-warning">Late</small></td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-danger">12%</small>
                                <p class="fs--2 mb-0">1h:52m</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2 justify-content-end">
                                    <div class="col-auto"><small
                                            class="badge fw-semi-bold rounded-pill badge-soft-primary">68%</small>
                                        <p class="fs--2 mb-0">1h:52m</p>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <div class="mb-1"
                                            data-echarts='{"tooltip":{"show":false},"series":[{"data":[15,22,28,20,20,35]}]}'>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-bottom border-200">
                            <td>
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="../assets/img/team/9.jpg" alt="" />
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="../pages/user/profile.html">Rsuss Hanneman</a></h6>
                                        <p class="text-500 fs--2 mb-0">Smart Learning Management</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-success">intime</small></td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-success">86%</small>
                                <p class="fs--2 mb-0">1h:52m</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2 justify-content-end">
                                    <div class="col-auto"><small
                                            class="badge fw-semi-bold rounded-pill badge-soft-warning">45%</small>
                                        <p class="fs--2 mb-0">1h:52m</p>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <div class="mb-1"
                                            data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,20,40,18,20,35]}]}'>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-bottom border-200">
                            <td>
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-2xl status-away">
                                        <img class="rounded-circle" src="../assets/img/team/12.jpg" alt="" />
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="../pages/user/profile.html">Peter Gregory</a></h6>
                                        <p class="text-500 fs--2 mb-0">Graduate Network</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-success">intime</small></td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-success">97%</small>
                                <p class="fs--2 mb-0">1h:52m</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2 justify-content-end">
                                    <div class="col-auto"><small
                                            class="badge fw-semi-bold rounded-pill badge-soft-primary">60%</small>
                                        <p class="fs--2 mb-0">1h:52m</p>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <div class="mb-1"
                                            data-echarts='{"tooltip":{"show":false},"series":[{"data":[20,22,18,30,20,35]}]}'>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-bottom border-200">
                            <td>
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="../assets/img/team/avatar.png"
                                            alt="" />
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="../pages/user/profile.html">Jian-Yang</a></h6>
                                        <p class="text-500 fs--2 mb-0">Quality testing</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-success">intime</small></td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-warning">34%</small>
                                <p class="fs--2 mb-0">1h:52m</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2 justify-content-end">
                                    <div class="col-auto"><small
                                            class="badge fw-semi-bold rounded-pill badge-soft-success">80%</small>
                                        <p class="fs--2 mb-0">1h:52m</p>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <div class="mb-1"
                                            data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,22,18,20,20,35]}]}'>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="border-bottom border-200">
                            <td>
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-2xl status-do-not-disturb">
                                        <img class="rounded-circle" src="../assets/img/team/16.jpg" alt="" />
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="../pages/user/profile.html">Laurie Bream</a></h6>
                                        <p class="text-500 fs--2 mb-0">Accounts</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-warning">Late</small></td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-primary">12%</small>
                                <p class="fs--2 mb-0">1h:52m</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2 justify-content-end">
                                    <div class="col-auto"><small
                                            class="badge fw-semi-bold rounded-pill badge-soft-danger">68%</small>
                                        <p class="fs--2 mb-0">1h:52m</p>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <div class="mb-1"
                                            data-echarts='{"tooltip":{"show":false},"series":[{"data":[20,22,18,20,20,35]}]}'>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center position-relative">
                                    <div class="avatar avatar-2xl status-online">
                                        <img class="rounded-circle" src="../assets/img/team/25.jpg" alt="" />
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900"
                                                href="../pages/user/profile.html">Fionna Mayer</a></h6>
                                        <p class="text-500 fs--2 mb-0">SAAS dashboard design</p>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-danger">Absent</small></td>
                            <td class="align-middle text-center"><small
                                    class="badge fw-semi-bold rounded-pill badge-soft-primary">12%</small>
                                <p class="fs--2 mb-0">1h:52m</p>
                            </td>
                            <td class="align-middle">
                                <div class="row g-2 justify-content-end">
                                    <div class="col-auto"><small
                                            class="badge fw-semi-bold rounded-pill badge-soft-success">68%</small>
                                        <p class="fs--2 mb-0">1h:52m</p>
                                    </div>
                                    <div class="col-auto mt-auto">
                                        <div class="mb-1"
                                            data-echarts='{"tooltip":{"show":false},"series":[{"data":[30,22,18,30,20,35]}]}'>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light py-2">
            <div class="row flex-between-center">
                <div class="col-auto"><select class="form-select form-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                    </select></div>
                <div class="col-auto"><a class="btn btn-sm btn-link px-0 fw-medium" href="#!">View All<span
                            class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
            </div>
        </div>
    </div>

    <div class="card py-3 mb-3">
        <div class="card-body py-3">
            <div class="row g-0">
                <div class="col-6 col-md-4 border-200 border-bottom border-end pb-4">
                    <h6 class="pb-1 text-700">Orders </h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-2">15,450 </p>
                    <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-primary"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-end pb-4 ps-3">
                    <h6 class="pb-1 text-700">Items sold </h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-2">1,054 </p>
                    <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-warning"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
                <div
                    class="col-6 col-md-4 border-200 border-bottom border-end border-md-end-0 pb-4 pt-4 pt-md-0 ps-md-3">
                    <h6 class="pb-1 text-700">Refunds </h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-2">$145.65 </p>
                    <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
                <div
                    class="col-6 col-md-4 border-200 border-md-200 border-bottom border-md-bottom-0 border-md-end pt-4 pb-md-0 ps-3 ps-md-0">
                    <h6 class="pb-1 text-700">Gross sale </h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-2">$100.26 </p>
                    <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">$109.65 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-danger"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 border-200 border-md-bottom-0 border-end pt-4 pb-md-0 ps-md-3">
                    <h6 class="pb-1 text-700">Shipping </h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-2">$365.53 </p>
                    <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-success"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
                <div class="col-6 col-md-4 pb-0 pt-4 ps-3">
                    <h6 class="pb-1 text-700">Processing </h6>
                    <p class="font-sans-serif lh-1 mb-1 fs-2">861 </p>
                    <div class="d-flex align-items-center">
                        <h6 class="fs--1 text-500 mb-0">13,675 </h6>
                        <h6 class="fs--2 ps-3 mb-0 text-info"><span class="me-1 fas fa-caret-up"></span>21.8%</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card shopping-cart-bar-min-height h-100">
        <div class="card-header d-flex flex-between-center">
            <h6 class="mb-0">Shopping Cart</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                    id="dropdown-shopping-cart-bar" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-shopping-cart-bar">
                    <a class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                        href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                        href="#!">Remove</a>
                </div>
            </div>
        </div>
        <div class="card-body py-0 d-flex align-items-center h-100">
            <div class="flex-1">
                <div class="row g-0 align-items-center pb-3">
                    <div class="col pe-4">
                        <h6 class="fs--2 text-600">Initiated</h6>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 80% "
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="1000"></div>
                        </div>
                    </div>
                    <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span
                                class="me-1 fas fa-caret-up text-success"></span>43.6%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"> Session: <span class="text-600">6817</span> </p>
                    </div>
                </div>
                <div class="row g-0 align-items-center pb-3 border-top pt-3">
                    <div class="col pe-4">
                        <h6 class="fs--2 text-600">Abandonment rate</h6>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar rounded-3 bg-danger" role="progressbar" style="width: 25% "
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span
                                class="me-1 fas fa-caret-up text-danger"></span>13.11%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">44</span> of 61</p>
                    </div>
                </div>
                <div class="row g-0 align-items-center pb-3 border-top pt-3">
                    <div class="col pe-4">
                        <h6 class="fs--2 text-600">Bounce rate</h6>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 35% "
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span
                                class="me-1 fas fa-caret-up text-success"></span>12.11%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">8</span> of 61</p>
                    </div>
                </div>
                <div class="row g-0 align-items-center pb-3 border-top pt-3">
                    <div class="col pe-4">
                        <h6 class="fs--2 text-600">Completion rate</h6>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 43% "
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span
                                class="me-1 fas fa-caret-down text-danger"></span>43.6%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">18</span> of 179</p>
                    </div>
                </div>
                <div class="row g-0 align-items-center pb-3 border-top pt-3">
                    <div class="col pe-4">
                        <h6 class="fs--2 text-600">Revenue Rate</h6>
                        <div class="progress" style="height:5px">
                            <div class="progress-bar rounded-3 bg-primary" role="progressbar" style="width: 60% "
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-auto text-end">
                        <p class="mb-0 text-900 font-sans-serif"><span
                                class="me-1 fas fa-caret-up text-success"></span>60.5%</p>
                        <p class="mb-0 fs--2 text-500 fw-semi-bold"><span class="text-600">18</span> of 179</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card h-100">
        <div class="card-header">
            <div class="d-flex align-items-center"><img class="me-2" src="../assets/img/icons/signal.png"
                    alt="" height="35" />
                <h5 class="fs-0 fw-normal text-800 mb-0">Ask Falcon Intelligence</h5>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="scrollbar-overlay pt-0 px-x1 ask-analytics">
                <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                    <div class="d-flex align-items-center mb-3"><span
                            class="fas fa-code-branch text-primary"></span><a
                            class="stretched-link text-decoration-none" href="#!">
                            <h5 class="fs--1 text-600 mb-0 ps-3">Content Analysis</h5>
                        </a></div>
                    <h5 class="fs--1 text-800">Which landing pages with over 10 sessions have the
                        worst bounce rates?</h5>
                </div>
                <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                    <div class="d-flex align-items-center mb-3"><span class="fas fa-bug text-primary"></span><a
                            class="stretched-link text-decoration-none" href="#!">
                            <h5 class="fs--1 text-600 mb-0 ps-3">Technical performance</h5>
                        </a></div>
                    <h5 class="fs--1 text-800">Show me a trend of my average page load time over the
                        last 3 months</h5>
                </div>
                <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                    <div class="d-flex align-items-center mb-3"><span
                            class="fas fa-project-diagram text-primary"></span><a
                            class="stretched-link text-decoration-none" href="#!">
                            <h5 class="fs--1 text-600 mb-0 ps-3">Technical performance</h5>
                        </a></div>
                    <h5 class="fs--1 text-800">What are my top default channel groupings by user?
                    </h5>
                </div>
                <div class="border border-1 border-300 rounded-2 p-3 ask-analytics-item position-relative mb-3">
                    <div class="d-flex align-items-center mb-3"><span
                            class="fas fa-map-marker-alt text-primary"></span><a
                            class="stretched-link text-decoration-none" href="#!">
                            <h5 class="fs--1 text-600 mb-0 ps-3">Geographic Analysis</h5>
                        </a></div>
                    <h5 class="fs--1 text-800">What pages do people from California go to the most?
                    </h5>
                </div>
            </div>
        </div>
        <div class="card-footer bg-light text-end py-2"><a class="btn btn-link btn-sm px-0 fw-medium"
                href="#!">More Insights<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
    </div>


    <div class="card">
        <div class="card-body py-5 py-sm-3">
            <div class="row g-5 g-sm-0">
                <div class="col-sm-4">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Completed Goals</h6>
                            <h3 class="fw-normal text-700">1727</h3>
                        </div>
                        <div class="echart-goal-charts" data-echart-responsive="true"
                            data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[400,129,123,158,196,106,187,198,152,175,178,165,188,800,899,999,143,140,112,167,180,156,121,190,100],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"16px","left":"0","bottom":"0","top":"0"}}'>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="border-sm-end border-300">
                        <div class="text-center">
                            <h6 class="text-700">Value</h6>
                            <h3 class="fw-normal text-700">$34.2M</h3>
                        </div>
                        <div class="echart-goal-charts" data-echart-responsive="true"
                            data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[170,156,171,193,108,178,163,175,117,123,174,199,122,111,113,140,192,167,186,172,131,187,135,115,118],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"16px","left":"16px","bottom":"0","top":"0"}}'>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div>
                        <div class="text-center">
                            <h6 class="text-700">Conversion Rate</h6>
                            <h3 class="fw-normal text-700">19.67%</h3>
                        </div>
                        <div class="echart-goal-charts" data-echart-responsive="true"
                            data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[199,181,155,164,108,158,117,148,121,152,189,116,111,130,113,171,193,104,110,153,190,162,180,114,183],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"0","left":"16px","bottom":"0","top":"0"}}'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card h-100 bg-line-chart-gradient">
        <div class="card-header bg-transparent light">
            <h5 class="text-white">Users online right now</h5>
            <div class="real-time-user display-1 fw-normal text-white" data-countup='{"endValue":119}'>
                <div class="echart-goal-charts" data-echart-responsive="true"
                    data-echarts='{"tooltip":{"show":false},"series":[{"type":"bar","data":[199,181,155,164,108,158,117,148,121,152,500,616,711,830,913,171,193,104,110,153,190,162,180,114,183],"symbol":"none","itemStyle":{"barBorderRadius":[5,5,0,0]}}],"grid":{"right":"0","left":"16px","bottom":"0","top":"0"}}'>
                </div>
            </div>
        </div>
        <div class="card-body text-white fs--1 light pb-0">
            <p class="border-bottom pb-2" style="border-color: rgba(255, 255, 255, 0.15) !important">Page views /
                second</p>
            <div class="echart-crm-statistics w-100 ms-2" data-echart-responsive="true"
                data-echarts='{"series":[{"type":"line","data":[220,330,1000,2000,600,770,880,960,1200],"color":"#2c7be5","areaStyle":{"color":{"colorStops":[{"offset":0,"color":"#2c7be53A"},{"offset":1,"color":"#2c7be50A"}]}}}],"grid":{"bottom":"-10px"}}'>
            </div>
        </div>
        <div class="card-footer text-end bg-transparent light"><a class="text-white" href="#!">Real-time
                data<span class="fa fa-chevron-right ms-1 fs--1"></span></a>
        </div>
    </div>


    <div class="card overflow-hidden">
        <div class="card-header d-flex flex-between-center bg-light py-2">
            <h6 class="mb-0">Transaction Summary</h6>
            <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                    id="dropdown-transaction-summary" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2"
                    aria-labelledby="dropdown-transaction-summary"><a class="dropdown-item" href="#!">View</a><a
                        class="dropdown-item" href="#!">Export</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                        href="#!">Remove</a>
                </div>
            </div>
        </div>
        <div class="card-body py-0">
            <div class="table-responsive scrollbar">
                <table class="table table-dashboard mb-0 fs--1">
                    <tr>
                        <td class="align-middle ps-0 text-nowrap">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2" src="../assets/img/logos/atlassian.png"
                                    alt="" width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Atlassian</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-success">Completed</span></td>
                        <td class="align-middle px-4 text-end text-nowrap" style="width:1%;">
                            <h6 class="mb-0">$290.00 USD</h6>
                            <p class="fs--2 mb-0">15 May, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="align-middle ps-0 text-nowrap">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2" src="../assets/img/logos/hubstaff.png"
                                    alt="" width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Hubstaff</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-warning">Pending</span></td>
                        <td class="align-middle px-4 text-end text-nowrap" style="width:1%;">
                            <h6 class="mb-0">$200.00 USD</h6>
                            <p class="fs--2 mb-0">1 May, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="align-middle ps-0 text-nowrap">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2" src="../assets/img/logos/bs-5.png"
                                    alt="" width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Bootstrap</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-warning">Pending</span></td>
                        <td class="align-middle px-4 text-end text-nowrap" style="width:1%;">
                            <h6 class="mb-0">$300.00 USD</h6>
                            <p class="fs--2 mb-0">26 April, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="align-middle ps-0 text-nowrap">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2" src="../assets/img/logos/asana-logo.png"
                                    alt="" width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Asana</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-warning">Pending</span></td>
                        <td class="align-middle px-4 text-end text-nowrap" style="width:1%;">
                            <h6 class="mb-0">$320.00 USD</h6>
                            <p class="fs--2 mb-0">14 April, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="align-middle ps-0 text-nowrap">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2"
                                    src="../assets/img/logos/adobe-creative-cloud.png" alt=""
                                    width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Adobe Creative Cloud</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-warning">Pending</span></td>
                        <td class="align-middle px-4 text-end text-nowrap" style="width:1%;">
                            <h6 class="mb-0">$150.00 USD</h6>
                            <p class="fs--2 mb-0">11 April, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="align-middle ps-0 text-nowrap">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2" src="../assets/img/logos/coursera.png"
                                    alt="" width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Coursera</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-warning">Pending</span></td>
                        <td class="align-middle px-4 text-end text-nowrap" style="width:1%;">
                            <h6 class="mb-0">$280.00 USD</h6>
                            <p class="fs--2 mb-0">26 March, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                    <tr class="border-0">
                        <td class="align-middle ps-0 text-nowrap border-0">
                            <div class="d-flex position-relative align-items-center"><img
                                    class="d-flex align-self-center me-2" src="../assets/img/logos/medium.png"
                                    alt="" width="30" />
                                <div class="flex-1"><a class="stretched-link" href="#!">
                                        <h6 class="mb-0">Medium</h6>
                                    </a>
                                    <p class="mb-0">Subscription payment</p>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle px-4 border-0" style="width:1%;"><span
                                class="badge fs--1 w-100 badge-soft-danger">Rejected</span></td>
                        <td class="align-middle px-4 text-end text-nowrap border-0" style="width:1%;">
                            <h6 class="mb-0">$290.00 USD</h6>
                            <p class="fs--2 mb-0">15 March, 2020</p>
                        </td>
                        <td class="align-middle ps-4 pe-1 border-0" style="width: 130px; min-width: 130px;"><select
                                class="form-select form-select-sm px-2 bg-transparent">
                                <option>Action</option>
                                <option>Archive</option>
                                <option>Delete</option>
                            </select></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light py-2">
            <div class="row flex-between-center">
                <div class="col-auto"><select class="form-select form-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                    </select></div>
                <div class="col-auto"><a class="btn btn-link btn-sm px-0 fw-medium" href="#!">View All<span
                            class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
            </div>
        </div>
    </div>




    <div class="card" id="ticketsTable">
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <h6 class="mb-0">Unsolved Tickets</h6>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="input-group input-search-width"><input
                                    class="form-control form-control-sm shadow-none" type="search"
                                    placeholder="Search  by name" aria-label="search" /><button
                                    class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span
                                        class="fa fa-search fs--1"></span></button></div>
                        </form>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1"><button
                        class="btn btn-sm btn-falcon-default" type="button"><span class="fas fa-filter"
                            data-fa-transform="shrink-4 down-1"></span><span
                            class="ms-1 d-none d-sm-inline-block">Filter</span></button>
                    <div class="bg-300 mx-3 d-none d-lg-block" style="width:1px; height:29px"></div>
                    <div class="d-none" id="table-ticket-actions">
                        <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                                <option selected="">Bulk actions</option>
                                <option value="Refund">Refund</option>
                                <option value="Delete">Delete</option>
                                <option value="Archive">Archive</option>
                            </select><button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center" id="table-ticket-replace-element">
                        <div class="dropdown"><button
                                class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none"
                                type="button" id="dashboard-layout" data-bs-toggle="dropdown"
                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                data-bs-reference="parent"><span
                                    class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block me-1 table-layout">Table
                                    View</span><span class="fas fa-chevron-down"
                                    data-fa-transform="shrink-3 down-1"></span></button>
                            <div class="dropdown-menu dropdown-toggle-item dropdown-menu-end border py-2"
                                aria-labelledby="dashboard-layout" role="tablist"><a class="dropdown-item active"
                                    id="tableView" data-bs-toggle="tab" href="#table-view" role="tab"
                                    aria-controls="table-view">Table View</a><a class="dropdown-item" id="cardView"
                                    data-bs-toggle="tab" href="#card-view" role="tab"
                                    aria-controls="card-view">Card View</a></div>
                        </div><button class="btn btn-falcon-default btn-sm mx-2" type="button"><span
                                class="fas fa-plus" data-fa-transform="shrink-3"></span><span
                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1">New</span></button><button
                            class="btn btn-falcon-default btn-sm" type="button"><span
                                class="fas fa-external-link-alt" data-fa-transform="shrink-3"></span><span
                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1">Export</span></button>
                        <div class="dropdown font-sans-serif ms-2"><button
                                class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                                type="button" id="preview-dropdown" data-bs-toggle="dropdown"
                                data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2"
                                aria-labelledby="preview-dropdown"><a class="dropdown-item" href="#!">View</a><a
                                    class="dropdown-item" href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content" id="ticketViewContent">
            <div class="fade tab-pane active show" id="table-view" role="tabpanel" aria-labelledby="tableView"
                data-list='{"valueNames":["client","subject","status","priority","agent"],"page":6,"pagination":true}'>
                <div class="card-body p-0">
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm mb-0 fs--1 table-view-tickets">
                            <thead class="text-800 bg-light">
                                <tr>
                                    <th class="py-2 fs-0 pe-2" style="width: 28px;">
                                        <div class="form-check d-flex align-items-center"><input
                                                class="form-check-input" id="checkbox-bulk-table-tickets-select"
                                                type="checkbox"
                                                data-bulk-select='{"body":"table-ticket-body","actions":"table-ticket-actions","replacedElement":"table-ticket-replace-element"}' />
                                        </div>
                                    </th>
                                    <th class="sort align-middle ps-2" data-sort="client">Client</th>
                                    <th class="sort align-middle" data-sort="subject" style="min-width:15.625rem">
                                        Subject</th>
                                    <th class="sort align-middle" data-sort="status">Status</th>
                                    <th class="sort align-middle" data-sort="priority">Priority</th>
                                    <th class="sort align-middle text-end" data-sort="agent">Agent</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-ticket-body">
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                id="table-view-tickets-0"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>EW</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Emma Watson</a>
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">Synapse Design #1125</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-success false">Recent</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:100"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#e63757" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Urgent</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option selected="selected">Anindya</option>
                                            <option>Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                id="table-view-tickets-1"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>L</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Luke</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">Change of refund my last
                                            buy | Order #125631</a></td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-danger false">Overdue</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:75"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#F68F57" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">High</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option selected="selected">Anindya</option>
                                            <option>Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-2"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <img class="rounded-circle" src="../assets/img/team/1-thumb.png"
                                                    alt="" />
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Finley</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-warning false">Remaining</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:50"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#2A7BE4" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Medium</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option selected="selected">Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-3"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>PG</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Peter Gill</a>
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-info false">Responded</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:25"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#00D27B" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Low</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option selected="selected">Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-4"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <img class="rounded-circle" src="../assets/img/team/25-thumb.png"
                                                    alt="" />
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Freya</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">Contact Froms #3264</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                    </td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:50"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#2A7BE4" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Medium</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option selected="selected">Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-5"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>M</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Morrison</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-info false">Responded</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:50"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#2A7BE4" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Medium</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option selected="selected">Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-6"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>MB</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Morrison
                                                    Banneker</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                    </td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:50"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#2A7BE4" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Medium</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option selected="selected">Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-7"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <img class="rounded-circle" src="../assets/img/team/14-thumb.png"
                                                    alt="" />
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Aar Kay</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">Regarding Falcon Theme
                                            #3262</a></td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-success false">Recent</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:75"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#F68F57" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">High</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-8"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>FB</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Fadil Badr</a>
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">i would like to buy theme
                                            #3261</a></td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                    </td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:25"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#00D27B" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Low</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option selected="selected">Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-9"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <img class="rounded-circle" src="../assets/img/team/3-thumb.png"
                                                    alt="" />
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Regina Kempt</a>
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">Theme info (icons)
                                            #3260</a></td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                    </td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:50"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#2A7BE4" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Medium</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option selected="selected">Anindya</option>
                                            <option>Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-10"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>C</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Caleb</a></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">Phishing link #3259</a>
                                    </td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-success false">Recent</small></td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:25"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#00D27B" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Low</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option>Khalid</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td class="align-middle fs-0 py-3">
                                        <div class="form-check mb-0"><input class="form-check-input"
                                                type="checkbox" id="table-view-tickets-11"
                                                data-bulk-select-row="data-bulk-select-row" /></div>
                                    </td>
                                    <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                        <div class="d-flex align-items-center gap-2 position-relative">
                                            <div class="avatar avatar-xl">
                                                <div class="avatar-name rounded-circle"><span>FB</span></div>
                                            </div>
                                            <h6 class="mb-0"><a class="stretched-link text-900"
                                                    href="../app/support-desk/contact-details.html">Fadil Badr</a>
                                            </h6>
                                        </div>
                                    </td>
                                    <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold"
                                            href="../app/support-desk/tickets-preview.html">i would like to buy theme
                                            #3261</a></td>
                                    <td class="align-middle status fs-0 pe-4"><small
                                            class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                    </td>
                                    <td class="align-middle priority pe-4">
                                        <div class="d-flex align-items-center gap-2">
                                            <div style="--falcon-circle-progress-bar:50"><svg
                                                    class="circle-progress-svg" width="26" height="26"
                                                    viewBox="0 0 120 120">
                                                    <circle class="progress-bar-rail" cx="60"
                                                        cy="60" r="54" fill="none"
                                                        stroke-linecap="round" stroke-width="12"></circle>
                                                    <circle class="progress-bar-top" cx="60" cy="60"
                                                        r="54" fill="none" stroke-linecap="round"
                                                        stroke="#2A7BE4" stroke-width="12"></circle>
                                                </svg></div>
                                            <h6 class="mb-0 text-700">Medium</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle agent"><select
                                            class="form-select form-select-sm w-auto ms-auto"
                                            aria-label="agents actions">
                                            <option>Select Agent</option>
                                            <option>Anindya</option>
                                            <option>Nowrin</option>
                                            <option selected="selected">Khalid</option>
                                        </select></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center d-none" id="tickets-table-fallback">
                            <p class="fw-bold fs-1 mt-3">No ticket found</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="pagination d-none"></div>
                        <div class="col"><span class="d-none d-sm-inline-block me-2 fs--1"
                                data-list-info="data-list-info"></span></div>
                        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button"
                                data-list-pagination="prev"><span>Previous</span></button><button
                                class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                data-list-pagination="next"><span>Next</span></button></div>
                    </div>
                </div>
            </div>
            <div class="fade tab-pane" id="card-view" role="tabpanel" aria-labelledby="cardView"
                data-list='{"valueNames":["client","subject","status","priority","agent"],"page":4,"pagination":true}'>
                <div class="card-body p-0">
                    <div class="form-check d-none"><input class="form-check-input"
                            id="checkbox-bulk-card-tickets-select" type="checkbox"
                            data-bulk-select='{"body":"card-ticket-body","actions":"table-ticket-actions","replacedElement":"table-ticket-replace-element"}' />
                    </div>
                    <div class="list bg-light p-x1 d-flex flex-column gap-3" id="card-ticket-body">
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-0"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <div class="avatar-name rounded-circle"><span>EW</span></div>
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">Synapse Design #1125</a>
                                    </p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Emma
                                                        Watson</span></a></h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-success false">Recent</small></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:100"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#e63757" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">Urgent</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option selected="selected">Anindya</option>
                                    <option>Nowrin</option>
                                    <option>Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-1"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <div class="avatar-name rounded-circle"><span>L</span></div>
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">Change of refund my last
                                            buy | Order #125631</a></p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Luke</span></a>
                                            </h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-danger false">Overdue</small></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:75"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#F68F57" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">High</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option selected="selected">Anindya</option>
                                    <option>Nowrin</option>
                                    <option>Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-2"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <img class="rounded-circle" src="../assets/img/team/1-thumb.png"
                                            alt="" />
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Finley</span></a>
                                            </h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-warning false">Remaining</small></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:50"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#2A7BE4" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">Medium</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option>Anindya</option>
                                    <option selected="selected">Nowrin</option>
                                    <option>Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-3"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <div class="avatar-name rounded-circle"><span>PG</span></div>
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Peter
                                                        Gill</span></a></h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-info false">Responded</small></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:25"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#00D27B" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">Low</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option>Anindya</option>
                                    <option selected="selected">Nowrin</option>
                                    <option>Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-4"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <img class="rounded-circle" src="../assets/img/team/25-thumb.png"
                                            alt="" />
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">Contact Froms #3264</a>
                                    </p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Freya</span></a>
                                            </h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:50"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#2A7BE4" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">Medium</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option>Anindya</option>
                                    <option>Nowrin</option>
                                    <option selected="selected">Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-5"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <div class="avatar-name rounded-circle"><span>M</span></div>
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Morrison</span></a>
                                            </h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-info false">Responded</small></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:50"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#2A7BE4" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">Medium</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option>Anindya</option>
                                    <option>Nowrin</option>
                                    <option selected="selected">Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-6"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <div class="avatar-name rounded-circle"><span>MB</span></div>
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">I need your help #2256</a>
                                    </p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Morrison
                                                        Banneker</span></a></h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:50"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#2A7BE4" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">Medium</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option>Anindya</option>
                                    <option>Nowrin</option>
                                    <option selected="selected">Khalid</option>
                                </select>
                            </div>
                        </div>
                        <div
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <div class="form-check me-2 me-xxl-3 mb-0"><input class="form-check-input"
                                        type="checkbox" id="card-view-tickets-7"
                                        data-bulk-select-row="data-bulk-select-row" /></div><a
                                    class="d-none d-sm-block" href="../app/support-desk/contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <img class="rounded-circle" src="../assets/img/team/14-thumb.png"
                                            alt="" />
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="../app/support-desk/tickets-preview.html">Regarding Falcon Theme
                                            #3262</a></p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a
                                                    class="text-800 d-flex align-items-center gap-1"
                                                    href="../app/support-desk/contact-details.html"><span
                                                        class="fas fa-user"
                                                        data-fa-transform="shrink-3 up-1"></span><span>Aar
                                                        Kay</span></a></h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3"><small
                                                class="badge rounded badge-soft-success false">Recent</small></div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">2d ago</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div style="--falcon-circle-progress-bar:75"><svg class="circle-progress-svg"
                                            width="26" height="26" viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke-width="12"></circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round"
                                                stroke="#F68F57" stroke-width="12"></circle>
                                        </svg></div>
                                    <h6 class="mb-0 text-700">High</h6>
                                </div><select class="form-select form-select-sm" aria-label="agents actions"
                                    style="width:9.375rem;">
                                    <option>Select Agent</option>
                                    <option>Anindya</option>
                                    <option>Nowrin</option>
                                    <option>Khalid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center d-none" id="tickets-card-fallback">
                        <p class="fw-bold fs-1 mt-3">No ticket found</p>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center">
                        <div class="pagination d-none"></div>
                        <div class="col"><span class="d-none d-sm-inline-block me-2 fs--1"
                                data-list-info="data-list-info"></span></div>
                        <div class="col-auto d-flex"><button class="btn btn-sm btn-primary" type="button"
                                data-list-pagination="prev"><span>Previous</span></button><button
                                class="btn btn-sm btn-primary px-4 ms-2" type="button"
                                data-list-pagination="next"><span>Next</span></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
