<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book as Book;

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

    public function store(Request $request){
        $this->validate($request, [
            'title'=>'required',
            'author'=> 'required',
            'genre' => 'required',
            // 'cover_image' => 'image|nullable|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('cover_image')->getCLientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->File('cover_image')->storeAs('public/cover_images',$fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }


        // Create post
        Book::create([
            'title'=> $request->title,
            'author'=> $request->author,
            'genre'=> $request->genre,
            'description' => $request->description,
            // 'user_id'=> auth()->user()->id,
            'cover_image' => $fileNameToStore

        ]);

            return redirect('/dashboard');
    }
}
