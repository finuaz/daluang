<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index () {
        return view('pages.default');
    }

    public function welcome () {
        return view('pages.welcome');
    }
}
