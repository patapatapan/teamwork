<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::namespace ('App\Http\Controllers')->group(function () {
    Route::get('index', 'SiteController@index');
    Route::get('gallery', 'SiteController@gallery');
    Route::get('blog', 'SiteController@blog');
    Route::get('blog/{blog}', 'SiteController@blog_single');
    Route::get('contact', 'SiteController@contact');
    Route::get('about', 'SiteController@about');

});