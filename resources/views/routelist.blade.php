@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                

                <div class="panel-body">
            @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach()
            </div>
        @endif                  

                            <table width="130%" class="table table-striped table-bordered table-responsive-md" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th> No.</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Min time to travel</th>
                                    <th>Max time to travel</th>
                                    <th>Cost (shs)</th>

                                    <th>Action 1</th>
                                    <th>Action 2</th>
                                    <th>Action 3</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach ($routes as $route) 
                                    <tr >
                                        <td>{{$i++}}</td>
                                        <td>{{$route->origin}}</td>
                                        <td>{{$route->destination}}</td>
                                        <td>{{$route->min_hours_taken}} hours</td>
                                        <td>{{$route->max_hours_taken}} hours</td>
                                        <td>{{$route->cost}}</td>
                                        <td> 
                                            <form action="{{url('schedule_route_form')}}"  method="post">
                                            @csrf
                                                <input name="route_id" type="hidden" value="{{$route->id}}">
                                                <button class="btn btn-success" type="submit">Schedule Route</button>
                                            </form>
                                        </td>
                                        <td> 
                                            <form action="{{url('editroute')}}"  method="post">
                                            @csrf
                                                <input name="route_id" type="hidden" value="{{$route->id}}" >
                                                <button class="btn btn-primary" type="submit">Edit</button>
                                            </form>
                                        </td>
                                        <td> 
                                            <form action="{{url('deleteroute_action')}}"  method="post">
                                            @csrf
                                                <input name="route_id" type="hidden" value="{{$route->id}}">
                                                <button class="btn btn-danger" type="submit">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                               @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 