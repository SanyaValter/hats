<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CatalogController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[MainController::class,'main'])->name('main');
Route::get('/Contacts',[MainController::class,'Contacts'])->name('Contacts');
Route::get('/search',[MainController::class,'search'])->name('search');

Route::get('/catalog',[CatalogController::class,'catalog'])->name('catalog');

Route::get('/catalog/details/{product_id}', [CatalogController::class, 'details'])->name('details');




