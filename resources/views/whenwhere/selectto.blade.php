<div class="row">

    <div class="form-group col-md-6">
            <label for="origin" style="color:#FFF;"  class="col-md-4 col-form-label text-md-right">{{ __('Origin') }}</label>

            <div class="col-md-8" >
                <select class="form-control" id="origin" class="form-control{{ $errors->has('origin') ? ' is-invalid' : '' }}" name="origin" value="{{ old('origin') }}" >
                <!--@//foreach($contactinfo as $contact)-->
                <option value="" ></option>
                <!--@//endforeach-->
                </select>
            </div>
            
    </div>


    <div class="form-group col-md-6">
        <label for="destination" style="color:#FFF;" class="col-md-4 col-form-label text-md-right">{{ __('Destination') }}</label>

        <div class="col-md-8 o">
            <input  value="" id="destination" type="text"  class="form-control" name="destination" >

        </div>
    </div>

</div>