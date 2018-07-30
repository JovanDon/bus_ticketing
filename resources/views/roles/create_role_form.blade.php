<form method="POST" action="{{ url('create_role_action') }}" aria-label="{{ __('Role') }}">
                        @csrf
                       
                       <div class="form-group row">
                           <label for="name_of_role" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Name of Role') }}</label>

                           <div class="col-md-6">
                              <input   id="name_of_role" type="text" placeholder="e.g admin" class="form-control" name="name_of_role" value="{{ old('name_of_role') }}" required >
                              
                           </div>
                       </div>
                       
                       <div class="form-group row">
                           <label for="applies_to" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Applies to') }}</label>

                           <div class="col-md-6">
                                <select class="form-control js-example-basic-single" id="applies_to" class="form-control" name="applies_to"  >
                                    <option value="" > </option>
                                    @foreach($applies_to_arr as $applies_to)
                                    <option value="{{$applies_to}}" >{{$applies_to}}</option>
                                    @endforeach
                                </select>
                           </div>
                       </div>

                   
                        <div id="permissionsTable" style="display:none;" >
                            <h5 style="text-align:center;" >Select permissions to add to this Role </h5>
                            <table width="100%" class="table table-striped table-bordered table-responsive-md" id="dataTables-ex1">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="selectall_permissions"   >
                                        <label for="selectall_permissions">Select All</label>
                                    </th>
                                    <th>Permission Name</th>
                                    <th>Applies to</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($permissions_arr as $permission)
                                    <tr class="permission {{$permission['applies_to']}}" >
                                        <td>
                                            <input type="checkbox" value="{{$permission['id']}}" id="{{$permission['name']}}" name="ids_of_selected_permissions[]"   class="permissions"  >
                                            
                                        </td>
                                        <td> 
                                            <label for="{{$permission['name']}}" >{{$permission['display_name']}} </label>
                                        </td>
                                        <td>
                                            <label for="{{$permission['name']}}" >{{$permission['applies_to']}} </label>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>   


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                {{ __('submit') }}
                                </button>
                            </div>
                        </div>
                    </form>