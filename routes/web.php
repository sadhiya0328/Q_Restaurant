<?php

use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [RestaurantController::class, 'loadRestaurantData'])->name('restaurants');
Route::get('/menu/{id}', [RestaurantController::class, 'menu'])->name('menu');
