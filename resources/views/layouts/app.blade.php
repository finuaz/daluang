<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>daluang.co</title>

    @include('partials.styles')
    @include('partials.security')
    @include('partials.tools')
    @include('partials.share_buttons_style')

    {{-- styles --}}
    {{-- {{ URL::asset('css/share_buttons.css') }} --}}


</head>
<body style="background-color: chocolate" class="d-flex flex-column" style="min-height: 100vh">
    <div class="w-screen">
    <div id="app">
        @include('partials.navbar')
        <div class='bg-light rounded-bottom'>
        <main class="py-4 px-4 wrapper position-relative w-screen flex-fill">
            {{-- @include('partials.messages') --}}
            @yield('content')
        </main>
        </div>
    </div>
    </div>

    {{-- sharebuttons --}}
    @include('partials.share_buttons')

    <footer class="footer">
        @include('partials.footer')
    </footer>
</body>
</html>
