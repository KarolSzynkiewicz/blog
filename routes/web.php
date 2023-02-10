<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportOrderController;


Route::get('/', function () {   return view('welcome');
});

Route::resource('orders', TransportOrderController::class);
