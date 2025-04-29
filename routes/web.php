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

// Admin-related Routes
Route::get('admin/login', [AdminController::class, 'create']);
Route::post('admin/login', [AdminController::class, 'store']);
Route::get('/admin', fn() => view('admin.index', ['product' => Product::all(), 'users' => User::all()]));
Route::view('/admin/users', 'admin.users.index', ['users' => User::all()]);
Route::resource('admin/products', ProductController::class);
