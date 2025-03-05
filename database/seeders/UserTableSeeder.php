<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder{
    
    public function run(): void{
        $users = [
            [
                'name'     => 'Administrador',
                'email'    => 'admin@mail.com',
                'password' => bcrypt('Aa123456'),
                'role'     => 'admin'
            ],
            [
                'name'     => 'Moderador',
                'email'    => 'moderador@mail.com',
                'password' => bcrypt('Aa123456'),
                'role'     => 'moderador'
            ],
            [
                'name'     => 'Visitante',
                'email'    => 'visitor@mail.com',
                'password' => bcrypt('Aa123456'),
                'role'     => 'visitor'
            ]
        ];

        DB::table('Users')->insert($users);
    }
}
