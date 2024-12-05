<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['category_id' => '1', 'product_name' => 'Burger Bò phô mai đặc biệt', 'product_sold' => 0, 'product_price' => 56.000, 'product_image' => 'burger1.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger 2 lớp bò, phô mai', 'product_sold' => 0, 'product_price' => 66.000, 'product_image' => 'burger2.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Bò miếng lớn phô mai', 'product_sold' => 0, 'product_price' => 79.000, 'product_image' => 'burger3.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Big mac', 'product_sold' => 0, 'product_price' => 76.000, 'product_image' => 'burger4.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Bò hoàng gia đặc biệt', 'product_sold' => 0, 'product_price' => 89.000, 'product_image' => 'burger5.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Gà phô-mai đặc biệt', 'product_sold' => 0, 'product_price' => 69.000, 'product_image' => 'burger6.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Gà Nhỏ Mayo', 'product_sold' => 0, 'product_price' => 36.000, 'product_image' => 'burger7.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Phi lê Cá phô mai', 'product_sold' => 0, 'product_price' => 56.000, 'product_image' => 'burger8.png', 'product_status' => 0],
            ['category_id' => '1', 'product_name' => 'Burger Xúc Xích - 337 Kcal', 'product_sold' => 0, 'product_price' => 36.000, 'product_image' => 'burger9.png', 'product_status' => 0],

            ['category_id' => '2', 'product_name' => '20 miếng Gà Viên Vui Vẻ', 'product_sold' => 0, 'product_price' => 121.000, 'product_image' => 'ck1.png', 'product_status' => 0],
            ['category_id' => '2', 'product_name' => '6 Miếng Cánh Gà McWings™', 'product_sold' => 0, 'product_price' => 125.000, 'product_image' => 'ck2.png', 'product_status' => 0],
            ['category_id' => '2', 'product_name' => '3 miếng gà rán', 'product_sold' => 0, 'product_price' => 103.000, 'product_image' => 'ck3.png', 'product_status' => 0],
            ['category_id' => '2', 'product_name' => 'Phần ăn 2 miếng gà rán', 'product_sold' => 0, 'product_price' => 92.000, 'product_image' => 'ck4.png', 'product_status' => 0],

            ['category_id' => '3', 'product_name' => 'Sữa tươi', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'dr1.png', 'product_status' => 0],
            ['category_id' => '3', 'product_name' => 'Fanta', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'dr2.webp', 'product_status' => 0],
            ['category_id' => '3', 'product_name' => 'Nước suối', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'dr3.png', 'product_status' => 0],
            ['category_id' => '3', 'product_name' => 'Coca-Cola', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'dr4.png', 'product_status' => 0],

            ['category_id' => '4', 'product_name' => 'Kem ốc quế', 'product_sold' => 0, 'product_price' => 10.000, 'product_image' => 'des1.webp', 'product_status' => 0],
            ['category_id' => '4', 'product_name' => 'Kem Socola', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'des2.webp', 'product_status' => 0],
            ['category_id' => '4', 'product_name' => 'Kem Dâu', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'des3.webp', 'product_status' => 0],
            ['category_id' => '4', 'product_name' => 'Kem Xay Bánh Oreo', 'product_sold' => 0, 'product_price' => 22.000, 'product_image' => 'des4.webp', 'product_status' => 0],

            ['category_id' => '5', 'product_name' => 'Khoai Tây Chiên (size nhỏ)', 'product_sold' => 0, 'product_price' => 19.000, 'product_image' => 'ch1.webp', 'product_status' => 0],

            ['category_id' => '6', 'product_name' => 'Khoai Tây Chiên (size vừa)', 'product_sold' => 0, 'product_price' => 29.000, 'product_image' => 'f1.webp', 'product_status' => 0],
            ['category_id' => '6', 'product_name' => 'Khoai Tây Chiên (size lớn)', 'product_sold' => 0, 'product_price' => 39.000, 'product_image' => 'f2.webp', 'product_status' => 0],
            ['category_id' => '6', 'product_name' => 'Salad lắc', 'product_sold' => 0, 'product_price' => 35.000, 'product_image' => 'f3.webp', 'product_status' => 0],
        ];
        DB::table('products')->insert($products);
    }
}
