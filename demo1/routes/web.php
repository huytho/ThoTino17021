<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartOrderController;

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

Route::group(['prefix' => ''], function(){
    Route::get('/',[Homecontroller::class,'index'])->name('index') ;
    Route::get('/about',[Homecontroller::class,'about'])->name('about') ;
    Route::get('/blog',[Homecontroller::class,'blog'])->name('blog') ;
    Route::get('/contact',[Homecontroller::class,'contact'])->name('contact') ;
    Route::post('/contact',[HomeController::class , 'postcontact'])->name('contact');
    Route::get('/product',[Homecontroller::class,'product'])->name('product') ;
Route::get('/product-detail/{product}',[Homecontroller::class,'detail'])->name('detail') ;
Route::get('/category',[Homecontroller::class,'category'])->name('category') ;
Route::get('/category2',[Homecontroller::class,'category2'])->name('category2') ;
Route::get('/category3',[Homecontroller::class,'category3'])->name('category3') ;
Route::get('/category4',[Homecontroller::class,'category4'])->name('category4') ;
Route::get('/category5',[Homecontroller::class,'category5'])->name('category5') ;

Route::get('/login', [Homecontroller::class, 'login'])->name('login');
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');

Route::post('/login', [Homecontroller::class, 'check_login']);
Route::get('/register', [Homecontroller::class, 'register'])->name('register');
Route::post('/register',[HomeController::class, 'postregister']);






    
    });

  
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);



Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'post_register'])->name('admin.post_register');

Route::group(['prefix' => 'admin','middleware'=> 'auth'], function () {  
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout');
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
});


route::group(['prefix'=> 'cart'],function(){
    Route::get('/', [CartController::class, 'view'])->name('cart.view');
    Route::get('/add/{product}', [CartController::class, 'add'])->name('cart.add')->middleware('cus');
    Route::get('/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/update/{product}/{quantity?}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/clear', [CartController::class, 'clear'])->name('cart.clear');
    
});

route::group(['prefix'=> 'order'],function(){
    Route::get('/checkout', [CartOrderController::class, 'checkout'])->name('order.checkout');
    Route::post('/checkout', [CartOrderController::class, 'post_checkout']);
    Route::get('/my-order', [CartController::class, 'myorder'])->name('order.myorder');
    Route::get('/detail/{order}', [CartController::class, 'detail'])->name('order.detail');
    Route::get('/verify/{token}',[CartOrderController::class, 'verify'])->name('order.verify');
  
    
});
