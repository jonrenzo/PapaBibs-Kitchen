<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function clearCart(Request $request)
    {
        session()->forget('cart');
        if ($request->ajax()) {
            return response()->json([
                'cart_count' => 0,
                'success' => view('cart')->render(),
            ]);
        }
        return redirect()->back()->with('success', 'Cart cleared successfully!');
    }

    public function addToCart(Request $request, Product $product)
    {
        $cart = session('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image_location,
                'quantity' => 1,
            ];
        }

        session()->put('cart', $cart);

        // AJAX request
        if ($request->ajax()) {
            return response()->json([
                'message' => 'Product added to cart successfully!',
                'cart_count' => collect($cart)->sum('quantity'),
                'cart_html' => view('cart')->render(),
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function cartUpdate(Request $request, Product $product)
    {
        $cart = session('cart');

        if ($request->quantity == 0) {
            unset($cart[$request->product_id]);
        } else {
            $cart[$request->product_id]['quantity'] = $request->quantity;
        }

        session()->put('cart', $cart);

        $view = view('cart')->render();

        return response()->json([
            'success' => $view,
            'cart_count' => count($cart)
        ]);

    }


}

