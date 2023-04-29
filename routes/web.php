<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
Route::get('/', function () {
return view('welcome');
});
*/

Route::get('/categories', 'App\Http\Controllers\CategoryController@index');

//Route::get('/', 'CategoryController@index');
Route::get('/category/{id}', 'CategoryController@showOptions');
Route::get('/categories/{id}/options', [CategoryController::class, 'showOptions'])->name('categories.options'); //categories.options
Route::get('/options/{id}/suboptions', [OptionController::class, 'showSuboptions'])->name('option.suboptions');