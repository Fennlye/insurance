<?php
<<<<<<< HEAD

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarAPI;
use App\Http\Controllers\Api\OwnerAPI;

Route::apiResource('cars', CarAPI::class);
Route::apiResource('owners', OwnerAPI::class);
Route::get('owners/info', [OwnerAPI::class, 'info']);
=======
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::apiResource('owners', OwnerController::class);
Route::apiResource('cars', CarController::class);
>>>>>>> cdb67f6749125ff764385af63bb5b9dc2dd6848d
