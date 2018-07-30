@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
                <div class="card-header" style="color:#fff;" >
                
                {{ __('Add Role') }}
                
                </div>

                <div class="card-body">
                
                    @include('roles.add_user_roles_form')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
