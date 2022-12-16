<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Zuhri',
            'role' => 'admin',
            'email' => 'zuhri@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
            'name' => 'Adni',
            'role' => 'siswa',
            'email' => 'adni@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
            'name' => 'Koko',
            'role' => 'siswa',
            'email' => 'koko@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
