<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(User $user)
    {
        if (!auth()->check()) {
            return redirect()->route('user.login');
        } else {
            $user = auth()->user();
        }

        return view('user.checkout.index', compact('user'));
    }
}
