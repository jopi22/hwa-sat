@extends('layouts.layout')

@section('judul')
    HWA | Edit Profil Perusahaan
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />

    <script>
        function displayImg(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "./images/music-logo.jpg");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg2(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "./images/music-logo.jpg");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }
    </script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
@endsection

@section('konten')
    {{-- // Header // --}}
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('hwa.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <a href="#"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-spinner text-primary"></i></button></a>
                <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="fas fa-key"></i>
                    </span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> Edit Profil Perusahaan</span></span>
            </div>
        </div>
    </div>

    {{-- // Konten // --}}
    <div class="col-lg-12 pe-lg-2">
        <div class="card mb-3">
            <div class="card-body bg-light">
                <form action="{{ route('hwa.u') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @method('put')
                    @csrf
                    <div class="col-lg-6">
                        <label class="form-label">Nama Perusahaan </label>
                        <input class="form-control" name="nama" maxlength="50" type="text"
                            value="{{ $hwa->nama }}" />
                        @error('nama')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label">Telepon</label>
                        <input class="form-control" type="text" name="telp" maxlength="20"
                            value="{{ $hwa->telp }}" />
                        @error('telp')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" maxlength="50"
                            value="{{ $hwa->email }}" />
                        @error('email')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label">Tgl Berdiri</label>
                        <input class="form-control datetimepicker" id="start-date" placeholder="l, d-m-y"
                            data-options='{"dateFormat":"l, d-m-Y","disableMobile":true}' type="text" name="tgl_berdiri"
                            value="{{ $hwa->tgl_berdiri }}" />
                        @error('tgl_berdiri')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="intro" name="deskripsi" cols="30" rows="3">{{ $hwa->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label">Alamat</label>
                        <textarea class="form-control" id="intro" name="alamat" cols="30" rows="3">{{ $hwa->alamat }}</textarea>
                        @error('alamat')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <div class="row" data-dropzone="data-dropzone"
                                data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"540kb","url":"../../assets/img/team"}]}'>
                                <div class="col-md-auto">
                                    <div class="dz-preview dz-preview-single">
                                        <div
                                            class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                            <div class="avatar avatar-4xl"><img class="rounded-circle"
                                                    src="@if ($hwa->logo) {{ asset($hwa->logo) }}
                                                    @else
                                                    {{ asset('assets/img/team/avatar.png') }} @endif"
                                                    alt="..." id="dImage" />
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label class="form-label">Upload Logo <code>*</code></label><br>
                                    <code class="text-primary">Resolusi : 500x500 | Ukuran max : 500KB | Format : PNG, JPG,
                                        JPEG, ICO</code>
                                    <input value="{{ old('image') }}" type="file" id="customFile"
                                        class="form-control" accept=".png, .jpg, .jpeg, .ico, .gif" name="logo"
                                        onchange="displayImg(this,'dImage')" />
                                    @error('logo')
                                        <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label">Upload Cover <code>*</code></label><br>
                        <code class="text-primary">Resolusi : 200x450 | Ukuran max : 500KB | Format : PNG, JPG,
                            JPEG</code>
                        <input type="file" id="customFile" class="form-control" accept=".png, .jpg, .jpeg"
                            name="foto" onchange="displayImg2(this,'logo')" />
                        <br>
                        @error('foto')
                            <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                        @enderror
                        <div class="dz-preview-cover d-flex align-items-center justify-content-center">
                            <img class="rounded-3" height="200px" width="400px" id="logo"
                                @if ($hwa->foto) src="{{ asset($hwa->foto) }}"
                            @else
                            src="assets/img/logos/logo.png" @endif
                                width="200" alt="" data-dz-thumbnail="data-dz-thumbnail" />
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end"><button class="btn btn-primary" type="submit">Update
                        </button></div>
                </form>
            </div>
        </div>
    </div>
@endsection
