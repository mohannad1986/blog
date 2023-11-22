<?php

use Illuminate\Support\Facades\Route;
use  Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Models\Category;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('blog.visitor.mohamek-not-live.welcom');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/mohamek_dashboard', function () {
    return view('admin.empty');
})->name('mohamek_dashboard');


// Route::get('/home', function () {
//         return view('home');
//     });

    // Route::get('/blog', function () {
    //     return view('blog.thepage2');
    // })->name('blog');

    Route::get('/mohamek', function () {
        return view('blogmoh.index');
    })->name('dashboard');






Auth::routes();
// صفحة هوم لارفل بعد تسجيل الدخول
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');

// Route::resource('/category',[App\Http\Controllers\CategoryController::class]);
// هذا الروات يؤدي بك الى التهلكة
// انه يؤدي الى صفحة اخبار البلوك بالثيم الاصفر ولكن غير مرتبين الاخبارر
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');


Route::get('/mohamek_dashboard', function () {
    return view('admin.empty');
})->name('mohamek_dashboard');

Route::resource('category', CategoryController::class);
Route::resource('post', PostController::class);
Route::resource('tag',TagController::class);
Route::resource('post',PostController::class);
Route::post('/postupdate',[App\Http\Controllers\PostController::class,'update'])->name('postupdate');
Route::get('/post.delet/{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('post.delet');



// Route::get('/bloglive', [App\Http\Controllers\BlogController::class, 'index3'])->name('bloglive');
Route::get('/welcomtomohamek', function () {
    return view('blog.visitor.mohamek-not-live.welcom');
})->name('dashboard');

Route::get('/mohamekglive', [App\Http\Controllers\BlogController::class, 'mohameklive'])->name('mohamekglive');
Route::get('/mohamek_not_live', [App\Http\Controllers\BlogController::class, 'mohamek_not_live'])->name('mohamek_not_live');
Route::get('/mohamek_postcategory/{id}', [App\Http\Controllers\BlogController::class,'mohamek_postcategory'])->name('mohamek_postcategory');
Route::post('/mohamek_searchword', [App\Http\Controllers\BlogController::class,'searchword'])->name('mohamek_searchword');


Route::get('/getnews/{id}', [App\Http\Controllers\BlogController::class,'getnews'])->name('getnews');
Route::post('/comment', [App\Http\Controllers\CommentsController::class,'store'])->name('comment');




// +++++++++++++++++++++++
Route::group(['middleware' => ['auth']], function() {

});

Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::resource('products', ProductController::class);

// +++++++++++++++++++

















