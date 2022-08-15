<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'nome' => 'Test User',
            'email' => 'test2@example.com',
            'permissao' =>'1',
            'telefone' => '(53) 98405-8777',
            'img_perfil' => 'img.fake',
        ]);
    }
}
