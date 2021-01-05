<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'brayan',
            'email' => 'brayan@hotmail.com',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'prueba',
            'email' => 'prueba@hotmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
