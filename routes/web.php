<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Models\teacher;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route for teacher homepage
Route::get('/teacher', function () {
    return view('teacher-home-page/index');
});

// route for teacher login
Route::get('/teacher-login', function () {
    return view('teacher-login-page/index');
});


// route for teacher classes
Route::get('/teacher-classes', function () {
    return view('teacher-classes-page/index');
});

// route for teacher class stream page
Route::get('/teacher-class-stream', function () {
    return view('teacher-class-stream-page/index');
});

// route for teacher class activiy page
Route::get('/teacher-class-activity', function () {
    return view('teacher-class-activity-page/index');
});

// route for teacher class list detail page
Route::get('/teacher-class-list-detail', function () {
    return view('teacher-class-list-detail-page/index');
});

// route for teacher class subject score page
Route::get('/teacher-subject-score', function () {
    return view('teacher-subject-score-page/index');
});

// route for teacher posted task page
Route::get('/teacher-posted-task', function () {
    return view('teacher-posted-task-page/index');
});
require __DIR__.'/auth.php';
