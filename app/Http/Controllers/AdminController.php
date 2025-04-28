<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create() {
        return view('admin.log-in');
    }

    public function store(Request $request) {
        //validate
        $validAdmin = request()->validate([
           'username' => 'required',
           'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($validAdmin)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }else{
            return redirect('/admin/login');
        }
    }

    public function destroy() {
        Auth::logout();
        return redirect('/admin/login');
    }
}
