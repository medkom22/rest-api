<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fakultas>
 */
class FakultasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>fake()->sentence(rand(3, 5), false),
            'avatar'=> fake()->randomElement(["fakultas1.jpg", "fakultas2.jpg", "fakultas3.jpg", "fakultas4.jpg", "fakultas5.jpg", "fakultas6.jpg"]),
            'deskripsi'=> fake()->paragraph(rand(20, 40), false),
            'lokasi'=> 'link Gmap nya taro sini yaaaa....',
            'instagram'=> 'https://www.instagram.com/george_ikki/',
            'website'=> 'http://portfolio.rifkiromadhan.repl.co/',
            'youtube'=> 'https://www.youtube.com/',
            'tiktok'=> 'https://www.tiktok.com/',
        ];
    }
}
