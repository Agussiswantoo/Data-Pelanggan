<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriPelanggan extends Model
{
    use HasFactory;
    protected $table = 'kategori_pelanggan';
    protected $primarykey = "kode_kategori";
    protected $fillable = [
        'kode_kategori',
        'nama_kategori'
    ];

    public function pelanggan(){
        return $this->belongsTo(Pelanggan::class);
    }
    public $timestamps=false;
}
