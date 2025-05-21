<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Socialite\ProviderCallbackController;
use App\Http\Controllers\Socialite\ProviderRedirectController;
use App\Http\Controllers\UserController;
use App\Models\Order;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// User Routes
Route::get('/', fn() => view('user.index', ['products' => Product::all()]));

Route::get('/menu', function () {
    $tags = Tag::with('products')->get();
    return view('user.menu', ['tags' => $tags]);
});

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/success/{order}', function ($orderId) {
    $order = Order::findOrFail($orderId);
    return view('user.checkout.success', compact('order'));
})->name('orders.success');

Route::view('/rate', 'user.checkout.rate')->name('checkout.rate');

Route::get('/menu/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store'])->name('user.login');
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store'])->name('user.register');
Route::get('/feedback', fn() => view('user.feedback'));
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::get('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('product.addToCart');

//clear cart route
Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('cart.clear');

Route::group(['middleware' => ['web']], function () {
    Route::get('/auth/{provider}/redirect', ProviderRedirectController::class)->name('auth.redirect');
    Route::get('/auth/{provider}/callback', ProviderCallbackController::class)->name('auth.callback');
});

Route::post('/cart-update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::get('/{user}/account',[UserController::class, 'index'])->name('user.account');
Route::get('/{user}/account/payment',[UserController::class, 'payment'])->name('user.account.payment');

Route::get('/{user}/account/edit', function(User $user) {
    return view('user.account.profile_edit', compact('user'));
});

Route::get('/{user}/account/orders', [UserController::class, 'orders'])->name('user.account.orders');

Route::patch('/{user}/account/edit', [UserController::class, 'update'])->name('user.account.edit');
Route::get('/search-products', [ProductController::class, 'search'])->name('search.products');

// Admin-related Routes
Route::get('admin/login', [AdminController::class, 'create'])->name('login');
Route::post('admin/login', [AdminController::class, 'store']);
Route::post('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/admin',[AdminController::class, 'index'])->middleware('auth:admin');
Route::get('/admin/users', [AdminController::class, 'users']);
Route::resource('admin/products', ProductController::class);
Route::get('admin/orders', [OrderController::class, 'index'])->name('orders.index');
Route::get('admin/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit.form');

Route::patch('admin/orders/{order}/edit', [OrderController::class, 'update'])   ;
