<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/home', function (){
    return view('student.Homepage');
});
route::get('/loginn', function(){
    return view('loginn.loginn');
});
route::get('/subjects', function(){
    return view('student.subject');
});
route::get('/notifications', function(){
    return view('student.notifications');
});
route::get('/aboutus', function(){
    return view('student.aboutus');
});
route::get('/todo', function(){
    return view('student.todo');
});
route::get('/calendar', function(){
    return view('student.calendar');
});
route::get('/all', function(){
    return view('student.todo-all');
});
route::get('/pending', function(){
    return view('student.todo-pending');
});
route::get('/submitted', function(){
    return view('student.todo-submitted');
});
route::get('/missing', function(){
    return view('student.todo-missing');
});
route::get('/class-stream', function(){
    return view('student.class-stream');
});
route::get('/class-list', function(){
    return view('student.class-list');
});
route::get('/class-work', function(){
    return view('student.class-work');
});
route::get('/score', function(){
    return view('student.students-scores');
});
route::get('/student-subject', function(){
    return view('student.student-subject-layout');
});
route::get('/student-class', function(){
    return view('student.student-class-layout');
});


require __DIR__.'/auth.php';
