<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    function index(){
        return view("contact_us");
    }
    function send(Request $request){
        Mail::to($request->email)->send(new ContactUs($request->all()));
        return redirect("/home");
    }
}
