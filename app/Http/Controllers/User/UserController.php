<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Company_Name;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        // dd('user');
        $company = Company_Name::where('user_id', Auth::user()->id)->first();
        // dd($company);

        return view('user.dashboard', compact('company'));
    }
    // User Profile Function
    public function user_profile()
    {
        // dd('good');
        $profile = User::where('id', Auth::user()->id)->first();
        return view('user.profile',compact('profile'));
    }

    public function edit_user_profile(Request $request)
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
}
