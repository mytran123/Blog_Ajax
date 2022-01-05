<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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

Route::get('/',function () {
    return redirect()->route("auth.showFormLogin");
});

Route::get('/users', function () {
    return view('user.list');
})->name("oke");

//Route::get('/users',[UserController::class,"index"])->name("users.list");

Route::get('/posts', function () {
    return view('post.index');
});

Route::get('/login',[AuthController::class,"showFormLogin"])->name("auth.showFormLogin");
Route::post('/login',[AuthController::class,"login"])->name("auth.login");
Route::get('/logout',[AuthController::class,"logout"])->name("auth.logout");
