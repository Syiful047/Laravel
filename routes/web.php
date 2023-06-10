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
    return view('welcome');
});

Route::get('/Pekan8', function () {
    return view('Pekan8');
});

Route::get('/pekan9', function () {
    return view('pekan9');
});

Route::get('/toko', function () {
    return view('toko');
});

use App\Http\Controllers\TokoController;


Route::prefix('toko')->group(function(){
    Route::get('', 
    [TokoController::class,'index']);

    Route::get('/detail', 
    [TokoController::class,'detail']);

    Route::get('/about', 
    [TokoController::class,'about']);

    Route::get('/admin', 
    [TokoController::class,'admin'])->name('produk.admin');

    Route::get('/create', 
    [TokoController::class,'create'])->name('produk.create');

    Route::post('/', 
    [TokoController::class,'store'])->name('produk.store');

    Route::get('/customers', 
    [TokoController::class,'customers']);

});



