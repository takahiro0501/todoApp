<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApuserController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\TaskController;


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

Route::apiResource('/v1/apuser', ApuserController::class);
Route::post('/v1/goal/get', [GoalController::class, 'get']);
Route::post('/v1/goal/set', [GoalController::class, 'set']);
Route::post('/v1/goal/del', [GoalController::class, 'del']);
Route::post('/v1/task/setdel', [TaskController::class, 'setdel']);



/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/