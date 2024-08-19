<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipe;
use Faker\Generator as Faker;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $recipes = Recipe::all();
        $ingredientsId = Ingredient::all()->pluck('id');

        foreach ($recipes as $recipe) {
            $recipe->ingredients()->sync($faker->randomElements($ingredientsId, rand(3, 6)));
        }
    }
}
