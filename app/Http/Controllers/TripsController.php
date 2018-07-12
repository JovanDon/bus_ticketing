<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripsController extends Controller
{
    public function index()
    {
        return view('triplist');
    }
    public function addform()
    {
        $app = app();
        $trip = $app->make('stdClass');
        $trip->id=null;

        return view('addtrip',compact("trip",$trip));
    }

}
