<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactRequest;
use App\BlogPost;

class AdminController extends Controller
{

    public function adminPanel(Request $request){

        return view('admin.panel');
    }
    public function contactRequest(Request $request){
        $contact = new ContactRequest;
        $contact->name     = request('name');
        $contact->number   = request('number');
        $contact->email    = request('email');
        $contact->service  = request('email');
        $contact->location = request('location');
        $contact->message  = request('message');
        $contact->save();

        return response()->json(['success'=>'Success']);
    }

    public function postIndex(){
        $posts = BlogPost::all();
        return view('admin.posts', ['posts' => $posts]);
    }


    public function contactIndex(){
        $contacts = ContactRequest::all();
        return view('admin.contacts', ['contacts' => $contacts]);
    }

    public function contactShow(Request $request, ContactRequest $contact){
        return view('admin.view-contact', ['contact' => $contact]);
    }

    public function contactDelete(Request $request, ContactRequest $contact){
        $contact = ContactRequest::find(request('contact-id'));
        $contact->delete();
        return redirect('admin-panel/contact-request');
    }



    /*public function adminShowItems(Request $request){
        $item = request('item');
        if ($item == 'posts'){
            return $data = BlogPost::all();
        } elseif ($item == 'pages') {
            return 'soon'; 
        } else {
            return 'not here';
        }
    }*/
}
