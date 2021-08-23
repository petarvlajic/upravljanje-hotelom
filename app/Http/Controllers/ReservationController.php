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
        $reservations =Reservation::where('user_id', $id)->get();
    
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

    public function delete($id)
    {

       $reservation = Reservation::find($id);

       if ($reservation->user_id === auth()->user()->id && $reservation->status === 'U obradi') {
           $reservation->delete();
       }
       return redirect()->route('dashboard');
    }
}