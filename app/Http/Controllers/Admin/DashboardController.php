<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    //
    public function dashboard()
    {
        // dd('good');
        return view('admin.dashboard');
    }

    // Profile Function
    public function admin_profile()
    {
        // dd('good');
        $profile = User::where('id', Auth::user()->id)->first();
        return view('admin.profile',compact('profile'));
    }
    // End

    // Edit Admin Profile
    public function edit_admin_profile(Request $request)
    {
        // dd($request->all());
     
        $edit_profile = User::where('id', $request->id)->first();
        if ($request->password == null) {
            // dd('table');
            $password = $edit_profile->password;
        }else {
            // dd('request');
            $password = Hash::make($request->password);
        }
        $edit_profile->name = $request->name;
        $edit_profile->email = $request->email;
        $edit_profile->password = $password;
        if ($edit_profile->update()) {
            toastr()->success('Your Profile has been Updated Successfully!');
            return back();
        }else {
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
    }
    // End
}
