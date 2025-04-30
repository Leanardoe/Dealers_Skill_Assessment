<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    //register custom seed data
    public function run(): void
    {
        $this->call([
            CustomerSeeder::class,
        ]);
    }    
}
