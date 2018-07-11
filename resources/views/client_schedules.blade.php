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
                    <h3 style="text-align:center; margin-bottom:30px;" >Bus Schedules for kla - Gulu</h3>
                    @include('includes.schedule_table_1way')
                    <form>
                        @csrf
                        @include('includes.schedule_table_2way')   
                    </form>      
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
 