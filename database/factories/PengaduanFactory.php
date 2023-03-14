<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengaduan>
 */
class PengaduanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama"=> fake()->name(),
            "fakultas"=>"FEB",
            "jurusan"=>"IESP",
            "noHp"=> "0818397483274",
            "pesan"=> fake()->paragraph(rand(3,5), false)
        ];
    }
}
