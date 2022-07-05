<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Role;
use App\Http\Controllers\Admin\CategoryController;
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




//Route::get('/',function (){
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::middleware('role:admin')->prefix('admin_panel')->middleware('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
    Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('/post', App\Http\Controllers\Admin\PostController::class);
    Route::resource('/tag', App\Http\Controllers\Admin\TagController::class);
    Route::resource('/user', App\Http\Controllers\Admin\UserController::class);
});
Route::group(array('namespace'=>'Admin','prefix'=>'admin','middleware'=>'admin'),function (){
    Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);
});

    Route::get('/', function () {
        return view('blog.index', ['route' => 'index']);
    })->name('index');

    Route::get('about', function () {
        return view('blog.about', ['route' => 'about']);
    })->name('about');

    Route::get('blog', function () {
        return view('blog.blog', ['route' => 'blog']);
    })->name('blog');

    Route::get('coming-soon', function () {
        return view('blog.coming-soon', ['route' => 'coming-soon']);
    })->name('coming-soon');
    Route::get('blog-single', function () {
        return view('blog.index', ['route' => 'blog-single']);
    })->name('blog-single');

    Route::get('contact', function () {
        return view('blog.contact', ['route' => 'contact']);
    })->name('contact');

    Route::get('hatolik', function () {
        return view('blog.hatolik', ['route' => 'hatolik']);
    })->name('hatolik');

    Auth::routes(['verify'=>false]);



