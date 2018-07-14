<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Users;
use App\Http\Controllers\ScheduleController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        if($this->is_admin()){
            
            return (new ScheduleController())->index();
        }

        return view('home');
    }

    public function is_admin()
    {
        $logged_in_user=Auth::user();
        if($logged_in_user->name=="Admin"){
            return true;
        }
        return false;
    }
   
    
}
