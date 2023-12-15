<?php

use App\Http\Controllers\FilmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'tests'], function () {
    Route::get('/', 'App\Http\Controllers\TestController@index');
});

Route::resource('films', FilmController::class);

Route::group(['prefix' => 'auth'], function () {
    Route::get('/user', 'App\Http\Controllers\AuthController@getcurrentUser') -> middleware('auth:api');
    Route::post('/login', 'App\Http\Controllers\AuthController@login');
    Route::post('/register', 'App\Http\Controllers\AuthController@register');
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout');
});




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
