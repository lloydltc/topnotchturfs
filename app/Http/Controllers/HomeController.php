<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index(){
        return view("home");
    }
    //
    public function sendMail(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        try {
        $mailData = [
            'name' => $request->name,
            'email'=> $request->email,
            'subject'=> $request->subject,
            'message' => $request->message

        ];

        Mail::to('info@topnotchturfs.co.zw')->send(new ContactMail($mailData));

        return back()->with('success','Email Send');
    } catch(\Exception $e) {


        return back()->with('success',$e->getMessage());

        }

    }
}
