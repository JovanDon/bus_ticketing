<form method="POST" action="{{ url('create_role_action') }}" aria-label="{{ __('Role') }}">
                        @csrf
                       
                                            
                       <div class="form-group row">
                           <label for="user" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Select User') }}</label>

                           <div class="col-md-6">
                                <select class="form-control js-example-basic-single" id="user" class="form-control" name="user"  >
                                    <option value="" > </option>
                                    @foreach($users_arr as $user)
                                    <option value="{{$user['id']}}" >{{$user['name']}}</option>
                                    @endforeach
                                </select>
                           </div>
                       </div>

                       <div class="form-group row">
                           <label for="works_at" class="col-md-4 col-form-label text-md-right" style="color:#fff;" > {{ __('Works At') }}</label>

                           <div class="col-md-6">
                                <select class="form-control js-example-basic-single" id="works_at" class="form-control" name="works_at"  >
                                    <option value="" > </option>
                                    @foreach($applies_to_arr as $applies_to)
                                    <option value="{{$applies_to}}" >{{$applies_to}}</option>
                                    @endforeach
                                </select>
                           </div>
                       </div>

                   
                        <div id="roles_table" style="display:none;" >
                            <h5 style="text-align:center;" >Select permissions to add to this Role </h5>
                            <table width="100%" class="table table-striped table-bordered table-responsive-md" id="dataTables-ex1">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="selectall_roles"   >
                                        <label for="selectall">Select All</label>
                                    </th>
                                    <th>Role Name</th>
                                    <th>Applies to</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($roles_arr as $role)
                                    <tr class="role {{$role['applies_to']}}" >
                                        <td>
                                            <input type="checkbox" class="roles" value="{{$role['id']}}" id="{{$role['name']}}" name="ids_of_selected_roles[]"     >
                                            
                                        </td>
                                        <td> 
                                            <label for="{{$role['id']}}" >{{$role['name']}} </label>
                                        </td>
                                        <td>
                                            <label for="{{$role['id']}}" >{{$role['applies_to']}} </label>
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