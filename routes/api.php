<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/',function () {
//    return view('post.index');
//});

Route::prefix('posts')->group(function () {
    Route::get("/",[PostController::class,"index"])->name("posts.index");
    Route::post("/",[PostController::class,"store"])->name("posts.store");
    Route::get("/{id}",[PostController::class,"show"])->name("posts.show");
    Route::post("/{id}",[PostController::class,"update"])->name("posts.update");
    Route::get("/{id}/delete",[PostController::class,"destroy"])->name("posts.destroy");
});

Route::prefix('users')->group(function () {
    Route::get("/",[UserController::class,"index"])->name("users.index");
    Route::post("/",[UserController::class,"store"])->name("users.store");
    Route::get("/{id}",[UserController::class,"show"])->name("users.show");
    Route::post("/{id}",[UserController::class,"update"])->name("users.update");
    Route::get("/{id}/delete",[UserController::class,"destroy"])->name("users.destroy");
});

