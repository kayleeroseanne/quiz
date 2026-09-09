<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            ['nama' => 'Teknologi'],
            ['nama' => 'Memasak'],
            ['nama' => 'Menggambar'],
            ['nama' => 'Bisnis'],
            ['nama' => 'Anak'],
        ];
        DB::table('kategoris')->insert($dataku);
    }
}
