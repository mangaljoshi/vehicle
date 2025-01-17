<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporalController extends Controller
{
    // Show the form page
    public function form()
    {
        return view('corporal.pages.form');
    }

    // Show the Do Not Sell My Info page
    public function doNotSellMyInfo()
    {
        return view('corporal.pages.doNotSellMyInfo');
    }

    // Show the Privacy Policy page
    public function privacy()
    {
        return view('corporal.pages.privacy');
    }

    public function terms()
    {
        return view('corporal.pages.terms');
    }
}
