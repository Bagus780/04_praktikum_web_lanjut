<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'nim' => '2041720093',
            'nama' => 'Mochamad Aditya Bagus',
            'jurusan' => 'D4-TI',
            'kelas' => '2H',
            'absen' => 18,
            'jk' => 'L'
        ]);
    }
}

