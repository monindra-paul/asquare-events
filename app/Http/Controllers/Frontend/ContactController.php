<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function index(){
        return view ('frontend.contact.index');
    }

    public function postcontact(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        // $contact = new Contact;
        // $contact -> name = $request['name'];
        // $contact -> email = $request['email'];
        // $contact -> subject = $request['subject'];
        // $contact -> query = $request['query'];
        // $contact -> save();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            
        ];

        $createData = contact::insert($data);

        if($createData){
            return redirect()->back()->with('success','Thank you! for Contacting us, Our Team will Connect You Shortly');
        }
        else{
            return redirect()->back()->with('error','Something Went Wrong, Soeey for the Inconvenience.');
        }
    }
}
