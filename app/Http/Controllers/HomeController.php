<?php

namespace App\Http\Controllers;

use App\Models\Category;
// use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::with([
            'products' => function ($query) {
                $query->take(4);
            }
        ])->get();

        return view('home', compact('categories'));
    }
}
