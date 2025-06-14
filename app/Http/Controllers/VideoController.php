<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all()->map(function ($video) {
            return [
                'id' => $video->id,
                'title' => $video->title,
                'youtube_url' => $video->youtube_url,
                'description' => $video->description,
            ];
        });
        return response()->json($videos);
    }
}
