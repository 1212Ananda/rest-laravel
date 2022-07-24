<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

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

Route::get('/buku', [BookController::class,'index']);
Route::post('/buku/store', [BookController::class, 'store']);
Route::get('/buku/show/{id}', [BookController::class, 'show']);
Route::put('/buku/update/{id}', [BookController::class, 'update']);
Route::delete('/buku/destroy/{id}', [BookController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
