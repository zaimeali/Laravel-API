<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
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

Route::prefix('user')->group(function () {
    Route::get('/nice', function () {
        return [
            'message' => 'nice'
        ];
    });
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::middleware('auth')->get('/authuser', [UserController::class, 'getAuthUser']);
});

Route::get('/test', function () {
    return ['message' => 'Hello'];
});

// Resource
Route::apiResource('posts', PostsController::class);

// Posts
Route::post('/post', [PostController::class, 'create']);
Route::put('/post/{id}', [PostController::class, 'update']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
