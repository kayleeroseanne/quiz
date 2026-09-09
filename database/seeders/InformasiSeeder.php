<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataku = [
            [
                'kategori_id' => 1,
                'judul' => 'Artificial Intelligence',
                'ringkasan' => 'Mengenal apa itu Artificial Intelligence dan kegunaannya.',
                'isi' => 'Artificial Intelligence merupakan teknologi yang dapat membantu dalam kegiatan sehari-hari.',
                'sumber' => 'ai.com',
                'status' => 'published'
            ],

            [
                'kategori_id' => 2,
                'judul' => 'Cara memasak pizza yang enak',
                'ringkasan' => 'Resep pizza yang enak.',
                'isi' => 'Tutorial tahap per tahap untuk membuat pizza yang lezat dan enak.',
                'sumber' => 'memasak.com',
                'status' => 'published'
            ],

            [
                'kategori_id' => 3,
                'judul' => 'Teknik-teknik menggambar',
                'ringkasan' => 'Teknik menggambar yang dapat dipelajari.',
                'isi' => 'Cara menggunakan teknik-teknik menggambar untuk meningkatkan hasil gambarmu.',
                'sumber' => 'menggambar.com',
                'status' => 'published'
            ],

            [
                'kategori_id' => 4,
                'judul' => 'Digital Business Strategy',
                'ringkasan' => 'Strategi yang dapat digunakan bisnis dalam menghadapi perkembangan teknologi digital.',
                'isi' => 'Bisnis dapat memanfaatkan teknologi digital untuk memastikan bahwa selalu menjadi first choice.',
                'sumber' => 'bisnis.com',
                'status' => 'draft'
            ],

            [
                'kategori_id' => 5,
                'judul' => 'Perkembangan Anak',
                'ringkasan' => 'Menjaga kesehatan perkembangan anak.',
                'isi' => 'Cara mendidik anakmu supaya ia dapat berkembang menjadi orang yang baik dan bukan second choice.',
                'sumber' => 'anakmu.com',
                'status' => 'published'
            ],
        ];

        DB::table('informasis')->insert($dataku);
    }
}
