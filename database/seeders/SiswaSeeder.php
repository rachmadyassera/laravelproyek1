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
        DB::table('siswa')->insert([
            'nis' => 101,
            'nama' => 'Adni',
            'tgl_lahir' => '1993-06-19'
        ]);
        DB::table('siswa')->insert([
            'nis' => 102,
            'nama' => 'Koko',
            'tgl_lahir' => '1994-05-05'
        ]);
    }
}
