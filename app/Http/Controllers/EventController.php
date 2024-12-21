<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::whereHas('rt', function ($query) {
            $query->whereHas('rw', function ($query) {
                $query->where('name', 'RW 7');
            });
        })->get();

        return view('pages.event.index', [
            'events' => $events
        ]);
    }

    public function show(Request $request){

        $id = $request->id;
        $event = Event::where('id', $id)->first();

        return view('pages.event.show', [
            'event' => $event
        ]);
    }
}
