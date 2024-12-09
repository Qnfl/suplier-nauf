<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id('id_pinjam'); // ID utama
            $table->string('peminjam'); // Nama peminjam
            $table->date('tgl_pinjam'); // Tanggal peminjaman
            $table->integer('jml_barang'); // Jumlah barang
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam_barang');
    }
};
