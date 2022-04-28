<?php

use App\Http\Controllers\BetController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\NationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UssdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::resource('api/games',GameController::class);

Route::resource('leagues',LeagueController::class);
Route::resource('nations',NationController::class);
Route::resource('products',ProductController::class);
Route::resource('cart',CartController::class);
Route::resource('purchase', PurchaseController::class);
Route::resource('bets',BetController::class);
Route::resource('ussd', UssdController::class);
Route::resource('phones',PhoneController::class);
