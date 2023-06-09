<?php

namespace App\Http\Controllers\User\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company_Name;

class CompanyController extends Controller
{
    //Adding Company 
    public function add_company(Request $request)
    {
        // dd($request->all());

        $check = Company_Name::where('user_id', $request->user_id)->first();
        if ($check == null){
            // dd('new');   
            $company = new Company_Name;
            $company->user_id = $request->user_id;
            $company->company_name = $request->company_name;
            if ($company->save()) {
                toastr()->success('Your Cpmpany Name Added Successfully!');
                return back();
            }else {
                toastr()->error('An error has occurred please try again later.');
                return back();
            }  
        }else {
            // dd('update');         
            $company_update = Company_Name::where('user_id', $request->user_id)->first();
            $company_update->user_id = $request->user_id;
            $company_update->company_name = $request->company_name;
            if ($company_update->update()){
                toastr()->success('Your Cpmpany Name Updated Successfully!');
                return back();
            }else{
                toastr()->error('An error has occurred please try again later.');
                return back();
            }
        }

       
    }
}
