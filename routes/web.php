<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {

    $result = DB::table('_category')->get();

    return view('welcome' ,['_category' => $result]);
})->name('welcome');
// $result = DB::table('category')->where('name' , 'Lemons')->get();
// 
// dd($result);
// return view('welcome' ,['category' => $result]);




Route::get('/shop', function () {

    $result = DB::table('_category')->get();

    return view('shop', ['_category' => $result]);
})->name('shop');


Route::get('/Products', function () {
    return view('Products');
})->name('Products');


Route::get('/news', function () {
    return view('news');
})->name('news');


Route::get('/contact', function () {

    return view('contact');
})->name('contact');


Route::get('/check', function () {
    return view('checkout');
})->name('checkout');


Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/latest', function () {
    return view('latestnews');
})->name('latest');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








