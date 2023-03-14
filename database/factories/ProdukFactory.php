<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "produk_kategori_id"=> fake()->numberBetween(1,4),
            "nama"=> "Baju ". fake()->name(),
            "harga"=> fake()->numberBetween(100000,150000),
            "foto_produk"=> fake()->unique()->randomElement(["produk1.jpg", "produk2.jpg", "produk3.jpg", "produk4.jpg", "produk5.jpg", "produk6.jpg"]),
            "deskripsi"=> fake()->paragraph(rand(20, 30), false),
        ];
    }
}
