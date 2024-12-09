<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Insert categories
         DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Bánh Burger'],
            ['id' => 2, 'name' => 'Gà rán'],
            ['id' => 3, 'name' => 'Thức uống'],
            ['id' => 4, 'name' => 'Tráng miệng'],
            ['id' => 5, 'name' => 'Phần ăn trẻ em'],
            ['id' => 6, 'name' => 'Món ăn nhẹ']
        ]);

        // Insert brands
        DB::table('brands')->insert([
            ['id' => 1, 'name' => 'Win'],
            ['id' => 2, 'name' => 'Vissan'],
            ['id' => 3, 'name' => 'Chinsu'],
            ['id' => 4, 'name' => 'Meatdeli'],
        ]);

        $productImage_link = 'img/product/';
        $arr_image = [];
        for ($i = 1; $i <= 12; $i++) {
            array_push($arr_image, $productImage_link . 'product-' . $i . '.jpg');
        }

        for ($i = 1; $i <= 100; $i++) {
            $category = Category::find(mt_rand(1, 6));
            $brand = Brand::find(mt_rand(1, 4));
            
            // Insert product
            DB::table('products')->insert([
                'id' => $i,
                'name' => $category->name . ' ' . $brand->name,
                'description' => 'Sản phẩm '.$category->name . ' ' . $brand->name.' chất lượng cao 100%',
                'longdescription' => 'This is a long description of product ',
                'price' => (mt_rand(10, 99))*1000,
                'sale_percent' => Arr::random([0.8,0.9,0.7,1]),
                'quantity' => Arr::random([10,20,30,100,50,60]),
                'uploaded' => 1,
                'brand_id' => $brand->id
            ]);

            // Insert product image
            DB::table('product_images')->insert([
                'product_id' => $i,
                'url' => Arr::random($arr_image),
                'image_type' => 0
            ]);

            // Insert product category
            DB::table('product_categories')->insert([
                'product_id' => $i,
                'category_id' => $category->id
            ]);
        }
    }
}
