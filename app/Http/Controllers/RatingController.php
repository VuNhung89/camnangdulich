<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    //Lấy tất cả đánh giá của một bài viết, thông qua tham số post_id truyền qua query string (?post_id=123)
    //lấy đánh giá cùng với thông tin người đánh giá (with('user'))
    public function index(Request $request)
    {
        $postId = $request->query('post_id');
        $ratings = Rating::where('post_id', $postId)->with('user')->get();
        return response()->json($ratings);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'rating' => 'required|integer|between:1,5'
        ]);

        $existingRating = Rating::where([
            'user_id' => Auth::id(),
            'post_id' => $data['post_id']
        ])->first();

        if ($existingRating) {
            return response()->json(['message' => 'You already rated this post'], 403);
        }

        $rating = Rating::create([
            'user_id' => Auth::id(),
            'post_id' => $data['post_id'],
            'rating' => $data['rating']
        ]);

        $rating->load('user');
        return response()->json($rating, 201);
    }

    public function destroy(Rating $rating)
    {
        if ($rating->user_id !== Auth::id()) {
            return response()->json(['message' => 'You can only delete your own rating'], 403);
        }

        $rating->delete();
        return response()->json(['message' => 'Rating deleted']);
    }
}
