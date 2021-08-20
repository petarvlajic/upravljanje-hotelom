<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {

        
        

        $this->validate($request, [
            'email' => 'email',
        ]);

        Reservation::create([
            'user_id' => auth()->user()->id,
            'checkIn' => $request->checkIn,
            'checkOut' => $request->checkOut,
            'adults' => $request->adults,
            'children' => $request->children,
            'roomType' => $request->roomType,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
    }
}
