<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id();
            $table->string("nama")->unique();
            $table->string("avatar");
            $table->longText("deskripsi");
            $table->string("lokasi");
            $table->string("instagram")->nullable();
            $table->string("website")->nullable();
            $table->string("youtube")->nullable();
            $table->string("tiktok")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fakultas');
    }
};
