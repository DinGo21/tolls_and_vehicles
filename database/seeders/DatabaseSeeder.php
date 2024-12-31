<?php

namespace Database\Seeders;

use App\Models\Toll;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
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
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Toll::create([
            "name" => "toll1",
            "city" => "Malaga",
            "earned" => 0
        ]);

        Vehicle::create([
            "type" => "car",
            "registration" => "X1296C2"
        ]);
    }
}
