<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Auth;

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
    return view('pages.homepage');
});


//admin
Route::prefix('admin')->middleware('auth')->group(function(){

});
Route::resource('properties', PropertyController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/properties', 'pages.properties');
Route::view('/csellerpage', 'pages.csellerpage');


Route::get('/properties', function () {
    return view('pages.properties');
})->name('properties.index');
