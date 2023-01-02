<?php

namespace App\Http\Controllers;

use App\Models\Curriculum;
use App\Models\CurriculumSubject;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curriculums = Curriculum::where('status', 'active')->get();
        return view('sysadmin.curriculum.index', [
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
        return view('sysadmin.curriculum.create');
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
            'name' => 'required|max:255',
            'gradeLevel' => 'required|min:1|max:12',
            'subjectName.*' => 'required|max:255',
            'subjectShorthand.*' => 'required|max:255',
            'subjectDescription.*' => 'required|max:255'
        ]);

        $curriculum = Curriculum::make([
            'name' => $request->input('name'), 
            'gradeLevel' => $request->input('gradeLevel'), 
            'status' => 'active'
        ]);

        if($curriculum->save()){
            $subjectCount = count($request->input('subjectName'));
            for ($i=0; $i < $subjectCount; $i++) { 
                $subject = CurriculumSubject::make([
                    'curriculumID' => $curriculum->curriculumID, 
                    'name' => $request->input('subjectName')[$i], 
                    'subjectShorthand' => $request->input('subjectShorthand')[$i], 
                    'description' => $request->input('subjectDescription')[$i], 
                    'status' => 'active'
                ]);
                if(!$subject->save()){
                    return back()->with('danger','Error in saving subject: ['.$subject->name.']');
                }
            }
            return back()->with('success', 'Curriculum saved.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function show(Curriculum $curriculum)
    {
        return view('sysadmin.curriculum.show',[
            'curriculum' => $curriculum
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function edit(Curriculum $curriculum)
    {
        return view('sysadmin.curriculum.edit',[
            'curriculum' => $curriculum
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curriculum $curriculum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Curriculum  $curriculum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curriculum $curriculum)
    {
        //
    }
    public function archive(Curriculum $curriculum){
        if($curriculum->update ([
            'status' => 'inactive'
        ])){
            return back()->with('success', 'Curriculum successfully archived');
        }
        else{
            return back()->with('danger', 'Curriculum not archived');
        }
    }
}
