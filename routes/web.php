<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

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

Route::controller(CrudController::class)->group(function () {
    Route::get('/', 'Index')->name('home');
    Route::post('/store', 'Store')->name('store.info');
    Route::get('/infos', 'Display')->name('display.info');
    Route::get('/info/edit/{id}', 'Edit')->name('edit.info');
    Route::post('/info/update','Update')->name('update.info');
    Route::post('/info/delete', 'Delete')->name('delete.info');
});