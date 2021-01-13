<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create(['type' => 'reptile']);
        Category::create(['type' => 'amphibian']);
        Category::create(['type' => 'supply']);
    }
}
