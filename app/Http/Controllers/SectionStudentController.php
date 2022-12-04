<?php

namespace App\Http\Controllers;

use App\Models\SectionStudent;
use Illuminate\Http\Request;

class SectionStudentController extends Controller
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
        // dd($request);
    // dd(count($request->input('studentID')));
        if(!$request->has('studentID')){
            return back()->with('warning', 'No student selected');
        }
        foreach ($request->studentID as $studentID) {
            //TODO: add validation to ensure there is no duplicate 


            $sectionStudent = SectionStudent::make([
                'sectionID' => $request->input('sectionID'), 
                'studentID' => $studentID, 
                'status' => 'active'
            ]);
            // if the student didnt saved on section
            if(!$sectionStudent->save()){
                return back()->with('danger', 'Student ' . $studentID . ' did not saved.');
            }
        }
        // after all students are saved, return back to page
        return back()->with('success', 'Student list updated.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionStudent  $sectionStudent
     * @return \Illuminate\Http\Response
     */
    public function show(SectionStudent $sectionStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionStudent  $sectionStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionStudent $sectionStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionStudent  $sectionStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionStudent $sectionStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionStudent  $sectionStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionStudent $sectionStudent)
    {
        //
    }
}
