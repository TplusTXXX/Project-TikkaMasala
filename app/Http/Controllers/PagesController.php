<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('welcome')->withTasks([
            'Go to the store',
            'Go to the market',
            'Go to work'

        ]);

    }
    public function about(){
        return view('aboutus')->withTasks([
            'Go to the store',
            'Go to the market',
            'Go to work'

        ]);

    }
    public function contact(){
        return view('contact')->withTasks([
            'Go to the store',
            'Go to the market',
            'Go to work'

        ]);

    }
}
