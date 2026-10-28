<?php

namespace App\Http\Controllers;

use App\Models\Body_section;
use App\Models\Product;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    // public function index()
    // {
    //     $sections = Body_section::all();

    //     return view('body.index', compact('sections'));
    // }

    // // show product (Bath or Body Care)
    // public function show(int $id)
    // {
    //     $section = Body_section::findOrFail($id);

    //     $products = Product::where('body_section_id', $id)->get();

    //     return view('body.products', compact('section', 'products'));
    // }
     public function index()
    {
        $products = Product::where('category_id', 3)->paginate(8);

        return view('body.index', compact('products'));
    }
}
