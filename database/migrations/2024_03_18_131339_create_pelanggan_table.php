<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pelanggan')->unique();
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('nomor_telepon');
            $table->string('email')->unique();
            $table->foreign('kategori_pelanggan');
            $table->integer('batas_kredit');
            $table->foreign('kategori_pelanggan')->references('nama_kategori')->on('kategori_pelanggan');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
