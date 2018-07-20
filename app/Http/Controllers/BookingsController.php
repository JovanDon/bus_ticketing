<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\business_logic\BookingsLogic;
use App\business_logic\RoutesLogic;

class BookingsController extends Controller
{
    public function index(){
        $logicManager=new BookingsLogic();
        $bookings=$logicManager->index();
      
        return view('bookings',compact('bookings',$bookings));
    }

    public function verify_ticket_form(){
        $logicManager=new RoutesLogic();
        $routes=$logicManager->index();
        $is_ticket_valid=null;
        
        return view('verify_ticket',compact('routes',$routes,'is_ticket_valid',$is_ticket_valid));
    }

    public function displayUersTicket(){
        $ticketsData=$this->get_most_recent_booking4_loggedin_user();
 
        return view('user_ticket',compact('ticketsData',$ticketsData) );
    }
    
    public function get_most_recent_booking4_loggedin_user(){
        $logged_in_user=Auth::user();
        
        $logicManager=new BookingsLogic();
        $ticketData=$logicManager->get_user_most_recent_bookings($logged_in_user);
        return $ticketData;
    }

    public function verify_ticket_number(Request $request){

    $logicManager=new BookingsLogic();
    $logicManager->validateTicket($request);
    $is_ticket_valid=$logicManager->do_tickect_exists($request->only('route_id','travel_date','ticket_number') );
    
    $logicManager=new RoutesLogic();
    $routes=$logicManager->index();
    
    return view('verify_ticket',compact('routes',$routes,'is_ticket_valid',$is_ticket_valid));
    }
    
   
    public function fetch_suitable_schedules(Request $request){

        $logicManager=new BookingsLogic();
        $arr=$this->define_data_pre_booking($request);

        $schedules=$logicManager->get_schedules_for_booking($arr); 
        $return_schedules=$schedules['return'];

        $return_schedules->date=$request->returndate;
        $return_schedules->comingback=$request->comingback;
        
        $departure_schedules=$schedules['departure'];

        if($departure_schedules->isEmpty()){
            dd('Schedules not found for '.$request->departuredate.'' );
        }
        $departure_schedules->date=$request->departuredate;
        $departure_schedules->going=$request->going;
    
        return view('client_schedules',compact('departure_schedules',$departure_schedules,'return_schedules',$return_schedules ));
    }

    public function make_booking(Request $request){
        $logicManager=new BookingsLogic();
       
        $logged_in_user=Auth::user();
        $ticketData=$logicManager->book_departure_trip($request,$logged_in_user);

        $ticket_number=$ticketData->ticket_number;
        $ticketData_return=$logicManager->book_return_trip($request,$logged_in_user,$ticketData->balance);
        
       return $this->view_user_bookings();
    }

    public function view_user_bookings(){
        $logged_in_user=Auth::user();
        $logicManager=new BookingsLogic();
        $user_bookings=$logicManager->get_user_bookings($logged_in_user);
        
        return view('user_bookings',compact('user_bookings',$user_bookings ));
        
    }

    public function define_data_pre_booking(Request $request){
        return [
            "origin_id" => $request->origin,
            "destination_id" => $request->destination,
            "departuredate" => $request->departuredate,
            "returndate" => $request->returndate
        ];
        
    }
    
    
}
