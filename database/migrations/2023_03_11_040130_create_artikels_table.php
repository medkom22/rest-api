<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


use \App\Models\User;
use \App\Models\Artikel_kategori;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artikel_kategori::class);
            $table->foreignIdFor(User::class);
            $table->string("title")->unique();
            $table->string("sampul")->unique();
            $table->string("slug");
            $table->longText("konten");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
