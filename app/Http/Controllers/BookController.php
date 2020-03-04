<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    //
    public function index(){
        $book = Book::all();
        return view('pages.catalogue', [ 'book' => $book ]);
    }

    public function postbook(){
        return view('dashboard.postbook');
    }

    public function store(){
        return null;
    }
}
