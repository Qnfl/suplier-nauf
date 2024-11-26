<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang_Masuk extends Model
{
    protected $table = 'barang_masuk';
    protected $fillable = ['id_barang', 'nama_barang', 'tgl_masuk', 'jml_masuk', 'id_suplier'];
}
