<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder{

    public function run(): void{
        $posts = [
            [
                'user_id' => 1,
                'title'   => 'Primeiro post do Admin',
                'content' => 'Bem-vindo, este é o primeiro post do administrador' 
            ],
            [
                'user_id' => 1,
                'title'   => 'Segundo post do Admin',
                'content' => 'Bem-vindo, este é o segundo post do administrador' 
            ],
            [
                'user_id' => 2,
                'title'   => 'Primeiro post do Moderador',
                'content' => 'Bem-vindo, este é o primeiro post do moderador' 
            ],
            [
                'user_id' => 2,
                'title'   => 'Segundo post do Moderador',
                'content' => 'Bem-vindo, este é o segundo post do moderador' 
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}
