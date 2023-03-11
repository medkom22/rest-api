<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Komik>
 */
class KomikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>fake()->numberBetween(1,10),
            'komik_kategori_id'=>fake()->numberBetween(1,3),
            'nama'=>fake()->sentence(rand(3,5), false),
            'sampul'=> fake()->randomElement(["komik1.jpg", "komik2.jpg", "komik3.jpg", "komik4.jpg"]),

        ];
    }
}
