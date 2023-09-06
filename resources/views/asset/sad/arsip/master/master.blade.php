@extends('layouts.layout')

@section('judul')
    Master Arsip | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
@endsection

@section('link')
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
@endsection

@section('script')
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
                <h6 class="text-primary fs--1 mb-0"><i class="fab fa-hornbill"></i> PT Harapan Wahyu Abadi Site Sandai
                </h6>
                <h4 class="text-primary fw-bold mb-0">Arsip Master Data</h4>
            </div>
        </div>
        <div class="col-sm-auto d-flex align-items-center">
            <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}"
                alt="" width="130" />
        </div>
    </div>
</div>

    @include('comp.alert')

    @if ($cek == 0)
        @include('comp.card.card_kosong')
    @else
        <div class="row gx-3">
            <div class="col-xxl-10 col-xl-12">
                <div class="card" id="ticketsTable"
                    data-list='{"valueNames":["client","subject","status","priority","agent"],"page":7,"pagination":true,"fallback":"tickets-card-fallback"}'>
                    <div class="card-header border-bottom border-200 px-0">
                        <div class="d-lg-flex justify-content-between">
                            <div class="row flex-between-center gy-2 px-x1">
                                <div class="col-auto">
                                    <form>
                                        <div class="input-group input-search-width"><input
                                                class="form-control form-control-sm shadow-none search" type="search"
                                                placeholder="Cari Bulan" aria-label="search" /><button
                                                class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span
                                                    class="fa fa-search fs--1"></span></button></div>
                                    </form>
                                </div>
                            </div>
                            {{-- <div class="border-bottom border-200 my-3"></div>
                            <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                                <button class="btn btn-sm btn-falcon-default d-xl-none" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#ticketOffcanvas"
                                    aria-controls="ticketOffcanvas"><span class="fas fa-filter"
                                        data-fa-transform="shrink-4 down-1"></span><span
                                        class="ms-1 d-none d-sm-inline-block">Filter</span></button>
                                <div class="bg-300 mx-3 d-none d-lg-block d-xl-none" style="width:1px; height:29px"></div>
                                <div class="d-none" id="table-ticket-actions">
                                    <div class="d-flex"><select class="form-select form-select-sm"
                                            aria-label="Bulk actions">
                                            <option selected="">Bulk actions</option>
                                            <option value="Refund">Refund</option>
                                            <option value="Delete">Delete</option>
                                            <option value="Archive">Archive</option>
                                        </select><button class="btn btn-falcon-default btn-sm ms-2"
                                            type="button">Apply</button></div>
                                </div>
                                <div class="d-flex align-items-center" id="table-ticket-replace-element">
                                    <div class="dropdown"><button
                                            class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none"
                                            type="button" id="ticket-layout" data-bs-toggle="dropdown"
                                            data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span
                                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block me-1">Card
                                                View</span><span class="fas fa-chevron-down"
                                                data-fa-transform="shrink-3 down-1"></span></button>
                                        <div class="dropdown-menu dropdown-toggle-item dropdown-menu-end border py-2"
                                            aria-labelledby="ticket-layout"><a class="dropdown-item"
                                                href="table-view.html">Table View</a><a class="dropdown-item active"
                                                href="card-view.html">Card View</a></div>
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
                                            aria-labelledby="preview-dropdown"><a class="dropdown-item"
                                                href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                                href="#!">Remove</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="form-check d-none"><input class="form-check-input"
                                id="checkbox-bulk-card-tickets-select" type="checkbox"
                                data-bulk-select='{"body":"card-ticket-body","actions":"table-ticket-actions","replacedElement":"table-ticket-replace-element"}' />
                        </div>
                        <div class="list bg-light p-x1 d-flex flex-column gap-3" id="card-ticket-body">
                            @if ($cek == 0)
                                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                            @else
                                @foreach ($mast as $item)
                                    <div
                                        class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                                        <div class="d-flex align-items-start align-items-sm-center">
                                            <a class="d-none d-sm-block" href="contact-details.html">
                                                <div class="avatar avatar-xl avatar-3xl">
                                                    <div class="avatar-name rounded-circle">
                                                        <span>{{ $item->created_at->format('M') }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="ms-1 ms-sm-3">
                                                <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                                        href="{{ route('master.gdp', $item->id) }}">{{ $item->created_at->format('F Y') }}</a>
                                                </p>
                                                <div class="row align-items-center gx-0 gy-2">
                                                    <div class="col-auto me-2">
                                                        <h6 class="client mb-0"><a
                                                                class="text-800 d-flex align-items-center gap-1"
                                                                href="contact-details.html"><span class="fas fa-user"
                                                                    data-fa-transform="shrink-3 up-1"></span><span>{{ $item->created_at->format('F Y') }}</span></a>
                                                        </h6>
                                                    </div>
                                                    <div class="col-auto lh-1 me-3"><small
                                                            class="badge rounded badge-soft-success false">Arsip</small>
                                                    </div>
                                                    {{-- <div class="col-auto">
                                                        <h6 class="mb-0 text-500">{{ $item->updated_at->diffforhumans() }}
                                                        </h6>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="border-bottom mt-4 mb-x1"></div>
                                        <div class="d-flex justify-content-between ms-auto">
                                            <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0"
                                                style="width:7.5rem;">
                                                <div style="--falcon-circle-progress-bar:100"><svg
                                                        class="circle-progress-svg" width="26" height="26"
                                                        viewBox="0 0 120 120">
                                                        <circle class="progress-bar-rail" cx="60" cy="60"
                                                            r="54" fill="none" stroke-linecap="round"
                                                            stroke-width="12">
                                                        </circle>
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
                                        </div> --}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="text-center d-none" id="tickets-card-fallback">
                            <p class="fw-bold fs-1 mt-3">No ticket found</p>
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
        </div>
    @endif

    {{-- @include('comp.modal.dokumen.modal_dokumen_create') --}}
    {{-- @include('comp.modal.dokumen.modal_dokumen_info') --}}
    {{-- @include('comp.modal.dokumen.modal_dokumen_delete') --}}
@endsection
