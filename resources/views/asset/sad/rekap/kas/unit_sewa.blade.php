@extends('layouts.layout')

@section('judul')
    Rekap Sewa Unit | Rekapitulasi | HWA &bull; SAT
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
            <h4 class="mb-0 text-primary fw-bold">Rekap Biaya Sewa Unit<span class="text-info fw-medium"></span></h4>
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
                            <a href="{{ route('r.hm.sewa') }}"><button class="btn btn-sm text-primary" type="button"><i
                                        class="fas fa-stopwatch"></i> Hours Meter</button></a>
                            <a href="{{ route('r.unit.sewa') }}"><button class="btn active btn-sm text-warning"
                                    type="button"><i class="fas fa-truck-monster"></i>
                                    Unit</button></a>
                        </div>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
                <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                    <div class="col-auto pe-0">
                        <a href="{{ route('r.hm.u.p.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                            rel="noopener noreferrer">
                            <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            <div id="tableExample4"
                data-list='{"valueNames":["id","unit","kode","jenis","payment","model","brand","shift","rem"],"filter":{"key":"payment"}}'>
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
                @if ($cek_perform == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-200 text-800">
                                <tr class="text-center">
                                    <th style="min-width: 50px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap" data-sort="no">
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
                                        data-sort="kode">
                                        Kode Unit
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="model">
                                        Model
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="jenis">
                                        Jenis
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
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            {{ $loop->iteration }}</td>
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <div class="btn-group  btn-group-sm" role="group">
                                                <a href="{{ route('r.unit.sewa.i', Crypt::encryptString($res->equip_id)) }}"
                                                    class="btn btn-info" type="button"><i class="fas fa-info-circle">
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
                                        <td class="align-middle text-1000 text-center white-space-nowrap kode">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->kode_unit }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap model">
                                            @if ($res->equip_id)
                                                {{ $res->equip_->model }}
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
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            @if ($res->equip_->tipe)
                                                {{ $res->equip_->tipe }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap brand">
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
        </div>
        <div class="card-footer bg-light py-3">
        </div>
    </div>
@endsection
