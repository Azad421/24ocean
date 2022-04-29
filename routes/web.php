<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [HomeController::class, 'product'])->name('products');
Route::get('/blog', [HomeController::class, 'blog'])->name('blogs');
Route::post('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sent', [HomeController::class, 'sent'])->name('sent');
Route::get('/verify/{verify_code}', [RegisterController::class, 'verify']);
Route::post('/add-to-cart', [CartController::class, 'addCart'])->name('add.to.cart');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class,'index'])->name('dashboard');
    Route::get('/login', [LoginController::class,'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class,'login']);
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
    Route::resource('/category', CategoryController::class);
    Route::resource('/subcategory', SubCategoryController::class);
    Route::resource('/product', ProductController::class);
    Route::get('/product/status/{id}', [ProductController::class, 'updateStatus'])->name('product.status');
    Route::get('/category/status/{id}', [CategoryController::class, 'updateStatus'])->name('category.status');
    Route::get('/subcategory/status/{id}', [SubCategoryController::class, 'updateStatus'])->name('subcategory.status');
    Route::get('setting', [AdminController::class, 'setting'])->name('setting');
    Route::put('email', [AdminController::class, 'changeEmail'])->name('changeEmail');
    Route::put('password', [AdminController::class, 'changePassword'])->name('changePassword');
    Route::get('email/verify/{token}/{email}', [AdminController::class, 'emailVerify'])->name('email.verify');
    Route::get('users', [AdminController::class, 'users'])->name('users');
    Route::get('user/approve/{user}', [AdminController::class, 'userApprove'])->name('user.approve');
    Route::get('user/reject/{user}', [AdminController::class, 'userReject'])->name('user.reject');
    Route::get('user/{user}', [AdminController::class, 'user'])->name('user.profile');
    Route::get('order/', [OrderController::class, 'index'])->name('order.index');
    Route::get('order/{order}', [OrderController::class, 'details'])->name('order.show');
    Route::post('product/favorites', [ProductController::class, 'favorites'])->name('product.favorites');
    Route::post('product/arrival', [ProductController::class, 'arrival'])->name('product.arrival');
});

Auth::routes();


