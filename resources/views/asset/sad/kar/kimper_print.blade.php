<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Rekap Data KIMPER PDF</title>
    <script src="{{ asset('assets/print/js/jquery.min.js') }}"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('assets/print/css/kim_pdf.css') }}" rel="stylesheet">
</head>

<body class="l">
    <a href="javascript:void(0)" style="float: right" class="btn btn-download btn-warning">Download PDF </a>

    <div id="invoice">

        <header>
            <span>
                <img alt="it" src="{{ asset('assets/img/logos/hwa.png') }}" width="150">
            </span>
            <address>
                <h3 class="text text-info">PT. Harapan Wahyu Abadi</h3>
                <p class="a"> Mining Site CMI Sandai </p>
                <p class="b"> Sandai Kiri, Kec. Sandai, Kabupaten Ketapang, </p>
                <p class="c"> Kalimantan Barat 78872, Indonesia </p>
            </address>
        </header>

        <hr>

        <article>
            <address class="norm">
                <h4> Rekap Data KIMPER Karyawan</h4>
                <p> PT. Harapan Wahyu Abadi Site Sandai <br>
                <p> Mining Site CMI Sandai <br>
                <p> {{ date('l, d-m-Y') }}</p>
            </address>

            <table class="inventory">
                <thead>
                    <tr>
                        <th><span>No</span></th>
                        <th><span>Nama</span></th>
                        <th><span>NIK</span></th>
                        <th><span>Jabatan</span></th>
                        <th><span>SIM A</span></th>
                        <th><span>SIM B1</span></th>
                        <th><span>SIM B2</span></th>
                        <th><span>Tes Medis</span></th>
                        <th><span>KIMPER</span></th>
                        <th><span>ED KIMPER</span></th>
                        <th><span>NO KIMPER</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kar as $asu)
                        <tr>
                            <td><span>{{ $loop->iteration }}</span></td>
                            <td><span>{{ $asu->name }}</span></td>
                            <td><span>{{ $asu->username }}</span></td>
                            <td><span>{{ $asu->jabatan }}</span></td>
                            <td>
                                <span>
                                    @if ($asu->file_sim_a)
                                        Ada
                                    @else
                                        Tidak Ada
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->file_sim_b1)
                                        Ada
                                    @else
                                        Tidak Ada
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->file_sim_b2)
                                        Ada
                                    @else
                                        Tidak Ada
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->file_tes_medis)
                                        Ada
                                    @else
                                        Tidak Ada
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->file_kimper)
                                        Ada
                                    @else
                                        Tidak Ada
                                    @endif
                                </span>
                            </td>
                            <td><span>
                                    @if ($asu->ed_kimper)
                                        {{ $asu->ed_kimper->format('d-m-y') }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td><span>
                                    @if ($asu->kimper)
                                        {{ $asu->kimper }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <table class="sign">
                <tr>
                    <td><span style="font-size: 10pt">Data per {{ date('d F Y') }}</span></td>
                </tr>
                <tr>
                    <td class="b"><span style="font-size: 10pt"> Dibuat Oleh,</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="text-decoration: underline">{{Auth::user()->name}}</span></td>
                </tr>
                <tr>
                    <td>{{Auth::user()->username}}</td>
                </tr>
            </table>

            <table class="sign">
                <tr>
                    <td><span style="font-size: 10pt">Data per {{ date('d F Y') }}</span></td>
                </tr>
                <tr>
                    <td class="b"><span style="font-size: 10pt"> Dibuat Oleh,</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td><span style="text-decoration: underline">{{Auth::user()->name}}</span></td>
                </tr>
                <tr>
                    <td>{{Auth::user()->username}}</td>
                </tr>
            </table> --}}
        </article>

        {{-- <div class="row">
            <div class="col-3">
                <p>sdadsasd</p>
            </div>
            <div class="col-3">
                <p>asdasdd</p>
            </div>
        </div> --}}

    </div>

    <script src="{{ asset('assets/print/js/jspdf.debug.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2pdf.min.js') }}"></script>

    <script>
        const options = {
            margin: 0.5,
            filename: 'Rekap_Data_KIMPER_Karyawan_hwa.pdf',
            image: {
                type: 'jpeg',
                quality: 500
            },
            html2canvas: {
                scale: 1
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'landscape'
            }
        }

        $('.btn-download').click(function(e) {
            e.preventDefault();
            const element = document.getElementById('invoice');
            html2pdf().from(element).set(options).save();
        });


        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

</body>

</html>