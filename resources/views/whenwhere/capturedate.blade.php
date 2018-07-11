<div class="row">

    <div class="col-md-6">        
       <div class="form-group row">
            <label for="container1" style="color:#FFF;"  class="col-md-4 col-form-label text-md-right">{{ __('Departure date') }}</label>
            <div id="container1"    style="margin: 30px 0 15px 50px; height: 255px; position: absolute"></div>
       
            
            <input name="departuredate" readonly style="margin: 270px 0 15px 50px;width:260px; position: absolute" id="visible-future1" type="text" class="form-control" data-zdp_readonly_element="false" >
        
        </div>
    </div>

    <div class="col-md-6">
         <div class="form-group row"  >
            <label for="container2" style="color:#FFF;" class="col-md-4 col-form-label text-md-right">{{ __(' Return date') }}</label>
            
            <div id="container2" style="margin: 30px 0 15px 50px; height: 255px; position: absolute">
                 
            </div>
            <input name="returndate" readonly style="margin: 270px 0 15px 50px;width:260px; position: absolute"  id="visible-future2" type="text"  class="form-control " data-zdp_readonly_element="false"   >
           
          
        </div>
    </div>

</div>
