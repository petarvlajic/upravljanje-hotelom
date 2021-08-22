<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{


    public function index()
    {

        if (auth()->user()->role === 'editor') {
            return redirect()->route('editdashboard');
        }

        $id = auth()->user()->id;
        $reservations = DB::select("SELECT * FROM `reservations` WHERE user_id = $id ");

        return view('dashboard', ['reservation' => $reservations]);
    }

    public function store(Request $request)
    {



        Reservation::create([
            'user_id' => auth()->user()->id,
            'checkIn' => $request->checkIn,
            'checkOut' => $request->checkOut,
            'adults' => $request->adults,
            'children' => $request->children,
            'roomType' => $request->roomType,
            'name' => $request->name,
            'phone' => $request->phone
        ]);

        return redirect()->route('dashboard');
    }
}