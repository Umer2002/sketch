<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function dashboard()
    {
        // dd('user');
        return view('user.dashboard');
    }
    // User Profile Function
    public function user_profile()
    {
        // dd('good');
        $profile = User::where('id', Auth::user()->id)->first();
        return view('user.profile',compact('profile'));
    }
}
