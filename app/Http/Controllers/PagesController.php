<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function default(){
        return view('pages.default');
    }

    public function index(){
        return view('pages.index');
    }

    public function welcome(){
        return view('pages.welcome');
    }

    public function catalogue(){
        return view('pages.catalogue');
    }

    public function about(){
        return view('pages.about');
    }

    public function redaksi(){
        return view('pages.redaksi');
    }

    public function forum(){
        return view('pages.forum');
    }

    public function shop(){
        return view('pages.shop');
    }

    public function article(){
        return view('pages.article');
    }

    public function academy(){
        return view('pages.academy');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function contribution(){
        return view('pages.contribution');
    }

    public function dashboard(){
        return view('pages.dashboard');
    }
}
