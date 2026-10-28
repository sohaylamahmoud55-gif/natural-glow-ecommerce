<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HairController;
use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\SkinCareController;
use App\Http\Controllers\ProductController;

// ====================== Website ======================

// Home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Skin Care
Route::get('/skin-care', [SkinCareController::class, 'index'])->name('skin.care');

// skin type
Route::get('/skin-care/type/{id}', [SkinCareController::class, 'skinType'])->name('skin.type');

// skin test
Route::get('/skin-test', [SkinCareController::class, 'test'])->name('skin.test');
Route::post('/skin-test', [SkinCareController::class, 'calculateTest'])->name('skin.test.result');

// Hair Care
Route::get('/hair-care', [HairController::class, 'index'])->name('hair.care');
Route::get('/hair-care/type/{id}', [HairController::class, 'hairType'])->name('hair.type');

// Body & Bath
Route::get('/body', [BodyController::class, 'index'])->name('body');

// Perfume
Route::get('/perfume', [PerfumeController::class, 'index'])->name('perfume');

//About Us
Route::get('/about-us', [AboutController::class, 'index'])->name('about');

// Cart
Route::view('/cart', 'cart')->name('cart');
// search
Route::get('/search', [ProductController::class, 'search'])->name('search');


// ====================== Dashboard ======================

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// ====================== Profile ======================

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // cart
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::patch('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');
    Route::patch('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    // checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
});
Route::post('/checkout', [CheckoutController::class, 'placeOrder'])->name('checkout.place');


// ====================== Auth ======================

require __DIR__ . '/auth.php';
