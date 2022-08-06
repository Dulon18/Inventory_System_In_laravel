<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    function edit()
    {
        $setting=Setting::first();
        //dd($setting);
        return view('pages.setting.edit',compact('setting'));
    }

    function update(Request $request)
    {
        $setting=Setting::first();
        $company_logo=$setting->Company_logo;

        if ($request->hasFile('logo'))
        {
            $company_logo=date('Ymdhms').'.'.$request->file('logo')->getClientOriginalExtension();
            $request->file('logo')->storeAs('/storage/logo/',$company_logo);
        }

        
        $setting->update([
            'Company_name'=>$request->c_name,
            'Company_email'=>$request->c_email,
            'Company_phone'=>$request->c_phone,
            'Company_address'=>$request->c_address,
            'Company_city'=>$request->c_city,
            'Company_country'=>$request->country,
            'Company_zipcode'=>$request->zip,
            'Company_logo'=>$company_logo
        ]);
        return redirect()->back()->with('success','Updated Successfully..!!');
    }
}
