<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    //    public function index()
    // {
    //     $perfumes = Product::where('category_id', 4)->get();

    //     return view('perfume.index', compact('perfumes'));
    // }
    public function index()
    {
        $perfumes = Product::where('category_id', 4)->paginate(8);

        return view('perfume.index', compact('perfumes'));
    }
}
