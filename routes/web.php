<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\RecruitmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/add-student', function () {
    return view('add-student');
});

Route::resource('recruitment', RecruitmentController::class);
Route::get('mainpage', [RecruitmentController::class, 'home']);

Route::get('student', [StudentsController::class, 'index']);
Route::resource('addstudent', StudentsController::class);
Route::get('achievement', [AchievementController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/mainpage', function () {
    return view('mainpage');
})->name('mainpage');