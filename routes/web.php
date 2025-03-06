<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;

Route::get('/',[LinkController::class,'index']);
Route::post('/',[LinkController::class,'requestLink']);
Route::get('/{link:sort_link}',[LinkController::class,'see']);
Route::get('/{link:sort_link}/view',[LinkController::class,'view']);