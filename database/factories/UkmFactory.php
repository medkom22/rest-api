<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ukm>
 */
class UkmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>fake()->sentence(rand(1, 4), false),
            'avatar'=> fake()->randomElement(["ukm1.jpg", "ukm2.jpg", "ukm3.jpg", "ukm4.jpg", "ukm5.jpg", "ukm6.jpg"]),
            'deskripsi'=> fake()->paragraph(rand(20, 30), false),
            'instagram'=> 'https://www.instagram.com/george_ikki/',
            'link_form'=> 'https://ke.bem-unsoed.com/JoinBEMUnsoed'
        ];
    }
}
