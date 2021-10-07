<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function contact() {
        return view('contact');
    }

    public function gallery() {
        return view('gallery');
    }

    public function blog() {
        return view('blog');
    }
    
    public function facilities() {
        return view('facilities');
    }

    public function admission() {
        return view('admission');
    }

    // new controller actions 

    public function research() {
        return view('research');
    }
    

    public function courses() {
        return view('courses');
    }

    public function students() {
        return view('student');
    }

    public function jobs() {
        return view('jobs');
    }

    public function library() {
        return view('library');
    }
}
