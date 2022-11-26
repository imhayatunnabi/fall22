<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\CategoryController;
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

Route::get('/', function () {
    return view('backend.pages.analytics');
})->name('admin');
Route::get('/dashboard-admin',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/analytics-admin',[DashboardController::class,'anaytics'])->name('analytics');
Route::get('/category/list',[CategoryController::class,'list'])->name('categoryList');
Route::get('/create-category',[CategoryController::class,'createForm'])->name('category.form');
Route::post('/create-category-submit',[CategoryController::class,'create'])->name('category.create');
Route::get('/update-category',[CategoryController::class,'updateForm'])->name('category.update');

Route::get('/subcategory-list',[SubcategoryController::class,'list'])->name('subcategory.list');
Route::get('/subcategory-create',[SubcategoryController::class,'create'])->name('subcategory.create');
Route::post('/subcategory-post',[SubcategoryController::class,'subCategoryCreate'])->name('subcategory.post');
