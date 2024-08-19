<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $ingredientList = [
            "Riso per sushi",
            "Alghe Nori",
            "Salmone fresco",
            "Tonno",
            "Gamberi",
            "Avocado",
            "Cetriolo",
            "Wasabi",
            "Zenzero sottaceto",
            "Soia",
            "Olio di sesamo",
            "Sesamo tostato",
            "Spaghetti di riso",
            "Tofu",
            "Bambù",
            "Funghi Shiitake",
            "Cavolo cinese (Pak Choi)",
            "Germogli di soia",
            "Carote",
            "Cipolla",
            "Aglio",
            "Zenzero fresco",
            "Salsa di ostriche",
            "Salsa teriyaki",
            "Salsa ponzu",
            "Riso al vapore",
            "Pollo",
            "Anatra",
            "Manzo",
            "Maiale",
            "Uova",
            "Tempura mix",
            "Gyoza",
            "Noodles di grano saraceno (Soba)",
            "Noodles di grano (Udon)",
            "Tè verde matcha",
            "Edamame",
            "Miso",
            "Alga wakame",
            "Sake"
        ];

        foreach ($ingredientList as $ingredientName) {
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredientName;
            $newIngredient->price_kg =  $faker->randomFloat(2, 3.99, 49.99);
            $newIngredient->day_of_replenish = $faker->dayOfWeek();
            $newIngredient->save();
        }

    }
}
