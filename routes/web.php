<?php

use App\Http\Controllers\SchoolYearController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('school_years', SchoolYearController::class);
