<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> fake()->sentence(rand(3,5)),
            'sampul'=> fake()->randomElement(["1.jpg", "2.jpg", "3.jpg", "4.jpg"]),
            'deskripsi'=> fake()->paragraph(rand(20, 50), false),
            'link_form'=> "https://ke.bem-unsoed.com/JoinBEMUnsoed",
            'instagram'=> "https://www.instagram.com/george_ikki/"
        ];
    }
}
