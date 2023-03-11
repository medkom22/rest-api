<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artikel_kategori_id' => fake()->numberBetween(1,4),
            'user_id' => fake()->numberBetween(1,10),
            'title'=> fake()->sentence(rand(1, 5)),
            'slug' => Str::slug(fake()->sentence(rand(1, 5))),
            'konten'=> fake()->paragraph(rand(10, 40), false)
        ];
    }
}
