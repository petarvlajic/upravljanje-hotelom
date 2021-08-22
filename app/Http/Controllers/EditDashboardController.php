<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditDashboardController extends Controller
{
    public function index()
    {

        $reservations = DB::select("SELECT * FROM `reservations` WHERE status = 'U obradi' ");

        return view('editdashboard', ['reservation' => $reservations]);
    }
}