<?php

use App\Http\Controllers\Api\TollController;
use App\Http\Controllers\Api\VehicleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("/tolls", [TollController::class, "store"])->name("apitollstore");
Route::post("/vehicles", [VehicleController::class, "store"])->name("apivehiclestore");
Route::put("/vehicles/{id}", [VehicleController::class, "attachToll"])->name("apiattachtoll");
