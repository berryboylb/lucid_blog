<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'login']);
Route::get('/signup', [PagesController::class, 'signUp']);
//use post when you want to store data in laravel
Route::post('/form', [\App\Http\Controllers\PagesController::class, 'form'])->name('comment');
Route::post('/newsletter', [\App\Http\Controllers\PagesController::class, 'newsLetter'])->name('newsLetter');
Route::resource('/bars', 'App\Http\Controllers\PostController');