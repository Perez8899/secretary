<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\AvailableController;


//Route::get('/', function () {
// return view('welcome');
//});

//
Route::get('/', [CategoryController::class, 'index'])->name('categories.index');


Route::get('/categories/{id}/options', [CategoryController::class, 'showOptions'])->name('categories.options');
Route::get('/options/{id}/suboptions', [OptionController::class, 'showSuboptions'])->name('categories.suboptions');

Route::get('/available', 'App\Http\Controllers\AvailableController@showAvailable');