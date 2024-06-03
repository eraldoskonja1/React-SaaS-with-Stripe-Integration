<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
use App\Models\Package;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Eraldo',
            'email' => 'eraldo@example.com',
            'password' => bcrypt('Eraldo1234'),
        ]);

        Feature::create([
            'image' => '',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate sum of two nmbers',
            'required_credits' => 1,
            'active' => true,
        ]);

        Feature::create([
            'image' => '',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Difference',
            'description' => 'Calculate difference of two nmbers',
            'required_credits' => 3,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20,
        ]);

        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100,
        ]);
        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
        ]);
    }
}
