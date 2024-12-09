<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PinjamBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pinjam_barang')->insert([
            [
                'peminjam' => 'Ali',
                'tgl_pinjam' => now(),
                'jml_barang' => 3,
                // 'aksi' => 'Dipinjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'peminjam' => 'Budi',
                'tgl_pinjam' => now()->subDays(1),
                'jml_barang' => 2,
                // 'aksi' => 'Dikembalikan',
                'created_at' => now()->subDays(1),
                'updated_at' => now(),
            ],
        ]);
    }
}
