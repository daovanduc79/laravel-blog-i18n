<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['middleware'=>'locale'],function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('change-language/{language}', 'LanguageController@changeLanguage')->name('users.change-language');

    Route::prefix('posts')->group(function () {
        Route::get('/', 'PostController@index')->name('posts.list');
        Route::get('/create', 'PostController@create')->name('posts.create');
        Route::post('/create', 'PostController@store')->name('posts.store');
    });
});

