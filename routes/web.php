<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DasboardCommentsController;
use App\Http\Controllers\DashboardAllCategories;
use App\Http\Controllers\DashboardAllPostController;
use App\Http\Controllers\DashboardCommentsController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GuestAllPostsController;



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
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login.index');
});




Route::get('/register', [RegisterController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts', function () {
    return view('dashboard.posts.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
    ->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])
    ->middleware('auth');




Route::resource('dashboard/posts', DashboardPostController::class)
    ->middleware('auth');





Route::get('dashboard/categories', [AdminCategoryController::class, 'index'])->middleware('auth');
Route::resource('dashboard/categories', AdminCategoryController::class)
    ->except('show')
    ->middleware('admin');

Route::get('/dashboard/allcategories', function () {
    return view('dashboard.allcategories.index');
})->middleware('auth');
Route::resource('dashboard/allcategories', DashboardAllCategories::class)
->middleware('auth');

Route::get('/dashboard/allposts', function () {
    return view('dashboard.allposts.index');
})->middleware('auth');
Route::resource('dashboard/allposts', DashboardAllPostController::class)
    ->middleware('auth');



