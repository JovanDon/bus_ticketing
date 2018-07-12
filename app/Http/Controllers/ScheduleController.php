<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function searched_schedules(Request $request)
    {
        //search schedules according to user data
        return view('client_schedules');
    }

    
}
