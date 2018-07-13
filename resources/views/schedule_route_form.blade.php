@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:#fff;" >{{ __('schedule a route') }}</div>

                <div class="card-body">
                
                    <form method="POST" action="@if($routeschedule->id) {{ url('updateschedule_action') }} @else {{ url('addschedule_action') }}  @endif" aria-label="{{ __('Schedule') }}">
                        @csrf
                       
                        <div class="form-group row">
                            <label for="route" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Select route') }}</label>

                            <div class="col-md-6">
                               <select  value="@if($routeschedule->id) {{$routeschedule->route}}  @endif " id="route" class="form-control" name="route"  class="form-control js-example-basic-single"   required >
                                <option value="" >kampala</option>
                                <option value="" >lwengo</option>
                                <option value="" >masaka</option>
                                <option value="" >seeeta</option>
                                <option value="" >mukono</option>
                                <option value="" >iganga</option>
                                <option value="" >kamuli</option>
                                <option value="" >jinja</option>
                                <option value="" >gulu</option>
                                <option value="" >arua</option>
                                <option value="" >massindi</option>
                               </select>
                               
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="route" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Week day') }}</label>

                            <div class="col-md-6">
                               <select   id="weekday" class="form-control" name="weekday"  class="form-control js-example-basic-single"   required >
                                <option value="" >Monday</option>
                                <option value="" >Tuesday</option>
                                <option value="" >Wenesday</option>
                                <option value="" >Thursday</option>
                                <option value="" >friday</option>
                                <option value="" >saturday</option>                                
                                <option value="" >Sunday</option>
                              </select>
                               
                            </div>
                        </div>
                       
                       <div class="form-group row">
                            <label for="departuretime" class="col-md-4 col-form-label text-md-right" style="color:#fff;" >{{ __('Departure time') }}</label>

                            <div class="col-md-3 ">

                                    <select   id="departuretime" class="form-control"  name="departuretime"     required >
                                                                        
                                        <option value="1:00" >1:00</option>                                
                                        <option value="2:00" >2:00</option>
                                        <option value="3:00" >3:00</option>
                                        <option value="4:00" >4:00</option>
                                        <option value="5:00" >5:00</option>
                                        <option value="6:00" >6:00</option>
                                        <option value="7:00" >7:00</option>
                                        <option value="8:00" >8:00</option>
                                        <option value="9:00" >9:00</option>
                                        <option value="10:00" >10:00</option>
                                        <option value="11:00" >11:00</option>
                                        <option value="12:00" >12:00</option>
                                    </select>
                                </div>

                                <div class="col-md-2 offset-md-1">
                                    <select   id="format" class="form-control" name="format">
                                        <option value="am" >am</option>                                
                                        <option value="pm" >pm</option>
                                    </select>
                                </div>
                            
                        </div>  
                        
                          <div class="form-group row">
                            <label for="max_expected" class="col-md-6 col-form-label text-md-right" style="color:#fff;" >{{ __('Max Capacity') }}</label>

                            <div class="col-md-4">
                                <input value="@if($routeschedule->id) {{$routeschedule->max_capacity}}  @endif " id="max_capacity" type="number" class="form-control" name="max_capacity" value="{{ old('max_expected') }}" required autofocus>

                            </div>
                        </div>  



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                @if($routeschedule->id) 
                                    {{ __('Update route schedule') }} 
                                @else 
                                    {{ __('Schedule route') }}
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
