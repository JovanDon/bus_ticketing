<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingsController extends Controller
{
    public function index(Request $request){
        //get schedule data for a trip
        return view('bookings');
    }
    public function booktrip(Request $request){
        //get schedule data for a trip
        return view('client_schedules');
    }
}
