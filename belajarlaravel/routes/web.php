<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ManagementUserController;
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
Route::get('/', function(){
  return view('home');
});
Route::get('user',[ManagementUserController::class, 'index'])->name('user.index');
Route::get('user/create',[ManagementUserController::class, 'create'])->name('user.create');
Route::post('user',[ManagementUserController::class, 'store'])->name('user.store');
Route::get('user/{user}',[ManagementUserController::class, 'show'])->name('user.show');
Route::put('user/{user}',[ManagementUserController::class, 'update'])->name('user.update');
Route::delete('user/{user}',[ManagementUserController::class, 'delete'])->name('user.delete');
Route::get('user/{user}/edit',[ManagementUserController::class, 'edit'])->name('user.edit');
