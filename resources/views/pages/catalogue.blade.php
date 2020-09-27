@extends('layouts.app')

@section('content')


    <h1>Katalog</h1>
    <p>this is catalogue page</p>


        {{-- retrieving reviews --}}
        {{-- @php

            // Testing
                    // choosing URL
                    // $urlfirst = "https://www.goodreads.com/book/review_counts.json?key={6bbNCRQ2ezDyqAWPFXDYzw}&isbns=";

                    // foreach ($book as $buku) {

                    //     if($buku->ISBN !== null){
                    //         $n = $buku->ISBN . ",";
                    //     } elseif ($buku->ISBN_13 !== null) {
                    //         $n = $buku->ISBN_13 . ",";
                    //     }
                    // }
// //
//                     // TO DO!
//                     // FOR EACH OF BOOK ISBN MUST BE INSERTED IN URL
//                     $repo = "https://www.goodreads.com/book/review_counts.json?key={6bbNCRQ2ezDyqAWPFXDYzw}&isbns=";
//                     foreach ($book as $buku) {
//                         if (isset($buku->ISBN)) {
//                             # code...
//                             $ISBN = $buku->ISBN;
//                             $repo .= $ISBN . "," ;
//                         } elseif (isset($buku->ISBN_13)) {
//                             # code...
//                             $ISBN = $buku->ISBN_13;
//                             $repo .= $ISBN . "," ;
//                         }
//                         # code...
//                     }
//                     // echo $repo;

                    // $urlfinal = $urlfirst.$n;
                    // var_dump($urlfinal);

            // // getting JSON from URL
            // $review = file_get_contents('https://www.goodreads.com/book/review_counts.json?key={6bbNCRQ2ezDyqAWPFXDYzw}&isbns=0596009208,1400096898');
            // // $review = file_get_contents($urlfinal);


            // // parsing JSON into object
            // $s1 = json_decode($review);

            // // accessing rating
            // $s2 = $s1->books;

            // // accessing book 1
            // $s3 = $s2[0];
            // $s4 = $s3->average_rating;

            // // accessing book 1
            // $s5 = $s2[1];
            // $s6 = $s5->average_rating;

        @endphp --}}
{{--
        <br>
            <p>{{$s4}}</p>
            <p>{{$repo}}</p>
            <p>{{$s6}}</p> --}}
        <div class="container">
            <div class="row">

                {{-- insert items --}}
                {{-- displaying book cards --}}
                @foreach ($book as $item)
                <div class="col-4 my-2">

                    <div class="card" style="width: 18rem">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ $item->title }}</b></h5>
                            @if($item->sub_title !== null)
                            <p class="card-text"><i>{{$item->sub_title}}</i></p>
                            @endif
                        </div>
                        <ul class="list-group list-group-flush">
                            <hr>
                            <li class="list-group-item">Author : {{ $item->author }}</li>

                            @if($item->publisher != null)
                            <li class="list-group-item">Publisher : {{$item->publisher}}</li>
                            @endif

                            <li class="list-group-item">Genre : {{$item->genre}}</li>

                            @if($item->ISBN != null)
                            <li class="list-group-item">ISBN : {{$item->ISBN}}</li>
                            @elseif($item->ISBN_13 != null)
                            <li class="list-group-item">ISBN : {{$item->ISBN_13}}</li>
                            @endif

                            <li class="list-group-item">Rating : {{ $item->average_rating }}</li>
                        </ul>


                        <div class="card-body">
                            <a href="#" class="card-link">Details</a>
                            <a href="#" class="card-link">Goodreads</a>

                            {{-- rating --}}

                        </div>
                    </div>
                </div>

                @endforeach

                {{-- </div> --}}
            </div>
        </div>

            {{-- displaying book cards --}}
                {{-- @foreach ($book as $item) --}}
                    {{-- <p>this is book {{ $item->title }}</p> --}}

                    {{-- <div class="card mx-2 my-2" style="width: 18rem"> --}}
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        {{-- <div class="card-body">
                        <h5 class="card-title"><b>{{ $item->title }}</b></h5>
                            @if($item->sub_title !== null)
                                <p class="card-text"><i>{{$item->sub_title}}</i></p>
                            @endif
                        </div>
                        <ul class="list-group list-group-flush">
                        <hr>
                        <li class="list-group-item">{{ $item->author }}</li>

                            @if($item->publisher != null)
                        <li class="list-group-item">{{$item->publisher}}</li>
                            @endif

                        <li class="list-group-item">{{$item->genre}}</li>

                            @if($item->ISBN != null)
                        <li class="list-group-item">{{$item->ISBN}}</li>
                            @elseif($item->ISBN_13 != null)
                        <li class="list-group-item">{{$item->ISBN_13}}</li>
                            @endif
                        </ul>
                        <div class="card-body">
                        <a href="#" class="card-link">Details</a>
                        <a href="#" class="card-link">Goodreads</a>
                        </div>
                    </div>
                    </td></tr>
                @endforeach --}}


        <div class="row">
            <div class="col-sm-6 col sm-offset-5">
                {{ $book->render() }}
            </div>
        </div>

    <button onclick=location.href="/">Index</button>
@endsection

