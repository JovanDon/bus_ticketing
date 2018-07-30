<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RoleController extends Controller
{
    
    public function display_create_form(){
        $applies_to_arr=$this->get_applies_to_options();
        $permissions_arr=$this->get_roles();
        return view('create_role',compact('applies_to_arr',$applies_to_arr, 'permissions_arr', $permissions_arr));
    }
    private function get_roles(){
        return [
            ['id'=>'1',
            'display_name'=>'loan affordablility check',
            'name'=>'loan-affordablility-check',
            'applies_to'=>'Bank'],

            ['id'=>'2',
            'display_name'=>'create new loan',
            'name'=>'create-new-loan',
            'applies_to'=>'Bank'],

            ['id'=>'3',
            'display_name'=>'Approve loan',
            'name'=>'approve-loan',
            'applies_to'=>'Bank'],

            ['id'=>'4',
            'display_name'=>'Verify borrower',
            'name'=>'verify-borrower',
            'applies_to'=>'Employer'],

            ['id'=>'5',
            'display_name'=>'Recommend to borrower',
            'name'=>'recommend to borrower',
            'applies_to'=>'Employer'],
        ];
    }
    private function get_applies_to_options(){
        return ['Bank','Employer','PDMS'];
    }
    public function create_role(Request $request){
        dd($request->all());
    }

    public function display_assign_roles_form(){
        $users_arr=$this->get_all_users();
        $roles_arr=$this->get_all_roles();
        $applies_to_arr=$this->get_applies_to_options();
        return view('assign_user_role', compact(
                                                'users_arr',$users_arr, 
                                                'roles_arr', $roles_arr,
                                                'applies_to_arr', $applies_to_arr
                                            ));
  
    }
    private function get_all_users(){
        return User::all();
    }
    private function get_all_roles(){
        return [
            ['id'=>'1',
            'name'=>'admin',
            'applies_to'=>'Employer',],

            ['id'=>'2',
            'name'=>'super_admin',
            'applies_to'=>'Employer',],

            ['id'=>'3',
            'name'=>'loan_officer',
            'applies_to'=>'Bank',],

            ['id'=>'4',
            'name'=>'loan_manager',
            'applies_to'=>'Bank',],
        ];
    }
    
    public function assign_user_role(Request $request){
        dd($request->all());
    }
}
