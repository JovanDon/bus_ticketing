@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if($errors->any())
                    <div class="alert alert-danger alert-important" >
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container" >
                    <div class=row>
                        <div class="card-header col-md-3" style="color:#fff;" >
                            {{ __('Checkin ticket') }}
                        </div>
                        @if( !($is_ticket_valid === null) )
                            @if($is_ticket_valid)
                                <div class="card-header col-md-4 offset-md-2"  >
                                    <p class="bg-success" style="color:#fff; text-align:center;" > Ticket Verified</p>
                                </div>
                            @elseif( !$is_ticket_valid  )
                                <div class="card-header col-md-4 offset-md-2"  >
                                    <p class="bg-danger" style="color:#fff; text-align:center;" > Ticket INVALID!!! </p>
                                </div>
                            @endif
                        @endif

                    </div>
                </div>

                <div class="card-body">
                
                    <form method="POST" action="{{ url('verify_checkin_action') }} " aria-label="{{ __('ticket') }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Route ') }}</label>

                            <div class="col-md-6">
                                <select class="form-control form-control js-example-basic-single" id="route_id" name="route_id"  >
                                <option value="" ></option>
                                    @foreach($routes as $route)
                                    <option value="{{$route->id}}" >{{$route->origin}} {{$route->destination}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="departuretime" class="col-md-4 col-form-label text-md-right" style="color:#fff;" >{{ __('Departure time') }}</label>

                            <div class="col-md-3 ">

                                <select   id="departuretime" class="form-control"  name="departuretime"     required >
                                    <option value="" ></option>                                
                                    <option value="1:00"    >1:00</option>                                
                                    <option value="2:00"    >2:00</option>
                                    <option value="3:00"    >3:00</option>
                                    <option value="4:00"    >4:00</option>
                                    <option value="5:00"    >5:00</option>
                                    <option value="6:00"    >6:00</option>
                                    <option value="7:00"    >7:00</option>
                                    <option value="8:00"    >8:00</option>
                                    <option value="9:00"    >9:00</option>
                                    <option value="10:00"   >10:00</option>
                                    <option value="11:00"   >11:00</option>
                                    <option value="12:00"   >12:00</option>
                                </select>
                            </div>

                            <div class="col-md-2 offset-md-1">
                            
                                <select   id="format" class="form-control" name="format" recquired>
                                    <option value=""></option>
                                    <option value="am"    >am</option>                                
                                    <option value="pm"    >pm</option>
                                </select>
                            </div>
                            
                        </div> 


                        <div class="form-group row">
                            <label for="ticket_number" class="col-md-4 col-form-label text-md-right" style="color:#fff;" >{{ __('Ticket Number') }}</label>

                            <div class="col-md-6">
                            
                            <input  id="ticket_number" type="text" class="form-control{{ $errors->has('ticket_number') ? ' is-invalid' : '' }}" name="ticket_number"  required autofocus>
                            
                            </div>
                        </div>


                   
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success"> Verify  </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
