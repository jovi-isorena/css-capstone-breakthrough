<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
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

//first login
Route::get('test/first-login', [TestController::class, 'testfirstlogin'])->name('firstLogin');
Route::middleware('auth')->group(function () {
    //user profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //end user profile

    //accounts
    Route::get('sysadmin/accounts', [UserController::class, 'index'])->name('accounts');
    Route::post('sysadmin/account', [UserController::class, 'store'])->name('accountStore');
});

// route for teacher homepage
// Route::get('/teacher', function () {
//     return view('teacher/home-page/index');
// });

// route for teacher login
// Route::get('/teacher/login', function () {
//     return view('teacher/login-page/index');
// });


// route for teacher classes
Route::get('/teacher/classes', [TeacherController::class, 'classes'])->name('teacherClasses');

// route for teacher class stream page
Route::get('/teacher/class-stream', [TeacherController::class, 'classStream'])->name('teacherClassStream');

// route for teacher class activiy page
Route::get('/teacher/class-activity', [TeacherController::class, 'classActivity'])->name('teacherClassActivity');

// route for teacher class list detail page
Route::get('/teacher/class-list-detail', [TeacherController::class, 'classListDetail'])->name('teacherClassListDetail');

// route for teacher class subject score page
Route::get('/teacher/subject-score', [TeacherController::class, 'subjectScore'])->name('teacherSubjectScore');

// route for teacher posted task page
Route::get('/teacher/posted-task', [TeacherController::class, 'postedTask'])->name('teacherPostedTask');

// route for teacher posted task subject page
Route::get('/teacher/posted-task-subject', [TeacherController::class, 'postedTaskSubject'])->name('teacherPostedTaskSubject');

// route for teacher posted task section list page
Route::get('/teacher/posted-task-section', [TeacherController::class, 'postedTaskSection'])->name('teacherPostedTaskSection');

// route for teacher posted task subject student
Route::get('/teacher/posted-task-subject-student', [TeacherController::class, 'postedTaskSubjectStudent'])->name('teacherPostedTaskSubjectStudent');

// route for teacher create task page
Route::get('/teacher/create-task', [TeacherController::class, 'createTask'])->name('teacherCreateTask');

// route for teacher create task page
// Route::get('/teacher/profile', function () {
//     return view('teacher/profile-page/index');
// });
require __DIR__.'/auth.php';
