<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/sent', [HomeController::class, 'sent'])->name('sent');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/refund-policy', [HomeController::class, 'refund'])->name('refund.policy');
Route::get('/terms.and.conditions', [HomeController::class, 'termsCondition'])->name('terms.and.conditions');
Route::get('/shipping-policy', [HomeController::class, 'shipping'])->name('shipping.policy');
Route::get('/return-policy', [HomeController::class, 'returnPolicy'])->name('return.policy');
Route::get('/disclaimer', [HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/verify/{verify_code}', [RegisterController::class, 'verify']);
Route::post('/add-to-cart', [CartController::class, 'addCart'])->name('add.to.cart');
Route::post('/cart-update-min/{id?}', [CartController::class, 'updateCart'])->name('cart.update.min');
Route::post('/cart-update-plus/{id?}', [CartController::class, 'updateCartQuantity'])->name('cart.update.plus');
Route::get('/remove-cart/{id?}', [CartController::class, 'removeCart'])->name('remove.cart');

//User Routes
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('/user/orders', [UserController::class, 'orders'])->name('user.orders');
Route::get('/user/order/{id}', [UserController::class, 'order'])->name('user.order.show');
Route::get('/user/order/{id}/cancel', [UserController::class, 'orderCancel'])->name('user.order.cancel');
Route::put('/user/update-profile-image/{id}', [UserController::class, 'updatePImage'])->name('user.update.image');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout')->middleware('auth:user');
Route::post('/order', [UserController::class, 'createOrders'])->name('create.order');
Route::get('/payment/{order_id}', [PaymentController::class, 'index'])->name('payment');
Route::get('/payment/verify', [PaymentController::class, 'index'])->name('payment.verify');
Route::get('/razor-pay/{order_id}', [PaymentController::class, 'withRazorPay'])->name('payment.razor.pay');
Route::post('/country/state', [HomeController::class, 'state'])->name('country.state');
Route::post('/state/zip', [HomeController::class, 'zipCode'])->name('state.zip');

//Admin Routes
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
    Route::get('order/{order}/{status}', [OrderController::class, 'status'])->name('order.status');
    Route::post('product/favorites', [ProductController::class, 'favorites'])->name('product.favorites');
    Route::post('product/arrival', [ProductController::class, 'arrival'])->name('product.arrival');
    Route::resource('country', CountryController::class);
    Route::resource('state', StateController::class);
});

Auth::routes();


