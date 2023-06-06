<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //index Function
    public function index()
    {
        // dd('frontend');
        return view('frontend.index');
    }
    // End

    // Pricing Function 
    public function pricing()
    {
        // dd('good');
        return view('frontend.pricing');
    }
    // End

    // Blog Function
    public function blog()
    {
        // dd('good');
        return view('frontend.blog');
    }
    // End

    // Enterprice Function
    public function enterprice()
    {
        // dd('good');
        return view('frontend.enterprice');
    }

    // Contact Function
    public function contact()
    {
        // dd('good');
        return view('frontend.contact');
    }
}