{{-- Level 1 --}}
<div class="modal fade" id="sp1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sp.s') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                {{-- <input type="hidden" name="jenis" value="SP-1"> --}}
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-success">
                        <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-file-alt"></i>
                            Surat Peringatan Level 1 </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nomor/Kode Surat:</label>
                            <input required class="form-control" maxlength="50" name="no" type="text"
                                placeholder="Nomor/Kode Surat" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Karyawan:</label>
                            <select required class="form-select js-choice" name="kar_id" size="1"
                                name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Pilih Karyawan</option>
                                @foreach ($kar as $asu)
                                    <option value="{{ $asu->id }}">
                                        {{ $asu->name }} | {{ $asu->username }}
                                        </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Jenis SP:</label>
                            <select required class="form-select" name="jenis"
                                >
                                <option value="">Pilih Jenis SP</option>
                                    <option value="SP-1">SP-1</option>
                                    <option value="SP-2">SP-2</option>
                                    <option value="SP-3">SP-3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">File Surat:</label>
                            <input required type="file" name="surat" accept=".pdf" class="form-control">
                        </div>
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

{{-- Level 1 --}}
{{-- <div class="modal fade" id="sp1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sp.s') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <input type="hidden" name="jenis" value="SP-1">
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-success">
                        <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-file-alt"></i>
                            Surat Peringatan Level 1 </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nomor/Kode Surat:</label>
                            <input required class="form-control" maxlength="50" name="no" type="text"
                                placeholder="Nomor/Kode Surat" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Karyawan:</label>
                            <select required class="form-select js-choice" name="kar_id" size="1"
                                name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Pilih Karyawan</option>
                                @foreach ($kar as $asu)
                                    <option value="{{ $asu->id }}">
                                        {{ $asu->tgl_gabung->format('ym') }}{{ $asu->id }} |
                                        {{ $asu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">File Surat:</label>
                            <input required type="file" name="surat" accept=".pdf" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Simpan </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- Level 2 --}}
{{-- <div class="modal fade" id="sp2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sp.s') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <input type="hidden" name="jenis" value="SP-2">
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-warning">
                        <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-file-alt"></i>
                            Surat Peringatan Level 2 </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nomor/Kode Surat:</label>
                            <input required class="form-control" maxlength="50" name="no" type="text"
                                placeholder="Nomor/Kode Surat" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Karyawan:</label>
                            <select required class="form-select js-choice" name="kar_id" size="1"
                                name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Pilih Karyawan</option>
                                @foreach ($kar as $asu)
                                    <option value="{{ $asu->id }}">
                                        {{ $asu->tgl_gabung->format('ym') }}{{ $asu->id }} |
                                        {{ $asu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">File Surat:</label>
                            <input required type="file" name="surat" accept=".pdf" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-warning" type="submit">Simpan </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- Level 3 --}}
{{-- <div class="modal fade" id="sp3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
        <div class="modal-content position-relative">
            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sp.s') }}" method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <input type="hidden" name="jenis" value="SP-3">
                <div class="modal-body p-0">
                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-danger">
                        <h4 class="mb-1 text-white" id="modalExampleDemoLabel"><i class="fas fa-file-alt"></i>
                            Surat Peringatan Level 3 </h4>
                    </div>
                    <div class="p-4 pb-0">
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Nomor/Kode Surat:</label>
                            <input select class="form-control" maxlength="50" name="no" type="text"
                                placeholder="Nomor/Kode Surat" />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="recipient-name">Karyawan:</label>
                            <select select class="form-select js-choice" name="kar_id" size="1"
                                name="organizerSingle" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Pilih Karyawan</option>
                                @foreach ($kar as $asu)
                                    <option value="{{ $asu->id }}">
                                        {{ $asu->tgl_gabung->format('ym') }}{{ $asu->id }} |
                                        {{ $asu->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label" for="message-text">File Surat:</label>
                            <input select type="file" name="surat" accept=".pdf" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit">Simpan </button>
                </div>
            </form>
        </div>
    </div>
</div> --}}

{{-- PHK --}}
{{-- @foreach ($sp as $phk)
    <div class="modal fade" id="phk-{{ $phk->id }}" tabindex="-1" role="dialog"
        aria-labelledby="authentication-modal-label" aria-hidden="true">
        <div class="modal-dialog mt-6" style="max-width: 500px">
            <div class="modal-content border-0">
                <div class="modal-header px-5 position-relative modal-shape-header bg-dark">
                    <div class="position-relative z-index-1 light">
                        <h5 class="mb-0 text-white" id="authentication-modal-label"><i class="fas fa-trash-alt"></i>
                            {{ $phk->kar_->name }}</h5>
                    </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('sp.phk', $phk->kar_id) }}" method="post">
                    @method('put')
                    @csrf
                    <input type="hidden" name="status" value="PHK">
                    <div class="modal-body py-4 px-5">
                        <h5 class="text text-900">Anda Yakin, Untuk
                            Melakukan PHK Untuk Karyawan Ini</h5>
                    </div>
                    <div class="modal-footer">
                        <button data-bs-dismiss="modal" aria-label="Close" type="button" class=" btn btn-light"><i
                                class="fas fa-times"></i> Batal</button>
                        <button type="submit" class="btn btn-dark ms-2"><i class="fas fa-trash"></i> Ya,
                            Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach --}}
