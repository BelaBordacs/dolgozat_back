<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingatlan>
 */
class IngatlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kategoria' => rand(1,7),
            'leiras' => fake()->sentence(),
            'hirdetesDatuma' => fake()->date(),
            'tehermentes' => fake()->boolean(),
            'ar' => rand(10, 90),
            'kepURL' => fake()->url(),
        ];
    }
}
