<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    public function student()
    {
        $student = Student::all();
        return view ('student.student')->with('student', $student);
    }
}
