<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(User $user)
    {
        // pass the auth user to the view
        $user = auth()->user();
        return view('user.checkout.index', compact('user'));
    }
}
