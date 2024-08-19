<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Recipe;
use App\Models\Kitchen;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $recipesList = [
            "Sashimi di Tonno",
            "Gyoza di Maiale",
            "Ramen al Miso",
            "Udon alla Tempura",
            "Pollo al Sesamo",
            "Manzo Teriyaki",
            "Tofu Grigliato",
            "Soba Freddi con Salsa di Soia",
            "Yakitori di Pollo",
            "Zuppa di Miso",
            "Nigiri di Salmone",
            "Makizushi con Avocado",
            "Tempura di Gamberi",
            "Onigiri Ripieno",
            "Anatra alla Pechinese",
            "Noodles Saltati con Verdure",
            "Pollo Kung Pao",
            "Edamame al Vapore",
            "Gyoza di Verdure",
            "Riso Cantonese",
            "Involtini Primavera",
            "Salmone alla Griglia",
            "Nigiri di Gamberi",
            "Riso Saltato al Pollo",
            "Nigiri di Unagi",
            "Tonkatsu di Maiale",
            "Nigiri di Polpo",
            "Yakisoba",
            "Tempura di Verdure",
            "Pollo in Salsa di Ostriche",
            "Sashimi di Scampi",
            "Zuppa di Verdure",
            "Spiedini di Pollo",
            "Yakitori di Manzo",
            "Ramen Vegetariano",
            "Onigiri con Tonno",
            "Sashimi di Branzino",
            "Soba in Brodo",
            "Tofu Piccante",
            "Pollo Fritto alla Giapponese",
            "Nigiri di Capesante",
            "Sushi Arcobaleno",
            "Riso con Verdure",
            "Riso Fritto Piccante",
            "Nigiri di Anguilla",
            "Gyoza Ripieni di Pesce",
            "Zuppa di Gyoza",
            "Tartare di Salmone",
            "Tempura di Pesce"
        ];
        $kitchen_ids = Kitchen::all()->pluck('id');
        $pricesList = [
            5.50, 6.00, 6.50, 7.00, 7.50, 8.00, 8.50, 9.00, 9.50, 10.00,
            10.50, 11.00, 11.50, 12.00, 12.50, 13.00, 13.50, 14.00, 14.50, 15.00,
            15.50, 16.00, 16.50, 17.00, 17.50, 18.00, 18.50, 19.00, 19.50, 20.00,
            20.50, 21.00, 21.50, 22.00, 22.50, 23.00, 23.50, 24.00, 24.50, 25.00,
            25.50, 26.00, 26.50, 27.00, 27.50, 28.00, 28.50, 29.00, 29.50, 30.00
        ];

        foreach ($recipesList as $recipeName) {
            $newRecipe = new Recipe();
            $newRecipe->name = $recipeName;
            $newRecipe->kitchen_id = $faker->randomElement($kitchen_ids);
            $newRecipe->price = $faker->randomElement($pricesList);
            $newRecipe->is_spicy = $faker->boolean(30);
            $newRecipe->is_vegan = $faker->boolean(30);
            $newRecipe->save();
        }
    }
}
