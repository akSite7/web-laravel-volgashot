<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::where('is_active', true)->latest('category_id');
        return view('pages.product', compact('products'));
    }
    
    public function category($category) {
        $category = Category::where('slug', $category)->firstOrFail();
        $products = Product::where('is_active', true)->where('category_id', $category->id)->latest('category_id');
        return view('pages.product', compact('products', 'category'));
    }

    public function show($category, $product) {
        return 'show product ' . $category . ' ' . $product;
    }
}
