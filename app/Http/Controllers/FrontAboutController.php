<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    public function about()
    {
        $about = About::first();
        $contact = Contact::first();
        return view('front.about.about',compact('about','contact'));
    }
}
