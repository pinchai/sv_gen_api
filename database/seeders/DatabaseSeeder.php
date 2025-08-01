<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Product::insert([
            [
                'name' => 'Coca-Cola',
                'price' => 0.5,
                'qty' => 100,
                'imageUrl' => 'https://souriredessaveurs.com/2977-large_default/coca-cola-metal-box-33-cl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pepsi',
                'price' => 0.5,
                'qty' => 120,
                'imageUrl' => 'https://www.pepsi.com/en-us/uploads/images/can-pepsi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sprite',
                'price' => 0.6,
                'qty' => 80,
                'imageUrl' => 'https://www.sprite.com/images/sprite-can.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fanta',
                'price' => 0.55,
                'qty' => 90,
                'imageUrl' => 'https://www.fanta.com/sites/g/files/seuoyk226/files/2021-03/fanta-orange-hero.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
