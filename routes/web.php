<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('home/{shout?}', [HomeController::class, 'shout'], ['shout']);
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/sayhelloworld', function () {
    return 'Hello World';
});
Route::get('/articles', [ArticleController::class, 'show'])->name('articles');
