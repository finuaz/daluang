<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>daluang.co</title>

    <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Local boostrap --}}

        <!-- Styles -->
        <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="">

        {{-- Javascript bootstrap --}}
        <script src="{{ asset('/assets/js/jquery.js') }}" defer></script>
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}" defer></script>

    {{-- CKeditor5 --}}
        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>







</head>
<body class='bg-secondary'>
    <div class="container container-fluid">
    <div id="app">
        @include('partials.navbar')
        <div class='container bg-light rounded-bottom'>
        <main class="py-4">
            {{-- @include('partials.messages') --}}
            @yield('content')
        </main>
        </div>
    </div>
    </div>
</body>
</html>
