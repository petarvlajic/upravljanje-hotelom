<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditDashboardController extends Controller
{
    public function index()
    {
        $reservations =Reservation::where('status', 'U obradi')->get();

        return view('editdashboard', ['reservation' => $reservations]);
    }


    public function status($id ,$status){
        $reservation = Reservation::find($id);
        $reservation->status = $status;
        $reservation->save(); 
        return redirect()->route('editdashboard');
    }

    
}