<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    use HasFactory;

    // Tentukan nama tabel (jika tidak sama dengan nama model dalam plural)
    protected $table = 'stok';

    // Tentukan primary key tabel
    protected $primaryKey = 'id_barang';

    // Jika primary key bukan auto-increment, tambahkan:
    public $incrementing = true;

    // Tentukan tipe data primary key (jika bukan integer)
    protected $keyType = 'int';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_barang',
        'jml_masuk',
        'jml_keluar',
        'total_barang',
    ];
}
