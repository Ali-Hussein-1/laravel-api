<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get("/api2/{num?}", [TestController::class, 'api2']);

Route::get("/api4/{num?}", [TestController::class, 'api4']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


