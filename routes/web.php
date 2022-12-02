<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SchoolYearController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SectionStudentController;
use App\Http\Controllers\CurriculumController;
use Illuminate\Support\Facades\Route;
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

    //ROUTES FOR SYSADMIN
    //accounts
    Route::get('sysadmin/accounts', [UserController::class, 'index'])->name('accounts');
    Route::post('sysadmin/account', [UserController::class, 'store'])->name('accountStore');
    
    //curriculum
    Route::get('sysadmin/curriculums', [CurriculumController::class, 'index'])->name('curriculums');
    Route::get('sysadmin/curriculum/create', [CurriculumController::class, 'create'])->name('curriculumCreate');
    Route::post('sysadmin/curriculum/store', [CurriculumController::class, 'store'])->name('curriculumStore');
    Route::get('sysadmin/curriculum/{curriculum}', [CurriculumController::class, 'show'])->name('curriculumShow');
    Route::get('sysadmin/curriculum/{curriculum}/edit', [CurriculumController::class, 'edit'])->name('curriculumEdit');
    Route::put('sysadmin/curriculum/{curriculum}/update', [CurriculumController::class, 'update'])->name('curriculumUpdate');
    
    //schoolyear
    Route::get('sysadmin/schoolYears', [SchoolYearController::class, 'index'])->name('schoolYears');
    Route::get('sysadmin/schoolYear/create', [SchoolYearController::class, 'create'])->name('schoolYearCreate');
    Route::post('sysadmin/schoolYear/store', [SchoolYearController::class, 'store'])->name('schoolYearStore');
    Route::get('sysadmin/schoolYear/{schoolYear}', [SchoolYearController::class, 'show'])->name('schoolYearShow');
    Route::get('sysadmin/schoolYear/{schoolYear}/edit', [SchoolYearController::class, 'edit'])->name('schoolYearEdit');
    Route::put('sysadmin/schoolYear/{schoolYear}/update', [SchoolYearController::class, 'update'])->name('schoolYearUpdate');
    
    //sections
    Route::get('sysadmin/sections', [SectionController::class, 'index'])->name('sections');
    Route::get('sysadmin/section/create', [SectionController::class, 'create'])->name('sectionCreate');
    Route::post('sysadmin/section/store', [SectionController::class, 'store'])->name('sectionStore');
    Route::get('sysadmin/section/{section}', [SectionController::class, 'show'])->name('sectionShow');
    Route::get('sysadmin/section/{section}/edit', [SectionController::class, 'edit'])->name('sectionEdit');
    Route::put('sysadmin/section/{section}/update', [SectionController::class, 'update'])->name('sectionUpdate');
    Route::put('sysadmin/section/{section}/updateName', [SectionController::class, 'updateName'])->name('sectionUpdateName');
    Route::put('sysadmin/section/{section}/updateAdviser', [SectionController::class, 'updateAdviser'])->name('sectionUpdateAdviser');
    
    // section students
    Route::post('sysadmin/sectionStudent/store', [SectionStudentController::class, 'store'])->name('sectionStudentStore');
    

    // ROUTES FOR TEACHERS
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
});
require __DIR__.'/auth.php';
