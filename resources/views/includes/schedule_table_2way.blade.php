<h4  >Departure Scedules for @2018-05-5 Pick up stage : wandegeya Park</h4>
<table width="100%" class="table table-striped table-bordered table-responsive-md" id="dataTables-ex1">
            <thead>
            <tr>
                <th>Bus info</th>
                <th>Departure time</th>
                <th>Cost(shs)</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <!--@//foreach ($contacts as $contact) -->
                <tr >
                    <td>UAC 233 F</td>
                    <td>7:00am</td>
                    <td> 
                        50000
                    </td>
                    <td>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="departure_schedule1" name="departure_schedule"  class="custom-control-input" checked="">
                            <label class="custom-control-label" for="departure_schedule1">Book</label>
                        </div>
                    </td>
                </tr>

                <tr >
                    <td>UAB 233 F</td>
                    <td>9:00am</td>
                    <td> 
                        50000
                    </td>
                    <td>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="departure_schedule2" name="departure_schedule"  class="custom-control-input" checked="">
                            <label class="custom-control-label" for="departure_schedule2">Book</label>
                        </div>
                    </td>
                </tr>
            <!--@//endforeach-->
            </tbody>
        </table>
        <!-- /.table-responsive -->


<h4  >Returning Scedules for @2018-05-5 (Pick up stage : wandegeya Park)</h4>
<table width="100%" class="table table-striped table-bordered table-responsive-md" id="dataTables-ex2">
            <thead>
            <tr>
                <th>Bus info</th>
                <th>Departure time</th>
                <th>Cost(shs)</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <!--@//foreach ($contacts as $contact) -->
                <tr >
                    <td>UAC 233 F</td>
                    <td>7:00am</td>
                    <td> 
                        50000
                    </td>
                    <td>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="returning_schedule1" name="returning_schedule"  class="custom-control-input" checked="">
                            <label class="custom-control-label" for="returning_schedule1">Book</label>
                        </div>
                    </td>
                </tr>

                <tr >
                    <td>UAB 233 F</td>
                    <td>9:00am</td>
                    <td> 
                        50000
                    </td>
                    <td>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="returning_schedule2" name="returning_schedule"  class="custom-control-input" checked="">
                            <label class="custom-control-label" for="returning_schedule2">Book</label>
                        </div>
                    </td>
                </tr>
            <!--@//endforeach-->
            </tbody>
        </table>
        <!-- /.table-responsive -->