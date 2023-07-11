<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Data Vehicle Equipment Excel</title>
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
            XLSX.writeFile(excelFile, 'Data_Vehicle_Equipment_hwa.' + type);
        }
    </script>

</body>

</html>
