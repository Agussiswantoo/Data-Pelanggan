<?php

// Model Pelanggan
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    protected $fillable = [
        'kode_pelanggan',
        'nama_pelanggan',
        'alamat',
        'kota',
        'provinsi',
        'nomor_telepon',
        'email',
        'kategori_pelanggan',
        'batas_kredit',
    ];

    public function kategoriPelanggan(){
        return $this->belongsTo(kategoriPelanggan::class, 'kategori_pelanggan', 'kode_kategori');
    }
    public $timestamps = false;
}
