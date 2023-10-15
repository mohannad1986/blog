<?php

use Illuminate\Support\Facades\Route;
use  Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');


// Route::get('/home', function () {
//         return view('home');
//     });

    Route::get('/blog', function () {
        return view('blog.thepage2');
    })->name('blog');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');

// Route::resource('/category',[App\Http\Controllers\CategoryController::class]);

Route::resource('category', CategoryController::class);
Route::resource('post', PostController::class);

Route::resource('tag',TagController::class);

Route::resource('post',PostController::class);
Route::post('/postupdate',[App\Http\Controllers\PostController::class,'update'])->name('postupdate');
Route::get('/post.delet/{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('post.delet');













