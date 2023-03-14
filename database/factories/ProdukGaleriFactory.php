<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk_galeri>
 */
class ProdukGaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'produk_id' => fake()->numberBetween(1,6),
            'nama'=> fake()->randomElement(["produkGaleri1.jpg", "produkGaleri2.jpg", "produkGaleri3.jpg", "produkGaleri4.jpg", "produkGaleri5.jpg", "produkGaleri6.jpg"]),
        ];
    }
}
