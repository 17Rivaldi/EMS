<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('event.index', ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = [
        //     'event_name' => 'required',
        //     'description' => 'required',
        //     'event_location' => 'required',
        //     'event_date' => 'required',
        //     'start_time' => 'required',
        // ];
    
        // if ($request->hasFile('event_image')) {
        //     $rules['event_image'] = 'image|mimes:jpeg,png,jpg,gif|max:2048';
        // }
    
        // $request->validate($rules);
    
        if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $name_img = date("YmdHis") . '.' . $image->getClientOriginalExtension();
            $image->move(public_path().'/upload/', $name_img);
        }
    
        $event = new Event;
        $event->event_name = $request->event_name;
        $event->description = $request->description;
        $event->event_location = $request->event_location;
        $event->event_date = $request->event_date;
        $event->start_time = $request->start_time;
    
        if ($request->hasFile('event_image')) {
            $event->event_image = $name_img;
        }

        if ($event->save()) {
            return redirect()->route('daftar.event')->with('success', 'oke');
        } else {
            return redirect()->back()->withInput()->with('error', 'Gagal menyimpan event. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('event.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validatedData = validator($request->all(), [
            'event_name' => 'required',
            'description' => 'required',
            'event_location' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
        ])->validate();

        $event->event_name = $validatedData['event_name'];
        $event->description = $validatedData['description'];
        $event->event_location = $validatedData['event_location'];
        $event->event_date = $validatedData['event_date'];
        $event->start_time = $validatedData['start_time'];
        $event->save();

        return redirect(route('daftar.event'))->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect(route('daftar.event'))->with('success', 'Data berhasil dihapus');
    }
}
