<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use App\Http\Resources\ReviewResource;

class ReviewController extends Controller
{
    public function show($id)
    {
        return new ReviewResource(Review::findOrFail($id));
    }
}
