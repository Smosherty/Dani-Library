<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryController;


Route::get('/', function () {
    return view('layout');
});


Route::resource('libraries', LibraryController::class);