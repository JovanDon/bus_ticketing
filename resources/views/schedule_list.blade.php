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

                            <table width="100%" class="table table-striped table-bordered table-responsive-md" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th> Number</th>
                                    <th>Origin</th>
                                    <th>Destination</th>
                                    <th>Departure time</th>
                                    <th>Min time to travel</th>
                                    <th>Max time to travel</th>
                                    <th>Cost (shs)</th>

                                    <th>Action</th><!-- not visible to admin-->
                                </tr>
                                </thead>
                                <tbody>
                               <!-- @//foreach ($contacts as $contact) -->
                                    <tr >
                                        <td>1</td>
                                        <td>Kampala</td>
                                        <td>Mbarara</td>
                                        <td>6:00am</td>
                                        <td>6 hours</td>
                                        <td>8 hours</td>
                                        <td>30,000</td>
                                        <td> <!-- not visible to admin-->
                                            <form action="{{url('booktrip')}}"  method="post">
                                            @csrf
                                                <input name="trip_id" type="hidden" value="">
                                                <button class="btn btn-primary" type="submit">Book now</button>
                                            </form>
                                        </td>
                                    </tr>
                               <!--@//endforeach-->
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 