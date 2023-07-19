@extends('layouts.layout_horizontal')

@section('judul')
    Pengajuan Surat Keterangan Kerja | HWA &bull; SAT
@endsection

@section('link')
    {{-- // CKEditor // --}}
    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 400px;
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
            placeholder: 'Buat Catatan Anda disini..',
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

@section('konten')

    <div class="card mb-3 bg-light shadow-none">
        <div class="bg-holder bg-card d-none d-sm-block"
            style="background-image:url({{ asset('assets/img/illustrations/ticket-bg.png') }});"></div>
        <!--/.bg-holder-->
        <div class="card-header d-flex align-items-center z-index-1 p-0"><img
                src="{{ asset('assets/img/icons/spot-illustrations/cornewr-2.png') }}" alt="" width="96" />
            <div class="ms-n3">
                <h6 class="mb-1 text-primary"><i class="fas fa-users"></i> Pelayanan Terpadu</h6>
                <h4 class="mb-0 text-primary fw-bold">Pengajuan Surat Keterangan Kerja<span
                        class="text-info fw-medium"></span></h4>
            </div>
        </div>
    </div>

    @include('comp.alert')

    <div class="tab-content">
        <div class="tab-pane preview-tab-pane active" role="tabpanel"
            aria-labelledby="tab-dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc" id="dom-71280028-e96b-47e9-8c38-b8c8d1ba9fdc">
            <div class="collapse" id="collapseExample">
                <div class="border p-x1 rounded">
                    <form action="{{ route('peng.skk.s') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card mb-3">
                            <div class="card-header py-2 bg-primary">
                                <h6 class="mb-0 text-white"><i class="fas fa-clipboard-list"></i> Formulir Pengajuan
                                    SKK </h6>
                            </div>
                            <div class="card-body mb-4">
                                <div class="col-12">
                                    <label class="form-label mt-3">Nama Anda</label>
                                    <input disabled type="text" value="{{ Auth::user()->name }}" class="form-control">
                                    <label class="form-label mt-3">No Handphone</label>
                                    <input required class="form-control" type="number" name="no_hp" />
                                    <label class="form-label mt-3">Email</label>
                                    <input required class="form-control" type="email" name="email" />
                                    <label class="form-label mt-3">Jabatan</label>
                                    <input required class="form-control" type="text" name="jabatan" />
                                    <label class="form-label mt-3">Lama Bekerja</label>
                                    <input required class="form-control" type="number" name="lama" />
                                    <label class="form-label mt-3">Alasan Pengajuan SKK</label>
                                    <div class="min-vh-1 mt-3">
                                        <textarea class="d-none" name="perihal" cols="2 " id="editor"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-sm mt-5" type="submit"><i
                                        class="fas fa-save me-1"></i>Simpan
                                </button>
                            </div>
                            <div class="card-footer bg-primary py-2">
                                {{-- // --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card" id="ticketsTable"
        data-list='{"valueNames":["client","subject","status","priority","agent"],"page":13,"pagination":true,"fallback":"tickets-table-fallback"}'>
        <div class="card-header border-bottom border-200 px-0">
            <div class="d-lg-flex justify-content-between">
                <div class="row flex-between-center gy-2 px-x1">
                    <div class="col-auto pe-0">
                        <h6 class="mb-0">Periode {{ $master->created_at->format('F Y') }}</h6>
                    </div>
                    <div class="col-auto">
                        <form>
                            <div class="input-group input-search-width"><input
                                    class="form-control form-control-sm shadow-none search" type="search"
                                    placeholder="Search  by ID" aria-label="search" /><button
                                    class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span
                                        class="fa fa-search fs--1"></span></button></div>
                        </form>
                    </div>
                    <div class="col-auto">
                        <a href="#"><button class="btn btn-sm btn-falcon-success mx-2" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" type="button"><span data-fa-transform="shrink-3"
                                    class="fas fa-plus"></span> Tambah Pengajuan</button></a>
                    </div>
                </div>
                <div class="border-bottom border-200 my-3"></div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($cek == 0)
                <h6 class="text-500 text-center mt-3 mb-3"> -- Data Kosong --</h6>
            @else
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-sm fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr class="text-center">
                                <th style="width: 50px" class="sort align-middle white-space-nowrap">#
                                </th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap" data-sort="client">
                                    ID Pengajuan
                                </th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap text-center">
                                    Download SKK
                                </th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap text-center">
                                    Status
                                </th>
                                <th style="width: 100px" class="sort align-middle white-space-nowrap" data-sort="tgl">
                                    Dibuat
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($peng_list as $res)
                                <tr class="btn-reveal-trigger text-1000 fw-semi-bold">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center white-space-nowrap client">
                                        {{ $res->id }}
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->status == 'Belum')
                                            -
                                        @else
                                            <a href="{{ asset($res->file) }}" target="__blank"
                                                rel="noopener noreferrer">
                                                <div class="btn border p-2 rounded-3 d-flex bg-white dark__bg-1000 fs--1">
                                                    <span class="fs-1 fas fa-file-alt"></span><span class="ms-2 me-3">File
                                                        Dokumen</span>
                                                    <div class="text-300 ms-auto" data-bs-toggle="tooltip"
                                                        data-bs-placement="right" title="Download"><span
                                                            class="fas fa-arrow-down"></span></div>
                                                </div>
                                            </a>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap">
                                        @if ($res->status == 'Belum')
                                            <span class="badge rounded-pill bg-secondary">Belum
                                                Konfirmasi</span>
                                        @else
                                            @if ($res->status == 'Diterima')
                                                <span class="badge rounded-pill bg-success">Diterima</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">Ditolak</span>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="align-middle text-center white-space-nowrap tgl">
                                        {{ $res->created_at->format('d/m/Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center d-none" id="tickets-table-fallback">
                        <p class="fw-bold fs-1 mt-3">No ticket found</p>
                    </div>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center"><button class="btn btn-sm btn-falcon-default me-1" type="button"
                    title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                <ul class="pagination mb-0"></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button"
                    title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
        </div>
    </div>

@endsection
