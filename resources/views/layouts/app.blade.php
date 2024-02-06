<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    @vite('resources/js/app.js')
    @yield('head-content')
</head>
<body>

    <!-- include tutto ciò che scrivo nel file partials.header  -->
    @include('partials.header')

    <main>
        @include ('partials.jumbo')
        <!-- yield offre la possibilità di essere sostituito -->
        @yield('main-content')
    </main>

    <!-- include tutto ciò che scrivo nel file partials.footer  -->
    @include('partials.footer')
</body>
</html>