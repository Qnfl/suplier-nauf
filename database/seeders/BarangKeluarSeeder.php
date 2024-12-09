<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangKeluarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => 1, 
                'nama_barang' => 'Kotak',
                'tgl_keluar' => now(),
                'jml_keluar' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Papan Tulis',
                'tgl_keluar' => now(),
                'jml_keluar' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
