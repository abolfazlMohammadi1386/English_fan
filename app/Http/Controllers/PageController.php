<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('front.index');
    }

    public function courses()
    {
        return view('front.course');
    }

    public function courseDetails($id)
    {
        return view('front.course-details');
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function myAccount()
    {
        return view('front.my-account');
    }

    public function booking()
    {
        return view('front.booking');
    }

    public function library()
    {
        return view('front.library');
    }

    public function behindScene()
    {
        return view('front.behind-scene');
    }
}