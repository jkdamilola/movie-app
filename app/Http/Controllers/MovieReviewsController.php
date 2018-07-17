<?php

namespace App\Http\Controllers;

use Flash;
use Illuminate\Http\Request;
use App\MovieReview;

class MovieReviewsController extends Controller
{
    public function postReview(Request $request) {
        $this->validate($request, MovieReview::$rules);
        $input = $request->all();
        $review = MovieReview::create($input);

        Flash::success('Review submitted successfully.');
        
        return redirect()->back();
    }
}
