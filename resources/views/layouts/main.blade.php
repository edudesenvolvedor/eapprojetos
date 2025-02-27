<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        @include("layouts.partials.head")
    </head>
    <body class="font-sans font-semibold bg-white">
    @include('layouts.partials.navbar')

    @yield('content')

    @include('layouts.partials.footer')
    </body>
</html>
