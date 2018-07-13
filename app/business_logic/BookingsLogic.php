<?php

namespace App\business_logic;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Schedule
{
    use ValidatesRequests;
    
    public function booktrip(Request $request){
        //get schedule data for a trip
        return view('client_schedules');
    }
}
