@extends('layouts.layout_horizontal')

@section('judul')
    Absensi Saya | HWA &bull; SAT
@endsection

@section('link')
    <link href="{{asset('vendors/fullcalendar/main.min.css')}}" rel="stylesheet">
@endsection
@section('script')
    <script src="{{asset('vendors/fullcalendar/main.min.js')}}"></script>
@endsection

@section('konten')
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
        <div class="col d-flex align-items-center">
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"><i class="fas fa-calendar-check"></i> Absensi Saya Periode <span class="text-info">{{$master->created_at->format('F Y')}}</span></span>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="row g-3">
            <div class="col-md-6">

                <div class="card py-3 mb-2">
                    <div class="card-header py-2">
                        </div>
                    <div class="card-body py-3">
                        <div class="row g-0">
                            <div class="col-6 col-md-6 border-200 text-center text-success border-bottom border-end pb-4">
                                <h6 class="pb-1 text-700">Hadir </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">{{$abs_h}} </p>
                            </div>
                            <div class="col-6 col-md-6 border-200 text-center text-danger border-md-200 border-bottom pb-4 ps-3">
                                <h6 class="pb-1 text-700">Alpa </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">{{$abs_a}} </p>
                            </div>
                            <div class="col-6 col-md-6 border-200 text-center text-primary border-bottom border-end mt-3 pb-4">
                                <h6 class="pb-1 text-700">Izin </h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">{{$abs_iz}} </p>
                            </div>
                            <div class="col-6 col-md-6 border-200 text-center text-secondary border-md-200 border-bottom mt-3 pb-4 ps-3">
                                <h6 class="pb-1 text-700">Sakit</h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">{{$abs_skt}} </p>
                            </div>
                            <div
                                class="col-6 col-md-6 border-200 text-center text-warning border-end mt-3 pb-4">
                                <h6 class="pb-1 text-700">Cuti</h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">{{$abs_c}} </p>
                            </div>
                            <div
                                class="col-6 col-md-6 border-200 border-md-200 text-1000 mt-3 text-center pb-4 ps-3">
                                <h6 class="pb-1 text-1000">Jumlah Hari</h6>
                                <p class="font-sans-serif lh-1 mb-1 fs-2">{{$master->total}} </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card overflow-hidden">
                    <div class="card-header">
                        <div class="row gx-0 align-items-center">
                            <div class="col-auto d-flex justify-content-end order-md-1"><button
                                    class="btn icon-item icon-item-sm shadow-none p-0 me-1 ms-md-2" type="button"
                                    data-event="prev" data-bs-toggle="tooltip" title="Previous"><span
                                        class="fas fa-arrow-left"></span></button><button
                                    class="btn icon-item icon-item-sm shadow-none p-0 me-1 me-lg-2" type="button"
                                    data-event="next" data-bs-toggle="tooltip" title="Next"><span
                                        class="fas fa-arrow-right"></span></button></div>
                            <div class="col-auto col-md-auto order-md-2">
                                <h4 class="mb-0 fs-0 fs-sm-1 fs-lg-2 calendar-title"></h4>
                            </div>
                            <div class="col col-md-auto d-flex justify-content-end order-md-3"><button
                                    class="btn btn-falcon-primary btn-sm" type="button" data-event="today">Today</button>
                            </div>
                            <div class="col-md-auto d-md-none">
                                <hr />
                            </div>
                            <div class="col-auto d-flex order-md-0"><button class="btn btn-primary btn-sm" type="button"
                                    data-bs-toggle="modal" data-bs-target="#addEventModal"> <span
                                        class="fas fa-plus me-2"></span>Add Schedule</button></div>
                            <div class="col d-flex justify-content-end order-md-2">
                                <div class="dropdown font-sans-serif me-md-2"><button
                                        class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                                        type="button" id="email-filter" data-bs-toggle="dropdown" data-boundary="viewport"
                                        aria-haspopup="true" aria-expanded="false"><span
                                            data-view-title="data-view-title">Month View</span><span
                                            class="fas fa-sort ms-2 fs--1"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="email-filter">
                                        <a class="active dropdown-item d-flex justify-content-between" href="#!"
                                            data-fc-view="dayGridMonth">Month View<span class="icon-check"><span
                                                    class="fas fa-check"
                                                    data-fa-transform="down-4 shrink-4"></span></span></a><a
                                            class="dropdown-item d-flex justify-content-between" href="#!"
                                            data-fc-view="timeGridWeek">Week View<span class="icon-check"><span
                                                    class="fas fa-check"
                                                    data-fa-transform="down-4 shrink-4"></span></span></a><a
                                            class="dropdown-item d-flex justify-content-between" href="#!"
                                            data-fc-view="timeGridDay">Day View<span class="icon-check"><span
                                                    class="fas fa-check"
                                                    data-fa-transform="down-4 shrink-4"></span></span></a><a
                                            class="dropdown-item d-flex justify-content-between" href="#!"
                                            data-fc-view="listWeek">List View<span class="icon-check"><span
                                                    class="fas fa-check"
                                                    data-fa-transform="down-4 shrink-4"></span></span></a><a
                                            class="dropdown-item d-flex justify-content-between" href="#!"
                                            data-fc-view="listYear">Year View<span class="icon-check"><span
                                                    class="fas fa-check"
                                                    data-fa-transform="down-4 shrink-4"></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0 scrollbar">
                        <div class="calendar-outline" id="appCalendar"></div>
                    </div>
                </div>


            </div>
            <div class="col-md-6">

                <div class="card" id="ticketsTable"
                    data-list='{"valueNames":["client","subject","status","priority","agent"],"page":13,"pagination":true,"fallback":"tickets-table-fallback"}'>
                    <div class="card-header border-bottom border-200 px-0">
                        <div class="d-lg-flex justify-content-between">
                            <div class="row flex-between-center gy-2 px-x1">
                                <div class="col-auto pe-0">
                                    <h6 class="mb-0">Periode {{ $master->created_at->format('F Y') }}</h6>
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
                                        <th style="width: 100px" class="sort align-middle" data-sort="status">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="table-ticket-body">
                                    @foreach ($absen as $asu)
                                        <tr>
                                            <td class="align-middle fs-0 py-3">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                                                <h6 class="mb-0">{{ $asu->tgl }}</h6>
                                            </td>
                                            <td class="align-middle status fs-0 pe-4">
                                                @if ($asu->status == 8)
                                                    <span class="badge bg-light text-500">-</span>
                                                @else
                                                    @if ($asu->status == 7)
                                                        <span class="badge bg-danger">Alpa</span>
                                                    @else
                                                        @if ($asu->status == 6)
                                                            <span class="badge bg-warning">Cuti</span>
                                                        @else
                                                            @if ($asu->status == 5)
                                                                <span class="badge bg-info">Izin</span>
                                                            @else
                                                                @if ($asu->status == 4)
                                                                    <span class="badge bg-info">Izin Tanpa
                                                                        Keterangan</span>
                                                                @else
                                                                    @if ($asu->status == 3)
                                                                        <span class="badge bg-secondary">Sakit</span>
                                                                    @else
                                                                        @if ($asu->status == 2)
                                                                            <span class="badge bg-secondary">Sakit Tanpa
                                                                                Keterangan</span>
                                                                        @else
                                                                            @if ($asu->status == 1)
                                                                                <span class="badge bg-success">Hadir</span>
                                                                            @else
                                                                            @endif
                                                                        @endif
                                                                    @endif
                                                                @endif
                                                            @endif
                                                        @endif
                                                    @endif
                                                @endif
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
                        <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1"
                                type="button" title="Previous" data-list-pagination="prev"><span
                                    class="fas fa-chevron-left"></span></button>
                            <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1"
                                type="button" title="Next" data-list-pagination="next"><span
                                    class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                {{-- // --}}
            </div>
            <div class="col-md-6">
                {{-- // --}}
            </div>
        </div>
    </div>
@endsection
