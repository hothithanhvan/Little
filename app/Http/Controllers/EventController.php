<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function index()
    {
        $event = Event::get();
        return view('event.index',compact('event'));
    }
    public function show()
    {
        return view('event.event');
    }
}
