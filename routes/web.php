<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// User Routes
Route::get('/', fn() => view('user.index', ['products' => Product::all()]));
Route::get('/menu', fn() => view('user.menu', ['products' => Product::all()]));
Route::get('/menu/{product}', [ProductController::class, 'show']);
Route::get('/login', fn() => view('user.login', ['products' => Product::all()]));
Route::get('/register', fn() => view('user.register', ['products' => Product::all()]));
Route::get('/feedback', fn() => view('user.feedback'));
Route::get('/checkout', fn() => view('user.checkout'));

// Admin-related Routes
Route::get('admin/login', [AdminController::class, 'create'])->name('login');
Route::post('admin/login', [AdminController::class, 'store']);

Route::post('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

Route::get('/admin', function () {
    return view('admin.index', [
        'product' => Product::all(),
        'users' => User::all()
    ]);
})->middleware('auth:admin');

Route::view('/admin/users', 'admin.users.index', ['users' => User::all()]);
Route::resource('admin/products', ProductController::class);
