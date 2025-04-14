<?php

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\File;

Route::get('/', function () {
    return view('user.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/products', function () {
    $products = Product::all();
    return view('admin.products.index', ['products' => $products]);
});


Route::get('/admin/products/create', function () {
    return view('admin.products.create');
});

Route::post('/admin/products', function (Request $request) {
    $request->validate([
        'name'=>['required'],
        'description'=>['required'],
        'price'=>['required'],
        'image_location'=>['required'],
    ]);

    $imagePath = null;
    if ($request->hasFile('image_location')) {
        $image = $request->file('image_location');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/products'), $imageName);
        $imagePath = 'images/products/' . $imageName;
    }

    Product::create([
        'name' => request('name'),
        'price' => request('price'),
        'description' => request('description'),
        'image_location' => $imagePath,
    ]);

    return redirect('/admin/products');
});
