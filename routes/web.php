<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Itemcontroller;
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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/register', [Authcontroller::class, 'registrationForm']);
Route::post('/register', [Authcontroller::class, 'register']);

Route::get('/login', [Authcontroller::class, 'loginForm'])->name('login');
Route::post('/login', [Authcontroller::class, 'login']);

Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');

Route::resource('items' , Itemcontroller::class);

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');
