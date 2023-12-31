<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function movies()
    {
        return view('movies.index');
    }
    public function book(){
        return view("book.index");
    }
    public function about(){
        return view("about.index");
    }
}
