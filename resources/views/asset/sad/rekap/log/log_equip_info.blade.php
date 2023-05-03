@extends('layouts.layout')

@section('judul')
    {{ $equip_m->equip_->no_unit }} | Validasi | Barang Keluar | HWA &bull; SAT
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
        <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
            <div class="col d-flex align-items-center">
                <div>
                    <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                class="fas fa-home text-primary"></i></button></a>
                    <a href="{{ route('log.e.l') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                class="fas fa-list text-primary"></i></button></a>
                    <a href="{{ route('log.e.i', Crypt::encryptString($equip_m->equip_id)) }}"><button
                            class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
                    <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i class="fas fa-calendar-alt"></i>
                        {{ $master->created_at->format('F Y') }}</span>
                </div>
                <div class="ms-1">&nbsp;
                    <span class=" fw-semi-bold text-primary"> Barang Keluar /
                        <span class="fw-semi-bold text-info">{{ $equip_m->equip_->tipe }}
                            {{ $equip_m->equip_->no_unit }}</span></span>
                </div>
            </div>
            <div class="col-auto d-flex align-items-center">
                <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                    <a href="{{ route('r.log.e.i', Crypt::encryptString($equip_m->equip_id)) }}">
                        <button class="btn btn-sm active text-primary" data-bs-toggle="pill"
                            data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                            aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="true"
                            id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">List</button>
                    </a>
                    <a href="{{ route('r.log.e.e', Crypt::encryptString($equip_m->equip_id)) }}">
                        <button class="btn btn-sm  text-warning" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                    </a>
                    <a href="{{ route('r.log.e.c', Crypt::encryptString($equip_m->equip_id)) }}">
                        <button class="btn btn-sm text-success" data-bs-toggle="pill"
                            data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" type="button" role="tab"
                            aria-controls="dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc" aria-selected="false"
                            id="tab-dom-91d68b2e-028d-47b6-9a26-2f75d430f2dc">Tambah</button>
                    </a>
                </div>
                <div class="position-relative">&nbsp;
                    <button class="btn btn-falcon-default text-info btn-sm" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                            class="fas fa-truck-monster"></i></button>
                </div>
                <div class="position-relative">&nbsp;
                    <div class="dropdown font-sans-serif d-inline-block">
                        <button class="btn btn-sm btn-falcon-default dropdown-toggle" id="dropdownMenuButton" type="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i> Print
                                Excel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('comp.alert')

        <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasRightLabel"><i class="fas fa-truck-monster"></i> Barang Keluar Equiment</h5><button
                    class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div id="tableExample4"
                    data-list='{"valueNames":["id","no","tgl","name","payment","dedi","lokasi","shift","rem"],"filter":{"key":"payment"}}'>
                    <div class="col-sm-auto mb-3">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Pencarian..." aria-label="search" />
                            </div>
                        </form>
                    </div>
                    @if ($cek_all == 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                                data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                <thead class="bg-200 text-800">
                                    <tr class="text-center">
                                        <th style="min-width: 50px"
                                            class="bg-primary text-white align-middle white-space-nowrap">
                                            Aksi
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-primary text-white align-middle white-space-nowrap"
                                            data-sort="tgl">
                                            No Unit
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-primary text-white align-middle white-space-nowrap"
                                            data-sort="payment">
                                            Type
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($equip_list as $res)
                                        <tr id="index_{{ $res->id }}"
                                            class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-center text-1000 white-space-nowrap no">
                                                <div class="btn-group  btn-group-sm" role="group">
                                                    <a href="{{ route('r.log.e.i', Crypt::encryptString($res->equip_id)) }}"
                                                        class="btn btn-info" type="button"><i
                                                            class="fas fa-info-circle"></i></a>
                                                    <a href="{{ route('r.log.e.e', Crypt::encryptString($res->equip_id)) }}"
                                                        class="btn btn-warning" type="button"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="{{ route('r.log.e.c', Crypt::encryptString($res->equip_id)) }}"
                                                        class="btn btn-success" type="button"><i
                                                            class="fas fa-plus-square"></i></a>
                                                </div>
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                {{ $res->equip_->no_unit }}</td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                                {{ $res->equip_->tipe }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-light py-2">
                {{-- // --}}
            </div>
            <div id="tableExample4" data-list='{"valueNames":["id","no","tgl","bar","jum","sat","hm","ket"]}'>
                @if ($cek_log == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="row mt-2 ms-3 mb-2 g-0">
                        <div class="col-sm-4">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
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
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="no">
                                        #
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="tgl">
                                        Tanggal
                                    </th>
                                    <th style="min-width:250px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="bar">
                                        Barang
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="jum">
                                        Jumlah
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="sat">
                                        Satuan
                                    </th>
                                    <th style="min-width: 100px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="hm">
                                        HM/KM
                                    </th>
                                    <th style="min-width: 350px"
                                        class="sort bg-secondary text-white align-middle white-space-nowrap"
                                        data-sort="ket">
                                        Keterangan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($log_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <a href="{{ route('log.e.i', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-sm btn-info"><span class=" fas fa-info-circle"></span></a>
                                        </td>
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            {{ $loop->iteration }}</td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                            @if ($res->tgl)
                                                {{ $res->tgl }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap bar">
                                            @if ($res->barang)
                                                {{ $res->barang }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap jum">
                                            @if ($res->jumlah)
                                                {{ $res->jumlah }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap sat">
                                            @if ($res->satuan)
                                                {{ $res->satuan }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap hm">
                                            @if ($res->hmkm)
                                                {{ $res->hmkm }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap ket">
                                            @if ($res->ket)
                                                {{ $res->ket }}
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
            <div class="card-footer py-2">
                {{-- // --}}
            </div>
        </div>
@endsection
