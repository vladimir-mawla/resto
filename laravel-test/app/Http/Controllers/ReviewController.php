<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // add review
    public function addRev(Request $request){

        $review = new Review;
        $review->review = $request->review;
        $review->user_id = $request->user_id;
        $review->resto_id = $request->resto_id;
        $review->save();


        return response()->json([
            "status" => "Success",
        ], 200);
    }
    //Get all reviews
    public function getAllRevs(){
        $reviews = Review::all()->where('accepted', 1);
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ], 200);
    }
}
