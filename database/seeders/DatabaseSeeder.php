<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Artikel_kategori;
use \App\Models\Artikel;
use \App\Models\Event;
use \App\Models\Event_galeri;
use \App\Models\Ukm;
use \App\Models\Ukm_galeri;
use \App\Models\Fakultas;
use \App\Models\Fakultas_galeri;
use \App\Models\Komik_kategori;
use \App\Models\Komik;
use \App\Models\Komik_galeri;
use \App\Models\Produk;
use \App\Models\Produk_kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Artikel::factory(10)->create();
        Event::factory(4)->create();
        Event_galeri::factory(15)->create();
        Ukm::factory(15)->create();
        Ukm_galeri::factory(15)->create();
        Fakultas::factory(15)->create();
        Fakultas_galeri::factory(15)->create();
        Komik_kategori::factory(3)->create();
        Komik::factory(10)->create();
        Komik_galeri::factory(20)->create();
        Produk::factory(6)->create();
        Produk_kategori::factory(3)->create();
        


        //Artikel_kategori factory
        DB::table('Artikel_kategoris')->insert([
            'nama' => 'Belajar Frontend',
            'created_at'=> now()
        ]);
        DB::table('Artikel_kategoris')->insert([
            'nama' => 'Belajar Backend',
            'created_at'=> now()
        ]);
        DB::table('Artikel_kategoris')->insert([
            'nama' => 'Belajar Web Programming',
            'created_at'=> now()
        ]);
        DB::table('Artikel_kategoris')->insert([
            'nama' => 'Belajar Mobile App',
            'created_at'=> now()
        ]);
    }
}
