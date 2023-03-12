@extends('layouts.layout')

@section('judul')
    Barang Keluar | HWA &bull; SAT
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
                    <h6 class="mb-1 text-primary"><i class="fas fa-gas-pump"></i> Logistik <span
                            class="mb-1 text-info">{{ $master->created_at->format('F Y') }}</span></h6>
                    <h4 class="mb-0 text-primary fw-bold">Barang Keluar Per Equipment </h4>
                </div>
            </div>
        </div>

            @include('comp.alert')

            <div class="card mb-3">
                <div class="card-header bg-light">
                    {{-- // --}}
                </div>
                <div id="tableExample4"
                    data-list='{"valueNames":["no","unit","jenis","payment","brand"],"filter":{"key":"payment"}}'>
                    <div class="row mt-2 ms-3 mb-2 g-0 flex-between-end">
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
                                        <option selected="" value="">Filter: Tipe</option>
                                        @foreach ($e_list as $item)
                                            <option value="{{ $item->equip_->tipe }}">{{ $item->equip_->tipe }}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                        class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="unit">
                                        No Unit
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="payment">
                                        Tipe
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="jenis">
                                        Jenis
                                    </th>
                                    <th style="min-width: 150px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="brand">
                                        Brand
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($e_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <div class="btn-group  btn-group-sm" role="group">
                                                <a href="{{ route('log.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-info" type="button"><i
                                                        class="fas fa-info-circle"></i></a>
                                                <a href="{{ route('log.e.e', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-warning" type="button"><i class="fas fa-edit"></i></a>
                                                <a href="{{ route('log.e.c', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-success" type="button"><i
                                                        class="fas fa-plus-square"></i></a>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            {{ $loop->iteration }}</td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap unit">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->no_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->tipe }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap jenis">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->jenis }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap brand">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->brand_id }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-light">
                    {{-- // --}}
                </div>
            </div>
        @else
            @include('comp.card.card404_equipment')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
