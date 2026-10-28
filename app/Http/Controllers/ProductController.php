<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
{
    $search = $request->search;

    $products = Product::where('name', 'LIKE', "%{$search}%")->orWhere('description', 'LIKE', "%{$search}%")->get();

    return view('search', compact('products', 'search'));
}
}
