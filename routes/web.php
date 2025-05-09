<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// User Routes
Route::get('/', fn() => view('user.index', ['products' => Product::all()]));

Route::get('/menu', function () {
    $tags = Tag::with('products')->get();
    return view('user.menu', ['tags' => $tags]);
});

Route::get('/menu/{product}', [ProductController::class, 'show']);
Route::get('/login', fn() => view('auth.login'));
Route::get('/register', fn() => view('auth.register'));
Route::get('/feedback', fn() => view('user.feedback'));
Route::get('/checkout', fn() => view('user.checkout'));

// Admin-related Routes
Route::get('admin/login', [AdminController::class, 'create'])->name('login');
Route::post('admin/login', [AdminController::class, 'store']);
Route::post('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin',[AdminController::class, 'index'])->middleware('auth:admin');
Route::get('/admin/users', [AdminController::class, 'users']);
Route::resource('admin/products', ProductController::class);
