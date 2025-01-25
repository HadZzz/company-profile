<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\TestimonialSeeder;
use Database\Seeders\BlogPostSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ServiceSeeder::class,
            ProjectSeeder::class,
            TestimonialSeeder::class,
            BlogPostSeeder::class,
        ]);
    }
}
