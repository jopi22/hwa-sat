@extends('layouts.layout')

@section('judul')
    Hauling | HWA &bull; SAT
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
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    @if ($master->periode == $periode)
        @if ($master->ket2 == 1)
            <div class="card mb-3 bg-light shadow-none">
                <div class="bg-holder bg-card d-none d-sm-block"
                    style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
                <div class="card-header d-flex align-items-center z-index-1 p-0">
                    <img src="{{ asset('assets/img/illustrations/reports-bg.png') }}" alt="" width="96" />
                    <div class="ms-n3">
                        <h6 class="mb-1 text-primary"><i class="fas fa-stopwatch"></i> Hauling <span
                                class="mb-1 text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                        <h4 class="mb-0 text-primary fw-bold">Hauling </h4>
                    </div>
                </div>
            </div>

            @include('comp.alert')

            <div class="card mb-3">
                <div class="card-header bg-light">
                    {{-- // --}}
                </div>
                <div id="tableExample4"
                    data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
                    <div class="row mt-2 mb-2 ms-3 g-0 flex-between-end">
                        <div class="col-6">
                            <div class="row g-1">
                                <div class="col-sm-6">
                                    <form>
                                        <div class="input-group"><input
                                                class="form-control form-control-sm shadow-none search" type="search"
                                                placeholder="Pencarian..." aria-label="search" />
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-6 ">
                                    <select class="form-select form-select-sm" aria-label="Bulk actions"
                                        data-list-filter="data-list-filter">
                                        <option selected="" value="">Filter: Brand</option>
                                        @foreach ($equipment as $item)
                                            <option value="{{ $item->brand }}">{{ $item->brand }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if ($cek_perform < 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
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
                                        <th style="min-width: 150px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="tgl">
                                            No Unit
                                        </th>
                                        <th style="min-width: 150px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="payment">
                                            Tipe
                                        </th>
                                        <th style="min-width: 150px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="id">
                                            Brand
                                        </th>
                                        <th style="min-width: 150px"
                                            class="sort bg-primary text-white align-middle white-space-nowrap">
                                            Hauling (Kilo Gram)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($equip as $res)
                                        <tr id="index_{{ $res->id }}"
                                            class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                <div class="btn-group  btn-group-sm" role="group">
                                                    <a href="javascript:void(0)" data-bs-target="#edit-{{ $res->id }}"
                                                        data-id="{{ $res->id }}" data-bs-toggle="modal"
                                                        class="btn btn-warning" type="button"><i
                                                            class="fas fa-edit"></i></a>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                {{ $loop->iteration }}</td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                @if ($res->equip_->no_unit)
                                                    {{ $res->equip_->no_unit }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                @if ($res->equip_->tipe)
                                                    {{ $res->equip_->tipe }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                                @if ($res->equip_->brand_id)
                                                    {{ $res->equip_->brand_id }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap">
                                                @if ($res->hauling)
                                                    {{ $res->hauling }}
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
                <div class="card-footer bg-light d-flex flex-between-end py-2">
                    <h3></h3>
                    <div class="dropdown font-sans-serif btn-reveal-trigger"><button
                            class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                            type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport"
                            aria-haspopup="true" aria-expanded="false"><span
                                class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved">
                            <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i> Print
                                Excel</a>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($equip as $res)
                <div class="modal fade" id="edit-{{ $res->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                        <div class="modal-content position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('ha.u', $res->id) }}" method="POST">
                                <div class="modal-body p-0">
                                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                        <h4 class="mb-1" id="modalExampleDemoLabel">{{ $res->equip_->no_unit }} </h4>
                                    </div>
                                    <div class="p-4 pb-0">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label class="col-form-label" for="recipient-name">Hauling</label>
                                            <input class="form-control" name="hauling" type="number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    {{-- <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button> --}}
                                    <button class="btn btn-primary" type="submit">Simpan </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            @include('comp.card.card404_equipment')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
