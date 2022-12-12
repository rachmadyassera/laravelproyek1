<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nis' => 103,
            'name' => 'Zuhri',
            'email' => 'zuhri@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
            'nis' => 104,
            'name' => 'Surya',
            'email' => 'surya@gmail.com',
            'password' => bcrypt('12345678')

        ]);
        DB::table('users')->insert([
            'nis' => 105,
            'name' => 'Dicky',
            'email' => 'dicky@gmail.com',
            'password' => bcrypt('12345678')

        ]);
    }
}
