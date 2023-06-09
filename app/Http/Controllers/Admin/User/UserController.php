<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Models\Company_Name;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Hash;

class UserController extends Controller
{
    //All User Dunction
    public function user()
    {
        // dd('good');
        $users = User::where('role_as', 'user')->get();
        // dd($users);
        return view('admin.user.user',compact('users'));
    }
    // End

    // User Edit page Function
    public function user_edit($id)
    {
        // dd($id);
        $user = User::where('id', $id)->first();
        return view('admin.user.edit',compact('user'));
    }
    // End

    // Editing User Function
    public function edit_user_action(Request $request)
    {
        // dd($request->all());
        $password = Hash::make($request->password);
        $edit_user = User::where('id', $request->id)->first();
        $edit_user->name = $request->name;
        $edit_user->email = $request->email;
        $edit_user->password = $password;

        if ($edit_user->update()) {
            toastr()->success('User Data Updated Successfully!');
            return back();
        }else {
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
    }
    // End

    // Delete User Function
    public function delete_user($id)
    {
        // dd($id);
        $del_user = User::where('id',$id)->first();

        if ($del_user->delete()) {
            toastr()->success('User Deleted Successfully!');
            return back();
        }else {
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
    }
    // End

    // All Company Function
    public function user_company()
    {
        // dd('good');
        $companies = Company_Name::with('User')->get();
        return view('admin.user_company.user_company',compact('companies'));
    }
    // End

    // Delete Company Function
    public function delete_company($id)
    {
        // dd($id);
        $del_company = Company_Name::where('id', $id)->first();

        if ($del_company->delete()) {
            toastr()->success('Company Deleted Successfully!');
            return back();
        }else {
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
        
    }
    // End

    // Edit Company Function
    public function company_edit(Request $request)
    {
        // dd($request->all());
        $company_update = Company_Name::where('user_id', $request->user_id)->first();
        // dd($company_update);
        $company_update->company_name = $request->company_name;
        if ($company_update->update()){
            toastr()->success('Cpmpany Name has been Updated Successfully!');
            return back();
        }else{
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
    }
    // End
}
