<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => 333, // Sesuaikan dengan tipe data (integer)
                'nama_barang' => 'Kotak',
                'tgl_masuk' => now(), // Format tanggal otomatis
                'jml_masuk' => 2,
                'id_suplier' => 111,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_barang' => 334,
                'nama_barang' => 'Papan Tulis',
                'tgl_masuk' => now(),
                'jml_masuk' => 5,
                'id_suplier' => 112,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
