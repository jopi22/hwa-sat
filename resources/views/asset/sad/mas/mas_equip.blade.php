@extends('layouts.layout')

@section('judul')
    Generate Manual Equipment | HWA-SAT
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

@section('superadmin')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/illustrations/reports-bg.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-chess-queen"></i> Setting Master</h6>
                <h4 class="mb-0 text-primary fw-bold">Generate Manual Data Equipment</h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="card mb-3">
        <div class="card-body px-xxl-0 pt-4">
            <div class="row g-0">
                <div class="col-xxl-3 col-md-6 px-3 text-center border-md-end  border-xxl-bottom-0 pb-3 p-xxl-0 ps-md-0">
                    <div class="icon-circle icon-circle-primary">
                        <div class="avatar avatar-xl">
                            <div class="avatar-emoji rounded-circle "><span role="img" aria-label="Emoji">🚛</span>
                            </div>
                        </div>
                    </div>
                    <h4 class="mb-1 font-sans-serif"><span class="text-700 mx-2"
                            data-countup='{"endValue":"{{ $equip_m }}"}'>0</span><span
                            class="fw-normal text-600">Equipment Telah Di
                            Generate</span>
                    </h4>
                    <p class="fs--1 fw-semi-bold mb-0">{{ $equip_all }} <span class="text-600 fw-normal">Total Data All
                            Periode</span></p>
                </div>
                <div class="col-xxl-3 col-md-6 px-3">
                    <h5 class="mb-3">Pilih Data Equipment Yang Akan Di Generate</h5>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed text-success" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">Klik Eke</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <table>
                                    @foreach ($equip as $asu)
                                        <tr>
                                            <th style="min-width: 50px"><button class="btn btn-success btn-sm"
                                                    data-bs-toggle="modal" data-bs-target="#mod-{{ $asu->id }}"><i
                                                        class="fas fa-check-circle"></i></button></th>
                                            <th style="min-width: 100px">{{ $asu->no_unit }}</th>
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
                            <th scope="col">Id Equip</th>
                            <th scope="col">No Unit</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($equip_list as $res)
                            <tr class="align-middle">
                                <td class="text-nowrap">{{ $loop->iteration }}</td>
                                <td class="text-nowrap">{{ $res->kode_unik }}</td>
                                <td class="text-nowrap">{{ $res->equip_->id }}</td>
                                <td class="text-nowrap">{{ $res->equip_->no_unit }}</td>
                                <td class="text-nowrap">{{ $res->equip_->tipe }}</td>
                                <td class="text-nowrap">{{ $res->equip_->jenis }}</td>
                                <td class="text-nowrap">{{ $res->equip_->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- // Modal // --}}
    @foreach ($equip as $asu)
        <div class="modal fade" id="mod-{{ $asu->id }}" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <form action="{{ route('equip.gen.m') }}" method="post">
                    @csrf
                    <div class="modal-content border-0">
                        <div class="modal-header px-5 position-relative modal-shape-header bg-success">
                            <div class="position-relative z-index-1 light">
                                <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-truck-monster"></i>
                                    {{ $asu->no_unit }}</h5>
                            </div><button type="button"
                                class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Ente Yakin, Bende Ni Mau di Generate?</h5>
                            <input type="hidden" name="kode_unik" value="{{ $cek->id }}{{ $asu->id }}">
                            <input type="hidden" name="master_id" value="{{ $cek->id }}">
                            <input type="hidden" name="equip_id" value="{{ $asu->id }}">
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
@endsection
