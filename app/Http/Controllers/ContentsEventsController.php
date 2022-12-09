<?php

namespace App\Http\Controllers;

use App\Models\ContentsEvents;
use Illuminate\Http\Request;

class ContentsEventsController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $events = ContentsEvents::all();
        return view('sysadmin/contents/events.index', compact('events'));
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
        ]);

        ContentsEvents::create($request->post());

        return redirect()->route('contentsEvents')->with('success','Event has been created successfully.');
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
        ]);
        $event = ContentsEvents::find($id);

        $event->fill($request->post())->save();

        return redirect()->route('contentsEvents')->with('success','Event Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\ContentsEvents  $event
    * @return \Illuminate\Http\Response
    */
    public function destroy(ContentsEvents  $event)
    {
        $event->delete();
        return redirect()->route('contentsEvents.index')->with('success','Event has been deleted successfully');
    }
    public function archive(Request $request, $id)
    {
        $event = ContentsEvents::find($id);
        if($event->update(['status' => 'inactive'])){
            return back()->with('success', 'event archive :)');
        }else{
            return back()->with('danger', 'event archive :)');
        }
    }
}
