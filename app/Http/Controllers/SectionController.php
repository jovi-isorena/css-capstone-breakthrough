<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\SectionSubject;
use App\Models\SchoolYear;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sections = Section::where('status', 'active')->get();
        $schoolYears = SchoolYear::where('status', 'active')->get();
        $curriculums = Curriculum::where('status', 'active')->get();
        return view('sysadmin.section.index',[
            'sections' => $sections,
            'schoolYears' => $schoolYears,
            'curriculums' => $curriculums
        ]);
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
        // dd($request);
        $request->validate([
            'schoolYear' => 'required',
            'gradeLevel' => 'required|min:1|max:12',
            'curriculum' => 'required',
            'quantity' => 'required|numeric|min:1|max:20'
        ]);
        
        $curriculum = Curriculum::find($request->input('curriculum'));
        // check if curriculum exists
        if($curriculum){
            $quan = intval($request->input('quantity'));
            for ($i=0; $i <= $quan+1; $i++) { 
                // create individual section
                $section = Section::make([
                    'name' => "Unset", 
                    'gradeLevel' => $request->input('gradeLevel'), 
                    'schoolYearID' => $request->input('schoolYear'), 
                    'teacherID' => null, 
                    'status' => 'active'
                ]);

                // if the section successfully created, create subjects for the section using the curriculum
                if($section->save()){
                    foreach ($curriculum->curriculumSubjects as $subject) {
                        $sectionSubject = SectionSubject::make([
                            'teacherID' => null, 
                            'sectionID' => $section->sectionID, 
                            'name' => $subject->subjectShorthand, 
                            'gradeLevel' => $request->input('gradeLevel'), 
                            'status' => 'status'
                        ]);

                        // save the subject, if there's an error, return to index
                        if(!$sectionSubject->save()){
                            return back()->with('danger', 'Subject ' . $subject->name . ' for section Grade ' . $request->input('gradeLevel') . ' did not saved.');
                        }
                    }
                }
            }
            // if everything is saved, return to index
            return back()->with('success', $request->input('quantity'). ' sections created for Grade ' . $request->input('gradeLevel'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
