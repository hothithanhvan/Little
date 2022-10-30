<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function __construct()
    {
        $this->events = new Event();
    }
    public function index()
    {
        $event = $this->events->getAll();
        return view('event.index',compact('event'));
    }
    public function show($id)
    {
        $event = Event::where('id',$id)->first();
        return view('event.event'.$id.'', compact('event'));
    }
}
