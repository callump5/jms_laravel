<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        return view('pages.home');
    }
    public function about(){
        return view('pages.about');
    }
    public function commercial(){
        return view('pages.commercial');
    }
    public function tenancy(){
        return view('pages.tenancy');
    }
    public function contact(){
        return view('pages.contact');
    }

    public function forbid(){
        return view('status.403');
    }
    
}
