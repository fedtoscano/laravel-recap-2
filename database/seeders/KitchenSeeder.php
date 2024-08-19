<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kitchen;
use Illuminate\Database\Seeder;

class KitchenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chineseKitchen = new Kitchen();
        $chineseKitchen->name = 'chinese';
        $chineseKitchen->save();

        $japaneseKitchen = new Kitchen();
        $japaneseKitchen->name = 'japanese';
        $japaneseKitchen->save();


    }
}
