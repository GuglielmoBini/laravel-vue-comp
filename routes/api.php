<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VideogameController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// All api route projects
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// List videogames
Route::get('/videogames', [VideogameController::class, 'index']);

// Route to api show videogames
Route::get('/videogames/{videogame}', [VideogameController::class, 'show']);
