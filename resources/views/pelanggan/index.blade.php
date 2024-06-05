<!-- resources/views/pelanggan/index.blade.php -->

@extends('layouts.app')

@section('content')
    <style>
        /* Container styling */
        .container {
            margin-top: 20px;
        }

        /* Button styling */
        .btn {
            margin-right: 5px;
        }

        /* Table styling */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th, .table td {
            border: 1px solid #000000;
            padding: 8px;
        }

        .table th {
            background-color: #ffae00;
        }

        /* Button color styling */
        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #bd2130;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>DAFTAR PELANGGAN 2024</h1>
                <a href="{{ route('pelanggan.create') }}" class="btn btn-success mb-3">Tambah Pelanggan</a>
                <a href="{{ route('login') }}" class="btn btn-danger mb-3">Logout</a>
                <a href="{{ url('/export-pdf') }}" target="_blank" class="btn btn-primary mb-3">
                    <i class="bi bi-box-arrow-up-right"></i> Export to PDF
                </a>
                <table class="table">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
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
                                <td>
                                    <a href="{{ route('pelanggan.show', $p->id) }}" class="btn btn-primary btn-sm">Detail</a>
                                    <a href="{{ route('pelanggan.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('pelanggan.destroy', $p->kode_pelanggan) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
