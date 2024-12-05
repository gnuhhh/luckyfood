<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materials = [
            ['material_name' => 'Thịt gà', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Thịt bò', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Rau xà lách', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Phô mai', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Xúc xích', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Khoai tây', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Cà chua', 'material_quantity' => 50, 'material_status' => 0],
            ['material_name' => 'Cá ngừ', 'material_quantity' => 50, 'material_status' => 0],
        ];
        DB::table('materials')->insert($materials);
    }
}
