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
                        <div class="card-header col-md-2" style="color:#fff;" >
                            {{ __('Veify  ticket') }}
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
                
                    <form method="POST" action="{{ url('verify_ticket_action') }} " aria-label="{{ __('ticket') }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Name') }}</label>

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
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Date') }}</label>

                            <div class="col-md-6">

                                <div class="row">                        
                                    <div class="col-md-5 offset-md-1">
                                        <div id="container2" style="height:250px;"  > </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 offset-md-1">
                                            <div class="form-group" style="width:260px;"  >                
                                            <input name="travel_date" value="{{ date("Y-m-d") }}" readonly   id="visible-future2" type="text"  class="form-control " data-zdp_readonly_element="false"   >                                                    
                                            </div>
                                    </div>
                                </div> 

                            </div>                        
                      
                        </div>

                        <div class="form-group row">
                            <label for="ticket_number" class="col-md-4 col-form-label text-md-right" style="color:#fff;" >{{ __('ticket_number') }}</label>

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
