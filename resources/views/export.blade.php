<!DOCTYPE html>
<html>
    <head>
        <title>PDF Datapelanggan</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <style>
            table tr td,
            table tr th {
                font-size: 10pt;
            }
        </style>
    </head>

    <body>

        <h2 class="text-center mb-3">Laporan Data pelanggan</h2>
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>Kode Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Provinsi</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Kategori Pelanggan</th>
                    <th>Batas Kredit</th>
                </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach ($pelanggan as $p)
            <tr>
                <td>{{ $p->kode_pelanggan }}</td>
                <td>{{ $p->nama_pelanggan }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->kota }}</td>
                <td>{{ $p->provinsi }}</td>
                <td>{{ $p->nomor_telepon }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->kategoriPelanggan->nama_kategori }}</td>
                <td>{{ $p->batas_kredit }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
   </body>
</html>