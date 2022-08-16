<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LinkController::class,'index']);
Route::post('/',[LinkController::class,'requestLink']);
Route::get('/{link:sort_link}',[LinkController::class,'see']);
Route::get('/{link:sort_link}/view',[LinkController::class,'view']);


// Route::get('/result',[LinkController::class,'generateLink']);



