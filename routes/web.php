<?php
// backend
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\UserController;

// website
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\LoginController;
use App\Http\Controllers\website\ProductController as websiteProductController;
use App\Http\Controllers\website\CategoryController as websiteCategoryController;
use App\Http\Controllers\Website\OrderController;

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
Route::get('/',[HomeController::class,'home'])->name('website.home');
// pages
Route::get('/about',[AboutController::class,'about'])->name('layouts.about');
// login/registration
Route::get('/user/login',[LoginController::class,'login'])->name('user.login');
Route::post('/user/login/post',[LoginController::class,'loginpost'])->name('user.login.post');
Route::get('/user/registration',[LoginController::class,'registration'])->name('user.registration');
Route::post('/user/registration/post',[LoginController::class,'registrationpost'])->name('user.registration.post');
Route::get('/user/logout',[LoginController::class,'logout'])->name('user.logout');

// Route::get('/', function () {
//    return view('backend.master');
// })->name('dashboard');



// backend 
Route::group(['prefix'=>'admin'],function (){
    Route::get('/login',[UserController::class,'login'])->name('admin.login');
    Route::post('/dologin',[UserController::class,'dologin'])->name('admin.dologin');

    Route::group(['middleware'=>['auth','admin']],function (){
        Route::get('/', function () {
            return view('backend.dashboard');
        })->name('backend.dashboard');


        Route::get('/dashboard',[UserController::class,'dashboard'])->name('backend.dashboard');
        Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

        // product list, create, add
        Route::get('/productlists',[ProductController::class,'lists'])-> name ('product.product-lists');
        Route::get('/create-product',[ProductController::class,'create'])-> name('product.product-create');
        Route::post('/product/add',[ProductController::class, 'add'])-> name ('product.add');

        // CURD product backend
        Route::get('product/view/{product_id}',[ProductController::class,'productDetails'])->name('admin.product.details');
        Route::get('product/delete/{product_id}',[ProductController::class,'productDelete'])->name('admin.product.delete');
        Route::get('product/edit/{product_id}',[ProductController::class,'productEdit'])->name('admin.product.edit');
        Route::put('product/update/{product_id}',[ProductController::class,'productUpdate'])->name('admin.product.update');

        // CURD Category backend

        Route::get('category/delete/{category_id}',[CategoryController::class,'categoryDelete'])->name('admin.category.delete');
        Route::get('category/edit/{category_id}',[CategoryController::class,'CategoryEdit'])->name('admin.category.edit');
        Route::put('Category/update/{Category_id}',[CategoryController::class,'CategoryUpdate'])->name('admin.Category.update');



        
        // product category
        Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
        Route::post('/category/add',[CategoryController::class,'add'])->name('category.add');
        Route::get('/categorylists',[CategoryController::class,'lists'])->name('category.lists');

        Route::get('/user/list',[UserController::class,'userlist'])->name('user.lists');




    });
});

// CURD frontend
Route::get('frontproduct/view/{product_id}',[websiteProductController::class,'frontproductDetails'])->name('website.product.details');


// Frontend view
Route::get('/products',[websiteProductController::class,'productlists'])->name('website.productlists');
Route::get('/category/lists',[websiteCategoryController::class,'frontcategory'])->name('website.categorylists');
Route::get('/contact',[AboutController::class,'contact'])->name('website.contact');





// cart
Route::group(['middleware'=>'cart'],function(){
Route::get('/add-to-cart/{id}',[OrderController::class,'addToCart'])->name('cart.add');
Route::get('/get-cart',[OrderController::class,'getCart'])->name('cart.get');
Route::get('/clea-cart',[OrderController::class,'clearCart'])->name('cart.clear');
Route::get('/store/add-to-cart',[OrderController::class,'storeAddToCart'])->name('store.cart');
Route::get('/store/cart',[OrderController::class,'storeCart'])->name('storedb.cart');




Route::post('/order/place',[OrderController::class,'placeorder'])->name('order.place');

Route::get('/order/input',[OrderController::class,'orderinput'])->name('place.input');



});
