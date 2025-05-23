<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('user.account.my_profile', compact('user'));
    }

    public function payment(User $user)
    {
        return view('user.account.payment_methods', compact('user'));
    }

    public function orders(User $user)
    {
        $orders = Order::where('user_id', $user->id)->get();
        return view('user.account.my_orders', compact('user', 'orders'));
    }

    public function update(User $user, Request $request)
    {
        $user->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email'=> request('email'),
            'address' => request('address'),
            'mobile_number' => request('mobile_number'),
            'date_of_birth' => request('date_of_birth'),
        ]);

        return redirect()->route('user.account', ['user' => $user->id]);
    }
}

