<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Rekap Data Karyawan PDF</title>
    <script src="{{ asset('assets/print/js/jquery.min.js') }}"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="{{ asset('assets/print/css/kar_info_pdf.css') }}" rel="stylesheet">
</head>

<body class="p">
    <a href="javascript:void(0)" style="float: right" class="btn btn-download btn-warning">Download PDF </a>

    <div id="invoice">

        <header>
            <span>
                <img alt="it" src="{{ asset($kar->image) }}" width="150">
            </span>
            <address>
                <h4> {{ $kar->name }}</h4>
                <h4> {{ $kar->username }}</h4>
                <p> PT. Harapan Wahyu Abadi Site Sandai <br>
                <p> Mining Site CMI Sandai <br>
                <p> {{ date('l, d-m-Y') }}</p>
            </address>
        </header>

        <hr>
        <h1>Data Karyawan</h1>
        <article>
            <table class="meta">
                <tr>
                    <th><span>Nama</span></th>
                    <td>
                        <span>
                            @if ($kar->name)
                                {{ $kar->name }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>NIK</span></th>
                    <td>
                        <span>
                            @if ($kar->username)
                                {{ $kar->username }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Jabatan</span></th>
                    <td>
                        <span>
                            @if ($kar->jabatan)
                                {{ $kar->jabatan }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Status Karyawan</span></th>
                    <td>
                        <span>
                            @if ($kar->status)
                                {{ $kar->status }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Tgl Bergabung</span></th>
                    <td>
                        <span>
                            @if ($kar->tgl_gabung)
                                {{ $kar->tgl_gabung->format('d-m-Y') }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>KIMPER</span></th>
                    <td>
                        <span>
                            @if ($kar->kimper)
                                {{ $kar->kimper }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>ED KIMPER</span></th>
                    <td>
                        <span>
                            @if ($kar->kimper)
                                {{ $kar->ed_kimper->format('d-m-Y') }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
            </table>
        </article>

        <hr>
        <h1>Data Pribadi</h1>
        <article>
            <table class="meta">
                <tr>
                    <th><span>Jenis Kelamin</span></th>
                    <td>
                        <span>
                            @if ($kar->jenis_kelamin)
                                {{ $kar->jenis_kelamin }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Asal</span></th>
                    <td>
                        <span>
                            @if ($kar->asal)
                                {{ $kar->asal }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Domsili</span></th>
                    <td>
                        <span>
                            @if ($kar->alamat)
                                {{ $kar->alamat }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Tgl Lahir</span></th>
                    <td>
                        <span>
                            @if ($kar->tgl_lahir)
                                {{ $kar->tgl_lahir->format('d-m-Y') }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Usia</span></th>
                    <td>
                        <span>
                            @if ($kar->tgl_lahir)
                                {{ $kar->tgl_lahir->diff()->y }} Tahun
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Agama</span></th>
                    <td>
                        <span>
                            @if ($kar->agama)
                                {{ $kar->agama }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Email</span></th>
                    <td>
                        <span>
                            @if ($kar->email)
                                {{ $kar->email }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>No Hp</span></th>
                    <td>
                        <span>
                            @if ($kar->no_hp)
                                {{ $kar->no_hp }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
            </table>
        </article>

        <hr>
        <h1>Data Pendukung</h1>
        <article>
            <table class="meta">
                <tr>
                    <th><span>Bank</span></th>
                    <td>
                        <span>
                            @if ($kar->bank)
                                {{ $kar->bank }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Nama Rekening</span></th>
                    <td>
                        <span>
                            @if ($kar->nama_rek)
                                {{ $kar->nama_rek }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Nomor Rekening</span></th>
                    <td>
                        <span>
                            @if ($kar->no_rek)
                                {{ $kar->no_rek }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Nomor KTP</span></th>
                    <td>
                        <span>
                            @if ($kar->no_ktp)
                                {{ $kar->no_ktp }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Nomor SIM A</span></th>
                    <td>
                        <span>
                            @if ($kar->no_sim_a)
                                {{ $kar->no_sim_a }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Nomor SIM B1</span></th>
                    <td>
                        <span>
                            @if ($kar->no_sim_b1)
                                {{ $kar->no_sim_b1 }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
                <tr>
                    <th><span>Nomor SIM B2</span></th>
                    <td>
                        <span>
                            @if ($kar->no_sim_b2)
                                {{ $kar->no_sim_b2 }}
                            @else
                                -
                            @endif
                        </span>
                    </td>
                </tr>
            </table>
        </article>

    </div>
    <script src="{{ asset('assets/print/js/jspdf.debug.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2canvas.min.js') }}"></script>
    <script src="{{ asset('assets/print/js/html2pdf.min.js') }}"></script>

    <script>
        const options = {
            margin: 0.5,
            filename: 'Rekap_Data_Karyawan_hwa.pdf',
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
                orientation: 'portrait'
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
