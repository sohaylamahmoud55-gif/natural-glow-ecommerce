<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BodyProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Botanical Body Wash',
                'description' => 'Cleanse & Refresh',
                'price' => 320,
                'stock' => 50,
                'image' => 'images/body/body wash.png',
                'rating' => 5,
                'reviews' => 118,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Gentle Body Scrub',
                'description' => 'Exfoliate & Smooth',
                'price' => 390,
                'stock' => 45,
                'image' => 'images/body/scrub.png',
                'rating' => 5,
                'reviews' => 95,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Hydrating Body Lotion',
                'description' => 'Deep Hydration',
                'price' => 360,
                'stock' => 55,
                'image' => 'images/body/lotion.png',
                'rating' => 5,
                'reviews' => 132,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Shea Body Butter',
                'description' => 'Nourish & Soften',
                'price' => 420,
                'stock' => 35,
                'image' => 'images/body/shea butter.png',
                'rating' => 5,
                'reviews' => 109,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Coconut Shower Gel',
                'description' => 'Fresh & Clean',
                'price' => 280,
                'stock' => 60,
                'image' => 'images/body/coconut-shower-gel.png',
                'rating' => 4,
                'reviews' => 84,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Lavender Bath Salt',
                'description' => 'Relax & Refresh',
                'price' => 250,
                'stock' => 40,
                'image' => 'images/body/lavender-bath-salt.png',
                'rating' => 5,
                'reviews' => 70,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Rose Bath Bomb',
                'description' => 'Fizz & Relax',
                'price' => 180,
                'stock' => 70,
                'image' => 'images/body/rose-bath-bomb.png',
                'rating' => 5,
                'reviews' => 98,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Vanilla Hand Cream',
                'description' => 'Soft Hands',
                'price' => 190,
                'stock' => 65,
                'image' => 'images/body/vanilla-hand-cream.png',
                'rating' => 4,
                'reviews' => 76,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Mint Foot Cream',
                'description' => 'Cool & Repair',
                'price' => 210,
                'stock' => 45,
                'image' => 'images/body/mint-foot-cream.png',
                'rating' => 5,
                'reviews' => 67,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Nourishing Body Oil',
                'description' => 'Silky Smooth Skin',
                'price' => 450,
                'stock' => 30,
                'image' => 'images/body/nourishing-body-oil.png',
                'rating' => 5,
                'reviews' => 104,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Aloe Vera Body Mist',
                'description' => 'Light & Fresh',
                'price' => 260,
                'stock' => 50,
                'image' => 'images/body/aloe-vera-body-mist.png',
                'rating' => 4,
                'reviews' => 59,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 2,
                'name' => 'Honey Body Cream',
                'description' => 'Rich Moisture',
                'price' => 380,
                'stock' => 35,
                'image' => 'images/body/honey-body-cream.png',
                'rating' => 5,
                'reviews' => 91,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Coffee Body Scrub',
                'description' => 'Smooth & Glow',
                'price' => 340,
                'stock' => 40,
                'image' => 'images/body/coffee-body-scrub.png',
                'rating' => 5,
                'reviews' => 112,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Chamomile Shower Cream',
                'description' => 'Gentle Care',
                'price' => 300,
                'stock' => 48,
                'image' => 'images/body/chamomile-shower-cream.png',
                'rating' => 4,
                'reviews' => 73,
            ],

            [
                'category_id' => 3,
                'body_section_id' => 1,
                'name' => 'Luxury Bath Oil',
                'description' => 'Spa Experience',
                'price' => 520,
                'stock' => 25,
                'image' => 'images/body/luxury-bath-oil.png',
                'rating' => 5,
                'reviews' => 88,
            ],
        ];
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
