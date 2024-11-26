<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang_Keluar extends Model
{
    protected $table = 'barang_keluar';
    protected $fillable = ['id_barang', 'nama_barang', 'tgl_keluar', 'jml_keluar', 'lokasi', 'penerima'];
}
