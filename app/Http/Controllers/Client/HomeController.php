<?php

namespace App\Http\Controllers\Client;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('pages.index', compact('products'));
    }
}
