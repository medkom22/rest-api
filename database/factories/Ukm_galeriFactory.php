<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Ukm_galeriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ukm_id' => fake()->numberBetween(1,15),
            'nama'=> fake()->randomElement(["5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg"]),
        ];
    }
}
