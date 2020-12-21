<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\ScheduleController;
use App\Http\Controllers\Admin\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('home');
})->name('dashboard');


Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('home')->with('status', session('status'));
    }

    return redirect()->route('home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin','middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    // Users
    Route::delete('users/destroy',[UsersController::class,'massDestroy'])->name('users.massDestroy');
    Route::resource('users',UsersController::class);

    // Doctors
    Route::delete('doctors/destroy',[DoctorController::class,'massDestroy'])->name('doctors.massDestroy');
    Route::resource('doctors',DoctorController::class);

    // Schedules
    Route::delete('schedules/destroy',[ScheduleController::class,'massDestroy'])->name('schedules.massDestroy');
    Route::resource('schedules', ScheduleController::class);

    // Appointments
    Route::delete('appointments/destroy',[AppointmentController::class,'massDestroy'])->name('appointments.massDestroy');
    Route::resource('appointments',AppointmentController::class);

    // Articles
    Route::delete('articles/destroy',[ArticleController::class,'massDestroy'])->name('articles.massDestroy');
    Route::post('articles/media',[ArticleController::class,'storeMedia'])->name('articles.storeMedia');
    Route::post('articles/ckmedia',[ArticleController::class,'storeCKEditorImages'])->name('articles.storeCKEditorImages');
    Route::resource('articles',ArticleController::class);

    // Categories
    Route::delete('categories/destroy',[CategoryController::class,'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoryController::class);

    // Departments
    Route::delete('departments/destroy',[DepartmentController::class,'massDestroy'])->name('departments.massDestroy');
    Route::resource('departments',DepartmentController::class);
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
