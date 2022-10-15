<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontContactController extends Controller
{
    public function contact()
    {
        $contact = Contact::first();
        return view('front.contact',compact('contact'));
    }
}
