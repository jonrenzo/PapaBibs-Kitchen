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

Route::get('/menu/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/search-products', [ProductController::class, 'search'])->name('search.products');

Route::middleware('web')->group(function () {
    // Authentication
    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store'])->name('user.login');
    Route::post('/logout', [SessionController::class, 'destroy']);
    Route::get('/register', [RegisteredUserController::class, 'create']);
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('user.register');

    // Socialite
    Route::get('/auth/{provider}/redirect', ProviderRedirectController::class)->name('auth.redirect');
    Route::get('/auth/{provider}/callback', ProviderCallbackController::class)->name('auth.callback');

    // Cart
    Route::get('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('product.addToCart');
    Route::post('/clear-cart', [CartController::class, 'clearCart'])->name('cart.clear');
    Route::post('/cart-update', [CartController::class, 'cartUpdate'])->name('cart.update');

    // Checkout & Orders
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/success/{order}', function ($orderId) {
        $order = Order::findOrFail($orderId);
        if (empty($order->tracking_token)) {
            $order->generateTrackingToken();
        }
        return view('user.checkout.success', compact('order'));
    })->name('orders.success');
    Route::view('/rate', 'user.checkout.rate')->name('checkout.rate');// Your existing order route (where the QR code is displayed)
    Route::get('/order/{id}/track', [OrderController::class, 'track'])->name('order.track');

    // Feedback
    Route::get('/feedback', fn() => view('user.feedback'));

    // User Account
    Route::prefix('{user}/account')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.account');
        Route::get('/payment', [UserController::class, 'payment'])->name('user.account.payment');
        Route::get('/edit', function(User $user) {
            return view('user.account.profile_edit', compact('user'));
        });
        Route::patch('/edit', [UserController::class, 'update'])->name('user.account.edit');
        Route::get('/orders', [UserController::class, 'orders'])->name('user.account.orders');
    });
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'create'])->name('login');
    Route::post('/login', [AdminController::class, 'store']);
    Route::post('/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::middleware('auth:admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/users', [AdminController::class, 'users']);
        Route::resource('/products', ProductController::class);
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit.form');
        Route::patch('/orders/{order}/edit', [OrderController::class, 'update']);
    });
});
