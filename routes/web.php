<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'indexHome']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/services', [\App\Http\Controllers\HomeController::class, 'services']);
Route::get('/blogs', [\App\Http\Controllers\HomeController::class, 'blogs']);
Route::post('/sendcontact', [\App\Http\Controllers\HomeController::class, 'sendcontact']);


Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('view.login');
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.user');

Route::get('register', [\App\Http\Controllers\Auth\LoginController::class, 'viewSignUp'])->name('user.register.form');
Route::post('register', [\App\Http\Controllers\Auth\LoginController::class, 'storeUser'])->name('user.store');


Route::group(['middleware' => ['auth']], function () {
    Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('signout');
    Route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard']);
    //Student Controller
    Route::get('list-blog', [\App\Http\Controllers\Admin\BlogController::class, 'getBlog'])->name('list.blog');
    Route::get('add-blog', [\App\Http\Controllers\Admin\BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('add-blog', [\App\Http\Controllers\Admin\BlogController::class, 'saveBlog'])->name('save-blog');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}/update', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
    // Staff
});

Route::group(['middleware' => ['auth', 'isSuperAdmin']], function () {
    // Client Controller
});
