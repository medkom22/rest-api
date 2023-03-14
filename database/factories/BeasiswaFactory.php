<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beasiswa>
 */
class BeasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama"=> "Beasiswa ". fake()->name(),
            "sampul"=> fake()->randomElement(["Beasiswa5.jpg", "Beasiswa6.jpg", "Beasiswa7.jpg", "Beasiswa8.jpg", "Beasiswa9.jpg", "Beasiswa10.jpg"]),
            "deskripsi"=> fake()->paragraph(rand(2,5), false),
        ];
    }
}
