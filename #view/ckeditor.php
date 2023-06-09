@extends('layouts.layout')

@section('judul')
    Formulir Pengajuan | HWA &bull; SAT
@endsection

@section('sad_menu')
    @if ($cek->periode == $periode)
        @include('layouts.panel.sad.vertikal')
    @else
        @include('layouts.panel.sad.vertikal_off')
    @endif
@endsection

@section('link')
    {{-- // CKEditor // --}}
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>
    {{-- // Form // --}}
    <link rel="stylesheet" href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}">
    <link href="{{ asset('vendors/dropzone/dropzone.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" />
    {{-- // Table //  --}}
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}"></script>
    {{-- // Ajax // --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection

@section('script')
    {{-- // CKEditor // --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/super-build/ckeditor.js"></script>
    <script>
        // This sample still does not showcase all CKEditor 5 features (!)
        // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
            // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            // Changing the language of the interface requires loading the language file using the <script> tag.
            // language: 'es',
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
            placeholder: 'Buat Surat Anda disini Bro..',
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
            // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            // Be careful with enabling previews
            // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
            htmlEmbed: {
                showPreviews: true
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            // The "super-build" contains more premium features that require additional configuration, disable them below.
            // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
            removePlugins: [
                // These two are commercial, but you can try them out without registering to a trial.
                // 'ExportPdf',
                // 'ExportWord',
                'CKBox',
                'CKFinder',
                'EasyImage',
                // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                // Storing images as Base64 is usually a very bad idea.
                // Replace it on production website with other solutions:
                // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                // 'Base64UploadAdapter',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                // from a local file system (file://) - load this site via HTTP server if you enable MathType
                'MathType'
            ]
        });
    </script>
    {{-- // Form // --}}
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
    {{-- // Table //  --}}
    <script src="{{ asset('vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js') }}"></script>
    {{-- delete model --}}
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
                            <form action="{{ route('abs.f.2') }}" class="form-inline" method="GET">
                                <div class="input-group">
                                    <select name="search" class="form-control">
                                        <option>Cari Tanggal</option>
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

                    <form action="{{ route('peng.abs.sm') }}" method="POST" enctype="multipart/form-data">
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
