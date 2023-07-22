@extends('layouts.layout')

@section('judul')
    Profil Perusahaan | Info | HWA &bull; SAT
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
                <h4 class="text-primary fw-bold mb-0">Profil PT Harapan Wahyu Abadi Site Sandai</h4>
            </div>
        </div>
    </div>
</div>

    {{-- // Konten // --}}
    <div class="card mb-3">
        <div class="card-header position-relative min-vh-25 mb-7">
            <div class="bg-holder rounded-3 rounded-bottom-0" style="background-image:url({{ asset($hwa->foto) }});"></div>
            <!--/.bg-holder-->
            <div class="avatar avatar-5xl avatar-profile"><img class="rounded-circle img-thumbnail shadow-sm"
                    src="{{ asset($hwa->logo) }}" width="200" alt="" /></div>
        </div>
        <div class="card-body">
            <h5>{{ $hwa->nama }}</h5>
            <p>Berdiri pada {{ $hwa->tgl_berdiri }}</p>
            <p>Lokasi {{ $hwa->alamat }}</p>
            <p>Deskripsi {{ $hwa->deskripsi }}</p>
            {{-- <table>
                <tr>
                    <th style="width: 200px" class="fs-0 fw-normal">Nama Perusahaan</th>
                    <th class="text-900"><code class="text-600">: </code>{{ $hwa->nama }}</th>
                </tr>
                <tr>
                    <th style="width: 200px" class="fs-0 fw-normal">Tgl Berdiri</th>
                    <th class="text-900"><code class="text-600">: </code>{{ $hwa->tgl_berdiri }}</th>
                </tr>
                <tr>
                    <th style="width: 200px" class="fs-0 fw-normal">Alamat</th>
                    <th class="text-900"><code class="text-600">: </code>{{ $hwa->alamat }}</th>
                </tr>
                <tr>
                    <th style="width: 200px" class="fs-0 fw-normal">Deskripsi</th>
                    <th class="text-900"><code class="text-600">: </code>{{ $hwa->deskripsi }}</th>
                </tr>
            </table> --}}
            <div class="col-xxl-3 mt-4 mt-xxl-0 d-flex justify-content-center">
                <ul class="list-unstyled mb-0 d-flex flex-wrap flex-xxl-column gap-3 justify-content-center">
                    <li><a class="text-800 hover-primary hover-text-decoration-none" href="#!"><span
                                class="fas fa-globe"></span><span class="fw-semi-bold ms-2">Website</span></a></li>
                    <li><a class="text-800 hover-primary hover-text-decoration-none" href="#!"><span
                                class="fab fa-linkedin"></span><span class="fw-semi-bold ms-2">LinkedIn</span></a></li>
                    <li><a class="text-800 hover-primary hover-text-decoration-none" href="#!"><span
                                class="fab fa-facebook"></span><span class="fw-semi-bold ms-2">Facebook</span></a></li>
                    <li><a class="text-800 hover-primary hover-text-decoration-none" href="#!"><span
                                class="fab fa-instagram"></span><span class="fw-semi-bold ms-2">Instagram</span></a></li>
                    <li><a class="text-800 hover-primary hover-text-decoration-none" href="#!"><span
                                class="fab fa-pinterest"></span><span class="fw-semi-bold ms-2">Pinterest</span></a></li>
                </ul>
            </div>
        </div>
        <div class="card-footer bg-light d-flex flex-between-center py-2">
            <a href="{{ route('hwa.e') }}"><button class="btn btn-sm btn-warning">Edit</button></a>
        </div>
    </div>

    <div class="card mb-2">
        <a class="color-white" href="#!">
            <div class="hoverbox rounded-3">
                <img class="img-fluid" src="{{ asset('file/hwa/profil/IMG_20230106_223851_949.jpg') }}" alt="" />
                <div class="hoverbox-content">
                    <img class="img-fluid" src="{{ asset('file/hwa/profil/banner.jpg') }}" alt="" />
                </div>
            </div>
        </a>
    </div>


    <div class="card">
        <iframe class="embed-responsive-item col-12"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9540271134665!2d110.49358861445864!3d-1.1926127991301043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0479b9d83e2641%3A0xaefde216191c3eec!2sPT%20Harapan%20Wahyu%20Abadi%20(%20HWA%20)%2C%20Site%20Sandai!5e0!3m2!1sid!2sid!4v1676308046793!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
