<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Bookable;

class BookablePriceController extends Controller
{

    public function __invoke($id, Request $request)
    {
        $bookable = Bookable::findOrFail($id);
        $data = $request->validate([
            'from' => 'required|date_format:Y-m-d|after_or_equal:now',
            'to' => 'required|date_format:Y-m-d|after_or_equal:from'
        ]);

        return response()->json([
            'data' => $bookable->pricefor($data['from'], $data['to'])
        ]);
    }
}
