@extends('layouts.app')

@section('content')


    <h1>Dashboard</h1>
    <p>Apa yang mau ditulis?</p>


    <ul>
        <li><a href="post/book">Buku</a></li>
        <li><a href="post/article">Artikel</a></li>
    </ul>

    <button onclick=location.href="/">Index</button>
@endsection

