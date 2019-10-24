<?php

namespace App\Http\Controllers;

use App\Term;
use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function home()
    {
        return view('welcome');
    }


    public function home2()
    {
        return view('welcome')->with('success', "Created!");
    }


    public function about()
    {
        return view('aboutus');
    }


    public function contact()
    {
        return view('contact');
    }
}
