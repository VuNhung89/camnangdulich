<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index()
    {
        try {
            $events = Event::all();
            return response()->json($events);
        } catch (\Exception $e) {
            Log::error('API error fetching events: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['error' => 'Failed to load events, please try again later'], 500);
        }
    }

    public function show($id)
    {
        try {
            $event = Event::find($id);
            if (!$event) {
                return response()->json(['error' => 'Event not found'], 404);
            }
            return response()->json($event);
        } catch (\Exception $e) {
            Log::error('API error fetching event: ' . $e->getMessage(), [
                'id' => $id,
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['error' => 'Failed to load event, please try again later'], 500);
        }
    }
}
