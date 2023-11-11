<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactUsController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function send(Request $request){
       try {
        $request-> validate([
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'message' => $request->message
        ];

        Mail::to('mj@xash.network')->send(new contactMail($data));

        return redirect()->back()->with(['success'=>'Contact send.']);

        // return $data;
       } catch (\Throwable $th) {
        throw $th;
       }
    }
}
