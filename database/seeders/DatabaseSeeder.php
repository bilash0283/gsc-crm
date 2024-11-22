<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userName = $this->command->ask('What is your name?');

        User::create([
            'username' => $userName,
            'email' => 'admin@gsc.com',
            'password' => Hash::make('gsc123'),
            'type' => ADMIN,
        ]);

        User::create([
            'username' => 'Agent',
            'email' => 'agent@gsc.com',
            'password' => Hash::make('gsc123'),
            'type' => AGENT,
        ]);

        User::create([
            'username' => 'Student',
            'email' => 'student@gsc.com',
            'password' => Hash::make('gsc123'),
            'type' => STUDENT,
        ]);

        $this->call([
            CountrySeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}
