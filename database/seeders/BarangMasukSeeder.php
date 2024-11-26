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
                'id_barang' => '333',
                'nama_barang' => 'kotak',
                'tgl_masuk' => '6',
                'jml_masuk' => '2',
                'id_supplier' => '111',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
