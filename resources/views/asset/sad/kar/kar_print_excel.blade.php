<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Rekap Data Karyawan Excel</title>
    {{-- // Eksport Excel // --}}
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('assets/print/css/print_excel.css') }}" rel="stylesheet">
</head>

<body class="l">
    <a href="javascript:void(0)" style="float: right; margin-top: 4em; margin-bottom: 1em;" id="button"
        onclick="htmlTableToExcel('xlsx')" class="btn btn-download btn-success">Download Excel </a>

    <table id="tblToExcl" class="inventory">
        <thead>
            <tr>
                <th><span>No</span></th>
                <th><span>Nama</span></th>
                <th><span>NIK</span></th>
                <th><span>Jabatan</span></th>
                <th><span>Tgl Gabung</span></th>
                <th><span>Agama</span></th>
                <th><span>KIMPER</span></th>
                <th><span>ED KIMPER</span></th>
                <th><span>Tgl Lahir</span></th>
                <th><span>Asal</span></th>
                <th><span>Domsili</span></th>
                <th><span>Tipe Income</span></th>
                <th><span>Jenis Kelamin</span></th>
                <th><span>Email</span></th>
                <th><span>No Hp</span></th>
                <th><span>Bank</span></th>
                <th><span>Nama Rekening</span></th>
                <th><span>No Rekening</span></th>
                <th><span>No KTP</span></th>
                <th><span>No BPJS</span></th>
                <th><span>No SIM A</span></th>
                <th><span>No SIM B1</span></th>
                <th><span>No SIM B2</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kar as $asu)
                <tr>
                    <td><span>{{ $loop->iteration }}</span></td>
                    <td><span>{{ $asu->name }}</span></td>
                    <td><span>{{ $asu->username }}</span></td>
                    <td><span>{{ $asu->jabatan }}</span></td>
                    <td><span>{{ $asu->tgl_gabung->format('d-m-Y') }}</span></td>
                    <td><span>
                            @if ($asu->agama)
                                {{ $asu->agama }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->kimper)
                                {{ $asu->kimper }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->ed_kimper)
                                {{ $asu->ed_kimper->format('d-m-Y') }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->tgl_lahir)
                                {{ $asu->tgl_lahir->format('d-m-Y') }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->asal)
                                {{ $asu->asal }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->alamat)
                                {{ $asu->alamat }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->tipe_gaji)
                                {{ $asu->tipe_gaji }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->jenis_kelamin)
                                {{ $asu->jenis_kelamin }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->email)
                                {{ $asu->email }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_hp)
                                {{ $asu->no_hp }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->bank)
                                {{ $asu->bank }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->nama_rek)
                                {{ $asu->nama_rek }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_rek)
                                {{ $asu->no_rek }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_ktp)
                                {{ $asu->no_ktp }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_bpjs)
                                {{ $asu->no_bpjs }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_sim_a)
                                {{ $asu->no_sim_a }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_sim_b1)
                                {{ $asu->no_sim_b1 }}
                            @else
                                -
                            @endif
                        </span></td>
                    <td><span>
                            @if ($asu->no_sim_b2)
                                {{ $asu->no_sim_b2 }}
                            @else
                                -
                            @endif
                        </span></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- // Eksport Excel // --}}
    <script type="text/javascript">
        function htmlTableToExcel(type) {
            var data = document.getElementById('tblToExcl');
            var excelFile = XLSX.utils.table_to_book(data, {
                sheet: "sheet1"
            });
            XLSX.write(excelFile, {
                bookType: type,
                bookSST: true,
                type: 'base64'
            });
            XLSX.writeFile(excelFile, 'Rekap_Data_Karyawan_Excel.' + type);
        }
    </script>

</body>

</html>
