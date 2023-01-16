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
    Route::get('index', 'SiteController@index'); //首頁
    Route::get('gallery', 'SiteController@gallery');
    Route::get('blog', 'SiteController@blog');
    Route::get('blog/{blog}', 'SiteController@blog_single');
    Route::get('contact', 'SiteController@contact'); //聯絡表單
    Route::get('articles', 'SiteController@articles'); //文章集
    //註冊會員->jestream/register取代 視圖路徑(views/auth/register.blade.php)
    //Route::get('sign', 'SiteController@sign'); //註冊會員
    //登入會員->jetstream取代 視圖路徑(views/auth/login.blade.php)
    //Route::get('login', 'SiteController@login');
    //會員頁面->jetstream/user/profile取代 視圖路徑(views/navigation-menu.blade.php)
    //Route::get('member', 'SiteController@member');
    Route::get('password', 'SiteController@password'); //變更密碼
    Route::get('modify', 'SiteController@modify'); // 修改會員資料
    Route::get('about', 'SiteController@about');
    Route::get('/newproducts', 'SiteController@about');
});

Route::get('/feedback', function () {
    return view('feedback');
});