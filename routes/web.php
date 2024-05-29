<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route for Customers' Page

Route::get('/', function () {
    return view('customer.landingpage');
});

Route::get('/keranjang', function () {
    return view('customer.cart');
});

Route::get('/katalog', function () {
    return view('customer.catalog');
});

Route::get('/pesanan-saya', function () {
    return view('customer.myorder');
});

Route::get('/konfirmasi-pesanan', function () {
    return view('customer.checkout');
});

Route::get('/daftar', function () {
    return view('customer.register');
});

Route::get('/masuk', function () {
    return view('customer.login');
});

Route::get('/profil', function () {
    return view('customer.profile');
});

Route::get('/test', function () {
    return view('customer.test');
});

// Route for Admins' Page

// Route for Shipping Services' Page