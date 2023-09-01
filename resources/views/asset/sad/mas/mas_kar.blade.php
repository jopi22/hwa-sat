@extends('layouts.layout')

@section('judul')
    Generate Manual Karyawan | HWA-SAT
@endsection

@section('script')
    <script src="{{ asset('vendors/countup/countUp.umd.js') }}"></script>
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('konten')
<div class="card mb-3 bg-100 shadow-none border">
    <div class="row gx-0 flex-between-center">
        <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt=""
                width="90" />
            <div>
                <h6 class="text-primary fs--1 mb-0"><i class="fas fa-chess-queen"></i> Master Setting
                </h6>
                <h4 class="text-primary fw-bold mb-0">Generate Manual Data Karyawan</h4>
            </div>
        </div>
        <div class="col-sm-auto d-flex align-items-center">
            <form class="row align-items-center g-3">
                <div class="col-auto">
                    <h6 class="text-info mb-0">Master Present :</h6>
                </div>
                <div class="col-md-auto">
                    <h6 class="mb-0">{{ date('F Y') }}</h6>
                </div>
            </form>
            <img class="ms-2 d-md-none d-lg-block"
                src="{{ asset('assets/img/illustrations/ticket-bg.png') }}" alt=""
                width="150" />
        </div>
    </div>
