<?php

namespace App\Http\Controllers\Admin\Pricing;

use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    // All Price Function
    public function pricing()
    {
        // dd('good');
        $pricing = Pricing::all();
        return view('admin.pricing.pricing',compact('pricing'));
    }
    // Pricing page Function
    public function add_pricing()
    {
        // dd('good');
        return view('admin.pricing.add_pricing');
    }
    public function add_pricing_action(Request $request)
    {
        // dd($request->all());
        $add_price = new Pricing;
        $add_price->name = $request->name;
        $add_price->price = $request->price;
        $add_price->plan = $request->plan;
        if ($add_price->save()) {
            toastr()->success('Pricing Add Successfully!');
            return redirect('Pricing');
        }else {
            toastr()->error('An error has occurred please try again later.');
            return redirect('Pricing');
        }
    }

    // Delete Price
    public function delete_price($id)
    {
        // dd($id);
        $del_price = Pricing::where('id',$id)->first();

        if ($del_price->delete()) {
            toastr()->success('Pricing Deleted Successfully!');
            return back();
        }else {
            toastr()->error('An error has occurred please try again later.');
            return back();
        }
    }

    // Edit Price Page
    public function price_edit(Request $request)
    {
        // dd($request->all());
        $update_price = Pricing::where('id', $request->id)->first();
        
        $update_price->name = $request->name;
        $update_price->price = $request->price;
        $update_price->plan = $request->plan;
        if ($update_price->Update()) {
            toastr()->success('Pricing Updated Successfully!');
            return redirect('Pricing');
        }else {
            toastr()->error('An error has occurred please try again later.');
            return redirect('Pricing');
        }
    }
}
