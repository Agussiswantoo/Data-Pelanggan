<!-- resources/views/pelanggan/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Pelanggan</h1>
                <form id="store" action="{{ route('pelanggan.update', ['pelanggan' => $pelanggan->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_pelanggan">Kode Pelanggan</label>
                        <input type="number" name="kode_pelanggan" id="kode_pelanggan" class="form-control" value={{ $pelanggan->kode_pelanggan}} required>
                    </div>
                    <!-- Tambahkan field lain sesuai kebutuhan -->
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value={{ $pelanggan->nama_pelanggan}} required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value={{ $pelanggan->alamat}} required>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" value={{ $pelanggan->kota}} required>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" name="provinsi" id="provinsi" class="form-control" value={{ $pelanggan->provinsi}} required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="number" name="nomor_telepon" id="nomor_telepon" class="form-control" value={{ $pelanggan->nomor_telepon}} required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value={{ $pelanggan->email}} required>
                    </div>
                    <div class="form-group">
                        <label for="kategori_pelanggan">Kategori Pelanggan</label>
                        <select name="kategori_pelanggan" id="kategori_pelanggan" class="form-control">
                            <option disabled value="">- Pilih Kategori Pelanggan -</option>
                            <option value="{{( $pelanggan->kategori_pelanggan)}}">{{( $pelanggan->kategoriPelanggan->nama_kategori)}}</option>
                            @foreach($jenis as $p)
                                <option value="{{ $p->kode_kategori }}">{{ $p->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="batas_kredit">Batas Kredit</label>
                        <input type="number" name="batas_kredit" id="batas_kredit" class="form-control" value={{ $pelanggan->batas_kredit}} required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" id="btnSimpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Tangani klik pada tombol Simpan
        document.getElementById("btnSimpan").addEventListener("click", function() {
            // Tampilkan notifikasi menggunakan alert
            alert("Data telah disimpan!");
        });
        </script>
    <style>
        /* Tambahkan CSS sesuai kebutuhan di sini */
        .container {
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #000000;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #f4f4f4;
        }
    </style>
@endsection
