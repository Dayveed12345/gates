<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       post::factory(8)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name'=>'admin',
        //     'email'=>'admin@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'role'=>'admin'
        // ]);
        // User::create([
        //     'name'=>'user',
        //     'email'=>'user@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'role'=>'user'
        // ]);
        // User::create([
        //     'name'=>'editor',
        //     'email'=>'editor@gmail.com',
        //     'password'=>bcrypt('password'),
        //     'role'=>'editor'
        // ]);
    }
}
