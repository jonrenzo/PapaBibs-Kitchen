<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        $products = Product::all();
        $users = User::all();
        $orders = Order::all();
        return view('admin.index', ['products' => $products, 'users' => $users, 'orders' => $orders]);
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function create() {
        return view('admin.log-in');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }

        return back()->withErrors([
            'username' => 'Invalid credentials.',
        ])->onlyInput('username');
    }


    public function destroy(Request $request){
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
