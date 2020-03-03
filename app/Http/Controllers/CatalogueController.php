<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;


class CatalogueController extends Controller
{
    //
    public function index(){
        $book = Book::all();
        return view('/pages/catalogue',['book'=>$book]);
    }
}
