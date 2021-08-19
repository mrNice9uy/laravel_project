<?php

use Illuminate\Support\Facades\Route;
// controllers
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', IndexController::class)->name('index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
    Route::resource('user', UserController::class);
});

Route::group(['prefix' => 'news'], function() {
    Route::get('/', [NewsController::class, 'index'])
        ->name('news');
    //Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/show/{id}', [NewsController::class, 'show'])
        ->where('id', '\d+')
        ->name('news.show');
});

