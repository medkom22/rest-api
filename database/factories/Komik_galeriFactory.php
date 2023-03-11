<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komik_galeri>
 */
class Komik_galeriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'komik_id'=> fake()->numberBetween(1,10),
            'nama'=> fake()->randomElement(["komikGambar1.jpg", "komikGambar2.jpg", "komikGambar3.jpg", "komikGambar4.jpg"]),
        ];
    }
}
