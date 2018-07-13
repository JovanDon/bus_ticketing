<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\business_logic\RoutesLogic;

class ScheduleController extends Controller
{
    public function searched_schedules(Request $request)
    {
        //search schedules according to user data
        return view('client_schedules');
    }

    public function addform()
    {
        $logicManager=new RoutesLogic();
        $routes=$logicManager->index();
    
        return view('schedule_route_form',compact("routes",$routes));
    }
    public function view_allschedules()
    {
        //call to is_admin
        return view('schedule_list');
    }
    
}
