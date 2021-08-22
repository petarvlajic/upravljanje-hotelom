<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = DB::select("SELECT * FROM `rooms`");
        return view('roomdashboard', ['rooms' => $rooms]);
    }
}