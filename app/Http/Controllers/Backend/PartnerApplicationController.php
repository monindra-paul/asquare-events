<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\partner;

class PartnerApplicationController extends Controller
{
    public function index(){
        $partner = partner::all();
       
        return view('backend.partner.index', compact('partner'));
    }
    public function show($id){

        $applications = partner::find($id);
        if ( is_null ($applications) ){
            
            return redirect('index');
        }
        else{
          
            $data = compact('applications');
            return view('backend.partner.show')->with($data);
        }
    }
}
