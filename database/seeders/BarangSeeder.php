<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'id_barang' => '333',
                'nama_barang' => 'kotak',
                'spesifikasi' => '6',
                'lokasi' => 'Taman',
                'kondisi' => 'bagus',
                'jumlah_barang' => '10',
                'sumber_dana' => 'PT Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
