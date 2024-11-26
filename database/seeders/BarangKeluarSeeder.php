<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'id_barang' => '333', 
                'nama_barang' => 'kotak', 
                'tgl_keluar' => '6', 
                'jml_keluar' => '2', 
                'lokasi' => 'Jalan Anggrek', 
                'penerima' => 'Saya',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
