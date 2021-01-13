<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $reptileProduct = Category::where('type', 'reptile')->first();
        $amphibianProduct = Category::where('type', 'amphibian')->first();
        $supplyProduct = Category::where('type', 'supply')->first();

        $reptile = Post::create([
            'types_id' => '1',
            'name' => 'Boa Constrictor Slang',
            'description' => 'Mooie boa van 2 jaar oud',
            'image' => 'image',
            'price' => 1900,
        ]);
        $amphibian = Post::create([
            'types_id' => '2',
            'name' => 'Koraalteenboomkikker',
            'description' => 'Prachtige exotische koraalteenboomkikker!',
            'image' => 'image',
            'price' => 40,
        ]);
        $supply = Post::create([
            'types_id' => '3',
            'name' => 'Boomstam 25x10cm',
            'description' => 'Sterke boomstam voor kleine verblijven, gemaakt van echt hout',
            'image' => 'image',
            'price' => 15,
        ]);

        $reptile->types()->attach($reptileProduct);
        $amphibian->types()->attach($amphibianProduct);
        $supply->types()->attach($supplyProduct);

    }
}
