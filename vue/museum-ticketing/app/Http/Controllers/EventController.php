<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return response()->json(Event::all());
    }

    public function show($id)
    {
        $event = Event::with('tickets')->find($id);
        return response()->json($event);
    }
}
