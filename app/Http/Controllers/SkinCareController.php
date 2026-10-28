<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Skin_type;
use Illuminate\Http\Request;

class SkinCareController extends Controller
{
    // for all skin product
    public function index()
    {
        $products = Product::where('category_id', 1)
            ->paginate(8);

        $skinTypes = Skin_type::all();

        return view('products.skin-care', compact('products', 'skinTypes'));
    }
    // for specific type of skin
    public function skinType($id)
    {
        $skinType = Skin_type::findOrFail($id);

        $products = Product::where('category_id', 1)
            ->where('skin_type_id', $id)
            ->paginate(8);

        return view('products.skin-type-products', compact(
            'skinType',
            'products'
        ));
    }
    // skin test page
    public function test()
    {
        return view('products.skin-test');
    }
    public function calculateTest(Request $request)
    {
        $dry = 0;
        $oily = 0;
        $combination = 0;
        $normal = 0;
        $sensitive = 0;

        foreach (['q1', 'q2', 'q3', 'q4', 'q5', 'q6'] as $question) {

            switch ($request->$question) {

                case 'dry':
                    $dry++;
                    break;

                case 'oily':
                    $oily++;
                    break;

                case 'combination':
                    $combination++;
                    break;

                case 'normal':
                    $normal++;
                    break;

                case 'sensitive':
                    $sensitive++;
                    break;
            }
        }

        $scores = [
            1 => $dry,          // Dry Skin
            2 => $oily,         // Oily Skin
            3 => $combination,  // Combination Skin
            4 => $sensitive,    // Sensitive Skin
            5 => $normal,       // Normal Skin
        ];

        arsort($scores);

        $skinTypeId = array_key_first($scores);

        return view(
            'products.skin-result',compact('skinTypeId')
        );
    }
}
