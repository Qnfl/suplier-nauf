<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinjam_Barang extends Model
{
    protected $table = 'pinjam_barang';
    protected $primaryKey = 'id_pinjam';
    protected $fillable = ['peminjam', 'tgl_pinjam', 'id_barang', 'nama_barang', 'jml_barang', 'tgl_kembali', 'kondisi'];
}
