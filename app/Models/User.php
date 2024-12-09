<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user'; // Nama tabel
    protected $primaryKey = 'id_user'; // Primary key
    public $incrementing = true; // AUTO_INCREMENT
    protected $keyType = 'int'; // Tipe data primary key

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nama',
        'username',
        'password',
        'level'
    ];

    // Sembunyikan password saat model diakses sebagai array
    protected $hidden = ['password'];

    // Tambahkan timestamps jika tabel tidak menggunakan timestamps
    public $timestamps = false;
}
