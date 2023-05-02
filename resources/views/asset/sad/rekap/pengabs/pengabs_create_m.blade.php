@extends('layouts.layout')

@section('judul')
    Rekap Formulir Pengajuan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    <script>
        $(document).on('click', '.delete_estimate', function() {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.ids').text());
        });
    </script>
@endsection

@section('superadmin')
    @if ($cek->periode == $periode)
        @if ($cek->ket == 1)
            {{-- // Header // --}}
            <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
                <div class="col d-flex align-items-center">
                    <div>
                        <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                    class="fas fa-home text-primary"></i></button></a>
                        <a href="{{ route('peng.abs.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                    class="fas fa-list text-primary"></i></button></a>
                        <a href="{{ route('peng.abs.cm') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                                    class="fas fa-spinner text-primary"></i></button></a>
                        <span class="badge bg-soft-success text-success bg-sm rounded-pill"><i
                                class="fas fa-calendar-alt"></i>
                            {{ date('F Y') }}</span>
                    </div>
                    <div class="ms-1">&nbsp;
                        <span class=" fw-semi-bold text-primary"> Buat Pengajuan Absensi</span>
                    </div>
                </div>
            </div>

            @include('comp.alert')

            <div class="card mb-3">
                <div class="card-header bg-primary">
                    <h5 class="mb-0 text-white fw-semi-bold"><i class="fas fa-clipboard-list"></i> Formulir Pengajuan</h5>
                </div>
                <div class="card-body mb-4">
                    <div class="row">
                        <div class="col-6">
                            <ul class="fs--1">
                                <li>
                                    Cari Tanggal Yang Diajukan, Berdasarkan Data
                                    Karyawan.
                                </li>
                                <li>
                                    Jika Akan Memilih Tanggal Pengajuan, Kolom Keterangan & Aksi Wajib Diisi.
                                </li>
                            </ul>
                            <form action="{{ route('r.abs.f.2') }}" class="form-inline" method="GET">
                                <div class="input-group">
                                    <select name="search" class="form-control">
                                        <option>Pilih Karyawan</option>
                                        @foreach ($kar as $item2)
                                            <option value="{{ $item2->id }}">{{ $item2->name }}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="input-group-text bg-200"><i
                                            class="fa fa-search fs--1 text-success"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <ul class="fs--1">
                                <li>
                                    Nama Karyawan & Keterangan Harus Sinkron Dengan Tanggal Yang Diajukan.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <form action="{{ route('r.peng.abs.sm') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Pilih Tanggal Yang Diajukan</label>
                                <table class="table table-sm table-striped fs--1 mb-0 overflow-hidden"
                                    data-options='{"paging":false,"scrollY":"400px","searching":false,"scrollCollapse":true,"scrollX":true}'>
                                    <thead class="bg-200 text-900">
                                        <tr>
                                            <th style="width: 50px" class="sort" data-sort="tanggal">
                                                Tanggal</th>
                                            <th style="width: 250px" class="sort" data-sort="name">
                                                Karyawan</th>
                                            <th style="width: 80px" class="sort text-center" data-sort="payment">Keterangan
                                            </th>
                                            <th style="width: 100px" class="sort text-center" data-sort="aksi">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-posts" class="list" id="table-simple-pagination-body">
                                        @foreach ($abs as $res)
                                            <input type="hidden" name="delete_id[]" value="{{ $res->id }}">
                                            <input type="hidden" name="id[]" value="{{ $res->id }}">
                                            <input type="hidden" name="tgl[]" value="{{ $res->tgl }}">
                                            <input type="hidden" name="karyawan_[]" value="{{ $res->karyawan }}">
                                            <input type="hidden" name="periode_id[]" value="{{ $res->periode_id }}">
                                            <input type="hidden" name="kode_unik[]" value="{{ $res->kode_unik }}">
                                            <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                                <td class="text-black fw-semi-bold align-middle white-space-nowrap tanggal">
                                                    {{ $res->tgl }}
                                                </td>
                                                <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                                                    {{ $res->karyawan_->name }}
                                                </td>
                                                <td
                                                    class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                                                    @if ($res->status > 7)
                                                        <select name="status_[]" class="form-control form-control-sm">
                                                            <option value="{{ $res->status }}">
                                                                {{ $res->status_absensi_->status }}</option>
                                                            <option value="3">Sakit</option>
                                                            <option value="5">Izin</option>
                                                            <option value="6">Cuti</option>
                                                        </select>
                                                    @else
                                                        <span class="fw--1 text-500">Ok</span>
                                                        <input type="hidden" name="status_[]" value="{{ $res->status }}">
                                                    @endif
                                                </td>
                                                <td class="align-middle text-center white-space-nowrap aksi">
                                                    @if ($res->status > 7)
                                                        <select name="pengajuan_fk[]" class="form-control form-control-sm">
                                                            <option value="{{ $res->pengajuan_fk }}">
                                                                {{ $res->pengajuan_fk }}</option>
                                                            <option value="{{ $today }}-{{ $time }}">
                                                                Sinkron
                                                            </option>
                                                        </select>
                                                    @else
                                                        <span class="fw--1 text-500">Sinkron</span>
                                                        <input type="hidden" name="pengajuan_fk[]"
                                                            value="{{ $res->pengajuan_fk }}">
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-6">
                                <input type="hidden" name="pengajuan_pk"
                                    value="{{ $today }}-{{ $time }}">
                                <input type="hidden" name="master_id" value="{{ $master->id }}">
                                <label class="form-label">Pilih Karyawan</label>
                                <select required name="karyawan" class="form-control">
                                    <option></option>
                                    @foreach ($kar as $res1)
                                        <option value="{{ $res1->id }}">{{ $res1->name }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label mt-3">Pilih Keterangan</label>
                                <select required name="status" class="form-control">
                                    <option></option>
                                    <option value="3">Sakit</option>
                                    <option value="5">Izin</option>
                                    <option value="6">Cuti</option>
                                </select>
                                <label class="form-label mt-3">File Surat/Dokumen <code>"PDF"</code></label>
                                <input class="form-control" type="file" accept=".pdf" value="{{ old('file') }}"
                                    name="file" />
                                @error('file')
                                    <div class="text-danger mt-2 fs--1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <button class="btn btn-success btn-sm" type="submit"><i class="fas fa-save me-1"></i>Simpan &
                            Setujui</button>
                    </form>
                </div>
                <div class="card-footer bg-primary"></div>
            </div>
        @else
            @include('comp.card.card404_kalender')
        @endif
    @else
        @include('comp.card.card404')
    @endif
@endsection
