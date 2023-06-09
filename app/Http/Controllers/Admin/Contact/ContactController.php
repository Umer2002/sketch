<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    // All Contact Function
    public function contact()
    {
        // dd('good');
        $contacts = Contact::all();
        return view('admin.contact.contact',compact('contacts'));
    }
    // End

    // Delete Contact Function
    public function del_contact($id)
    {
        // dd($id);
        $del_contact = Contact::where('id', $id)->first();

        if ($del_contact->delete()) {
            toastr()->success('Contact Deleted Successfully!');
            return back();
        }else {
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
    }
    // End

    // Edit Contact 
    public function edit_contact(Request $request)
    {
        // dd($request->all());
        $update_contact = Contact::where('id', $request->id)->first();
        $update_contact->name = $request->name;
        $update_contact->email = $request->email;
        $update_contact->message = $request->message;
        $update_contact->phone = $request->phone;
 
        if ($update_contact->update()) {
         toastr()->success('Contact Has Been Updated Successfully!');
         return back();
        }else {
         toastr()->error('An error has occurred please try again later.');
         return back();
        }
    }
}
