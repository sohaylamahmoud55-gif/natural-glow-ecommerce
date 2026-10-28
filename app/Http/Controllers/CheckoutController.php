<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())
            ->with('items.product')
            ->first();

        $total = 0;

        if ($cart) {
            foreach ($cart->items as $item) {
                $total += $item->product->price * $item->quantity;
            }
        }

        return view('checkout.index', compact('cart', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|digits:11',
            'city' => 'required|string|max:100',
            'address' => 'required|string|min:10|max:500',
            'payment_method' => 'required|in:Cash On Delivery,Visa',
        ]);

        $cart = Cart::where('user_id', Auth::id())
            ->with('items.product')
            ->first();

        if (!$cart || $cart->items->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Your cart is empty.',
            ], 422);
        }

        DB::transaction(function () use ($cart, $validated) {
            $total = 0;

            foreach ($cart->items as $item) {
                $total += $item->product->price * $item->quantity;
            }

            $order = Order::create([
                'user_id' => Auth::id(),
                'total_price' => $total,
                'status' => 'Pending',
                'phone' => $validated['phone'],
                'city' => $validated['city'],
                'address' => $validated['address'],
                'payment_method' => $validated['payment_method'],
            ]);

            foreach ($cart->items as $item) {
                $order->items()->create([
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->price,
                ]);
            }

            // Empty the cart only after saving the order and its items.
            $cart->items()->delete();
        });

        session()->flash(
            'success',
            'Your order has been placed successfully!'
        );

        return response()->json([
            'success' => true,
            'redirect' => url('/home'),
        ]);
    }
}
