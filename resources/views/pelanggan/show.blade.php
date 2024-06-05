<!-- resources/views/pelanggan/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
 
     <form method="post">
         @csrf
 
         <div class="row mt-4">
             <div class="col">
                 <label for="kode_pelanggan" class="fst-normal mb-3"> kode_pelanggan :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-list-ol"></i></span>
                     <input type="text" class="form-control kode_pelanggan" id="kode_pelanggan" name="kode_pelanggan"
                         autocomplete="off" value="{{ $pelanggan->kode_pelanggan }}" disabled>
                 </div>
                 <label for="nama_pelanggan" class="fst-normal mb-3"> nama_pelanggan :</label>
                                 <div class="input-group mb-3">
                                     <span class="input-group-text"><i class="bi bi-bank2"></i></span>
                                     <input type="text" class="form-control nama_pelanggan" id="nama_pelanggan" name="nama_pelanggan"
                                         autocomplete="off" value="{{ $pelanggan->nama_pelanggan }}" disabled>
                                 </div>
                 <label for="alamat" class="fst-normal mb-3"> alamat :</label>
                                 <div class="input-group mb-3">
                                     <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                     <input type="text" class="form-control alamat" id="alamat" name="alamat"
                                         autocomplete="off" value="{{ $pelanggan->alamat }}" disabled>
                                 </div>
            
                 <label for="kota" class="fst-normal mb-3"> Kota :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-building-fill"></i></span>
                     <input type="text" class="form-control w-50 kota" id="kota" name="kota" autocomplete="off"
                         value="{{ $pelanggan->kota }}" disabled>
                 </div>
 
                 <label for="provinsi" class="fst-normal mb-3"> Provinsi :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-buildings-fill"></i></span>
                     <input type="text" class="form-control w-50 provinsi" id="provinsi" name="provinsi"
                         autocomplete="off" value="{{ $pelanggan->provinsi }}" disabled>
                 </div>
 
                 <label for="nomor_telepon" class="fst-normal mb-3"> Nomor Telepon :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                     <input type="number" class="form-control w-50 nomor_telepon" id="nomor_telepon" name="nomor_telepon"
                         autocomplete="off" value="{{ $pelanggan->nomor_telepon }}" disabled>
                 </div>
 
                 <label for="email" class="fst-normal mb-3"> Email :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                     <input type="email" class="form-control w-50 email" id="email" name="email" autocomplete="off"
                         value="{{ $pelanggan->email }}" disabled>
                 </div>
                 <label for="kategori_pelanggan" class="fst-normal mb-3"> kategori_pelanggan :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-house-door-fill"></i></span>
                     <input type="text" class="form-control w-50 kategori_pelanggan" id="kategori_pelanggan" name="kategori_pelanggan" autocomplete="off"
                         value="{{ $pelanggan->kategori_pelanggan }}" disabled>
                 </div>

                 <label for="batas_kredit" class="fst-normal mb-3"> batas_kredit :</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="bi bi-person-lines-fill"></i></span>
                     <input type="text" class="form-control w-50 batas_kredit" id="batas_kredit" name="batas_kredit" autocomplete="off"
                         value="{{ $pelanggan->batas_kredit }}" disabled>
                 </div>
             </div>
         </div>
         
         <div class="modal-footer mt-3">
             <a href="{{url('/pelanggan')}}" class="btn btn-danger mx-3 mb-3">Back</a>
         </div>
   </form>
 </div>
@endsection
