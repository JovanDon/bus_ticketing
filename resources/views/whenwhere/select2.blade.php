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
                <select class="form-control js-example-basic-single" id="origin" class="form-control{{ $errors->has('origin') ? ' is-invalid' : '' }}" name="origin"  >
                <!--@//foreach($contactinfo as $contact)-->
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
                <!--@//endforeach-->
                </select>
            </div>
            
    </div>


    <div class="form-group col-md-5 offset-md-1 col-xs-12">        
        <div class="col-md-9 col-xs-12 ">
        <select id="destination"  class="form-control js-example-basic-single"  class="form-control{{ $errors->has('destination') ? ' is-invalid' : '' }}" name="destination"  >
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

</div>