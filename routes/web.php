<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/',[TestController::class,'index']);
Route::post('/thanks',[TestController::class,'thanks']);