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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image');
            $table->string('name');
            $table->string('skill');
            $table->string('social1_name');
            $table->string('social1_link');
            $table->string('social2_name');
            $table->string('social2_link');
            $table->string('social3_name');
            $table->string('social3_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
