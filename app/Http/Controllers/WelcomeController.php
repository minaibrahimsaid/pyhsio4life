<?php

namespace App\Http\Controllers;

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
}
