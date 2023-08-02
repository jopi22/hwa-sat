@extends('layouts.layout')

@section('judul')
    Catering | HWA &bull; SAT
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
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
@endsection

@section('superadmin')
    @if ($master->periode == $periode)
        @if ($cek > 0)
        <div class="card mb-3 bg-100 shadow-none border">
            <div class="row gx-0 flex-between-center">
                <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                        src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                        width="90" />
                    <div>
                        <h6 class="text-primary fs--1 mb-0"><i class="fas fa-coins"></i> Finance Division
                        </h6>
                        <h4 class="text-primary fw-bold mb-0">Catering</h4>
                    </div>
                </div>
                <div class="col-sm-auto d-flex align-items-center">
                    <form class="row align-items-center g-3">
                        <div class="col-auto">
                            <h6 class="text-info mb-0">Master Present :</h6>
                        </div>
                        <div class="col-md-auto">
                            <h6 class="mb-0">{{ $master->created_at->format('F Y') }}</h6>
                        </div>
                    </form>
                    <img class="ms-2 d-md-none d-lg-block"
                        src="{{ asset('assets/img/illustrations/ticket-bg.png') }}" alt=""
                        width="150" />
                </div>
            </div>
        </div>

            @include('comp.alert')

            {{-- <div class="card mb-3">
            <div class="card-body py-5 py-sm-3">
                <div class="row g-5 g-sm-0">
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-warning">Total Kredit Pusat</h6>
                                <h3 class="fw-normal text-warning"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $kredit_p }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-success">Total Debit</h6>
                                <h3 class="fw-normal text-success"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $debit }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-danger">Total Kredit</h6>
                                <h3 class="fw-normal text-danger"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $kredit }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="border-sm-end border-300">
                            <div class="text-center">
                                <h6 class="text-primary">Total Saldo</h6>
                                <h3 class="fw-normal text-primary"
                                    data-countup='{"prefix":"Rp&nbsp;","endValue":{{ $saldo }}}'>0</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

            <div class="card mb-3 font-sans-serif">
                <div class="bg-holder bg-card d-none d-sm-block"
                    style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
                <div class="card-body ">
                    <div class="row">
                        <div
                            class="col-6 d-flex gap-3 flex-column flex-sm-row align-items-center border-md-end border-bottom border-md-bottom-0 border-dashed">
                            @if ($cat_m->porsi_harga == null)
                                Belum Disetting
                            @else
                            <table>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Periode</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ date('F Y') }}</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Kantin </th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;PT HWA</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Pengurus Kantin</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $cat_m->atas_nama }}</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Bank</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $cat_m->bank }} </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">No Rek</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $cat_m->no_rek }} </th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Harga / Porsi</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $harga_porsi }} </th>
                                </tr>
                            </table>
                            @endif
                        </div>
                        <div class="col-6">
                            @if ($cat_m->tot_porsi == null)
                                Belum disinkronisai
                            @else
                            <table>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Porsi Pagi Total</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $pagi }} Porsi</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Porsi Siang Total</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $siang }} Porsi</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Porsi Sore Total</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $sore }} Porsi</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Porsi Malam Total</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $malam }} Porsi</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Grand Porsi</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;{{ $total }} Porsi</th>
                                </tr>
                                <tr>
                                    <th class="text-700 fw-normal fs--1" style="min-width: 180px">Total Harga</th>
                                    <th class="text-700 fw-normal fs--1">:</th>
                                    <th class="text-1000 fw-normal fs--1">&nbsp;Rp {{ $harga }} </th>
                                </tr>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header bg-light d-flex flex-between-justify py-2">
                    <h3></h3>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#setting" class="btn btn-sm btn-warning"><i class="fas fa-cog"></i>
                        Setting</button>&nbsp;
                    @if ($cat_m->porsi_harga != null)
                    <form action="{{ route('cat.r') }}" method="post">
                        @csrf
                        <input type="hidden" name="delete" value="{{ $cat_m->id }}">
                        <input type="hidden" name="id" value="{{ $cat_m->id }}">
                        <input type="hidden" name="master_id" value="{{ $cat_m->master_id }}">
                        <input type="hidden" name="atas_nama" value="{{ $cat_m->atas_nama }}">
                        <input type="hidden" name="porsi_harga" value="{{ $cat_m->porsi_harga }}">
                        <input type="hidden" name="bank" value="{{ $cat_m->bank }}">
                        <input type="hidden" name="no_rek" value="{{ $cat_m->no_rek }}">
                        <input type="hidden" name="tot_pagi" value="{{ $pagi }}">
                        <input type="hidden" name="tot_siang" value="{{ $siang }}">
                        <input type="hidden" name="tot_sore" value="{{ $sore }}">
                        <input type="hidden" name="tot_malam" value="{{ $malam }}">
                        <input type="hidden" name="tot_porsi" value="{{ $total }}">
                        <input type="hidden" name="tot_harga" value="{{ $harga }}">
                        <button class="btn btn-sm btn-info"><i class="fab fa-slack"></i> Sinkronisai</button>
                    </form>
                    @endif
                </div>
                <div id="tableExample4"
                    data-list='{"valueNames":["id","no","tgl","unit","rem","tipe","des"],"filter":{"key":"tipe"}}'>
                    <div class="row mt-2 ms-3 mb-2 g-0 flex-between-left">
                        <div class="col-sm-3">
                            <form>
                                <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                        type="search" placeholder="Pencarian..." aria-label="search" />
                                </div>
                            </form>
                        </div>&nbsp;
                        <div class="col-sm-3">
                            <a href="{{ route('cat.c') }}">
                                <button class="btn btn-falcon-default btn-sm mx-2 text-success" type="button"><span
                                        class="fas fa-plus text-success" data-fa-transform="shrink-3"></span><span
                                        class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1"></span>
                                </button>
                            </a>
                            <a href="{{ route('cat.excel', Crypt::EncryptString(Auth::user()->id)) }}" target="_blank"
                                rel="noopener noreferrer">
                                <button class="btn btn-sm btn-falcon-success mx-2"><i class="fas fa-file-excel"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    @if ($cek_list == 0)
                        <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                    @else
                        <div class="table-responsive scrollbar">
                            <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                                data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                                <thead class="bg-200 text-800">
                                    <tr class="text-center">
                                        <th style="min-width: 50px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap">
                                            Aksi
                                        </th>
                                        <th style="min-width: 50px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="id">
                                            #
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="tgl">
                                            Tanggal
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="pagi">
                                            Pagi
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="siang">
                                            Siang
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="sore">
                                            Sore
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="malam">
                                            Malam
                                        </th>
                                        <th style="min-width: 100px"
                                            class="sort bg-primary text-white align-middle white-space-nowrap"
                                            data-sort="total">
                                            Total
                                        </th>
                                        <th style="min-width: 400px"
                                            class="sort bg-secondary text-white align-middle white-space-nowrap"
                                            data-sort="ket">
                                            Keterangan
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="table-posts" class="list">
                                    @foreach ($cat_list as $res)
                                        <tr id="" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                            <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                <div class="btn-group  btn-group-sm" role="group">
                                                    <a href="javascript:void(0)"
                                                        data-bs-target="#edit-{{ $res->id }}"
                                                        data-id="{{ $res->id }}" data-bs-toggle="modal"
                                                        class="btn btn-warning" type="button"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="javascript:void(0)"
                                                        data-bs-target="#hapus-{{ $res->id }}"
                                                        data-id="{{ $res->id }}" data-bs-toggle="modal"
                                                        class="btn btn-danger" type="button"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap id">
                                                {{ $loop->iteration }}
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap tgl">
                                                @if ($res->tgl)
                                                    {{ $res->tgl }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-center text-1000 white-space-nowrap pagi">
                                                @if ($res->pagi)
                                                    {{ $res->pagi }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap siang">
                                                @if ($res->siang)
                                                    {{ $res->siang }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap sore">
                                                @if ($res->sore)
                                                    {{ $res->sore }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap malam">
                                                @if ($res->malam)
                                                    {{ $res->malam }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            <td class="align-middle text-1000 text-center white-space-nowrap total">
                                                @if ($res->total)
                                                    {{ $res->total }}
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
                <div class="card-footer bg-light d-flex flex-between-justify py-2">
                    {{-- // --}}
                </div>
            </div>
            @include('comp.modal.kas.modal_cat_setting')
            @include('comp.modal.kas.modal_cat_edit')
            @include('comp.modal.kas.modal_cat_hapus')
        @else
            @include('comp.card.card404_catering')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
