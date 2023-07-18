<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Duck>
 */
class DuckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake() -> firstName(),
            "weight" => fake() -> numberBetween(1, 3),
            "color" => fake() -> safeColorName(),
            "picture" => "http://picsum.photos/350/350"
        ];
    }
}
