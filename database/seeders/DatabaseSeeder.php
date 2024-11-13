<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'name' => 'dadadad',
            'email' => 'test1@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '123123123'
        ]);
    }
}
