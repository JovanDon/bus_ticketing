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
                                    <th> client info</th>
                                    <th>trip</th>
                                    <th>trip date</th>
                                    <th>ticket number</th>
                                    <th>Paid</th>
                                    <th>favourite seat</th>
                                    <th>booked at</th>
                                </tr>
                                </thead>
                                <tbody>
                               <!-- @//foreach ($contacts as $contact) -->
                                    <tr >
                                        <td>1</td>
                                        <td>Joshua kk</td>
                                        <td>Kampala-Mbarara</td>
                                        <td>12-12-2018</td>
                                        <td>MK12000</td>                                        
                                        <td>30,000</td>
                                        <td>window</td>
                                        <td>12-07-2018</td>
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
 