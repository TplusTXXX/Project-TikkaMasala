<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public $termTitle = "Yo";

    public function home()
    {

        $termContent = '123';
        $termPost = $this->termTitle . " " . $termContent;
        return view('welcome', compact('termPost'));


    }
    public function home2()
    {

        $termContent = '123';
        $termPost = $this->termTitle . " " . $termContent;
        return view('welcome', compact('termPost'))->with('success', "Created!");


    }

    public function about()
    {

        $termContent = '321';
        $termPost = $this->termTitle . " " . $termContent;
        return view('aboutus', compact('termPost'));
    }

    public function contact()
    {

        $termContent = 'abc';
        $termPost = $this->termTitle . " " . $termContent;
        return view('contact', compact('termPost'));


    }
}
