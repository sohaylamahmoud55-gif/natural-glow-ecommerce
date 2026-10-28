<?php

namespace App\Http\Controllers;

use App\Models\Hair_type;
use App\Models\Product;
use Illuminate\Http\Request;

class HairController extends Controller
{
    // all hair product
    public function index()
    {
        $products = Product::where('category_id', 2)
            ->paginate(8);

        $hairTypes = Hair_type::all();

        return view('products.hair-care', compact(
            'products',
            'hairTypes'
        ));
    }
    // for specific type of hair
    public function hairType($id)
    {
        $products = Product::where('category_id', 2)
            ->where('hair_type_id', $id)
            ->paginate(8);

        $hairType = Hair_type::findOrFail($id);

        return view('products.hair-type-products', compact(
            'products',
            'hairType'
        ));
    }
}
