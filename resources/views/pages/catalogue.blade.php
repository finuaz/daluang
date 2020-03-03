@extends('layouts.app')

@section('content')


    <h1>Katalog</h1>
    <p>this is catalogue page</p>


        {{-- displaying book cards --}}
        @foreach ($book as $item)
            {{-- <p>this is book {{ $item->title }}</p> --}}
            <div class="card mx-2 my-2" style="width: 18rem;">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                  <h5 class="card-title"><b>{{ $item->title }}</b></h5>
                    {{-- @if($item->'sub-title' !== null)
                        <p class="card-text">{{$item->'sub-title'}}</p>
                    @endif --}}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{ $item->author }}</li>
                    @if($item->publisher != null)
                  <li class="list-group-item">{{$item->publisher}}</li>
                    @endif

                  <li class="list-group-item">{{$item->genre}}</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div>
        @endforeach

    <button onclick=location.href="/">Index</button>
@endsection

