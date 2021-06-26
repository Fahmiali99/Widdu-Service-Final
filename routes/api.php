<?php
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\AdminsController;
use App\Http\Controllers\Api\CodingsController;
use App\Http\Controllers\Api\VektorsController;
use App\Http\Controllers\Api\MusicsController;
use App\Http\Controllers\KelolaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login', [AuthController::class, 'login']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('suppliers', SupplierController::class, [
        'as' => 'api'
        ]);
    });

    Route::middleware('jwt.verify')->group(function(){
        Route::apiResource('admins', AdminsController::class, [
        'as' => 'api'
        ]);
    });

    Route::apiResource('codings', CodingsController::class, [
        'as' => 'api'
    ]);

    Route::apiResource('vektors', VektorsController::class, [
        'as' => 'api'
    ]);

    Route::apiResource('musics', MusicsController::class, [
        'as' => 'api'
    ]);
});