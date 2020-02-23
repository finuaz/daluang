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
<body style="background-color: chocolate">
    <div class="w-screen mb-0">
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

    <div class="footer stick-bottom">
        @include('partials.footer')
    </div>
</body>
</html>
