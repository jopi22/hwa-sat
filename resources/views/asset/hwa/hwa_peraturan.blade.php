@extends('layouts.layout')

@section('judul')
    Peraturan Perusahaan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('konten')
<div class="card mb-3 bg-100 shadow-none border">
    <div class="row gx-0 flex-between-center">
        <div class="col-sm-auto d-flex align-items-center"><img class="ms-n0"
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="90" />
            <div>
                <h6 class="text-primary fs--1 mb-0"><i class="fab fa-hornbill"></i> PT Harapan Wahyu Abadi Site Sandai
                </h6>
                <h4 class="text-primary fw-bold mb-0">Divisi Perusahaan</h4>
            </div>
        </div>
        <div class="col-sm-auto d-flex align-items-center">
            <img class="ms-2 d-md-none d-lg-block" src="{{ asset('assets/img/icons/spot-illustrations/corner-4.png') }}"
                alt="" width="130" />
        </div>
    </div>
</div>

    {{-- // Konten // --}}
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true"
                    aria-controls="collapse2">Ubah Peraturan </button></h2>
            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="{{ route('hwa.p.u') }}" method="post" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <input type="file" name="foto" class="form-control">
                        <button class="btn btn-success btn-sm mt-3">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <a class="color-white" href="#!">
            <div class="hoverbox rounded-3">
                <img class="img-fluid" src="{{ asset($hwa->foto2) }}" alt="" />
            </div>
        </a>
    </div>
@endsection
