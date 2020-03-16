@extends('layouts.app')

@section('content')


    <h1>Katalog</h1>
    <p>this is catalogue page</p>

        <div class="container">
            <div class="row">
                {{-- <div class="col-4"> --}}


                    {{-- insert items --}}
                    {{-- displaying book cards --}}
            @foreach ($book as $item)
            {{-- <p>this is book {{ $item->title }}</p> --}}
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
                    @if($item->has('ISBN'))
                        $rating = 'https://www.goodreads.com/book/isbn/{{$item->ISBN}}?callback=myCallback&format=json&user_id=52432900';
                            <p>{{$rating}}</p>

                    @elseif($item->has('ISBN_13'))
                        $rating = 'https://www.goodreads.com/book/isbn/{{$item->ISBN_13}}?callback=myCallback&format=json&user_id=52432900';
                            <p>{{$rating}}</p>
                    @else
                        <p>N/A</p>
                    @endif
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

