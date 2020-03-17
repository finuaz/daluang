@extends('layouts.app')

@section('content')


    <h1>Katalog</h1>
    <p>this is catalogue page</p>


        {{-- retrieving reviews --}}
        @php
            $review = file_get_contents ('https://www.goodreads.com/book/review_counts.json?key={6bbNCRQ2ezDyqAWPFXDYzw}&isbns=0596009208');
            // $rev = '{"books":[{"id":231262,"isbn":"0596009208","isbn13":"9780596009205","ratings_count":3036,"reviews_count":6732,"text_reviews_count":188,"work_ratings_count":3528,"work_reviews_count":8002,"work_text_reviews_count":203,"average_rating":"4.22"}]}';
            $s1 = json_decode($review);

            //foreach ($sreview as $key => $value) {
            //    echo $key->average_rating;
            //}
                // $value = $sreview;
            $s2 = $s1->books;
            $s3 = $s2[0];
            $s4 = $s3->average_rating;
                // $value = $sreview->books[0]->average_rating;
            // var_dump($s1);
                // print ($s1);
            // var_dump($s2);
            // var_dump($s3);
            // $ok = var_dump($s4);



            // echo $value;
        @endphp
        <br>
            <p>{{$s4}}</p>
        <div class="container">
            <div class="row">

                {{-- insert items --}}
                {{-- displaying book cards --}}
                @foreach ($book as $item)
                <div class="col-4 mx-.3">

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

                            {{-- rating --}}

{{--
                            @if($item->has('ISBN'))
                            $rating =
                            'https://www.goodreads.com/book/isbn/{{$item->ISBN}}?callback=myCallback&format=json&user_id=52432900';
                            <p>{{$rating}}</p>

                            @elseif($item->has('ISBN_13'))
                            $rating =
                            'https://www.goodreads.com/book/isbn/{{$item->ISBN_13}}?callback=myCallback&format=json&user_id=52432900';
                            <p>{{$rating}}</p>

                            @else
                            <p>N/A</p>
                            @endif --}}

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


    <button onclick=location.href="/">Index</button>
@endsection

