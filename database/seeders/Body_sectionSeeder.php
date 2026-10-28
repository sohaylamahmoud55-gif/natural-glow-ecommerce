<?php

namespace Database\Seeders;

use App\Models\Body_section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Body_sectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Body_section::insert([

            ['name' => 'Bath'],

            ['name' => 'Body Care'],

        ]);
    }
}
