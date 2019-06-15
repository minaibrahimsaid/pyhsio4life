<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function services()
    {
        return view('services');
    }

    public function contactus()
    {
        return view('contact-us');
    }

    public function faq()
    {
        return view('faq');
    }


    public function gallery()
    {
        return view('gallery');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function booking()
    {
        return view('booking');
    }

    public function addbooking(Request $request)
    {
        $to_name = 'mina7esh@gmail.com';
        $to_email ='mina7esh@gmail.com';
        Mail::send('emails.mail', $request->all(), function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Artisans Web Testing Mail');
        $message->from('physio4lifewebsite@gmail.com','Artisans Web');
        
    });
    }
}
