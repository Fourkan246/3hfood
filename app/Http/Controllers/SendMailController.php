<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    //
    function index()
    {
        return view('member/pages/send_email');
        //return "Hello world";
    }

    function send(Request $request)
    {
        $this->validate($request , [
            'message'      =>         'required|numeric'
        ]);


        session()->flash('success', 'Mailed successfully');

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to('mobin.fim9@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us! We will call you soon...');


    }
}
