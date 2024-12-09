<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokBarang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh untuk tabel stok
        $data = [
            [
                'id_barang' => 111,
                'nama_barang' => 'Barang A',
                'jml_masuk' => 100,
                'jml_keluar' => 30,
                'total_barang' => 70,
            ],
            [
                'id_barang' => 222,
                'nama_barang' => 'Barang B',
                'jml_masuk' => 200,
                'jml_keluar' => 50,
                'total_barang' => 150,
            ],
            [
                'id_barang' => 333,
                'nama_barang' => 'Barang C',
                'jml_masuk' => 150,
                'jml_keluar' => 20,
                'total_barang' => 130,
            ],
            [
                'id_barang' => 444,
                'nama_barang' => 'Barang D',
                'jml_masuk' => 300,
                'jml_keluar' => 100,
                'total_barang' => 200,
            ],
        ];

        // Insert data ke tabel stok
        DB::table('stok')->insert($data);
    }
}
