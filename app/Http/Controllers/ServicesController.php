<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function emergency()
    {
        return view('front.pages.services.emergency');
    }
    public function blood()
    {
        return view('front.pages.services.blood');
    }
    public function prayer()
    {
        return view('front.pages.services.prayer');
    }
    public function ambullence()
    {
        return view('front.pages.services.ambullence');
    }
    public function pharmacy()
    {
        return view('front.pages.services.pharmacy');
    }
    public function cafeteria()
    {
        return view('front.pages.services.cafeteria');
    }


}
