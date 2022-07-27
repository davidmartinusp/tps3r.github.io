<?php

namespace Database\Seeders;

use App\Models\ReviewModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReviewModel::create([
            'rating' => 5,
            'review_content' => 'TPS3R yang sangat membantu'
        ]);
    }
}
