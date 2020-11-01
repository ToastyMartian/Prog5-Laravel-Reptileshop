<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends HomeController
{
    public function allAmphibianProducts()
    {
        $products = Product::all();
        return view('amphibians.amphibianproducts', ['products'=>$products]);
    }
    public function allReptileProducts()
    {
        $products = Product::all();
        return view('reptiles.reptileproducts', ['products'=>$products]);
    }
    public function allSupplyProducts()
    {
        $products = Product::all();
        return view('supplies.supplyproducts', ['products'=>$products]);
    }

    public function newPost(Request $request)
    {
        $products = Product::all();
        return view('posts.newpost');
    }

    public function productDetails($id)
    {
        $products = Product::find($id);
        return view('products.show')->with('products', $products);
    }

    public function search()
    {
        $search = $_GET['query'];
        $products = Product::where('name','LIKE','%'.$search.'%')->get();

        return view('posts.search', compact('products'));
    }

}
