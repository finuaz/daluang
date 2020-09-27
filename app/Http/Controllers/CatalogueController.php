<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\DB;


class CatalogueController extends Controller
{
    //
    public function index(){
        $book = Book::paginate(18);



        $arr = [];
        foreach ($book as $key=> $value) {
            // echo $value['ISBN'] . " " . $value['ISBN_13'] . "<br>";
            if ($value['ISBN'] != null || $value['ISBN'] != '') {
                $arr[]=$value['ISBN'];
            } else if($value["ISBN_13"] != null){
                $arr[]=$value['ISBN_13'];
            }
        }

        // echo join(", ",$arr);

        $review = file_get_contents('https://www.goodreads.com/book/review_counts.json?key={6bbNCRQ2ezDyqAWPFXDYzw}&isbns='.join(",",$arr));

        // echo $review;

        $rating = json_decode($review, true);

        $s = ["satu", "dua", "tiga"];

        foreach($s as $k => $a)
        {
            // echo $a;
            // echo $s[$k];
        }

        foreach ($rating['books'] as $key=>$value){
            foreach ($book as $key1=> $value1) {
                if ($value1['ISBN'] != null){
                    // ini pake ISBN
                    // check
                    if ($value1['ISBN'] == $value['isbn']){
                        $book[$key1]['average_rating']=$value['average_rating'];
                        break;
                    }
                } else {
                    // pake ISBN13
                    if ($value1['ISBN_13'] == $value['isbn13']){
                        $book[$key1]['average_rating']=$value['average_rating'];
                        break;
                    }
                }

            }
        }

        return view('/pages/catalogue',['book'=>$book]);

    }
}
