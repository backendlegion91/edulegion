<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageMail;
use App\Models\Contact;

class HomeController extends Controller
{
    //

    public function index()
{
    return view('home');
}


public function course()
{
    return view('pages.courses');
}

public function about()
{
    return view('pages.about');
}

public function contact()
{
    return view('pages.contact');
}


public function help()
{
    return view('pages.help');
}

public function faq()
{
    return view('pages.faq');
}


public function privacypolicy()
{
    return view('pages.privacy-policy');
}

public function terms()
{
    return view('pages.terms');
}

public function eligibility()
{
    return view('pages.eligibility');
}

public function submitContact(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
    ]);

    $details = $request->only('name', 'email', 'message');

    // Store in database
    Contact::create($details);

    // Send mail
    Mail::to('admissions@example.com')->send(new ContactMessageMail($details));

    return back()->with('success', 'Thank you! Your message has been sent and saved.');
}

}
