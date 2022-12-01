<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function classes(){
        return view('teacher.classes-page.index');

    }

    public function classStream(){
        return view('teacher.class-stream-page.index');
    
    }

    public function classActivity(){
        return view('teacher.class-activity-page.index');
    }
    
    public function classListDetail(){
        return view('teacher.class-list-detail-page.index');
    }
    
    public function subjectScore(){
        return view('teacher.subject-score-page.index');
    }
    
    public function postedTask(){
        return view('teacher.posted-task-page.index');
    }
    
    public function postedTaskSubject(){
        return view('teacher.posted-task-subject-page.index');
    }
    
    public function postedTaskSection(){
        return view('teacher/posted-task-section-list-page/index');
    }
    
    public function postedTaskSubjectStudent(){
        return view('teacher/posted-task-subject-student-page/index');
    }
    
    public function createTask(){
        return view('teacher/create-task-page/index');
    }


}
