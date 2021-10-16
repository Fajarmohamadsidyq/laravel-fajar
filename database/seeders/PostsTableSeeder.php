<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'Tips Cepat Nikah', 'content' => 'loren ipsum'],
            ['title' => 'Haruskan Menunda Nikah??', 'content' => 'loren ipsum'],
            ['title' => 'Membangun Visi Misi Keluarga', 'content' => 'loren ipsum'],
        ];
        // masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
