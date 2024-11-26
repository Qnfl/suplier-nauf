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
        DB::table('supplier')->insert([
            [
                'id_supplier' => '111',
                'nama_supplier' => 'PT Elektro',
                'alamat_supplier' => 'Jl. Mangga Dua, Jakarta',
                'telepon_supplier' => '089876543210',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_supplier' => '222',
                'nama_supplier' => 'PT Elektrik',
                'alamat_supplier' => 'Bekasi City Park',
                'telepon_supplier' => '082345678901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
