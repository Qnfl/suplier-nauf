<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supliers';
    protected $fillable = ['id_suplier', 'nama_suplier', 'alamat_suplier', 'telp_suplier'];
}
