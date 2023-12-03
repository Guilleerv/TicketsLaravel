<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\EventController;
use App\Http\Controllers\PurchaseController;

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);

Route::post('/purchase', [PurchaseController::class, 'store']);
Route::get('/orders/{id_cliente}', [PurchaseController::class, 'show']);   

Route::get('/', function () {
    return view('welcome');
});
