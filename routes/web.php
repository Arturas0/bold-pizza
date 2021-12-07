<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LayoutCatController;
use App\Http\Controllers\LayoutProductController;
use App\Http\Controllers\PizzaSizeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name('front_index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Categories
Route::prefix('categories')->name('cat_')->group(function () {
    Route::get('/create', [CatController::class, 'create'])->name('create');
    Route::post('/store', [CatController::class, 'store'])->name('store');
    Route::get('/', [CatController::class, 'index'])->name('index');
    Route::get('/edit/{cat}', [CatController::class, 'edit'])->name('edit');
    Route::put('/update/{cat}', [CatController::class, 'update'])->name('update');
    Route::delete('/delete/{cat}', [CatController::class, 'destroy'])->name('delete');
});

//Tags
Route::prefix('tags')->name('tag_')->group(function () {
    Route::get('/create', [TagController::class, 'create'])->name('create');
    Route::post('/store', [TagController::class, 'store'])->name('store');
    Route::get('/', [TagController::class, 'index'])->name('index');
    Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('edit');
    Route::put('/update/{tag}', [TagController::class, 'update'])->name('update');
    Route::delete('/delete/{tag}', [TagController::class, 'destroy'])->name('delete');
});

//Pizza_sizes
Route::prefix('pizza-sizes')->name('pizza_size_')->group(function () {
    Route::get('/create', [PizzaSizeController::class, 'create'])->name('create');
    Route::post('/store', [PizzaSizeController::class, 'store'])->name('store');
    Route::get('/', [PizzaSizeController::class, 'index'])->name('index');
    Route::get('/edit/{pizzaSize}', [PizzaSizeController::class, 'edit'])->name('edit');
    Route::put('/update/{pizzaSize}', [PizzaSizeController::class, 'update'])->name('update');
    Route::delete('/delete/{pizzaSize}', [PizzaSizeController::class, 'destroy'])->name('delete');
});

//Products
Route::prefix('products')->name('product_')->group(function () {
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store')->middleware('phconfig:product');
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('update')->middleware('phconfig:product');
    Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('delete')->middleware('phconfig:product');
});

//Extras
Route::prefix('extras')->name('extra_')->group(function () {
    Route::get('/create', [ExtraController::class, 'create'])->name('create');
    Route::post('/store', [ExtraController::class, 'store'])->name('store')->middleware('phconfig:extra');
    Route::get('/', [ExtraController::class, 'index'])->name('index');
    Route::get('/edit/{extra}', [ExtraController::class, 'edit'])->name('edit');
    Route::put('/update/{extra}', [ExtraController::class, 'update'])->name('update')->middleware('phconfig:extra');
    Route::delete('/delete/{extra}', [ExtraController::class, 'destroy'])->name('delete')->middleware('phconfig:extra');
});

//Cat layouts
Route::prefix('categories-layout')->name('layoutCat_')->group(function () {
    Route::get('/create', [LayoutCatController::class, 'create'])->name('create');
    Route::post('/store', [LayoutCatController::class, 'store'])->name('store');
    Route::get('/', [LayoutCatController::class, 'index'])->name('index');
    Route::post('/up/{layoutCat}', [LayoutCatController::class, 'up'])->name('up');
    Route::post('/down/{layoutCat}', [LayoutCatController::class, 'down'])->name('down');
    Route::delete('/delete/{layoutCat}', [LayoutCatController::class, 'destroy'])->name('delete');
});

//Product layouts
Route::prefix('products-layout')->name('layoutProduct_')->group(function () {
    Route::get('/show-cat/{cat?}',           [LayoutProductController::class, 'index'])->name('index');
    Route::get('/create',                    [LayoutProductController::class, 'create'])->name('create');
    Route::post('/store',                    [LayoutProductController::class, 'store'])->name('store');
    Route::post('/up/{layoutProduct}/{cat}',       [LayoutProductController::class, 'up'])->name('up');
    Route::post('/down/{layoutProduct}/{cat}',     [LayoutProductController::class, 'down'])->name('down');
    Route::delete('/delete/{layoutProduct}', [LayoutProductController::class, 'destroy'])->name('delete');
});

//Cart
Route::prefix('cart')->name('cart_')->group(function () {
    Route::get('view', [CartController::class, 'view'])->name('view');
    Route::post('add/{product}', [CartController::class, 'add'])->name('add');
    Route::post('remove/{product}', [CartController::class, 'remove'])->name('remove');
    Route::post('update', [CartController::class, 'update'])->name('update');
});

Route::prefix('checkout')->name('checkout_')->group(function () {
    Route::get('phone-login', [CheckoutController::class, 'phoneLogin'])->name('phoneLogin');
    Route::post('phone-login', [CheckoutController::class, 'doPhoneLogin'])->name('doPhoneLogin');
    Route::get('create-client/{client}', [CheckoutController::class, 'createClient'])->name('createClient');
    Route::post('store-client/{client}', [CheckoutController::class, 'storeClient'])->name('storeClient');
    Route::get('checkout/{client}', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::post('order/{client}', [CheckoutController::class, 'order'])->name('order');
});
