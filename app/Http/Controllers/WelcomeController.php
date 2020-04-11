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

    public function covid19()
    {
        return view('covid19');
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
        $secret = env('SECRET_SERVER_KEY');
        $captchaId = $request['g-recaptcha-response'];
        $responseCaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captchaId));
        if ($responseCaptcha->success === true) {
            $to_email = 'wilsonrdvetclinic@gmail.com';
            Mail::send('emails.appointment', $request->all(), function ($message) use ($to_email) {
                $message->to($to_email)->subject('message');
                $message->from('wilsonrdvetclinic@gmail.com', 'wilsonrdvetclinic');
            });
            return redirect()->route('booking');
        }
    }

    public function contactusmail(Request $request)
    {
        $secret = env('SECRET_SERVER_KEY');
        $captchaId = $request['g-recaptcha-response'];
        $responseCaptcha = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $captchaId));
        if ($responseCaptcha->success === true) {
            $to_email = 'wilsonrdvetclinic@gmail.com';
            Mail::send('emails.contact', $request->all(), function ($message) use ($to_email) {
                $message->to($to_email)->subject('message');
                $message->from('wilsonrdvetclinic@gmail.com', 'wilsonrdvetclinic');
            });
            return redirect()->route('contact-us');
        }
    }

    public function team()
    {
        return view('team');
    }
}
