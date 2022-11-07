<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\TestController;
use App\Http\Controllers\backend\CategoryController;

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
Route::get('/test-admin',[TestController::class,'test'])->name('test');
Route::get('/category/list',[CategoryController::class,'list'])->name('categoryList');
