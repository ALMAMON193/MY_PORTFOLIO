<?php

namespace App\Http\Controllers\Web\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function about(){
        return view('frontend.layout.about.index');
    }
    public function portfolio(){
        return view('frontend.layout.portfolio.index');
    }
    public function service(){
        return view('frontend.layout.service.index');
    }
    public function blog(){
        return view('frontend.layout.blog.index');
    }
    public function contact(){
        return view('frontend.layout.contact.index');
    }
}
