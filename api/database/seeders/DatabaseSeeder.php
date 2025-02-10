<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TravelRequestSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Danilo Righetto',
            'first_name' => 'Danilo',
            'last_name' => 'Righetto',
            'email' => 'danilo@gmail.com',
            'password' => 'onflypassword'
        ]);

        $this->call([
            UserSeeder::class,
            TravelRequestSeeder::class
        ]);
    }
}
