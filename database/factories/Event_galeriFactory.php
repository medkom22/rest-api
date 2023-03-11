<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event_galeri>
 */
class Event_galeriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => fake()->numberBetween(1,4),
            'nama'=> fake()->randomElement(["5.jpg", "6.jpg", "7.jpg", "8.jpg", "9.jpg", "10.jpg"]),
        ];
    }
}
