<div class="row">

    <div class="col-md-6 col-xs-12" >
    <label for="origin" style="color:#FFF;"  class="col-md-4 col-form-label text-md-left">{{ __('Origin') }}</label>
    </div>
    <div class="col-md-6 col-xs-12" >
    <label for="destination" style="color:#FFF;" class="col-md-4 col-form-label text-md-left">{{ __('Destination') }}</label>

    </div>

</div>
<div class="row">

    <div class="form-group col-md-5 offset-md-1 col-xs-12">        
        <div class="col-md-9 col-xs-12">
                <select class="form-control" id="origin" class="form-control{{ $errors->has('origin') ? ' is-invalid' : '' }}" name="origin" value="{{ old('origin') }}" >
                <!--@//foreach($contactinfo as $contact)-->
                <option value="" ></option>
                <!--@//endforeach-->
                </select>
            </div>
            
    </div>


    <div class="form-group col-md-5 offset-md-1 col-xs-12">        
        <div class="col-md-9 col-xs-12 ">
            <input  value="" id="destination" type="text"  class="form-control" name="destination" >

        </div>
    </div>

</div>