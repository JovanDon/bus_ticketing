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

    public function addform()
    {
        $app = app();
        $tripschedule = $app->make('stdClass');
        $tripschedule->id=null;

        return view('scheduletrip_form',compact("tripschedule",$tripschedule));
    }
    public function view_allschedules()
    {
        //call to is_admin
        return view('schedule_list');
    }
    
}
