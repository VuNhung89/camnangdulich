<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    //
    public function index()
    {
        $tours = Tour::with('location')->get();
        return response()->json($tours);
    }

    public function show(Tour $tour)
    {
        $tour->load('location');
        return response()->json($tour);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'location_id' => 'required|exists:locations,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
            'image' => 'required|string',
        ]);

        $tour = Tour::create($data);
        $tour->load('location');
        return response()->json($tour, 201);
    }

    public function update(Request $request, Tour $tour)
    {
        $data = $request->validate([
            'location_id' => 'required|exists:locations,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
            'image' => 'required|string',
        ]);

        $tour->update($data);
        $tour->load('location');
        return response()->json($tour);
    }

    public function destroy(Tour $tour)
    {
        $tour->delete();
        return response()->json(['message' => 'Tour deleted']);
    }
}
