<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
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
Route::resource('posts', PostController::class);



Route::get('/main', [PostController::class, 'mainindex']);
Route::get('/follow', [PostController::class, 'followindex']);



Route::get('/profile', [UserController::class, 'profile']);
Route::post('/profile', [UserController::class, 'update_avatar']);


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('isAdmin');



Route::get('/sidelinelist', [PostController::class, 'sidelinelist']);
Route::get('/underlist', [PostController::class, 'underlist']);
Route::get('/undersidelinedetail', [PostController::class, 'undersidelinedetail']);

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/wallet', function () {
    return view('wallet');
});
Route::get('/addunder', function () {
    return view('posts.addunder');
});
Route::get('/addunderdetail', function () {
    return view('posts.addunderdetail');
});
Route::get('/undersidelinelist', function () {
    return view('undersidelinelist');
});
Route::get('/personalinformation', function () {
    return view('personalinformation');
});
Route::get('/underdatail', function () {
    return view('under-datail');
});
// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/work', function () {
    return view('work');
});
Route::get('Login/login', function () {
    return view('Login/login');
});

Route::get('Login/register', function () {
    return view('Login/register');
});



