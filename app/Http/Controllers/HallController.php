<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function getSeats(Request $request, $hall_id)
    {
        $hall = Hall::find($hall_id);
        if (!$hall) {
            return response()->json(['error' => 'Зал не найден'], 404);
        }
    
        $seats = $hall->hallSeats()->with('seat')->get()->map(function ($hallSeat) {
            return $hallSeat->seat;
        });
    
        return response()->json($seats);
    }
}