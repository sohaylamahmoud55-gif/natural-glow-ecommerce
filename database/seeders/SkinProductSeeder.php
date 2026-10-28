<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class SkinProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([

            // ================= Dry Skin =================

            [
                'category_id' => 1,
                'skin_type_id' => 1,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Hydrating Toner',
                'description' => 'Deep hydration toner for dry skin.',
                'price' => 320,
                'stock' => 50,
                'image' => 'images/skin/hydrating-toner.png',
                'rating' => 4.8,
                'reviews' => 96,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 1,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Night Cream',
                'description' => 'Rich moisturizing night cream.',
                'price' => 480,
                'stock' => 40,
                'image' => 'images/skin/night-cream.png',
                'rating' => 5,
                'reviews' => 140,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 1,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Ceramide Cream',
                'description' => 'Repairs and nourishes dry skin.',
                'price' => 520,
                'stock' => 35,
                'image' => 'images/skin/ceramide-cream.png',
                'rating' => 4.9,
                'reviews' => 121,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 1,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Hydrating Essence',
                'description' => 'Boosts skin hydration.',
                'price' => 410,
                'stock' => 45,
                'image' => 'images/skin/hydrating-essence.png',
                'rating' => 4.8,
                'reviews' => 90,
            ],

            // ================= Oily Skin =================

            [
                'category_id' => 1,
                'skin_type_id' => 2,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Oil Control Cleanser',
                'description' => 'Controls excess oil.',
                'price' => 350,
                'stock' => 60,
                'image' => 'images/skin/oil-cleanser.png',
                'rating' => 5,
                'reviews' => 170,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 2,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Niacinamide Serum',
                'description' => 'Minimizes pores.',
                'price' => 450,
                'stock' => 55,
                'image' => 'images/skin/niacinamide.png',
                'rating' => 5,
                'reviews' => 200,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 2,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Mattifying Moisturizer',
                'description' => 'Lightweight hydration.',
                'price' => 420,
                'stock' => 48,
                'image' => 'images/skin/mattifying-moisturizer.png',
                'rating' => 4.9,
                'reviews' => 111,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 2,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Clay Mask',
                'description' => 'Purifies oily skin.',
                'price' => 370,
                'stock' => 44,
                'image' => 'images/skin/clay-mask.png',
                'rating' => 4.7,
                'reviews' => 87,
            ],

            // ================= Combination Skin =================

            [
                'category_id' => 1,
                'skin_type_id' => 3,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Balancing Cleanser',
                'description' => 'Balances combination skin.',
                'price' => 340,
                'stock' => 60,
                'image' => 'images/skin/balancing-cleanser.png',
                'rating' => 4.8,
                'reviews' => 90,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 3,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Balancing Toner',
                'description' => 'Hydrates without oiliness.',
                'price' => 330,
                'stock' => 40,
                'image' => 'images/skin/balancing-toner.png',
                'rating' => 4.8,
                'reviews' => 76,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 3,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Vitamin C Serum',
                'description' => 'Brightens skin tone.',
                'price' => 490,
                'stock' => 55,
                'image' => 'images/skin/vitamin-c.png',
                'rating' => 5,
                'reviews' => 180,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 3,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Gel Moisturizer',
                'description' => 'Hydrates without heaviness.',
                'price' => 410,
                'stock' => 60,
                'image' => 'images/skin/gel-moisturizer.png',
                'rating' => 4.8,
                'reviews' => 84,
            ],

            // ================= Sensitive Skin =================

            [
                'category_id' => 1,
                'skin_type_id' => 4,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Soothing Cleanser',
                'description' => 'Gentle daily cleanser.',
                'price' => 350,
                'stock' => 55,
                'image' => 'images/skin/soothing-cleanser.png',
                'rating' => 5,
                'reviews' => 142,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 4,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Cica Cream',
                'description' => 'Calms irritated skin.',
                'price' => 510,
                'stock' => 48,
                'image' => 'images/skin/cica-cream.png',
                'rating' => 4.9,
                'reviews' => 130,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 4,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Aloe Gel',
                'description' => 'Instant soothing hydration.',
                'price' => 270,
                'stock' => 80,
                'image' => 'images/skin/aloe-gel.png',
                'rating' => 4.8,
                'reviews' => 103,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 4,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Barrier Repair Cream',
                'description' => 'Strengthens skin barrier.',
                'price' => 540,
                'stock' => 35,
                'image' => 'images/skin/barrier-repair.png',
                'rating' => 5,
                'reviews' => 95,
            ],

            // ================= Normal Skin =================

            [
                'category_id' => 1,
                'skin_type_id' => 5,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Daily Face Wash',
                'description' => 'Fresh daily cleanser.',
                'price' => 310,
                'stock' => 60,
                'image' => 'images/skin/daily-face-wash.png',
                'rating' => 4.7,
                'reviews' => 75,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 5,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Daily Moisturizer Plus',
                'description' => 'Maintains healthy skin.',
                'price' => 420,
                'stock' => 55,
                'image' => 'images/skin/daily-moisturizer-plus.png',
                'rating' => 4.8,
                'reviews' => 88,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 5,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'SPF 50 Sunscreen',
                'description' => 'Daily UV protection.',
                'price' => 390,
                'stock' => 70,
                'image' => 'images/skin/spf50.png',
                'rating' => 5,
                'reviews' => 140,
            ],

            [
                'category_id' => 1,
                'skin_type_id' => 5,
                'hair_type_id' => null,
                'body_section_id' => null,
                'name' => 'Brightening Serum',
                'description' => 'Healthy radiant glow.',
                'price' => 470,
                'stock' => 50,
                'image' => 'images/skin/brightening-serum.png',
                'rating' => 4.9,
                'reviews' => 118,
            ],

        ]);
    }
}
