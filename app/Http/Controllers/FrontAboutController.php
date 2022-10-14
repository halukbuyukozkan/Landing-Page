<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class FrontAboutController extends Controller
{
    public function about()
    {
        $about = About::first();
        return view('front.about.about',compact('about'));
    }
}
