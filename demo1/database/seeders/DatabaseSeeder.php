<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        \App\Models\Category::factory()->create([
            'name' => 'Rượu Vang Pháp '
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Rượu Vang Ý '
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Rượu Vang Tây Ban Nha '
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Trắng Verdejo (Pháp)',
            'price' => '699000',
            'sale_price' => '599000',
            'image' => '1.jpg',         
            'description' => '950ml',
            'category_id' => '1',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Đỏ Tempranillo  (Pháp) ',
            'price' => '899000',
            'sale_price' => '799000',
            'image' => '2.jpg',         
            'description' => '950ml',
            'category_id' => '1',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Hồng Mia  (Pháp)  ',
            'price' => '699000',
            'sale_price' => '599000',
            'image' => '3.jpg',         
            'description' => '1250ml',
            'category_id' => '1',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu vang hồng Rosé  (Ý)',
            'price' => '899000',
            'sale_price' => '699000',
            'image' => '4.jpg',         
            'description' => '950ml',
            'category_id' => '2',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Đỏ Reserva (Ý)',
            'price' => '699000',
            'sale_price' => '599000',
            'image' => '5.jpg',         
            'description' => '950ml',
            'category_id' => '2',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Trắng Wine (Ý) ',
            'price' => '899000',
            'sale_price' => '699000',
            'image' => '6.jpg',         
            'description' => '950ml',
            'category_id' => '2',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Trắng vatco (TBN) ',
            'price' => '679000',
            'sale_price' => '589000',
            'image' => '7.jpg',         
            'description' => '950ml',
            'category_id' => '3',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Sủi Nevada   (TBN)  ',
            'price' => '999000',
            'sale_price' => '969000',
            'image' => '8.jpg',         
            'description' => '950ml',
            'category_id' => '3',         
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Rượu Vang Đỏ Rioja 2023  (TBN)',
            'price' => '799000',
            'sale_price' => '679000',
            'image' => '9.jpg',         
            'description' => '950ml',
            'category_id' => '3',         
        ]);
       
      
    }
}