<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bookable;
use App\Http\Resources\BookableReviewIndexResource;

class BookableReviewController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);
        return BookableReviewIndexResource::collection($bookable->reviews()->latest()->get());
    }
}
