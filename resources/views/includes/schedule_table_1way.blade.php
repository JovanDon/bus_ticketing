<h4  >Pick up stage : wandegeya Park</h4>
<table width="100%" class="table table-striped table-bordered table-responsive-md" id="dataTables-example">
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
                        <form action="{{url('deletecontact')}}"  method="post">
                        @csrf
                            <input name="contact_id" type="hidden" value="">
                            <button class="btn btn-danger" type="submit">Book</button>
                        </form>
                    </td>
                </tr>
            <!--@//endforeach-->
            </tbody>
        </table>
        <!-- /.table-responsive -->