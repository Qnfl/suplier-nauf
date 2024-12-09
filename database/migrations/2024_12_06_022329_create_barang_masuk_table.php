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
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->integer('id_barang'); // ID barang
            $table->string('nama_barang'); // Nama barang
            $table->date('tgl_masuk'); // Tanggal masuk
            $table->integer('jml_masuk'); // Jumlah masuk
            $table->integer('id_suplier'); // ID supplier
            $table->timestamps(); // Created at & updated at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuk');
    }
};
