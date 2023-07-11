<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Data Support Equipmnet PDF</title>
    <script src="{{ asset('assets/print/js/jquery.min.js') }}"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('assets/print/css/heavy_pdf.css') }}" rel="stylesheet">
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
                <h4> Data Support Equipment</h4>
                <p> PT. Harapan Wahyu Abadi Site Sandai <br>
                <p> {{ date('l, d-m-Y') }}</p>
            </address>

            <table class="inventory">
                <thead>
                    <tr>
                        <th><span>No</span></th>
                        <th><span>No Unit</span></th>
                        <th><span>Kode Unit</span></th>
                        <th><span>Model</span></th>
                        <th><span>Tipe</span></th>
                        <th><span>No Rangka</span></th>
                        <th><span>Brand</span></th>
                        <th><span>Mulai Operasional</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equip as $asu)
                        <tr>
                            <td><span>{{ $loop->iteration }}</span></td>
                            <td>
                                <span>
                                    @if ($asu->no_unit)
                                        {{ $asu->no_unit }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->kode_unit)
                                        {{ $asu->kode_unit }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->model)
                                        {{ $asu->model }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->tipe)
                                        {{ $asu->tipe }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->no_rangka)
                                        {{ $asu->no_rangka }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->brand)
                                        {{ $asu->brand }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                            <td>
                                <span>
                                    @if ($asu->start_op)
                                        {{ $asu->start_op->format('d-m-Y') }}
                                    @else
                                        -
                                    @endif
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </article>
    </div>

    <script src="{{ asset('assets/print/js/jspdf.debug.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2pdf.min.js') }}"></script>

    <script>
        const options = {
            margin: 0.5,
            filename: 'Data_Support_Equipment_hwa.pdf',
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
