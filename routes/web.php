<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('/user/{id}', [UserController::class, 'index'])->name('user');


Route::name('login')->prefix('login')->group(function () {
    // return view('user.login');
    Route::get('/', [LoginController::class, 'create']);

    Route::post('/', [LoginController::class, 'authenticate']);

});
Route::name('register')->prefix('register')->group(function () {

    Route::get('/', [RegistrationController::class, 'create']);

    Route::post('/', [RegistrationController::class, 'store']);

});

Route::name('post.')->prefix('post')->group(function () {

    Route::get('/add', [PostController::class, 'create'])->name('add');
    Route::post('/add', [PostController::class, 'store']);

    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/{id}/edit', [PostController::class, 'update']);


    Route::delete('/{id}/delete', [PostController::class, 'delete'])->name('delete');

    Route::get('/{id}', [PostController::class, 'show'])->name('show');

});



Route::name('logout')->get('/logout', [UserController::class, 'logout']);
