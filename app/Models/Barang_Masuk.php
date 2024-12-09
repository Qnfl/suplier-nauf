<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_Masuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuk'; // Nama tabel di database
    protected $primaryKey = 'id_barang'; // Primary key di tabel
    public $timestamps = false; // Jika tabel tidak memiliki kolom created_at dan updated_at

    protected $fillable = [
        'nama_barang',
        'tgl_masuk',
        'jml_masuk',
    ];
}
