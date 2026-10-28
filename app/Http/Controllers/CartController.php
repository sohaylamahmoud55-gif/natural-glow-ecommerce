<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    private function getCartCount()
    {
        $cart = Cart::where('user_id', Auth::id())->first();

        return $cart ? $cart->items()->count() : 0;
    }

    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())->with('items.product')->first();
        $total = 0;

        if ($cart) {
            foreach ($cart->items as $item) {
                $total += $item->product->price * $item->quantity;
            }
        }
        return view('cart.index', compact('cart', 'total'));
    }



    public function add(Product $product)
    {
        $cart = Cart::firstOrCreate([
            'user_id' => Auth::id()
        ]);

        $cartItem = CartItem::where('cart_id', $cart->id)
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity');
            $cartItem->refresh();
        } else {
            $cartItem = CartItem::create([
                'cart_id' => $cart->id,
                'product_id' => $product->id,
                'quantity' => 1
            ]);
        }

        if (request()->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Product added successfully.',
                'quantity' => $cartItem->quantity,
                'cart_count' => $this->getCartCount()
            ]);
        }

        return back()->with('success', 'Product added successfully.');
    }

    public function increase($id)
    {
        $item = CartItem::findOrFail($id);
        $item->increment('quantity');
        $item->refresh();

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'quantity' => $item->quantity,
                'item_id' => $item->id
            ]);
        }

        return back();
    }

    public function decrease($id)
    {
        $item = CartItem::findOrFail($id);

        if ($item->quantity > 1) {
            $item->decrement('quantity');
            $item->refresh();

            if (request()->ajax()) {
                return response()->json([
                    'success' => true,
                    'quantity' => $item->quantity,
                    'item_id' => $item->id
                ]);
            }

            return back();
        }

        $item->delete();

        if (request()->ajax()) {
            return response()->json([
                'success' => true,
                'deleted' => true,
                'item_id' => (int) $id
            ]);
        }

        return back();
    }



    public function remove($id)
    {
        $item = CartItem::findOrFail($id);

        // Ensure the item belongs to the authenticated user's cart
        abort_unless(
            $item->cart->user_id === Auth::id(),
            403
        );

        $item->delete();

        if (request()->expectsJson()) {
            return response()->json([
                'message' => 'Product removed successfully.',
                'cart_count' => $this->getCartCount()
            ]);
        }

        return back();
    }
}
