<?php

namespace Database\Seeders;

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

        \App\Models\User::factory()->create([
            'name' => 'Russell Quaye',
            'email' => 'KingRuss@example.com',
        ]);

        \App\Models\Transaction::factory(10)->create([
            'user_id' => 1,
        ]);

        \App\Models\Category::factory(5)->create();
    }
}
