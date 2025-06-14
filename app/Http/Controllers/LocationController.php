<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all()->map(function ($location) {
            return [
                'id' => $location->id,
                'name' => $location->name,
                'image' => $location->image,
                'description' => $location->description,
                'booking_info' => $location->booking_info,
                'average_rating' => 0, // Không dùng ratings
            ];
        });
        return response()->json($locations);
    }

    public function show($id)
    {
        return Location::with('hotels', 'tours', 'posts')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
            'description' => 'required|string',
            'transportation' => 'required|string',
            'booking_info' => 'required|string',
        ]);
        $location = Location::create($data);
        return response()->json($location, 201);
    }

    public function update(Request $request, Location $location)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|string',
            'description' => 'required|string',
            'transportation' => 'required|string',
            'booking_info' => 'required|string',
        ]);
        $location->update($data);
        return response()->json($location);
    }

    public function destroy(Location $location)
    {
        $location->delete();
        return response()->json(['message' => 'Location deleted']);
    }
}
