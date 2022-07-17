<?php

use App\Http\Controllers\API\SearchBy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\user as us;
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

Route::get('/users', [us::class, 'index']);
Route::post('/search-nik', [SearchBy::class, 'getByNIK']);
Route::post('/search-kk', [SearchBy::class, 'getByKK']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
