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
        dd($request->all());
        // $to_email = 'physio4lifeajax@gmail.com';
        // Mail::send('emails.appointment', $request->all(), function ($message) use ($to_email) {
        //     $message->to($to_email)->subject('new appointment');
        //     $message->from('physio4lifewebsite@gmail.com', 'Physio4life');
        // });
        return redirect()->route('booking');
    }

    public function contactusmail(Request $request)
    {
        // dd($request->all());
        // $to_email = 'Physio4lifeajax@gmail.com';
        // $to_email="physio4lifeajax@gmail.com";
        // Mail::send('emails.contact', $request->all(), function ($message) use ($to_email) {
        //     $message->to($to_email)->subject('new message');
        //     $message->from('physio4lifewebsite@gmail.com', 'Physio4life');
        // });
        return redirect()->route('contact-us');
    }

    public function team()
    {
        return view('team');
    }
}
