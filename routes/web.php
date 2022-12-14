<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\SubcategoryController;

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




Route::get('/reg-form',[AuthController::class,'regForm'])->name('regForm');
Route::post('/reg-form-submit',[AuthController::class,'regFormSubmit'])->name('regFormSubmit');
Route::get('/login-form',[AuthController::class,'loginForm'])->name('login');
Route::post('/login-form-submit',[AuthController::class,'loginFormSubmit'])->name('loginFormSubmit');

Route::group(['middleware'=>'checkAdmin'],function(){

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');


    Route::get('/', function () {
        return view('backend.pages.analytics');
    })->name('admin');
    Route::get('/dashboard-admin',[DashboardController::class,'dashboard'])->name('dashboard');
    Route::get('/analytics-admin',[DashboardController::class,'anaytics'])->name('analytics');
    Route::get('/category/list',[CategoryController::class,'list'])->name('categoryList');
    Route::get('/create-category',[CategoryController::class,'createForm'])->name('category.form');
    Route::post('/create-category-submit',[CategoryController::class,'create'])->name('category.create');
    Route::get('/update-category/{id}',[CategoryController::class,'updateForm'])->name('category.update');
    Route::put('/update-category-submit/{id}',[CategoryController::class,'update'])->name('category.do.update');

    Route::get('/subcategory-list',[SubcategoryController::class,'list'])->name('subcategory.list');
    Route::get('/subcategory-create',[SubcategoryController::class,'create'])->name('subcategory.create');
    Route::post('/subcategory-post',[SubcategoryController::class,'subCategoryCreate'])->name('subcategory.post');
    // subcategory delete
    Route::get('/subcategory-delete/{id}',[SubcategoryController::class,'delete'])->name('subcategory.delete');
    Route::get('/subcategory-update/{id}',[SubcategoryController::class,'updateForm'])->name('subcategory.updateForm');
    Route::put('/subcategory-update-submit/{id}',[SubcategoryController::class,'update'])->name('subcategory.update');












    Route::get('/product-list',[ProductController::class,'list'])->name('product.list');
    Route::get('/product-create-form',[ProductController::class,'createForm'])->name('product.create.form');
    Route::post('/product-create-submit',[ProductController::class,'createSubmit'])->name('product.create.submit');
    Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
    Route::get('/product/edit-form/{id}',[ProductController::class,'editForm'])->name('product.edit.form');
    Route::put('/product/edit-form-submit/{id}',[ProductController::class,'editFormSubmit'])->name('product.edit.form.submit');

});