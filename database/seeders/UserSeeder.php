<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'id_user' => 111,
                'nama' => 'John Doe',
                'username' => 'johndoe',
                'password' => 'ppaasswwoorrdd',
                'level' => 'user',
            ],
            [
                'id_user' => 222,
                'nama' => 'Jane Smith',
                'username' => 'janesmith',
                'password' => 'ppaasswwoorrdd',
                'level' => 'user',
            ],
            [
                'id_user' => 333,
                'nama' => 'Alice Johnson',
                'username' => 'alicejohnson',
                'password' => 'ppaasswwoorrdd',
                'level' => 'user',
            ],
            [
                'id_user' => 444,
                'nama' => 'Bob Brown',
                'username' => 'bobbrown',
                'password' => 'ppaasswwoorrdd',
                'level' => 'user',
            ],
        ]);
    }
}
