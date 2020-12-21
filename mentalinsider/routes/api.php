<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\UsersApiController;
use App\Http\Controllers\Api\V1\Admin\AppointmentApiController;
use App\Http\Controllers\Api\V1\Admin\ArticleApiController;
use App\Http\Controllers\Api\V1\Admin\CategoryApiController;
use App\Http\Controllers\Api\V1\Admin\DepartmentApiController;
use App\Http\Controllers\Api\V1\Admin\DoctorApiController;
use App\Http\Controllers\Api\V1\Admin\ScheduleApiController;


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


Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:api']], function () {

    // Users
    Route::apiResource('users',UsersApiController::class);

    // Doctors
    Route::apiResource('doctors',DoctorApiController::class);

    // Schedules
    Route::apiResource('schedules',ScheduleApiController::class);

    // Appointments
    Route::apiResource('appointments',AppointmentApiController::class);

    // Articles
    Route::post('articles/media',[ArticleApiController::class,'storeMedia'])->name('articles.storeMedia');
    Route::apiResource('articles',ArticleApiController::class);

    // Categories
    Route::apiResource('categories',CategoryApiController::class);

    // Departments
    Route::apiResource('departments',DepartmentApiController::class);

});