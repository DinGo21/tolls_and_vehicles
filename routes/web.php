<?php

use App\Http\Controllers\TollController;
use Illuminate\Support\Facades\Route;

Route::get('/tolls', [TollController::class, "index"])->name("tolls");
