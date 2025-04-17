<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'user.index');

Route::get('/menu', function () {
    return view('user.menu');
});


// Admin Related Routes
Route::view('/admin','admin.index');
Route::resource('admin/products', ProductController::class);
