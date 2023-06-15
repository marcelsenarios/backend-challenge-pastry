<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([], function () {
   /**
    * CLIENTES
    */
    Route::prefix('clientes')->group(function () {
        Route::controller(ClientesController::class)->group(function () {
            Route::name('clientes.')->group(function () {
                Route::get('', 'index')->name('index');
                Route::get('/{id}', 'show')->name('show');
                Route::delete('/{id}', 'destroy')->name('destroy');
                Route::post('', 'store')->name('store');
                Route::put('/{id}', 'update')->name('update');
                Route::patch('/{id}', 'update')->name('update');
            });
        });
    });
});
