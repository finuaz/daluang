<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>daluang.co</title>

    @include('partials.styles')
    @include('partials.security')
    @include('partials.tools')


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

    <div class="container container-fluid">
        @include('partials.footer')
    </div>
</body>
</html>
