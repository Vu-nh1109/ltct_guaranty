<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/petition/{order_id}', [ApiController::class, 'show']);
Route::post('/petition/{order_id}/create', [ApiController::class,'store'])->name('petition.store');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
