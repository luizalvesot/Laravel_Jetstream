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
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('index');
})->name('index');

/*Route::get('/', function () {
    return view('index');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/index', function () {
    return view('index');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('example')->group(function () {

        Route::get('collapse', function () {
            return view('examples.collapse');
        })->name('example.collapse');

        Route::get('forms', function () {
            return view('examples.forms');
        })->name('example.forms');
    });
});
