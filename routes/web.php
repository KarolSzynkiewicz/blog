<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransportOrderController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/orders', [TransportOrderController::class, 'index']);
//Route::resource('transport_orders', 'TransportOrderController');
