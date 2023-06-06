<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

    // Add Contact
    public function add_contact(Request $request)
    {
    //    dd($request->all());
       $add_contact = new Contact;
       $add_contact->name = $request->name;
       $add_contact->email = $request->email;
       $add_contact->message = $request->message;
       $add_contact->phone = $request->phone;

       if ($add_contact->save()) {
        toastr()->success('Your Message has been send Successfully Some one will Contact you shortly Thanks For Contacting!');
        return back();
       }else {
        toastr()->error('An error has occurred please try again later.');
        return back();
       }

    }
    // End
}