<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Location;
use App\Models\Post;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = trim($request->input('q'));

        if (empty($query)) {
            return response()->json(['error' => 'No search query provided'], 400);
        }

        try {
            $locations = Location::where('name', 'LIKE', "%{$query}%")->get();
            $tours = Tour::where('title', 'LIKE', "%{$query}%")->get();
            $hotels = Hotel::where('name', 'LIKE', "%{$query}%")->get();
            $posts = Post::where('title', 'LIKE', "%{$query}%")->get();

            return response()->json([
                'locations' => $locations,
                'tours' => $tours,
                'hotels' => $hotels,
                'posts' => $posts,
            ]);
        } catch (\Exception $e) {
            Log::error('Search error: ' . $e->getMessage(), [
                'query' => $query,
                'trace' => $e->getTraceAsString()
            ]);
            return response()->json(['error' => 'Search failed, please try again later'], 500);
        }
    }
}
