<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::select('titulo', 'fecha', 'ubicacion')->get();
        return response()->json($events, 200);
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event, 200);
    }
}
