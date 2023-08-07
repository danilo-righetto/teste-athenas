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
        $category = [];

        $category[] = ['code' => 1, 'name' => 'Admin'];
        $category[] = ['code' => 2, 'name' => 'Gerente'];
        $category[] = ['code' => 3, 'name' => 'Normal'];

        DB::table('category')->insert($category);
    }
}
