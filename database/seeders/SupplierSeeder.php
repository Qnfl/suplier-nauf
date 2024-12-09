<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supliers')->insert([
            [
                'id_suplier' => '111',
                'nama_suplier' => 'PT Elektro',
                'alamat_suplier' => 'Jl. Mangga Dua, Jakarta',
                'telp_suplier' => '089876543210',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_suplier' => '222',
                'nama_suplier' => 'PT Elektrik',
                'alamat_suplier' => 'Bekasi City Park',
                'telp_suplier' => '082345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
