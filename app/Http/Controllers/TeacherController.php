<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\AuthenticatedSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\SectionSubject;
use App\Models\Section;
use App\Models\Teacher;
use App\Models\SectionStudent;
use App\Models\PostThread;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TeacherController extends Controller
{
    public function classes(Request $request){
        //Get teacher logged in ID
        $id = Auth::id();
        $teacherID = Teacher::where('userID', $id)->value('teacherID');
        $SectionSubjects = SectionSubject::where('teacherID', $teacherID)->get(['sectionID','gradeLevel','name']);
        $teacherSectionCounts = SectionSubject::all()->count();
        return view('teacher.classes-page.index',[
            'userteacherID' => $id,
            'teacherSectionCounts' => $teacherSectionCounts,
            'SectionSubjects' => $SectionSubjects,
            'teacherID' => $teacherID

        ]);

    }

    public function classshow(Request $request,Section $section)
    {
        $sectionID = $section->sectionID;
        $students = DB::table('Section_Student')
        ->join('Student', function($join) use ($sectionID)
        {
            $join->on('Section_Student.studentID', '=', 'Student.studentID')
                 ->where('Section_Student.sectionID', '=', $sectionID);
        })
        ->get();

        $sectionSubjectid = SectionSubject::where('name',$request->sectionsubject)
        ->where('sectionID', $request->section->sectionID)
        ->value('sectionSubjectID');

        $postthread = PostThread::where('sectionSubjectID',$sectionSubjectid)
        ->get();
        return view('teacher.class-stream-page.index',[
            'section' => $section,
            'students' => $students,
            'subjectname' => $request->sectionsubject,
            'postthreads' => $postthread
        ]);

    }


      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addpost(Request $request){
        $request->validate([
            'content' => 'required|max:100'
        ]);
        $id = Auth::id();
        $sectionSubjectID = SectionSubject::where('name', $request->subjectname)
        ->where('sectionID', $request->sectionid)
        ->value('sectionSubjectID');
        $postedcontent = PostThread::make([
            'userID' => $id,
            'sectionSubjectID' => $sectionSubjectID,
            'content' => $request->input('content'),
            'status' => "active"
        ]);

        if($postedcontent->save()){
            return Redirect::back()->with('success','Announcement Posted.');
        }
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
