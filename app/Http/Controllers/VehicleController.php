<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function showForm()
    {
        return view('vehicle.pages.form');
    }

    public function doNotSell()
    {
        return view('vehicle.pages.do-not-sell');
    }
    public function privacy()
    {
        return view('vehicle.pages.privacy');
    }

    // Handle form submission
    public function submitForm(Request $request)
    {
        // Validate form data
        $validated = $request->validate([
            'firstName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
        ]);

        // If validation passes, redirect to the thank you page
        return redirect()->route('thankyou'); // Redirect to thank-you route
    }

    // Show the Thank You page
    public function thankYou()
    {
        return view('thankyou');  // Return the thank you view
    }

}

