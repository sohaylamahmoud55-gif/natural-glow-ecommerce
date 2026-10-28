<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerfumeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $perfumes =[

            [
                'category_id' => 4,
                'name' => 'Bloom',
                'description' => 'Floral & Fresh',
                'price' => 520,
                'stock' => 50,
                'image' => 'images/perfume/bloom.png',
                'rating' => 5,
                'reviews' => 112,
            ],

            [
                'category_id' => 4,
                'name' => 'Luna',
                'description' => 'Citrus & Soft',
                'price' => 480,
                'stock' => 50,
                'image' => 'images/perfume/luna.png',
                'rating' => 5,
                'reviews' => 98,
            ],

            [
                'category_id' => 4,
                'name' => 'Oud',
                'description' => 'Woody & Warm',
                'price' => 560,
                'stock' => 40,
                'image' => 'images/perfume/oud.png',
                'rating' => 5,
                'reviews' => 105,
            ],

            [
                'category_id' => 4,
                'name' => 'Velvet',
                'description' => 'Sweet & Elegant',
                'price' => 500,
                'stock' => 45,
                'image' => 'images/perfume/velvet.png',
                'rating' => 5,
                'reviews' => 90,
            ],
             [
                'category_id' => 4,
                'name' => 'Bloom',
                'description' => 'Floral & Fresh',
                'price' => 520,
                'stock' => 50,
                'image' => 'images/perfume/bloom.png',
                'rating' => 5,
                'reviews' => 112,
            ],

            [
                'category_id' => 4,
                'name' => 'Luna',
                'description' => 'Citrus & Soft',
                'price' => 480,
                'stock' => 50,
                'image' => 'images/perfume/luna.png',
                'rating' => 5,
                'reviews' => 98,
            ],

            [
                'category_id' => 4,
                'name' => 'Oud',
                'description' => 'Woody & Warm',
                'price' => 560,
                'stock' => 40,
                'image' => 'images/perfume/oud.png',
                'rating' => 5,
                'reviews' => 105,
            ],

            [
                'category_id' => 4,
                'name' => 'Velvet',
                'description' => 'Sweet & Elegant',
                'price' => 500,
                'stock' => 45,
                'image' => 'images/perfume/velvet.png',
                'rating' => 5,
                'reviews' => 90,
            ],
             [
                'category_id' => 4,
                'name' => 'Bloom',
                'description' => 'Floral & Fresh',
                'price' => 520,
                'stock' => 50,
                'image' => 'images/perfume/bloom.png',
                'rating' => 5,
                'reviews' => 112,
            ],

            [
                'category_id' => 4,
                'name' => 'Luna',
                'description' => 'Citrus & Soft',
                'price' => 480,
                'stock' => 50,
                'image' => 'images/perfume/luna.png',
                'rating' => 5,
                'reviews' => 98,
            ],

            [
                'category_id' => 4,
                'name' => 'Oud',
                'description' => 'Woody & Warm',
                'price' => 560,
                'stock' => 40,
                'image' => 'images/perfume/oud.png',
                'rating' => 5,
                'reviews' => 105,
            ],

            [
                'category_id' => 4,
                'name' => 'Velvet',
                'description' => 'Sweet & Elegant',
                'price' => 500,
                'stock' => 45,
                'image' => 'images/perfume/velvet.png',
                'rating' => 5,
                'reviews' => 90,
            ],



        ];
        foreach ($perfumes as $perfume) {
            Product::create($perfume);
        }
    }
}
