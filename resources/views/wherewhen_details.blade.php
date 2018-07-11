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
                    <form method="POST" action="{{ url('addaccount_action') }}" aria-label="{{ __('where') }}">
                        @csrf
                                               
                       @include('whenwhere.select2')
                       @include('whenwhere.capturedate')
                       
                       <div class="row" >
                       <div class='col-md-6'></div>
                        <div class="form-group col-md-6" >
                                
                                <div class="col-md-5 offset-md-7">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('submit') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                     
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
 