@extends('layouts.layout')

@section('judul')
    Link Navigasi | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($master == 1)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection



@section('konten')
    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/icons/spot-illustrations/corner-4.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0">
            <img src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-cogs"></i> Setting</h6>
                <h4 class="mb-0 text-primary fw-bold">Link Navigasi</h4>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header bg-light py-2">
            <button class="btn btn-sm btn-falcon-success mx-2" data-bs-toggle="modal" data-bs-target="#add"
                type="button"><span data-fa-transform="shrink-3" class="fas fa-plus"></span> Tambah</button>
        </div>
        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col">Aksi</th>
                        <th scope="col">Nama Navigasi</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nav as $item)
                        <tr class="align-middle">
                            <td class="align-middle text-1000 text-center white-space-nowrap id">
                                <div class="btn-group  btn-group-sm" role="group">
                                    <a class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#edit-{{ $item->id }}" data-bs-placement="top"
                                        title="Edit Navigasi"><i class="fas fa-edit"></i></a>
                                    <a class="btn btn-danger" type="button" data-bs-toggle="modal"
                                        data-bs-target="#hapus-{{ $item->id }}" data-bs-placement="top"
                                        title="Hapus Navigasi"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                            <td class="text-nowrap text-1000">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="{{ asset($item->logo) }}" alt="" />
                                    </div>
                                    <div class="ms-2">{{ $item->name }}</div>
                                </div>
                            </td>
                            <td class="text-nowrap text-1000">{{ $item->link }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-light py-2">
        </div>
    </div>

    {{-- // Modal Tambah // --}}
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
            <div class="modal-content position-relative">
                <form action="{{ route('nav.s') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                            data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                            <h4 class="mb-1" id="modalExampleDemoLabel">Tambah Link Navigasi </h4>
                        </div>
                        <div class="p-4 pb-0">

                            <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">Nama:</label>
                                <input class="form-control" name="name" id="recipient-name" type="text" />
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">Logo:</label>
                                <input class="form-control" name="logo" id="recipient-name" type="file" />
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="message-text">Link:</label>
                                <textarea class="form-control" name="link" id="message-text" placeholder="http//"></textarea>
                            </div>
                            <input type="hidden" name="karyawan" value="{{ Auth::user()->id }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit">Simpan </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- // Modal Edit // --}}
    @foreach ($nav as $asu)
        <div class="modal fade" id="edit-{{ $asu->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                <div class="modal-content position-relative">
                    <form action="{{ route('nav.u', $asu->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" type="button" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                <h4 class="mb-1" id="modalExampleDemoLabel">Edit Link Navigasi </h4>
                            </div>
                            <div class="p-4 pb-0">

                                <div class="mb-3">
                                    <label class="col-form-label" for="recipient-name">Nama:</label>
                                    <input class="form-control" name="name" id="recipient-name"
                                        value="{{ $asu->name }}" type="text" />
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label" for="recipient-name">Logo:</label>
                                    <input class="form-control" name="logo" id="recipient-name" type="file" />
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label" for="message-text">Link:</label>
                                    <textarea class="form-control" name="link" id="message-text">{{ $asu->link }}</textarea>
                                </div>
                                <input type="hidden" name="karyawan" value="{{ Auth::user()->id }}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-warning" type="submit">Update </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{-- // Modal Delete // --}}
    @foreach ($nav as $del)
        <div class="modal fade" id="hapus-{{ $del->id }}" tabindex="-1" role="dialog"
            aria-labelledby="authentication-modal-label" aria-hidden="true">
            <div class="modal-dialog mt-6" style="max-width: 500px">
                <div class="modal-content border-0">
                    <div class="modal-header px-5 position-relative modal-shape-header bg-danger">
                        <div class="position-relative z-index-1 light">
                            <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                                {{ $del->name }}</h5>
                        </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('nav.d', $del->id) }}" method="post">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="status" value="Delete">
                        <div class="modal-body py-4 px-5">
                            <h5 class="text text-900">Anda Yakin, Untuk
                                Menghapus Data Ini?</h5>
                        </div>
                        <div class="modal-footer">
                            <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                    class="fas fa-times"></i> Batal</button>
                            <button type="submit" class="btn btn-danger ms-2"><i class="fas fa-trash"></i> Ya,
                                Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
