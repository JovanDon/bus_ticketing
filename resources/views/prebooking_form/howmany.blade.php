<div class="row">

    <div class="col-md-6 col-xs-12" >
    <label for="going" style="color:#FFF;"  class="col-md-12 col-form-label text-md-left">{{ __('How many are going') }}</label>
    </div>
    <div class="col-md-6 col-xs-12" >
    <label for="comingback" style="color:#FFF;" class="col-md-12 col-form-label text-md-left">{{ __('How many are coming back') }}</label>

    </div>

</div>
<div class="row">

    <div class="form-group col-md-5 offset-md-1 col-xs-12">        
        <div class="col-md-9 col-xs-12">
                <select class="form-control js-example-basic-single" id="going" class="form-control{{ $errors->has('going') ? ' is-invalid' : '' }}" name="going"  >
               
                <option value="1" >1</option>
                <option value="2" >2</option>
                <option value="3" >3</option>
                <option value="4" >4</option>
                <option value="5" >5</option>
                <option value="6" >6</option>
                <option value="7" >7</option>
                <option value="8" >8</option>
                <option value="9" >9</option>
                <option value="10" >10</option>
                
                </select>
            </div>
            
    </div>


    <div class="form-group col-md-5 offset-md-1 col-xs-12">        
        <div class="col-md-9 col-xs-12 ">
        <select class="form-control js-example-basic-single" id="comingback" class="form-control{{ $errors->has('comingback') ? ' is-invalid' : '' }}" name="comingback"  >
               
                <option value="0" >0</option>
               <option value="1" >1</option>
               <option value="2" >2</option>
               <option value="3" >3</option>
               <option value="4" >4</option>
               <option value="5" >5</option>
               <option value="6" >6</option>
               <option value="7" >7</option>
               <option value="8" >8</option>
               <option value="9" >9</option>
               <option value="10" >10</option>
               
               </select>
        </div>
    </div>

</div>