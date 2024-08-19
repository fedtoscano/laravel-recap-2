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
        Schema::create('ingredient_recipe', function (Blueprint $table) {
            // $table->unsignedBigInteger('ingredient_id');
            // $table->unsignedBigInteger('recipe_id');
            $table->primary(['ingredient_id', 'recipe_id']);

            $table->foreignId('ingredient_id');
            $table->foreignId('recipe_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredient_recipe');
    }
};
