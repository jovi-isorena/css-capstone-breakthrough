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
        $events = ContentsEvents::all()
            ->where('status', '<>', 'inactive');
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
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
        ]);
        $event = ContentsEvents::find($request->id);
        if($event->update([
            'name' => $request->post('name'),
            'date' => $request->post('date'),
            'time' => $request->post('time'),
            'notes' => $request->post('notes')
        ])) {
            return redirect()->route('contentsEvents')->with('success','Event Has Been updated successfully');
        }else {
            return redirect()->route('contentsEvents')->with('danger','Failed to update Event.');
        }
    }

    /**
    * Update the specified resource in storage.
    *
    * @return \Illuminate\Http\Response
    */
    public function archive($id)
    {
        $event = ContentsEvents::find($id);
        if($event->update(['status' => 'inactive'])){
            return redirect()->route('contentsEvents')->with('success', 'event archive :)');
        }else{
            return redirect()->route('contentsEvents')->with('danger', 'event archive :)');
        }
    }
}
