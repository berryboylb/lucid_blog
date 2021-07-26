<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [PagesController::class, 'login'])->name('login');
// Route::get('/signup', [PagesController::class, 'signUp']);
/**
 * User Auth Routes
 */
Route::get("/", [\App\Http\Controllers\Auth\LoginController::class, "showUserLoginForm"])->name("login");
Route::post("/", [\App\Http\Controllers\Auth\LoginController::class, "submitUserLoginForm"]);
Route::get("/register", [\App\Http\Controllers\Auth\RegisterController::class, "showUserRegisterForm"])->name("register");
Route::post("/register", [\App\Http\Controllers\Auth\RegisterController::class, "submitUserRegisterForm"]);
Route::get("/logout", [\App\Http\Controllers\Auth\LoginController::class, "logout"])->name("logout");
Route::get("/profile", [\App\Http\Controllers\PagesController::class, "userProfile"])->name("profile");
//use post when you want to store data in laravel
//use either url name eg /form or {{ route('name') }} for action
Route::post('/form', [\App\Http\Controllers\PagesController::class, 'form'])->name('comment');
Route::post('/newsletter', [\App\Http\Controllers\PagesController::class, 'newsLetter'])->name('newsLetter');
Route::resource('/bars', 'App\Http\Controllers\PostController');