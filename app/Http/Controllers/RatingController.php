<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
   public function store(Request $request)
{
    $request->validate([
        'creative_id' => 'required|exists:creatives,id',
        'rating' => 'required|integer|min:1|max:10',
    ]);

    Rating::updateOrCreate(
        [
            'user_id' => auth()->id(),
            'creative_id' => $request->creative_id
        ],
        [
            'rating' => $request->rating
        ]
    );

    return back();
}
}
