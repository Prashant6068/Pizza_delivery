<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
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
    return view('welcome');
});
Route::get('/welcome', [User::class, 'welcome']);
Route::get('/register', [User::class, 'register']);
Route::post('/save', [User::class, 'reg']);
Route::get('/login', [User::class, 'loginpage']);
Route::post('/home', [User::class, 'login']);
Route::get('/menu', [User::class, 'menu']);
Route::get('/addcart/{id}', [User::class, 'addcart']);
Route::post('/insidecart', [User::class, 'insidecart']);
Route::get('/cartdisplay', [User::class, 'cartdisplay']);
Route::get('/deletecart/{id}', [User::class, 'deletecart']);
Route::get('/checkout/{final}', [User::class, 'checkout']);
Route::post('/payment', [User::class, 'payment']);
Route::get('/success', [User::class, 'success']);
Route::get('/edit/{id}', [User::class, 'profile']);
Route::post('/update', [User::class, 'updated']);
Route::get('/logout', [User::class, 'logout']);
Route::get('/senddata',[User::class,'sendmail']);
