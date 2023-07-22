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
    <script src="{{ asset('assets/js/bundle-addon.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('vendors/dropzone/dropzone.min.js') }}"></script>
@endsection

@section('konten')
    {{-- // Header // --}}
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mb-2">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('hwa.g') }}"><button class="btn btn-sm btn-falcon-default"><i
                    class="fas fa-arrow-left"></i></button></a>
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
                        <textarea class="form-control" id="editor" name="deskripsi" cols="30" rows="3">{{ $hwa->deskripsi }}</textarea>
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
