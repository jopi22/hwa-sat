@extends('layouts.layout')

@section('judul')
    Performa Equipment | Arsip | HWA &bull; SAT
@endsection

@section('sad_menu')
    @include('layouts.panel.sad.vertikal')
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
<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <div>
            <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-archive"></i>
                Arsip</span>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn btn-falcon-default btn-sm" href="{{ route('amast.g') }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Halaman Menu Arsip">
                <span class="fas fa-list"></span>
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <a class="btn fw-semi-bold btn-falcon-success btn-sm" href="{{ route('master.gdp', $master->id) }}" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Master {{ $master->created_at->format('F Y') }}">
                {{ $master->created_at->format('F Y') }}
            </a>
            <span class="mx-1 mx-sm-2 text-300">| </span>
            <span class=" fw-semi-bold text-primary"> Performance Hours Meter</span>
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
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6 ">
                            <select class="form-select form-select-sm" aria-label="Bulk actions"
                                data-list-filter="data-list-filter">
                                <option selected="" value="">Filter: Tipe</option>
                                @foreach ($equipment as $item)
                                    <option value="{{ $item->tipe }}">{{ $item->tipe }}</option>
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
                                {{-- <th style="min-width: 50px" class="bg-secondary text-white align-middle white-space-nowrap">
                                    Aksi
                                </th> --}}
                                <th style="min-width: 50px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
                                    #
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="tgl">
                                    No Unit
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap"
                                    data-sort="payment">
                                    Tipe
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="id">
                                    Brand
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    HM Awal</th>
                                <th style="min-width: 150px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    HM Akhir
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    HM
                                    Potongan
                                </th>
                                <th style="min-width: 150px"
                                    class="sort bg-primary text-white align-middle white-space-nowrap">
                                    HM
                                    Total
                                </th>
                                <th style="min-width: 150px; max-width: 400px;"
                                    class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="name">
                                    Alokasi
                                </th>
                            </tr>
                        </thead>
                        <tbody id="table-posts" class="list">
                            @foreach ($equip as $res)
                                <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    {{-- <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        <div class="btn-group  btn-group-sm" role="group">
                                            <a href="{{ route('r.hm.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                class="btn btn-info" type="button"><i class="fas fa-info-circle"></i></a>
                                        </div>
                                    </td> --}}
                                    <td class="align-middle text-center text-1000 white-space-nowrap no">
                                        {{ $loop->iteration }}</td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                        @if ($res->equip_->no_unit)
                                            {{ $res->equip_->no_unit }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                        @if ($res->equip_->tipe)
                                            {{ $res->equip_->tipe }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td class="align-middle text-1000 text-center white-space-nowrap id">
                                        @if ($res->equip_->brand_id)
                                            {{ $res->equip_->brand_id }}
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
                                        PT. CMI
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
                    class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button"
                    id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true"
                    aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved">
                    <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i> Print
                        Excel</a>
                </div>
            </div>
        </div>
    </div>

@endsection
