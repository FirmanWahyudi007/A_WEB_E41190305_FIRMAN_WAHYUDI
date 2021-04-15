<?php

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

Route::get('/', function () {
    return view('backend.dashboard');
});
Route::group(['namespace' => 'Frontend'] ,function(){
  Route::resource('home','HomeController');
});
Auth::routes();
Route::group(['namespace' => 'Backend'] ,function(){
  Route::resource('dashboard','DashboardController');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
