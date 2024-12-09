<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang_Keluar extends Model
{
    protected $table = 'barang_keluar';
    protected $primaryKey = 'id_barang'; // Menentukan primary key yang benar
    protected $fillable = ['nama_barang', 'tgl_keluar', 'jml_keluar', 'lokasi', 'penerima'];
}
