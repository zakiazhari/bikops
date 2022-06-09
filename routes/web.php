<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('homepage');
});


// Middleware for logged in user
Route::group(['middleware' => ['role:user']], function () {
    Route::get('/profil', [UserController::class, 'profile']);

    Route::put('/profile/update/{id}', [UserController::class, 'profileUpdate']);

    Route::get('/riwayat', [UserController::class, 'riwayat']);

    Route::get('/success', [UserController::class, 'success']);
});

Route::get('/checkout', [UserController::class, 'checkout']);

// Middleware for logged in admin
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/manage', [AdminController::class, 'manage']);
    Route::post('/manage/add', [AdminController::class, 'addProduct']);
    Route::put('/manage/update/{1}', [AdminController::class, 'updateProduct']);
    Route::delete('/manage/delete/{1}', [AdminController::class, 'deleteProduct']);
});


require __DIR__ . '/auth.php';