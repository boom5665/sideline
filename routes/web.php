<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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
Route::resource('posts', PostController::class);


Route::get('/main', [PostController::class, 'mainindex']);
Route::get('/follow', [PostController::class, 'followindex']);





Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('isAdmin');



// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });


Route::get('/dataweb', function () {
    return view('dataweb');
});

Route::get('Login/login', function () {
    return view('Login/login');
});

Route::get('Login/register', function () {
    return view('Login/register');
});

