@extends('layouts.layout')

@section('judul')
    Master Data | HWA-HRIS
@endsection

@section('link')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
@endsection

@section('konten')
    {{-- // Header // --}}
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-arrow-left text-primary"></i></button></a>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('per.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-spinner text-primary"></i></button></a>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-danger"> Master Data</span>
            </div>
        </div>
        @include('comp.button.kar_btn')
    </div>

    @include('comp.alert')

    {{-- // Konten // --}}
    <div class="card" id="ticketsTable"
        data-list='{"valueNames":["client","subject","status","priority","agent"],"page":7,"pagination":true,"fallback":"tickets-card-fallback"}'>
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <h6 class="mb-0">List Data Master</h6>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="input-group input-search-width"><input
                                    class="form-control form-control-sm shadow-none search" type="search"
                                    placeholder="Cari Data Master" aria-label="search" /><button
                                    class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span
                                        class="fa fa-search fs--1"></span></button></div>
                        </form>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <div class="d-flex align-items-center" id="table-ticket-replace-element">
                        <div class="dropdown">
                            <button class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none" type="button"
                                id="ticket-layout" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                aria-expanded="false" data-bs-reference="parent"><span
                                    class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block me-1">Card
                                    View</span><span class="fas fa-chevron-down"
                                    data-fa-transform="shrink-3 down-1"></span></button>
                            <div class="dropdown-menu dropdown-toggle-item dropdown-menu-end border py-2"
                                aria-labelledby="ticket-layout"><a class="dropdown-item" href="#">Table
                                    View</a><a class="dropdown-item active" href="#">Card View</a></div>
                        </div>
                        <button class="btn btn-falcon-default btn-sm mx-2 ropdown-toggle dropdown-caret-none"
                            id="invitePeople" type="button"data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span class="fas fa-plus text-success"
                                data-fa-transform="shrink-3"></span><span
                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span></button>
                        <div class="dropdown-menu dropdown-menu-end pt-2 pb-0" aria-labelledby="invitePeople"
                            style="min-width: 300px;">
                            <h6 class="dropdown-header text-black text-center text-uppercase py-1 fs--2 ls fw-semi-bold"><i
                                    class="fas fa-calendar"></i> Tambah Data Master</h6>
                            <div class="dropdown-divider mb-0"></div>
                            <div class="p-3">
                                <form action="{{ route('master.s') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="periode" value="{{ $periode }}">
                                    <label class="mt-2 text-700">Jumlah Hari</label><br>
                                    <div class="text-center">
                                        <div class="form-check form-check-inline"><input class="form-check-input"
                                                id="total" type="radio" name="total" value="28" /><label
                                                class="form-check-label text-1000" for="inlineRadio1">28</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input"
                                                id="total" type="radio" name="total" value="29" /><label
                                                class="form-check-label text-1000" for="inlineRadio2">29</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input"
                                                id="total" type="radio" name="total" value="30" /><label
                                                class="form-check-label text-1000" for="inlineRadio2">30</label></div>
                                        <div class="form-check form-check-inline"><input class="form-check-input"
                                                id="total" type="radio" name="total" value="31" /><label
                                                class="form-check-label text-1000" for="inlineRadio2">31</label></div>
                                    </div>
                                    <button class="btn btn-success btn-sm d-block w-100 mt-2" type="submit"><i
                                            class="fas fa-save"></i> Simpan</button>
                                </form>
                            </div>
                        </div>
                        <button class="btn btn-falcon-default btn-sm" type="button"><span
                                class="fas fa-external-link-alt" data-fa-transform="shrink-3"></span><span
                                class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1">Export</span></button>
                        <div class="dropdown font-sans-serif ms-2"><button
                                class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none"
                                type="button" id="preview-dropdown" data-bs-toggle="dropdown" data-boundary="viewport"
                                aria-haspopup="true" aria-expanded="false"><span
                                    class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="preview-dropdown"><a
                                    class="dropdown-item" href="#!">View</a><a class="dropdown-item"
                                    href="#!">Export</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger"
                                    href="#!">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="form-check d-none"><input class="form-check-input" id="checkbox-bulk-card-tickets-select"
                    type="checkbox"
                    data-bulk-select='{"body":"card-ticket-body","actions":"table-ticket-actions","replacedElement":"table-ticket-replace-element"}' />
            </div>
            <div id="table-post" class="list bg-light p-x1 d-flex flex-column gap-3" id="card-ticket-body">

                @if ($cek == 0)
                    Data Kosong
                @else
                    @foreach ($per as $res)
                        <div id="index_{{ $res->id }}"
                            class="bg-white dark__bg-1100 d-md-flex d-xl-inline-block d-xxl-flex align-items-center p-x1 rounded-3 shadow-sm card-view-height">
                            <div class="d-flex align-items-start align-items-sm-center">
                                <a class="d-none d-sm-block" href="contact-details.html">
                                    <div class="avatar avatar-xl avatar-3xl">
                                        <div class="avatar-name rounded-circle"><span>sd</span></div>
                                    </div>
                                </a>
                                <div class="ms-1 ms-sm-3">
                                    <p class="fw-semi-bold mb-3 mb-sm-2"><a
                                            href="tickets-preview.html">#{{ $res->id }}
                                            [{{ $res->periode }}]
                                        </a></p>
                                    <div class="row align-items-center gx-0 gy-2">
                                        <div class="col-auto me-2">
                                            <h6 class="client mb-0"><a class="text-800 d-flex align-items-center gap-1"
                                                    href="contact-details.html"><span class="fas fa-calendar-alt"
                                                        data-fa-transform="shrink-3 up-1"></span><span>
                                                        {{ $res->created_at->format('F Y') }}</span></a></h6>
                                        </div>
                                        <div class="col-auto lh-1 me-3">
                                            @if ($res->status == 0)
                                                <small class="badge rounded-pill bg-success"><i
                                                        class="fas fa-circle-notch"></i> Proses Terkini</small>
                                            @else
                                                @if ($res->status == 1)
                                                    <small class="badge rounded-pill bg-danger"><i
                                                            class="fas fa-circle-notch"></i> Proses Validasi </small>
                                                @else
                                                    @if ($res->status == 2)
                                                        <small class="badge rounded-pill bg-warning"><i
                                                                class="fas fa-check"></i> Validasi </small>
                                                    @else
                                                        @if ($res->status == 3)
                                                            <small class="badge rounded-pill bg-primary"><i
                                                                    class="fas fa-check-double"></i> Fixed </small>
                                                        @else
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        </div>
                                        <div class="col-auto">
                                            <h6 class="mb-0 text-500">30 Hari</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mt-4 mb-x1"></div>
                            <div class="d-flex justify-content-between ms-auto">
                                <div class="d-flex align-items-center gap-2 ms-md-4 ms-xl-0" style="width:7.5rem;">
                                    <div
                                        style="--falcon-circle-progress-bar:@if ($res->status == 1) 100%
                            @else
                                @if ($res->status > 1)
                                    99
                                @else
                                    {{ $progres }} @endif
                            @endif
                            ">
                                        <svg class="circle-progress-svg" width="26" height="26"
                                            viewBox="0 0 120 120">
                                            <circle class="progress-bar-rail" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round" stroke-width="12">
                                            </circle>
                                            <circle class="progress-bar-top" cx="60" cy="60"
                                                r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4"
                                                stroke-width="12">
                                            </circle>
                                        </svg>
                                    </div>
                                    <h6 class="mb-0 text-700">
                                        @if ($res->status == 1)
                                            100%
                                        @else
                                            @if ($res->status > 1)
                                                99%
                                            @else
                                                {{ $progres }}%
                                            @endif
                                        @endif
                                    </h6>
                                </div>
                                <div>
                                    <a href="{{ route('per.ca', Crypt::encryptString($res->id)) }}" id="btn-jadwal-kerja"
                                        data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                        class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Absensi"><span
                                            class="text-info fas fa-calendar-check"></span></a>
                                    <a href="{{ route('per.ca', Crypt::encryptString($res->id)) }}" id="btn-info"
                                        data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                        class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Performa"><span
                                            class="text-info fas fa-stopwatch"></span></a>
                                    <a href="{{ route('per.ca', Crypt::encryptString($res->id)) }}" id="btn-info"
                                        data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                        class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Gaji"><span
                                            class="text-info fas fa-donate"></span></a>

                                    @if (Auth::user()->level == 1)
                                        <a href="javascript:void(0)" id="btn-edit" data-bs-target="{{ $res->id }}"
                                            data-id="{{ $res->id }}" class="btn btn-link btn-dark ms-2 p-0"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Kalender"><span
                                                class="text-warning fas fa-edit"></span></a>
                                        <a href="javascript:void(0)" id="btn-delete"
                                            data-bs-target="{{ $res->id }}" data-id="{{ $res->id }}"
                                            class="btn btn-link btn-dark ms-2 p-0" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Hapus Kalender"><span
                                                class="text-danger fas fa-trash"></span></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif



            </div>
            <div class="text-center d-none" id="tickets-card-fallback">
                <p class="fw-bold fs-1 mt-3">No ticket found</p>
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

    @include('comp.modal.per.modal_per_delete')
    @include('comp.modal.per.modal_per_edit')
@endsection
