<?php

namespace App\Http\Controllers;

use App\Models\SectionSubject;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Resources\StudentResource;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function subjects(){
        
        $section = auth()->user()->student->sectionStudents[0]->sectionID;
        $subjects = SectionSubject::where('sectionID', $section)->get();
        

        return view('student.subjects.index', [
            'subjects' =>  $subjects
            
        ]);
    }

    public function studentClassStream(Request $request){
        $section = auth()->user()->student->sectionStudents[0]->sectionID;
        $displays = SectionSubject::where('sectionID', $section)->get();
        $teacherID = SectionSubject::where('sectionSubjectID', $request->id)->value('teacherID');

        return view('student.student-class-stream-page.index', [
            'displays' =>  $displays, 
             'section' => $section,
             'teacherID' => $teacherID
            
        ]);

    }
    // api functions

    public function getStudents(Request $request){
        $students = Student::where('status', 'active')
            ->when($request->input('search'), fn ($query, $search) => $query->where('firstName', 'like', '%'. $search .'%'))
            ->when($request->input('gradeLevel'), fn ($query, $gradeLevel) => $query->where('gradeLevel', intval($gradeLevel)))
            ->orderBy('studentID', 'ASC')
            ->get();
        return new StudentResource($students);
    }
    public function getStudentsInGrade($gradeLevel){
        return new StudentResource(Student::where('gradeLevel',$gradeLevel)->get());
    }
    public function searchStudentsInGrade($gradeLevel, $search){
        return new StudentResource(Student::where('gradeLevel',$gradeLevel)
            ->where('firstName', 'like', '%'.$search.'%')
            ->get());
    }

}
