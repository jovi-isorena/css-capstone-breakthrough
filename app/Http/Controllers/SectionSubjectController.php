<?php

namespace App\Http\Controllers;

use App\Models\SectionSubject;
use Illuminate\Http\Request;

class SectionSubjectController extends Controller
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
     * @param  \App\Models\SectionSubject  $sectionSubject
     * @return \Illuminate\Http\Response
     */
    public function show(SectionSubject $sectionSubject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionSubject  $sectionSubject
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionSubject $sectionSubject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionSubject  $sectionSubject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionSubject $sectionSubject)
    {
        //
    }
    
    /**
     * Update the assigned teacher for subjects in each section.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionSubject  $sectionSubject
     * @return \Illuminate\Http\Response
     */
    public function updateTeachers(Request $request)
    {
        // receives multiple change request from Section Management
        // dd($request);
        // check if the teacher list is not empty
        if($request->has('sectionSubjectID')){
            foreach ($request->input('sectionSubjectTeacher') as $sectionSubjectID => $teacherID) {
                $sectionSubject = SectionSubject::find($sectionSubjectID);
                
                // check if the update is successful
                if(!$sectionSubject->update([
                    'teacherID' => $teacherID
                ])){
                    return back()->with('danger', 'Teacher not assigned.');
                }
                
            }
            return back()->with('success', 'Teachers assigned.');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionSubject  $sectionSubject
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionSubject $sectionSubject)
    {
        //
    }
}
