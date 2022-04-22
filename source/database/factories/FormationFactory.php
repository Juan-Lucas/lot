<?php

namespace Database\Factories;

use App\Models\CategoryFormation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(550),
            'image' => '/assets/img/courses/5.jpg',
            'duration' => $this->faker->randomDigitNotNull(),
            'category_id' => CategoryFormation::factory(),
        ];
    }
}
