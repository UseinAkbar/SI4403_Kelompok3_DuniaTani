<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gurutani;
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
        User::create([
            'name' => 'asep',
            'email' => 'asep@gmail.com',
            'username' => 'asep123',
            'password' => bcrypt('12345'),
            'role' => 'gurutani',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        User::create([
            'name' => 'dadan',
            'email' => 'dadan@gmail.com',
            'username' => 'dadan123',
            'password' => bcrypt('12345'),
            'role' => 'gurutani',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Gurutani::create([
            'name' => 'asep',
            'email' => 'asep@gmail.com',
            'username' => 'asep123',
            'password' => bcrypt('12345'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        Gurutani::create([
            'name' => 'dadan',
            'email' => 'dadan@gmail.com',
            'username' => 'dadan123',
            'password' => bcrypt('12345'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}