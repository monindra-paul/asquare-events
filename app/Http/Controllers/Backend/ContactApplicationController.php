<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactApplicationController extends Controller
{
    public function index(){
        $contacts = contact::all();
       
        return view('backend.contact.index', compact('contacts'));
    }

    public function show($id){

        $contacts = contact::find($id);
        if ( is_null ($contacts) ){
            
            return redirect('index');
        }
        else{
          
            $data = compact('contacts');
            return view('backend.contact.show')->with($data);
        }
    }

}
