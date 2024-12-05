<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(){
        $products = Product::paginate(9);
        $categories = Category::all();
        return view('shop-grid', compact('categories', 'products'));
    }
}
