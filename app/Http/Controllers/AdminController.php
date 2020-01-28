<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactRequest;

class AdminController extends Controller
{
    


    public function contactRequest(Request $request){

        $input = $request->all();
        return respone;
        return response()->json(['success'=>'Got Simple Ajax Request.']);
        

        $contact = new ContactRequest;

        $contact->name = request('name');
        $contact->number = request('number');
        $contact->email = request('email');
        $contact->service = request('email');
        $contact->location = request('location');
        $contact->message = request('message');

        $contact->save();

        var_dump($contact);
    }
}
