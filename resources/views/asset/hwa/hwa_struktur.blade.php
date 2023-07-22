@extends('layouts.layout')

@section('judul')
    Struktur Perusahaan | Info | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('konten')
<div class="card mb-2 bg-light shadow-none">
    <div class="bg-holder bg-card d-none d-sm-block"
        style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
    <!--/.bg-holder-->
    <div class="card-header d-flex align-items-center z-index-1 p-0"><img
            src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
        <div class="ms-n3">
            <div>
                <h6 class="text-primary fs--1 mb-0"><i class="fab fa-hornbill"></i> PT Harapan Wahyu Abadi Site Sandai
                </h6>
                <h4 class="text-primary fw-bold mb-0">Struktur Organisai</h4>
            </div>
        </div>
    </div>
</div>

    {{-- // Konten // --}}
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading2"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true"
                    aria-controls="collapse2">Ubah Konten </button></h2>
            <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <form action="{{ route('hwa.s.u') }}" method="post" enctype="multipart/form-data">
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
                <img class="img-fluid" src="{{ asset($hwa->foto) }}" alt="" />
            </div>
        </a>
    </div>
@endsection
