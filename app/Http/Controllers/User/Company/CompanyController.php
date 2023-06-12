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
            
            $rand=rand(111111111,999999999);
            $file = $request->image;
         //    dd($file);
            $fileName = time().rand(100,1000).'.'.$file->extension();  
         //    dd($fileName);
    
            $file->move(public_path('Images'), $fileName);

            $company = new Company_Name;
            $company->user_id = $request->user_id;
            $company->company_name = $request->company_name;
            $company->image = $fileName;
            if ($company->save()) {
                toastr()->success('Your Company Name Added Successfully!');
                return back();
            }else {
                toastr()->error('An error has occurred please try again later.');
                return back();
            }  
        }else {
            // dd('update');         
            $company_update = Company_Name::where('user_id', $request->user_id)->first();

            if ($company_update->image) {
                $path = 'public/image/'.$company_update->image;
    
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
    
    
            $rand=rand(111111111,999999999);
            $file = $request->image;
            // dd($file);
            $fileName = time().rand(100,1000).'.'.$file->extension();  
            // dd($fileName);
    
            $file->move(public_path('Images'), $fileName);

            $company_update->user_id = $request->user_id;
            $company_update->company_name = $request->company_name;
            $company_update->image = $fileName;
            if ($company_update->update()){
                toastr()->success('Your Company Name Updated Successfully!');
                return back();
            }else{
                toastr()->error('An error has occurred please try again later.');
                return back();
            }
        }

       
    }
}
