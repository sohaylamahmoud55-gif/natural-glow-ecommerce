<?php

namespace Database\Seeders;

use App\Models\Skin_type;
use Illuminate\Database\Seeder;

class Skin_typeSeeder extends Seeder
{
    public function run(): void
    {
        Skin_type::insert([

            [
                'name' => 'Dry Skin',
                'image' => 'dry.jpg',
                'description' => 'Dry Skin'
            ],

            [
                'name' => 'Oily Skin',
                'image' => 'oily.jpg',
                'description' => 'Oily Skin'
            ],

            [
                'name' => 'Combination Skin',
                'image' => 'combination.jpg',
                'description' => 'Combination Skin'
            ],

            [
                'name' => 'Sensitive Skin',
                'image' => 'sensitive.jpg',
                'description' => 'Sensitive Skin'
            ],

            [
                'name' => 'Normal Skin',
                'image' => 'normal.jpg',
                'description' => 'Normal Skin'
            ],

        ]);
    }
}