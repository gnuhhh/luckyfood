<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Burger'],
            ['category_name' => 'Gà rán'],
            ['category_name' => 'Thức Uống'],
            ['category_name' => 'Tráng miệng'],
            ['category_name' => 'Phần ăn trẻ em'],
            ['category_name' => 'Món ăn nhẹ'],
        ];
        DB::table('categories')->insert($categories);
    }
}
