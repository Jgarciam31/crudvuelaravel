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
Route::controller(\App\Http\Controllers\customController::class)->group(function () {
    Route::get('/customer/{id}', 'readOne');
    Route::get('/customers', 'read');
    Route::post('/customer', 'create');
    Route::delete('/customer/{id}', 'delete');
    Route::patch('/customer/{id}', 'edit');
});
