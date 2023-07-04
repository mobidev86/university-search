<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::query()->truncate();
        $pass = hash::make('password123');
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.app',
            'password'=>$pass
        ]);
    }
}
