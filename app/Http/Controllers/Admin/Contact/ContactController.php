<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function contact()
    {
        // dd('good');
        $contacts = Contact::all();
        return view('admin.contact.contact',compact('contacts'));
    }
}
