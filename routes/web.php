<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('admin/home', [PostController::class, 'homeindex'])->name('admin.home')->middleware('isAdmin');


Route::get('/', function () {
    return view('home');
});
Route::get('/main', [PostController::class, 'mainindex']);
Route::get('/follow', [PostController::class, 'followindex']);








// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
// });


Route::get('/dataweb', function () {
    return view('dataweb');
});

Route::get('/work', function () {
    return view('work');
});
Route::get('/workpass', function () {
    return view('workpass');
});

Route::get('Login/login', function () {
    return view('Login/login');
});

Route::get('Login/register', function () {
    return view('Login/register');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
