<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([

            CategorySeeder::class,
            Skin_typeSeeder::class,
            Hair_typeSeeder::class,
            Body_sectionSeeder::class,


            SkinProductSeeder::class,
            HairProductSeeder::class,
            BodyProductSeeder::class,
            PerfumeProductSeeder::class,


        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
