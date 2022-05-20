<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserAdminController;

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

// Route::get('/blogs', function () {
//   return view('blog.allBlogs');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/blogs', [BlogsController::class, 'blogs'])->name('all.blogs');
// Route::get('/blogs/new', [BlogsController::class, 'newBlog'])->name('new.blog');
// Route::get('/blogs/blog', [BlogsController::class, 'blog'])->name('blog');

Route::resource('blogs', BlogController::class);

// Route::get('/users/all', [UserAdminController::class, 'index'])->middleware('is_admin');
// Route::get('/users/destroy', [UserAdminController::class, 'destroy'])->middleware('is_admin');

// Route::resource('/users/destroy', [UserAdminController::class, 'destroy'])->middleware('is_admin');