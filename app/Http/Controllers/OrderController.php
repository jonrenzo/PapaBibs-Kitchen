<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Status;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', compact('orders'));

    }

    public function edit(Order $order){
        return view('admin.orders.edit', ['order' => $order, 'statuses'=>Status::all()]);
    }

    public function update(Order $order, Request $request){
        $order->update([
            $order->status_id = $request->input('status'),
        ]);
        return redirect(route('orders.index', $order));
    }


    public function store(Request $request)
    {
        $request->validate([
            'courier' => 'required|string',
            'payment_method' => 'required|string',
            'card_number' => 'required_if:payment_method,credit_card',
            'card_expiry' => 'required_if:payment_method,credit_card',
            'card_cvc' => 'required_if:payment_method,credit_card',
        ]);

        $cart = session('cart', []);
        $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

        $order = Order::create([
            'user_id' => auth()->id(),
            'courier' => $request->courier,
            'payment_method' => $request->payment_method,
            'special_instruction' => $request->special_instruction,
            'card_number' => $request->card_number,
            'card_expiry' => $request->card_expiry,
            'card_cvc' => $request->card_cvc,
            'total' => collect($cart)->sum(function ($item) {
                return $item['price'] * $item['quantity'];
            }),
            'status_id' => 1,
        ]);

        foreach ($cart as $cartItem) {
            OrderItem::create([
                'order_id' => $order->id,
                'item_name' => $cartItem['name'],
                'quantity' => $cartItem['quantity'],
                'price' => $cartItem['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('orders.success', $order->id);
    }

    public function show($id)
    {
        $order = Order::with(['user', 'items', 'status'])->findOrFail($id);

        if (empty($order->tracking_token)) {
            $order->generateTrackingToken();
        }

        return view('orders.show', compact('order'));
    }

    public function track($id)
    {
        $order = Order::with(['user', 'items', 'status'])->findOrFail($id);

        return view('orders.track', compact('order'));
    }
}

