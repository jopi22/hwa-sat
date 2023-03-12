@extends('layouts.layout')

@section('judul')
    {{ $peng->id }} | Surat Pengajuan | HWA-HRIS
@endsection

@section('link')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
@endsection

@section('script')
    <script type="text/javascript">
        window.jsPDF = window.jspdf.jsPDF;
        var docPDF = new jsPDF();

        function print() {
            var elementHTML = document.querySelector("#printTable");
            docPDF.html(elementHTML, {
                callback: function(docPDF) {
                    docPDF.save('Surat_Pengajuan_Absensi.pdf');
                },
                x: 15,
                y: 15,
                width: 170,
                windowWidth: 650
            });
        }
    </script>
@endsection

@section('konten')
    {{-- // Header // --}}
    <div class="row gx-0 kanban-header rounded-2 px-x1 py-2 mt-2 mb-3">
        <div class="col d-flex align-items-center">
            <div>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-arrow-left text-primary"></i></button></a>
                <a href="{{ route('dash') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-home text-primary"></i></button></a>
                <a href="{{ route('per.g') }}"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-spinner text-primary"></i></button></a>
            </div>
            <div class="ms-1">&nbsp;
                <span class=" fw-semi-bold text-danger"> Surat Pengajuan No #{{ $peng->id }}</span>
            </div>
        </div>
        <div class="col-auto d-flex align-items-center">
            <div class="ms-1">
                <button id="printButton" onclick="print()" class="btn text-info btn-falcon-default btn-sm me-1 mb-2 mb-sm-0"
                    type="button"><span class="fas fa-file-pdf me-1"> </span>Download PDF</button>
            </div>
            <div class="position-relative">&nbsp;
                <a href="#"><button class="btn btn-link btn-dark btn-sm p-0"><i
                            class="fas fa-cog text-primary ms-1 me-1"></i></button></a>
            </div>
        </div>
    </div>

    <div id="printTable" class="card mb-3">
        <div class="card-body">
            <div class="row align-items-center text-center mb-3">
                <div class="col-sm-6 text-sm-start"><img src="{{ asset('assets/img/logos/logo.png') }}" alt="invoice"
                        width="150" /></div>
                <div class="col text-sm-end mt-3 mt-sm-0">
                    <h5 class="mb-3">Surat Pengajuan Absensi
                    </h5>
                    <h5 class="fw-bold">PT. HARAPAN WAHYU ABADI
                    </h5>
                    <p class="fs--1 text-1000 mb-0">JL. MT. Haryono Kel. Tengah Kec. Delta Pawan Kabupaten Ketapang
                    </p>
                </div>
                <div class="col-12">
                    <hr />
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-auto">
                    <h6 class="text-1000">Perihal &nbsp; : &nbsp; @if ($peng->status == 3)
                            Kondisi Kesehatan
                        @else
                            @if ($peng->status == 5)
                                Pengajuan Izin
                            @else
                                @if ($peng->status == 6)
                                    Pengajuan Cuti
                                @else
                                @endif
                            @endif
                        @endif
                    </h6><br>
                    <h6 class="text-1000">Yth, Pimpinan Personalia</h6>
                    <h6 class="text-1000">PT. Harapan Wahyu Abadi</h6>
                    <h6 class="text-1000">Jalan MT. Haryono</h6>
                    <h6 class="text-1000">Kecamatan Delta Pawan</h6>
                    <h6 class="text-1000">Kelurahan Tengah</h6>
                    <h6 class="text-1000">Kabupaten Ketapang</h6>
                </div>
                <div class="col-auto ms-auto">
                    <h6 class="text-1000">{{ date('l, d F Y') }}</h6>
                    <br><br><br><br><br><br><br>
                </div>
            </div>
            <div class="col-auto ms-auto">
                <br>
                <h6 class="text-1000">{!! $peng->surat !!}</h6>
            </div>
            <div class="col-4">
                <div class="table-responsive scrollbar mt-4 fs--1">
                    <table class="table table-sm table-bordered border-bottom">
                        <thead class="light">
                            <tr class="text-1000 ">
                                <th style="width: 10px" class="border-0">#</th>
                                <th style="width: 200px" class="border-0">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penglist as $list)
                                <tr class="text-1000 fw-bold">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $list->tgl }}</td>
                                </tr>
                            @endforeach
                            @foreach ($penglist_ as $list)
                                <tr class="text-1000 fw-bold">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $list->tgl_->tgl }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
