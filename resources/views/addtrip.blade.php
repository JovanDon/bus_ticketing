@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:#fff;" >{{ __('Add trip') }}</div>

                <div class="card-body">
                
                    <form method="POST" action="@if($trip->id) {{ url('updatetrip') }} @else {{ url('addtrip') }}  @endif" aria-label="{{ __('Register') }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="origin" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Origin') }}</label>

                            <div class="col-md-6">
                               <input  value="@if($trip->id) {{$trip->origin}}  @endif " id="origin" type="tel" placeholder="kampala" class="form-control" name="origin" value="{{ old('origin') }}" required >
                               @if ($errors->has('origin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('origin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="destination" class="col-md-4 col-form-label text-md-right" style="color:#fff;" >{{ __('Destination ') }}</label>

                            <div class="col-md-6">
                                <input value="@if($trip->id) {{$trip->destination}}  @endif " id="destination" type="destination" class="form-control{{ $errors->has('destination') ? ' is-invalid' : '' }}" name="destination" value="{{ old('destination') }}" >

                                @if ($errors->has('destination'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('destination') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cost" class="col-md-4 col-form-label text-md-right" style="color:#fff;" >{{ __('Cost') }}</label>

                            <div class="col-md-6">
                            
                            <input value="@if($trip->id) {{$trip->cost}}  @endif " id="cost" type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" value="{{ old('cost') }}" required autofocus>

                                @if ($errors->has('cost'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="min_expected" class="col-md-6 col-form-label text-md-right" style="color:#fff;" >{{ __('Minimum Expected time to travel') }}</label>

                            <div class="col-md-4">
                                <input value="@if($trip->id) {{$trip->min_expected}}  @endif " id="min_expected" type="text" class="form-control{{ $errors->has('min_expected') ? ' is-invalid' : '' }}" name="min_expected" value="{{ old('min_expected') }}" required autofocus>

                                @if ($errors->has('min_expected'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('min_expected') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 

                          <div class="form-group row">
                            <label for="max_expected" class="col-md-6 col-form-label text-md-right" style="color:#fff;" >{{ __('Maximum Expected time to travel') }}</label>

                            <div class="col-md-4">
                                <input value="@if($trip->id) {{$trip->max_expected}}  @endif " id="max_expected" type="text" class="form-control{{ $errors->has('max_expected') ? ' is-invalid' : '' }}" name="max_expected" value="{{ old('max_expected') }}" required autofocus>

                                @if ($errors->has('max_expected'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('max_expected') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                @if($trip->id) 
                                    {{ __('Update trip') }} 
                                @else 
                                    {{ __('Add to trips') }}
                                @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
