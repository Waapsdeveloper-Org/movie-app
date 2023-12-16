<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\RatingsController;
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

Route::resource('films', FilmController::class);
Route::get('films/{id}/comments', [FilmController::class, 'getComments']);
Route::post('films/comments', [FilmController::class, 'postFilmComments']) -> middleware('auth:api');


Route::resource('comments', CommentsController::class);
Route::resource('ratings', RatingsController::class);

Route::group(['prefix' => 'auth'], function () {
    Route::get('/user', 'App\Http\Controllers\AuthController@getcurrentUser') -> middleware('auth:api');
    Route::post('/login', 'App\Http\Controllers\AuthController@login');
    Route::post('/register', 'App\Http\Controllers\AuthController@register');
    Route::get('/logout', 'App\Http\Controllers\AuthController@logout');
});



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
