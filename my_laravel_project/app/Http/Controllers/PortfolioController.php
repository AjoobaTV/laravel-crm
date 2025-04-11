<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Save the contact form data to the database
        $contactMessage = new ContactMessage();
        $contactMessage->name = $request->input('name');
        $contactMessage->email = $request->input('email'); // Added email field
        $contactMessage->phone = $request->input('phone');
        $contactMessage->message = $request->input('message');
        $contactMessage->save();

        // Redirect to the welcome page
        return redirect()->route('welcome')->with('success', 'Your message has been sent successfully!');
    }

    public function welcome()
    {
        return view('welcome'); // Ensure you have a welcome.blade.php view file
    }
}
