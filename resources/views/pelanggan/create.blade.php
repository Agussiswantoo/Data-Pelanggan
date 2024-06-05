@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tambah Pelanggan</h1>
                <form id="store" action="{{ route('pelanggan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="kode_pelanggan">Kode Pelanggan</label>
                        <input type="number" name="kode_pelanggan" id="kode_pelanggan" class="form-control" value="{{ old('kode_pelanggan') }}">
                    </div>
                    <!-- Tambahkan field lain sesuai kebutuhan -->
                    <div class="form-group">
                        <label for="nama_pelanggan">Nama Pelanggan</label>
                        <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="{{ old('nama_pelanggan') }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value={{ old('alamat')}}>
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" value={{ old('kota')}}>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" name="provinsi" id="provinsi" class="form-control" value={{ old('provinsi')}}>
                    </div>
                    <div class="form-group">
                        <label for="nomor_telepon">Nomor Telepon</label>
                        <input type="number" name="nomor_telepon" id="nomor_telepon" class="form-control" value={{ old('nomor_telepon')}}>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value={{ old('email')}}>
                    </div>
                    <div class="form-group">
                        <label for="kategori_pelanggan">Kategori Pelanggan</label>
                        <select name="kategori_pelanggan" id="kategori_pelanggan" class="form-control">
                            <option value="">- Pilih Kategori Pelanggan -</option>
                            @foreach($jenis as $p)
                                <option value="{{ $p->kode_kategori }}">{{ $p->nama_kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="batas_kredit">Batas Kredit</label>
                        <input type="number" name="batas_kredit" id="batas_kredit" class="form-control" value={{ ('batas_kredit')}}>
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
@endsection
