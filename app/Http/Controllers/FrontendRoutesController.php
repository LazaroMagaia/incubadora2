<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendRoutesController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
    public function about()
    {
        return view('frontend.pages.about');
    }
    public function article($slug){
        if($slug == 1)
        {
            return view('frontend.pages.article');
        }elseif($slug == 2){
            return view('frontend.pages.article2');
        }else
        {
            return view('frontend.pages.article3');
        } 
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
