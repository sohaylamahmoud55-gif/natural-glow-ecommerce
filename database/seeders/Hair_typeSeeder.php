<?php

namespace Database\Seeders;

use App\Models\Hair_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Hair_typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hair_type::insert([

            [
                'name' => 'Curly Hair',
                'image' => 'curly.jpg',
                'description' => 'Curly Hair'
            ],

            [
                'name' => 'Straight Hair',
                'image' => 'straight.jpg',
                'description' => 'Straight Hair'
            ],

            [
                'name' => 'Wavy Hair',
                'image' => 'wavy.jpg',
                'description' => 'Wavy Hair'
            ],

            [
                'name' => 'Dry Hair',
                'image' => 'dry.jpg',
                'description' => 'Dry Hair'
            ],

            [
                'name' => 'Oily Hair',
                'image' => 'oily.jpg',
                'description' => 'Oily Hair'
            ],
            [
                'name' => 'Normal Hair',
                'image' => 'normal.jpg',
                'description' => 'Normal Hair'
            ],

        ]);
    }
}
