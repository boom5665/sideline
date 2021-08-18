<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
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

// authention
Route::post('/authention', [LoginController::class, 'authention'])->name('Login.authention');

Route::resource('posts', PostController::class);
Route::resource('auths', RegisterController::class);


//register
Route::post('saveregis', [RegisterController::class, 'saveregis'])->name('Register.saveregis');
Route::get('/register', [RegisterController::class, 'registerindex']);


Route::get('/main', [PostController::class, 'mainindex'])->name('Main.index');
Route::get('/follow', [PostController::class, 'followindex']);



Route::get('/profile', [UserController::class, 'profile']);
Route::post('/profile', [UserController::class, 'update_avatar']);


// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('isAdmin');



Route::get('/sidelinelist', [PostController::class, 'sidelinelist']);
Route::get('/underlist', [PostController::class, 'underlist']);
Route::get('/undersidelinedetail', [PostController::class, 'undersidelinedetail']);




Route::get('/login', function () {
    return view('auths.login');
});
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
Route::get('/underdetail', function () {
    return view('posts.underdetail');
});

Route::get('/level', function () {
    return view('level');
});
Route::get('/sidelineinformation', function () {
    return view('posts.sidelineinformation');
});


Route::get('/work', function () {
    return view('work');
});



