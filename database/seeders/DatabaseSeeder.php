<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
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

        //create users
        User::factory()->create([
            'name' => 'Alex',
            'email' => 'alex_cornea46@yahoo.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => time()
        ]);
        
        //create projects
        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();

        
    }
}
