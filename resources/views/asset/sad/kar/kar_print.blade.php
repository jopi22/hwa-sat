<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- // Eksport Excel // --}}
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    {{-- // Eksport Pdf // --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="content mt-5">

            <button class="btn btn-success" id="button" onclick="htmlTableToExcel('xlsx')"><i
                    class="far fa-file-excel"></i> Export ke EXCEL</button>
            <button class="btn btn-warning" id="printButton" onclick="print()"><i class="far fa-file-pdf"></i> Eskport
                ke PDF</button>

            <div id="printTable">
                <table id="tblToExcl" class="table table-bordered fs--1 mb-0 overflow-hidden mt-5">
                    <thead class="bg-200 text-900">
                        <tr>
                            <th style="width: 50px" class="sort" data-sort="#">#</th>
                            <th style="width: 80px" class="sort " data-sort="id">ID</th>
                            <th style="width: 400px" class="sort" data-sort="name">
                                Nama Karyawan</th>
                            <th style="width: 200px" class="sort" data-sort="payment">
                                Jabatan</th>
                            <th style="width: 100px" class="sort text-center" data-sort="status">Status</th>
                            <th style="width: 100px" class="sort text-center" data-sort="gabung">Bergabung
                            </th>
                        </tr>
                    </thead>
                    <tbody id="table-posts" class="list">
                        @foreach ($kar as $res)
                            <tr id="index_{{ $res->id }}" class="btn-reveal-trigger">
                                <th class="text-black fw-semi-bold">{{ $loop->iteration }}</th>
                                <td class="text-black  fw-semi-bold align-middle white-space-nowrap name">
                                    {{ $res->tgl_gabung->format('ym') }}{{ $res->id }}</td>
                                <td class="text-black fw-semi-bold align-middle white-space-nowrap name">
                                    {{ $res->name }}</td>

                                <td class="text-black fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                                    @if ($res->jabatan)
                                        {{ $res->jabatan }}
                                    @else
                                        <span class="id fs--1 text-400">Kosong</span>
                                    @endif
                                </td>

                                <td class="align-middle text-center white-space-nowrap status">
                                    {{ $res->status_karyawan }}
                                </td>
                                <td
                                    class="text-black text-center fw-semi-bold align-middlefs-0 white-space-nowrap payment">
                                    {{ $res->tgl_gabung->format('d-m-Y') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    </div>

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
            XLSX.writeFile(excelFile, 'List_Karyawan_excel.' + type);
        }
    </script>

    {{-- // Eksport Pdf // --}}
    <script type="text/javascript">
        window.jsPDF = window.jspdf.jsPDF;
        var docPDF = new jsPDF();

        function print() {
            var elementHTML = document.querySelector("#printTable");
            docPDF.html(elementHTML, {
                callback: function(docPDF) {
                    docPDF.save('List_Karyawan_pdf.pdf');
                },
                x: 15,
                y: 15,
                width: 170,
                windowWidth: 650
            });
        }
    </script>

    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
</body>

</html>
