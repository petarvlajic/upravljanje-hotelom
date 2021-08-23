<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('roomdashboard', ['rooms' => $rooms]);
    }

    public function store(Request $request)
    {
        Room::create([
            'floor' => $request->floor,
            'bedNum' => $request->bedNum,
            'minibar' => $request->minibar,
            'status' => $request->status,
        ]);

        return redirect()->route('rooms');

    }

    public function status($id)
    {

        $room = Room::find($id);
        if ($room) {
            
            if ($room->status == "slobodna") {
                $room->status = "zauzeta";
            }else{
                $room->status = "slobodna";
            }
            $room->save();
        }

        return redirect()->route('rooms');

    }
}