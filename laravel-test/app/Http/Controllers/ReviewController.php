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
    //Get accepted reviews
    public function getAcceptedRevs(){
        $reviews = Review::all()->where('accepted', 1);
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ], 200);
    }

    //Get all reviews
    public function getPendingRevs(){
        $reviews = Review::all()->where('accepted', 0);
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ], 200);
    }

    public function getRev(Request $request){
        $reviews = Review::all()->where('resto_id', $request->resto_id);
        return response()->json([
            "status" => "success",
            "reviews" => $reviews
        ], 200);
    }
}
