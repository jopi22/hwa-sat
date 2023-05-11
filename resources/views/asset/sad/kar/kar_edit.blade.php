@extends('layouts.layout')

@section('judul')
    {{ $kar->name }} | Edit | HWA &bull; SAT
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
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
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
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg3(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg4(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
                $(input).siblings('.custom-file-label').html("Choose File")
            }
        }

        function displayImg5(input, displayTo) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#' + displayTo).attr('src', e.target.result);
                    $(input).siblings('.custom-file-label').html(input.files[0].name)
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#' + displayTo).attr('src', "{{ asset('assets/img/team/avatar.png') }}");
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

@section('superadmin')
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('kar.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-list text-primary"></i></button></a>
                <a href="{{ route('kar.i', Crypt::encryptString($kar->id)) }}"><button
                        class="btn btn-link btn-dark btn-sm p-0"><i class="fas fa-spinner text-primary"></i></button></a>
                <span class="badge bg-soft-primary text-primary bg-sm rounded-pill"><i class="fas fa-key"></i>
                </span>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-primary"> Karyawan /
                    <span class="fw-semi-bold text-info">{{ $kar->name }}</span></span>
            </div>
        </div>
        <div class="col-auto d-flex align-items-center">
            <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                <a href="{{ route('kar.i', Crypt::encryptString($kar->id)) }}">
                    <button class="btn btn-sm text-primary" data-bs-toggle="pill"
                        data-bs-target="#dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" type="button" role="tab"
                        aria-controls="dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77" aria-selected="false"
                        id="tab-dom-5dcff8a5-e159-4ab1-8730-0cfe7c421b77">Info</button>
                </a>
                <a href="{{ route('kar.e', Crypt::encryptString($kar->id)) }}">
                    <button class="btn btn-sm active text-warning" data-bs-toggle="pill"
                        data-bs-target="#dom-91d68b2e-028d-47b6-9a26-2" type="button" role="tab"
                        aria-controls="dom-91d68b2e-028d-47b6-9a26-2" aria-selected="true"
                        id="tab-dom-91d68b2e-028d-47b6-9a26-2">Edit</button>
                </a>
            </div>
            <div class="position-relative">&nbsp;
                <button class="btn btn-falcon-default text-info btn-sm mx-1" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-users"></i></button>
            </div>
            <div class="position-relative">&nbsp;
                <button class="btn btn-sm btn-falcon-info mx-1 dropdown-toggle" id="dropdownMenuButton" type="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                        class="fas fa-print"></i></button>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item text-success" href="#!"><i class="fas fa-file-excel"></i>
                        Print Excel
                    </a>
                    <a class="dropdown-item text-warning" href="#!"><i class="fas fa-file-pdf"></i>
                        Print PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"><i class="fas fa-users"></i> Karyawan</h5><button class="btn-close text-reset"
                type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="tableExample4"
                data-list='{"valueNames":["nama","id", "payment","ins","hm"],"filter":{"key":"payment"}}'>
                <div class="row justify-content-left  mt-3 mb-3 g-0">
                    <div class="col-auto col-sm-12">
                        <form>
                            <div class="input-group"><input class="form-control form-control-sm shadow-none search"
                                    type="search" placeholder="Pencarian..." aria-label="search" />
                            </div>
                        </form>
                    </div>
                </div>
                @if ($cek == 0)
                    <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
                @else
                    <div class="table-responsive scrollbar">
                        <table class="table table-sm table-striped table-bordered mb-0 fs--1"
                            data-options='{"paging":true,"scrollY":"300px","searching":false,"scrollCollapse":true,"scrollX":true,"page":1,"pagination":true}'>
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th style="min-width: 50px" class="align-middle white-space-nowrap">
                                        Aksi
                                    </th>
                                    <th style="min-width: 120px" class="sort align-middle white-space-nowrap"
                                        data-sort="id">
                                        ID O/D
                                    </th>
                                    <th style="min-width: 350px" class="sort align-middle white-space-nowrap"
                                        data-sort="nama">
                                        Nama
                                    </th>
                                    <th style="min-width: 150px" class="sort align-middle white-space-nowrap"
                                        data-sort="payment">
                                        Jabatan
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="table-posts" class="list">
                                @foreach ($kar_list as $res)
                                    <tr id="index_{{ $res->id }}" class="btn-reveal-trigger text-1000 fw-semi-bold">
                                        <td class="align-middle text-center text-1000 white-space-nowrap no">
                                            <a href="{{ route('kar.i', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-info btn-sm"><span class="fas fa-info-circle"></span>
                                            </a>
                                            <a href="{{ route('kar.e', Crypt::encryptString($res->id)) }}"
                                                class="btn btn-warning btn-sm"><span class="fas fa-edit"></span>
                                            </a>
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap id">
                                            @if ($res->tgl_gabung)
                                                K{{ $res->tgl_gabung->format('ym') }}{{ $res->id }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 white-space-nowrap nama">
                                            @if ($res->name)
                                                {{ $res->name }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td class="align-middle text-1000 text-center white-space-nowrap payment">
                                            @if ($res->jabatan)
                                                {{ $res->jabatan }}
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
    </div>

    @include('comp.alert')

    <form action="{{ route('kar.u', $kar->id) }}" method="POST" enctype="multipart/form-data"\>
        @csrf
        @method('put')
        <div class="card theme-wizard h-100 mb-3">
            <div class="card-header text-center bg-warning py-2">
                <h5 class="text-white"><i class="fas fa-edit"></i> Form Edit {{ $kar->name }}</h5>
            </div>
            <div class="card-body py-4">
                <div class="row g-2">
                    <span class="text-warning fs--1"><i class="fas fa-info-circle"></i> Yang bertanda
                        Bintang(<code>*</code>) Tidak Wajib diisi</span>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Karyawan</label>
                            <input class="form-control" maxlength="25" type="text" name="name"
                                value="{{ $kar->name }}" />
                            @error('name')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir<code>*</code></label>
                            <input class="form-control datetimepicker" name="tgl_lahir" value="{{ $kar->tgl_lahir }}"
                                id="datepicker" placeholder="Pilih Tanggal Lahir" type="text"
                                data-options='{"disableMobile":true}' />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Asal Daerah<code>*</code></label>
                            <input class="form-control" type="text" name="asal" value="{{ $kar->asal }}"
                                maxlength="25" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Domsili<code>*</code></label>
                            <textarea class="form-control" name="alamat" cols="30" rows="1" placeholder="Alamat" maxlength="25">{{ $kar->alamat }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Email<code>*</code></label>
                            <input class="form-control" type="text" name="email" value="{{ $kar->email }}"
                                maxlength="25" />
                            @error('email')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">No Handphone<code>*</code></label>
                            <input class="form-control" type="number" name="no_hp" value="{{ $kar->no_hp }}" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin<code>*</code></label>
                            <div class="form-check">
                                <input @if ($kar->jenis_kelamin == 'Laki-laki') checked @endif class="form-check-input"
                                    id="l" type="radio" name="jenis_kelamin" value="Laki-laki" />
                                <label class="form-check-label" for="l">Laki-laki</label>
                            </div>
                            <div class="form-check">
                                <input @if ($kar->jenis_kelamin == 'Perempuan') checked @endif class="form-check-input"
                                    id="p" type="radio" name="jenis_kelamin" value="Perempuan" />
                                <label class="form-check-label" for="p">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <div class="row" data-dropzone="data-dropzone"
                                data-options='{"maxFiles":1,"data":[{"name":"avatar.png","size":"540kb","url":"../../assets/img/team"}]}'>
                                <div class="col-md-auto">
                                    <div class="dz-preview dz-preview-single">
                                        <div
                                            class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0">
                                            <div class="avatar avatar-4xl">
                                                @if ($kar->image == '')
                                                    <img class="rounded-circle"
                                                        src="{{ asset('assets/img/team/avatar.png') }}" id="dImage" />
                                                @else
                                                    <img class="rounded-circle" src="{{ asset($kar->image) }}"
                                                        id="dImage" />
                                                @endif
                                            </div>
                                            <div class="dz-progress"><span class="dz-upload"
                                                    data-dz-uploadprogress=""></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label class="form-label">Upload Foto<code>*</code></label><br>
                                    <code class="text-primary">Resolusi Foto 500x500 / Ukuran max 500KB</code>
                                    <input value="{{ old('image') }}" type="file" id="customFile"
                                        class="form-control" accept=".png, .jpg, .jpeg" name="image"
                                        onchange="displayImg(this,'dImage')" />
                                    @error('image')
                                        <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <select class="form-select" name="jabatan" aria-label="Default select example">
                                @if ($kar->jabatan)
                                    <option value="{{ $kar->jabatan }}">{{ $kar->jabatan }}</option>
                                @else
                                    <option></option>
                                @endif
                                @foreach ($jab as $res)
                                    <option value="{{ $res->jabatan }}">{{ $res->jabatan }}</option>
                                @endforeach
                            </select>
                            @error('jabatan')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Bergabung</label>
                            <input value="{{ $kar->tgl_gabung }}" class="form-control datetimepicker" name="tgl_gabung"
                                id="datepicker" type="text" placeholder="Pilih Tanggal Bergabung"
                                value="{{ $kar->tgl_gabung }}" data-options='{"disableMobile":true}' />
                            @error('tgl_gabung')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Status Pekerjaan
                            </label><br>
                            <input type="hidden" name="status" value="{{ $kar->status }}">
                            <div class="form-check form-check-inline">
                                <input disabled @if ($kar->status == 'Aktif') checked @endif class="form-check-input"
                                    id="inlineRadio1" type="radio" />
                                <label class="form-check-label" for="inlineRadio1">Aktif</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input disabled @if ($kar->status == 'Resign') checked @endif class="form-check-input"
                                    id="inlineRadio2" type="radio" />
                                <label class="form-check-label" for="inlineRadio2">Resign
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input disabled @if ($kar->status == 'Mutasi') checked @endif class="form-check-input"
                                    id="inlineRadio3" type="radio" />
                                <label class="form-check-label" for="inlineRadio3">Mutasi</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Tipe Income
                            </label><br>
                            <div class="form-check form-check-inline">
                                <input @if ($kar->tipe_gaji == 'A') checked @endif class="form-check-input"
                                    id="inlineRadio1" type="radio" name="tipe_gaji" value="A" />
                                <label class="form-check-label" for="inlineRadio1">Gaji Pokok</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input @if ($kar->tipe_gaji == 'AI') checked @endif class="form-check-input"
                                    id="inlineRadio2" type="radio" name="tipe_gaji" value="AI" />
                                <label class="form-check-label" for="inlineRadio2">Gaji Pokok + Insentif
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input @if ($kar->tipe_gaji == 'AL') checked @endif class="form-check-input"
                                    id="inlineRadio3" type="radio" name="tipe_gaji" value="AL" />
                                <label class="form-check-label" for="inlineRadio3">Gaji Pokok + Lemburan</label>
                            </div>
                            @error('tipe_gaji')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor KTP<code>*</code></label>
                            <input value="{{ $kar->no_ktp }}" class="form-control" type="number" name="no_ktp" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor SIM A<code>*</code></label>
                            <input value="{{ $kar->no_sim_a }}" class="form-control" type="number" name="no_sim_a" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nama Bank<code>*</code></label>
                            <select class="form-select" name="bank" aria-label="Default select example">
                                <option value="{{ $kar->bank }}">
                                    @if ($kar->bank)
                                        {{ $kar->bank }}
                                    @endif
                                </option>
                                @foreach ($bank as $res)
                                    <option value="{{ $res->bank }}">{{ $res->bank }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor SIM B1<code>*</code></label>
                            <input value="{{ $kar->no_sim_b1 }}" class="form-control" type="number"
                                name="no_sim_b1" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor Rekening<code>*</code></label>
                            <input value="{{ $kar->no_rek }}" class="form-control" type="number" name="no_rek" />
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor SIM B2<code>*</code></label>
                            <input value="{{ $kar->no_sim_b2 }}" class="form-control" type="number"
                                name="no_sim_b2" />
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <div class="mb-3">
                            <label class="form-label">Nomor BPJS<code>*</code></label>
                            <input value="{{ $kar->no_bpjs }}" class="form-control" type="number" name="no_bpjs" />
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row g-2">
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload SIM A<code>*</code></label><br>
                            <input value="{{ old('file_sim_a') }}" type="file" id="customFile" class="form-control"
                                accept=".png, .jpg, .jpeg" name="file_sim_a" onchange="displayImg2(this,'dImage2')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sim_a)
                                    <img class="rounded-3" src="{{ asset($kar->file_sim_a) }}" id="dImage2"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage2"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sim_a')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload SIM B1<code>*</code></label><br>
                            <input value="{{ old('file_sim_b1') }}" type="file" id="customFile" class="form-control"
                                accept=".png, .jpg, .jpeg" name="file_sim_b1" onchange="displayImg3(this,'dImage3')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sim_b1)
                                    <img class="rounded-3" src="{{ asset($kar->file_sim_b1) }}" id="dImage3"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage3"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sim_b1')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload SIM B2<code>*</code></label><br>
                            <input value="{{ old('file_sim_b2') }}" type="file" id="customFile" class="form-control"
                                accept=".png, .jpg, .jpeg" name="file_sim_b2" onchange="displayImg4(this,'dImage4')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sim_b2)
                                    <img class="rounded-3" src="{{ asset($kar->file_sim_b2) }}" id="dImage4"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage4"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sim_b2')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label class="form-label">Upload Sertifikat Profesi<code>*</code></label><br>
                            <input value="{{ old('file_sertifikat') }}" type="file" id="customFile"
                                class="form-control" accept=".png, .jpg, .jpeg" name="file_sertifikat"
                                onchange="displayImg5(this,'dImage5')" />
                            <div class="mt-3 text-center">
                                @if ($kar->file_sertifikat)
                                    <img class="rounded-3" src="{{ asset($kar->file_sertifikat) }}" id="dImage5"
                                        width="250px" height="200px" />
                                @else
                                    <img class="rounded-3" src="{{ asset('assets/img/icons/chip.png') }}" id="dImage5"
                                        width="250px" height="200px" />
                                @endif
                            </div>
                            @error('file_sertifikat')
                                <div class="text-danger mt-2 text-sm">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center bg-light py-2">
                <button class="btn btn-warning px-5 my-3" type="submit"><i class="fas fa-magic"></i> Update</button>
            </div>
        </div>
    </form>
@endsection