</div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-body px-xxl-0 pt-4">
            <div class="row g-0">
                <div class="col-xxl-3 col-md-6 px-3 text-center border-md-end  border-xxl-bottom-0 pb-3 p-xxl-0 ps-md-0">
                    <div class="icon-circle icon-circle-warning">
                        <div class="avatar avatar-xl">
                            <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">👷</span>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"{{ $kar_m }}"}'>0</span><span
                            class="fw-normal text-600">Karyawan Telah Di
                            Generate</span>
                    </h4>
                    <p class="fs--1 fw-semi-bold mb-0">{{ $kar_all }} <span class="text-600 fw-normal">Total Data All
                            Periode</span></p>
                </div>
                <div class="col-xxl-3 col-md-6 px-3">
                    <h5 class="mb-3">Pilih Data Karyawan Yang Akan Di Generate</h5>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed text-success" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Klik Eke</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table>
                                    @foreach ($kar as $asu)
                                        <tr>
                                            <th style="min-width: 50px"><button class="btn btn-success btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#mod-{{ $asu->id }}"><i
                                                        class="fas fa-check-circle"></i></button></th>
                                            <th style="min-width: 50px"><button class="btn btn-warning btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#cal-{{ $asu->id }}"><i
                                                        class="fas fa-calendar-alt"></i></button></th>
                                            <th style="min-width: 50px">
                                                K{{ $asu->tgl_gabung->format('ym') }}{{ $asu->id }}</th>
                                            <th>|</th>
                                            <th style="min-width: 100px">{{ $asu->name }}</th>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Token</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Tipe Gaji</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kar_list as $res)
                            <tr class="align-middle">
                                <td class="text-nowrap">{{ $loop->iteration }}</td>
                                <td class="text-nowrap">{{ $res->kode_unik }}</td>
                                <td class="text-nowrap">K{{ $res->kar_->tgl_gabung->format('ym') }}{{ $res->kar_->id }}
                                </td>
                                <td class="text-nowrap">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-xl">
                                            <img class="rounded-circle"
                                                src="@if ($res->kar_->image) {{ asset($res->kar_->image) }}
                                            @else
                                            {{ asset('assets/img/team/avatar.png') }} @endif"
                                                alt="" />
                                        </div>
                                        <div class="ms-2">{{ $res->kar_->name }}</div>
                                    </div>
                                </td>
                                <td class="text-nowrap">{{ $res->kar_->jabatan }}</td>
                                <td class="text-nowrap">{{ $res->kar_->tipe_gaji }}</td>
                                <td class="text-nowrap">{{ $res->kar_->status_karyawan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- // Modal MOD // --}}
    @foreach ($kar as $asu)
        <div class="modal fade" id="mod-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <form action="{{ route('kar.gen.m') }}" method="post">
                    @csrf
                    <div class="modal-content border-0">
                        <div class="modal-header px-5 position-relative modal-shape-header bg-success">
                            <div class="position-relative z-index-1 light">
                                <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-user"></i>
                                    {{ $asu->name }}</h5>
                            </div><button type="button"
                                class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Ente Yakin, Bende Ni Mau di Generate?</h5>
                            <input type="hidden" name="kode_unik" value="{{ $cek->id }}{{ $asu->id }}">
                            <input type="hidden" name="master_id" value="{{ $cek->id }}">
                            <input type="hidden" name="kar_id" value="{{ $asu->id }}">
                            <input type="hidden" name="tipe_gaji" value="{{ $asu->tipe_gaji }}">
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" aria-label="Close" class=" btn btn-light"><i
                                    class="fas fa-times"></i> Batal</button>
                            <button type="submit" class="btn btn-success ms-2"><i class="fas fa-check-circle"></i> Ya,
                                Generate</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    {{-- // Modal CAL // --}}
    @foreach ($kar as $asu)
        <div class="modal fade" id="cal-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-success">
                        <div class="position-relative z-index-1 light">
                            <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-user"></i>
                                {{ $asu->name }}</h5>
                        </div><button type="button"
                            class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>Ente Yakin, Bende Ni Mau di Generate?</h5>
                        @if ($per->total == 28)
                            <form action="{{ route('kal.gen') }}" method="post">
                                @csrf

                                <input type="hidden" value="01-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="02-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="03-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="04-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="05-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="06-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="07-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="08-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="09-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="10-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="11-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="12-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="13-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="14-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="15-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="16-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="17-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="18-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="19-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="20-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="21-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="22-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="23-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="24-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="25-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="26-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="27-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <input type="hidden" value="28-{{ $periode }}" name="tgl[]">
                                <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                <input type="hidden" value="8" name="status[]">
                                <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                    name="kode_unik[]">


                                <button class="btn btn-success btn-sm" type="submit"> <i
                                        class="fas fa-check-circle"></i>
                                    Generate</button>
                            </form>
                        @else
                            @if ($per->total == 29)
                                <form action="{{ route('kal.gen') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="delete_id" value="{{ $cek->id }}">
                                    <input type="hidden" name="id" value="{{ $cek->id }}">
                                    <input type="hidden" name="periode" value="{{ $periode }}">
                                    <input type="hidden" name="total" value="{{ $per->total }}">
                                    <input type="hidden" name="status_" value="{{ $per->status }}">
                                    <input type="hidden" name="ket" value="1">
                                    <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                    <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
                                    <input type="hidden" name="created_at" value="{{ $per->created_at }}">

                                    <input type="hidden" value="01-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="02-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="03-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="04-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="05-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="06-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="07-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="08-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="09-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="10-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="11-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="12-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="13-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="14-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="15-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="16-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="17-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="18-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="19-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="20-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="21-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="22-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="23-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="24-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="25-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="26-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="27-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="28-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <input type="hidden" value="29-{{ $periode }}" name="tgl[]">
                                    <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                    <input type="hidden" value="8" name="status[]">
                                    <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                    <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                        name="kode_unik[]">


                                    <button class="btn btn-success btn-sm" type="submit"> <i
                                            class="fas fa-check-circle"></i>
                                        Generate</button>
                                </form>
                            @else
                                @if ($per->total == 30)
                                    <form action="{{ route('kal.gen') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="delete_id" value="{{ $cek->id }}">
                                        <input type="hidden" name="id" value="{{ $cek->id }}">
                                        <input type="hidden" name="periode" value="{{ $periode }}">
                                        <input type="hidden" name="total" value="{{ $per->total }}">
                                        <input type="hidden" name="status_" value="{{ $per->status }}">
                                        <input type="hidden" name="ket" value="1">
                                        <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                        <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
                                        <input type="hidden" name="created_at" value="{{ $per->created_at }}">

                                        <input type="hidden" value="01-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="02-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="03-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="04-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="05-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="06-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="07-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="08-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="09-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="10-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="11-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="12-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="13-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="14-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="15-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="16-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="17-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="18-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="19-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="20-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="21-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="22-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="23-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="24-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="25-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="26-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="27-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="28-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="29-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <input type="hidden" value="30-{{ $periode }}" name="tgl[]">
                                        <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                        <input type="hidden" value="8" name="status[]">
                                        <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                        <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                            name="kode_unik[]">


                                        <button class="btn btn-success btn-sm" type="submit"> <i
                                                class="fas fa-check-circle"></i>
                                            Generate</button>
                                    </form>
                                @else
                                    @if ($per->total == 31)
                                        <form action="{{ route('kal.gen') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delete_id" value="{{ $cek->id }}">
                                            <input type="hidden" name="id" value="{{ $cek->id }}">
                                            <input type="hidden" name="periode" value="{{ $periode }}">
                                            <input type="hidden" name="total" value="{{ $per->total }}">
                                            <input type="hidden" name="status_" value="{{ $per->status }}">
                                            <input type="hidden" name="ket" value="1">
                                            <input type="hidden" name="ket1" value="{{ $per->ket1 }}">
                                            <input type="hidden" name="ket2" value="{{ $per->ket2 }}">
                                            <input type="hidden" name="created_at" value="{{ $per->created_at }}">

                                            <input type="hidden" value="01-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="02-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="03-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="04-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="05-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="06-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="07-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="08-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="09-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="10-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="11-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="12-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="13-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="14-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="15-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="16-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="17-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="18-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="19-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="20-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="21-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="22-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="23-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="24-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="25-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="26-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="27-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="28-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="29-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="30-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">


                                            <input type="hidden" value="31-{{ $periode }}" name="tgl[]">
                                            <input type="hidden" value="{{ $asu->id }}" name="karyawan[]">
                                            <input type="hidden" value="8" name="status[]">
                                            <input type="hidden" value="{{ $cek->id }}" name="periode_id[]">
                                            <input type="hidden" value="{{ $cek->id }}{{ $asu->id }}"
                                                name="kode_unik[]">

                                            <button class="btn btn-success btn-sm" type="submit"> <i
                                                    class="fas fa-check-circle"></i>
                                                Generate</button>
                                        </form>
                                    @else
                                        Kosong
                                    @endif
                                @endif
                            @endif
                        @endif
                    </div>
                    <div class="modal-footer">
                        {{-- // --}}
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
