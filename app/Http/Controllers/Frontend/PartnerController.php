<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partner;

class PartnerController extends Controller
{
    public function index(){
        return view('frontend.partner.index');
    }

    public function postpartner(Request $request){
        

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'state' => 'required',
            'city' => 'required',
            'country' => 'required',
            'pin' => 'required',
            'address' => 'required',
            'description' => 'required'
            
        ]
    );

        if ($request->hasFile('upload')) {
            $this->validate($request, [
                'upload' => 'mimes:jpeg,png,jpg,gif,docx,pdf,svg|max:2048'
            ],[
                'upload.max' => 'Please select document within 2 MB'
            ]);

            $upload = $request->file('upload');
            $imageName = date('his').'-'.date('his').'-'.date('his').'.'.request()->upload->getClientOriginalExtension();
            $upload->move('static/images/full/', $imageName);
            $updoc = 'static/images/full/'.$imageName;
        }
        


        $partner = new partner;
        $partner->name = $request->name;
        $partner->email = $request->email;
        $partner->mobile = $request->mobile;
        $partner->state = $request->state;
        $partner->city = $request->city;
        $partner->country = $request->country;
        $partner->pin = $request->pin;
        $partner->address = $request->address;
        $partner->description = $request->description;
        $partner->img_src = $updoc;
        $partner->save();

        return redirect()->back()->with('success', 'Thank you! We will get back to you soon.');

    }
}
