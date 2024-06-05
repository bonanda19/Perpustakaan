<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JilidController;
use App\Models\Index;
use App\Http\Controllers\Controller;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UploadController;
use App\Http\Middleware\Authenticate;
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

Route::get('/', [BookController::class,'indexhome']);
Route::get('index/{index:id}', [BookController::class,'show']);


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::resource('/createbuku', DashboardController::class);
Route::delete('destroy/{id}', [DashboardController::class, 'destroy'] )->name('destroy');
Route::get('edit/{id}', [DashboardController::class, 'edit'])->name('edit');
Route::post('update/{id}', [DashboardController::class, 'update'])->name('update');
Route::put('update/{id}', [DashboardController::class, 'update'])->name('update');
route::get('createbuku', [DashboardController::class,'create'])->name('createbuku');

Route::get('/dashboardjilid', [JilidController::class, 'dashboard'])->name('dashboardjilid');
Route::resource('/createjilid', JilidController::class);
Route::delete('destroyjilid/{id}', [JilidController::class, 'destroy'] )->name('destroyjilid');
Route::get('editjilid/{id}', [JilidController::class, 'edit'])->name('editjilid');
Route::post('updatejilid/{id}', [JilidController::class, 'update'])->name('updatejilid');
Route::put('updatejilid/{id}', [JilidController::class, 'update'])->name('updatejilid');
route::get('createjilid', [JilidController::class,'create'])->name('createjilid');
Route::get('jilid/{id}', [BookController::class, 'showByJilid'])->name('JilidBuku');


Route::get('/loginadmin', [AdminController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmin', [AdminController::class, 'authenticate']);
Route::get('/logout', [AdminController::class, 'logout']);




