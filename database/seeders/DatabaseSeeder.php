<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Movie;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Movie::factory(33)->create()->each(function ($movie) {
            $numReviews = random_int(5, 30);
            Review::factory()->count($numReviews)
                ->good()
                ->for($movie)
                ->create();
        });

        Movie::factory(33)->create()->each(function ($movie) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
                ->average()
                ->for($movie)
                ->create();
        });

        Movie::factory(34)->create()->each(function ($movie) {
            $numReviews = random_int(5, 30);

            Review::factory()->count($numReviews)
                ->bad()
                ->for($movie)
                ->create();
        });
    }
}
