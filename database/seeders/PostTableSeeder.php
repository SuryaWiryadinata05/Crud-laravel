<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['tittle' => 'Tips Cepat Nikah' , 'content' => 'lorem ipsum'],
            ['tittle' => 'Haruskah menunda Nikah ?' , 'content' => 'lorem ipsum'],
            ['tittle' => 'Membangun Visi Misi Keluarga' , 'content' => 'lorem ipsum']
        ];

        DB::table('posts')->insert($sampel);
    }
}
