<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk_kategori>
 */
class Produk_kategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> fake()->paragraph(rand(3, 5), false),
            "sampul"=> fake()->randomElement(["produk_kategori1.jpg", "produk_kategori2.jpg", "produk_kategori3.jpg", "produk_kategori4.jpg"]),
        ];
    }
}
