@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
                <div class="card-body">
                <div class="card" style="width: 100%">
                    @if(!($ticketData===null) )
                        <div class="row" >
                            <div class="col-md-7" >
                                <img class="card-img-top" style="background-color:#FFF;"height='200px' src="data:image/png;base64,{{DNS1D::getBarcodePNG($ticketData->ticket_number, 'C39')}}" alt="Card image cap">
                            </div>
                            <div class="col-md-5" >
                                <div class="card-body" style="color:#FFF;" >
                                    <h5 class="card-title">Bus ticket for {{$ticketData->origin}}-{{$ticketData->destination}}</h5>
                                    
                                    <p class="card-text"> Travel Date: {{$ticketData->travel_date}}</p>
                                    <p class="card-text"> Time: {{$ticketData->departure_time}}</p>
                                    <p class="card-text"> Ticket Number: {{$ticketData->ticket_number}}</p>
                                    <p class="card-text"> Paid: {{$ticketData->paid}}</p>
                                    <p class="card-text"> Balance: {{$ticketData->cost-$ticketData->paid}}</p>

                                </div>
                            </div>
                        </div>
                    @else
                        
                               <p class="text-warning" style="text-align:;center" >You have No Ticket Valid For a trip </p>
                        
                    @endif
                </div>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
