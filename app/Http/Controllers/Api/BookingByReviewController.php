<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookingByReviewShowResource;
use Illuminate\Http\Request;
use App\Booking;

class BookingByReviewController extends Controller
{
    public function __invoke($reviewKey, Request $request)
    {
        $booking = Booking::findByReviewKey($reviewKey);
        return $booking ? new BookingByReviewShowResource($booking) : abort(404) ;
    }
}
